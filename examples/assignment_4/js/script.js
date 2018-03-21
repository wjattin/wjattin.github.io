$(function(){
  //Hide stuff
  $('#getStarted').hide();
  //alert("hello");
  $('#title').on('mouseover',function(){
    $('.fa-arrow-alt-circle-left').toggleClass('fa-arrow-alt-circle-right');
    $('#getStarted').show();
  });

  $('#title').on('mouseleave',function(){
    $('.fa-arrow-alt-circle-left').toggleClass('fa-arrow-alt-circle-right');
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


  });







});
