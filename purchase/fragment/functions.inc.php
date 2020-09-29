<?php
    const USERS_PATH = 'data/users.json';
    const USER_SESSION_KEY = 'user';

    // Always call session_start.
    session_start();

    function isUserLoggedIn() {
        return isset($_SESSION[USER_SESSION_KEY]);
    }

    function loginUser($form) {
        $errors = [];

        $key = 'email';
        if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
            $errors[$key] = 'Email is invalid.';

        $key = 'password';
        if(!isset($form[$key]) || strlen($form[$key]) < 6)
            $errors[$key] = 'Password is required and must contain at least 6 characters.';

        if(count($errors) === 0) {
            $user = getUser($form['email']);
            
            if($user !== null && $user['password'] === $form['password'])
                // Login user.
                $_SESSION[USER_SESSION_KEY] = $user;
            else
                $errors[$key] = 'Login failed, email and / or password incorrect. Please try again.';
        }

        return $errors;
    }

    function logoutUser() {
        session_unset();
        // OR
        // unset($_SESSION[USER_SESSION_KEY]);
    }

    function getUser($email) {
        $users = readUsers();

        return isset($users[$email]) ? $users[$email] : null;
    }

    function readUsers() {
        $json = file_get_contents(USERS_PATH);
        
        return json_decode($json, true);
    }

    function registerUser($form) {
        $errors = [];

        $key = 'firstname';
        if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
            $errors[$key] = 'First name is required.';
        
        $key = 'lastname';
        if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
            $errors[$key] = 'Last name is required.';

        $key = 'email';
        if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
            $errors[$key] = 'Email is invalid.';
        else if(getUser($form[$key]) !== null)
            $errors[$key] = 'Email is already registered.';
        
        $key = 'phone';
        if(!isset($form[$key]) || preg_match('/^\+61 4\d{2} \d{3} \d{3}$/', $form[$key]) !== 1)
            $errors[$key] = 'Phone number is invalid. Must be in the format: +61 4xx xxx xxx';
        
        $key = 'password';
        if(!isset($form[$key]) || strlen($form[$key]) < 6)
            $errors[$key] = 'Password is required and must contain at least 6 characters.';

        $key = 'confirmPassword';
        if(isset($form['password']) && (!isset($form[$key]) || $form['password'] !== $form[$key]))
            $errors[$key] = 'Passwords do not match.';

        if(count($errors) === 0) {
            // Add user.
            $user = [
                'firstname' => trim($form['firstname']),
                'lastname' => trim($form['lastname']),
                'email' => $form['email'],
                'phone' => $form['phone'],
                'password' => $form['password']
            ];

            $users = readUsers();
            $users[$user['email']] = $user;

            // Update file.
            $json = json_encode($users, JSON_PRETTY_PRINT);
            file_put_contents(USERS_PATH, $json, LOCK_EX);

            // Auto-login registered user.
            loginUser($user);
        }

        return $errors;
    }

    function displayError($errors, $name) {
        if(isset($errors[$name]))
            echo "<div class='text-danger'>{$errors[$name]}</div>";
    }

    function displayValue($form, $name) {
        if(isset($form[$name]))
            echo 'value="' . htmlspecialchars($form[$name]) . '"';
    }
