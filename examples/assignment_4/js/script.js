$(function(){
  //Hide stuff
  $('#getStarted, #finish, #previous, .hide, #survey').hide();
  //alert("hello");
  $('#title').on('mouseover',function(){
    $('.fa-arrow-alt-circle-left').toggleClass('fa-arrow-alt-circle-right');
    $('#getStarted').show();
  });

  $('#title').on('mouseleave',function(){
    $('.fa-arrow-alt-circle-left').toggleClass('fa-arrow-alt-circle-right');
  });
  // show our slides when clicked.
  $('#getStarted').on('click', function(){
    $('.hide').show();
    $('#getStarted').hide();
  });

  $('#finish').on('click',function(){
    $('.hide, #next, #previous, #finish').hide();
    $('#survey').show();
    // to do more....
  });

  //Survey
  $('#yes').on('click',function(){
    $('#surveytitle').css("background-color","green");
    //change multiple css properties notice {} and :
    $('#survey').css({
      "border":"1px solid green",
      "background":"#ccc"
    });
  });
  $('#no').on('click',function(){
    $('#surveytitle').css("background-color","red");
    //change multiple css properties notice {} and :
    $('#survey').css({
      "border":"1px solid red",
      "background":"#FFFFFF"
      // rgb(255,255,255)
    });
  });

  $('#next').on('click',function(){
    //First, we need to keep track of the current slide and the next slide. We achieve this by storing our elements in variables.
    var currentItem = $('li.active');
    //Position based selectors:
    // first() https://api.jquery.com/first/
    // last() https://api.jquery.com/last/
    // prev() Documentation https://api.jquery.com/prev/
    // next() Documentation https://api.jquery.com/next/
    var nextItem = $('li.active').next();

    // Class attribute
    //https://api.jquery.com/hasClass/
    //https://api.jquery.com/addClass/
    //https://api.jquery.com/removeClass/
    //https://api.jquery.com/toggleClass/
    currentItem.toggleClass('active');

    nextItem.toggleClass('active');

    // Conditional eval.
    if($('li').last().hasClass('active')) {
      $('#next').hide();
      $('#finish').show();
    } else {
      $('#next').show();
    }

    // Conditional eval.
    if($('li').first().hasClass('active')) {
      $('#previous').hide();
    } else {
      $('#previous').show();

    }


  });

  $('#previous').on('click',function(){
    //First, we need to keep track of the current slide and the next slide. We achieve this by storing our elements in variables.
    var currentItem = $('li.active');
    //Position based selectors:
    // first() https://api.jquery.com/first/
    // last() https://api.jquery.com/last/
    // prev() Documentation https://api.jquery.com/prev/
    // next() Documentation https://api.jquery.com/next/
    var previousItem = $('li.active').prev();

    currentItem.toggleClass('active');

    previousItem.toggleClass('active');

    // Conditional eval.
    if($('li').last().hasClass('active')) {
      $('#next').hide();
      $('#finish').show();
    } else {
      $('#next').show();
    }
    // Conditional eval.
    if($('li').first().hasClass('active')) {
      $('#previous').hide();
    } else {
      $('#previous').show();
    }

  });







});
