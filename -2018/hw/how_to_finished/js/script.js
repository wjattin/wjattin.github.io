
var totalsteps = 3;
// We will use a variable called currentstep to keep track of which slide we are on
var currentstep = 0;
// currentslide will contain the html for the slide we want to show
var currentSlide;
// Initial Function. Gets Called when we the page first loads
$(function(){
  //$('body').load('step1.txt');
  /*
  First, we hide all the steps and the controls.
  You can specify multiple things to hide by separating them by a comma
  inside of the selector.
  */
  $('.steps li, .controls, #prev, .end').hide();

  // Fill out the number of steps in the title
  $('.totalsteps').html(totalsteps);

});

// Click events

/* Let's start the tutorial by clicking on an image.
 Keep in mind we only want to show the first slide.
*/
$('img').on('click', function(){
  //Lets hide the welcome paraphs
  $('.welcome').hide();
  //Set the first step
  currentstep = 1;
  currentslide = $('#step' + currentstep);
  console.log(currentslide);
  $(currentslide).fadeIn(1000);
  $('.controls').fadeIn(1000);
  $('h2').html('Step '+ currentstep);
});

// Setup the next control
$('#next').on('click', function(){

  if(currentstep != totalsteps)
  {
    //Hide the currentSlide
    $(currentslide).hide();
    //Increment the currentstep
    currentstep++;
    //Assign the new currentslide
    currentslide = $('#step' + currentstep);
    //Show the new slide
    $(currentslide).fadeIn(1000);
    $('h2').html('Step '+ currentstep);
  }
  if(currentstep == totalsteps) {
    $('#next').hide();
  }
  if(currentstep != 1) {
    $('#prev').show();
  }
});

// Setup the prev control
$('#prev').on('click', function(){

    //Hide the currentSlide
    $(currentslide).hide();
    //Increment the currentstep
    currentstep--;
    //Assign the new currentslide
    currentslide = $('#step' + currentstep);
    //Show the new slide
    $(currentslide).fadeIn(1000);
    $('h2').html('Step '+ currentstep);

    if(currentstep != totalsteps) {
      $('#next').show();
    }

    if(currentstep == 1) {
      $('#prev').hide();
    }
});
// Let's finish the slideshow
$('#finish').on('click', function(){
  $('.steps ul, .controls').hide();
  $('.end').fadeIn(1000);
  $('.lasttext').html('ALL DONE!');
});

// mouseover and mouseout events
$('img').on('mouseover',function(){
  $('h1').css('color','blue');
});
$('img').on('mouseout',function(){
  $('h1').css('color','black');
});
