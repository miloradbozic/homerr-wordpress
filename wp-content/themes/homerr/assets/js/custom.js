$( document ).ready( function() {
  $( '#show-return' ).css( 'opacity', '0.5' );
  $( '#show-delivery' ).css( 'opacity', '0.5' );
  $( '#hidden-content-2' ).hide();
  $( '#hidden-content-3' ).hide();

  $( '.show-section' ).click(function(){
    $( '.show-section' ).css( 'opacity', '0.5' );
    $( this ).css( 'opacity', '1' );
    var show_section = $( this ).attr( 'data-show-section' );
    $( '#how-work-workhomerr .hidden-content' ).hide();
    $( '#' + show_section ).show();
  });

  var all_questions = $( '.faq-question' );

  $( all_questions ).each( function( index ) {
    if( $( this ).attr( 'class' ) == 'faq-question faq-active' ) {
      console.log( $( this ).attr( 'class' ) );
      $( this ).closest( '.faq-second' ).show();
      $( this ).closest( '.faq-fourth' ).show();
      var current_item_id = $( this ).attr( 'id' );
      $( '.' + current_item_id ).show();
      var active_atr = $(this).closest('.tab-pane').attr('id');
      console.log(active_atr);
      $('a[href="#' + active_atr + '"]').tab('show');

      $('html, body').animate({
          scrollTop: $( this ).offset().top - 120
      }, 500);
    }
  });

  $( '.faq-first' ).click(function(){
    var current_item_id = $( this ).attr( 'id' );
    $( '.' + current_item_id ).slideToggle();
  });

  $( '.faq-third' ).click(function(){
    var current_item_id = $( this ).attr( 'id' );
    $( '.' + current_item_id ).slideToggle();
  });

  $( '.faq-question' ).click(function(){
    var current_item_id = $( this ).attr( 'id' );
    $( '.' + current_item_id ).slideToggle();
  });

  $( ".testimonial_by_text a" ).click(function( event ) {
    event.preventDefault();
  });

  //Find out which tab is clicked
  $('a[data-toggle = "tab"]').on('show.bs.tab', function (e) {
    var activeTab = $(e.target).text();
    $(".active-tab span").html(activeTab);
  });

  //Show active tab text
  $('a[data-toggle = "tab"]').ready(function () {
    var activeTab = $('.nav-tabs > li.active').text();
    $(".active-tab span").html(activeTab);
  });

  // Scroll Links
  $('nav a').click(function(event){
    $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top - 50
    }, 1000);
    return false;
  });

  // Swiper Slider
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.custom-button-next',
    prevButton: '.custom-button-prev',
    parallax: true,
    loop: true,
    autoplay: 4000,
    speed: 1000,
    setWrapperSize: true,
    spaceBetween: 30
  });

  //single slider
  $('#singleSlider').multislider({
    duration: 750,
    interval: false,
    slideAll: false
  });

  function showSlideViewSingle(number) {
    $('#singleSlider').multislider(['showSlideView', number, false])
  }

  $("#singleSlider" ).on( "sliderMoved", function( event, nextActiveId ) {
    $("#singleSlider .slider").find(".active").removeClass("active");
    var nextLink = $("#singleSlider .slider").find('.sliderLink' + nextActiveId + '').addClass("active");
    changeTextSingle(nextActiveId);
  });

  $("#singleSlider .slider-link").click(function() {
    console.log("It has been clicked")
    $("#singleSlider .slider-link").removeClass("active");
    $(this).addClass("active");
    showSlideViewSingle($(this).data("id"));
  });

  function changeTextSingle(nextActiveId) {
    $("#singleSlider .slider-wrapper .slider-text").not(".hideSlidertext").addClass("hideSlidertext");
    $("#singleSlider .slider-wrapper").find('.sliderText' + nextActiveId + '').removeClass("hideSlidertext");
  }

  //multi slider
  $('#mixedSlider').multislider({
    duration: 750,
    interval: false,
    slideAll: true
  });

  function showSlideView(number) {
    $('#mixedSlider').multislider(['showSlideView', number, true])
  }

  $("#mixedSlider" ).on("sliderMoved", function( event, nextActiveId ) {
    $("#mixedSlider .slider").find(".active").removeClass("active");
    var nextLink = $("#mixedSlider .slider").find('.sliderLink' + nextActiveId + '').addClass("active");
    changeText(nextActiveId);
  });

  $("#mixedSlider .slider-link").click(function() {
    $("#mixedSlider .slider-link").removeClass("active");
    $(this).addClass("active");
    showSlideView($(this).data("id"));
  });

  function changeText(nextActiveId) {
    $("#mixedSlider .slider-wrapper .slider-text").not(".hideSlidertext").addClass("hideSlidertext");
    $("#mixedSlider .slider-wrapper").find('.sliderText' + nextActiveId + '').removeClass("hideSlidertext");
  }

  //Collapse navbar if click on mobile
  $('.nav a').click(function(){
    $('.collapse').collapse('hide');
  });

});

$( document ).ready( function() {
	//Jumbotron fullscreen size
    //resizeDiv();
  });
  //On Resize
  /*
  window.onresize = function(event) {
    resizeDiv(); //Resize jumbotron div
  };
	//Change navbar class
  function resizeDiv() {
    if ($(window).width() > 768) {
			cover_ratio = 0.8
    } else {
			cover_ratio = 1
    };
    vph = $(window).height() + 1; //-50 for the navbar +1 just in case
    $('.height-js').css({
      'height': vph * cover_ratio + 'px'
    });
  }
  */
