$(function(){

  $('.game_start').on('click',function(){
    $(this).closest('.start').stop().hide();
    mySnakeFn();
  })

  $('.game_over').on('click',function(){
    alert('You got only one chance a day');
  })

  $('.clear_data').on('click',function(){
    $('.ranking_list').empty();
  })

})

function mySnakeFn(){

  // variables
  var myVar = {
        // moving control variable (which way to go)
        del_x:-15,
        del_y:0,
        // initial length (score)
        myscore:0,
        // moving speed
        speed:100,
        // timer
        itimes:null
      }

      // Initial position
  ;(function(){
    var arr_snake = [['300px','390px'],['300px','405px'],['300px','420px']];
    $('.snake_wrap').empty();
    $('.snake_wrap').append('<li></li><li></li><li></li>')
    $('.snake_wrap li').each(function(value){
      $(this).css({'top':arr_snake[value][0],'left':arr_snake[value][1]})
    })
  })(jQuery);

  // keyboard control - up, down, left, right and pause
  ;(function(){

    // whether to pause
    var stop = true;

    $(document).keydown(function(event) {
      switch(event.keyCode){
          // space pause
        case 32:stop ? clearInterval(myVar.itimes) : run();
          stop = !stop;
          break;
          // left
        case 65:directionKey(-15,0,true);
          break;
          // up
        case 87:directionKey(0,-15,false);
          break;
          // right
        case 68:directionKey(15,0,true);
          break;
          // down
        case 83:directionKey(0,15,false);
          break;
      }
    });
  })(jQuery);

  // Direction (which way to go)
  function directionKey(y1,y2,bour){
    if(!myVar.del_x == bour){
      myVar.del_x = y1;
      myVar.del_y = y2;
    }
  }

  function run(){
    //timer, refresh every speed update
    myVar.itimes = setInterval(function(){
      // Get current food location
      var food_top = $('.food').position().top;
      var food_left = $('.food').position().left;
      // Set new coordinates for snake head
      var header_top = $('.snake_wrap li').eq(0).position().top + myVar.del_y;
      var header_left = $('.snake_wrap li').eq(0).position().left + myVar.del_x;
      // reset current snake head color
      $('.snake_wrap li').eq(0).css({'background': '#FFC400'});
      // Add a snake head and give it a new style (color)
      $('.snake_wrap').prepend('<li></li>');
      $('.snake_wrap li').eq(0).css({'left':header_left + 'px','top':header_top + 'px','background':'#fff'})
      // Remove the last snake tail
      $('.snake_wrap li:last').remove();

      // determine if the snake has eaten food
      if((header_left == (food_left - 1)) && (header_top == (food_top - 1))){
        var last_top = $('.snake_wrap li:last').position().top;
        var last_left = $('.snake_wrap li:last').position().left;
        $('.snake_wrap').append('<li></li>');
        $('.snake_wrap li:last').eq(0).css({'left':last_left + 'px','top':last_top + 'px'})

        // refresh food
        foodRandom();

        // length of the snake (the score players get)
        myVar.myscore++;
        scoreFn(myVar.myscore);

        // Every time the score add by 5, the speed increases by 10
        if(!(myVar.myscore%5) && myVar.speed > 10){
          clearInterval(myVar.itimes);
          myVar.speed -= 10;
          run();
        }
      }

      //determine whether the snake hit the boundary
      borderDetection(header_top,header_left);
      //determine whether the snake hit itself
      selfDetection(header_top,header_left);
    },myVar.speed)
  }
  run();

  // score
  function scoreFn(x){
    $('.score').html(x)
  }

  // Food
  function foodRandom(){
    var t = 40;
    var x = 54;
    var y = 0;
    var repeat = false;
    var top = parseInt(Math.random() * (t - y) + y);
    var left = parseInt(Math.random() * (x - y) + y);

    // determine whether the coordinates of the food and the snake body coincide
    $('.snake_wrap li').each(function() {
      if($(this).position().left == left && $(this).position().top == top){
        foodRandom();
      }else{
        repeat = true;
      }
    });

    // if the food is not covered by the snake, locate the food
    if(repeat){
      $('.food').css({'top':top*15 + 1 + 'px','left':left*15 + 1 + 'px'});
    }
  }
  foodRandom();

  //determine whether the snake hit the boundary
  function borderDetection(HT,HL){
    if(HT<0 || HT > 585 || HL < 0 || HL >795){
      clearInterval(myVar.itimes);
      gameOver();
      rankingList()
    }
  }

  //determine whether the snake hit itself
  function selfDetection(HT,HL){
    // Start from the second section of the snake，
    // whether the coordinates coincide with the snake head
    $('.snake_wrap li:gt(0)').each(function(index, val) {
      var this_top = $(this).position().top;
      var this_left = $(this).position().left;
      if( HL == this_left && HT == this_top ){
        clearInterval(myVar.itimes);
        gameOver();
        rankingList()
      }
    })
  }

  // Get user nickname
  function yourName(){
    if($.trim($('input[name=your_name]').val()) != ''){
      return $('input[name=your_name]').val();
    }else{
      return 'Guest';
    }
  }

  // game over
  function gameOver(){
    $('.over').show();
    // $.each($('.ranking_list li'),function() {
    //   if ($(this).children('.No').val() == 1) {
    //     document.getElementById('no1_name').innerHTML = yourName();
    //     document.getElementById('no1_score').innerHTML = myVar.myscore;
    //   } else if ($(this).children('.No').val() == 2) {
    //     document.getElementById('no2_name').innerHTML = yourName();
    //     document.getElementById('no2_score').innerHTML = myVar.myscore;
    //   } else if ($(this).children('.No').val() == 3) {
    //     document.getElementById('no3_name').innerHTML = yourName();
    //     document.getElementById('no3_score').innerHTML = myVar.myscore;
    //   }
    // })
    if (1 +parseInt($('.ranking_list li').length) == 1) {
      document.getElementById('no1_name').innerHTML = yourName();
      document.getElementById('no1_score').innerHTML = myVar.myscore;
    } else if (1 +parseInt($('.ranking_list li').length) == 2) {
      document.getElementById('no2_name').innerHTML = yourName();
      document.getElementById('no2_score').innerHTML = myVar.myscore;
    } else if (1 +parseInt($('.ranking_list li').length) == 3) {
      document.getElementById('no3_name').innerHTML = yourName();
      document.getElementById('no3_score').innerHTML = myVar.myscore;
    }

  }

  // initialize Ranking list
  // function initRankingList(){
  //   var ranking_list = $('.ranking_list');
  //
  // }

  // ranking list
  function rankingList(){
    // Add new record
    var new_ranking = '<li><span class="NO">'+ (1 +parseInt($('.ranking_list li').length)) +'</span><span class="name">' +yourName()+ '</span><span class="score_list">' +myVar.myscore+ '</span></li>';
    // ranking list container
    var ranking_list = $('.ranking_list');

    // if there are record in the ranking list, sort it
    // if it is empty, add it directly
    if(ranking_list.has('li').length>0){
      // record the length of the snake
      var li_len = $('.ranking_list li').length
      // bubble sort, arrange new records to corresponding positions
      for(var i = 0; i < li_len; i++){

        if(parseInt($('.ranking_list li').eq(i).children('span.score_list').html()) < parseInt(myVar.myscore)){
          $(new_ranking).insertBefore($('.ranking_list li').eq(i)).hide().slideDown();
          break;
        }else if(i == li_len - 1){
          $(new_ranking).appendTo(ranking_list).hide().slideDown();
        }
      }
    }else{
      $(new_ranking).appendTo(ranking_list).hide().slideDown();
    }



    // re-add the sorting sequence
    $.each($('.ranking_list li'),function(index,value){
      $(this).children('.NO').html($(this).index() +1)
    })
  }

}