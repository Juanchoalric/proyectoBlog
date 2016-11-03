$(".ion-navicon-round").click(function () {
  if ( $( ".ul-main-nav" ).is( ":hidden" ) ) {
    $( ".ul-main-nav" ).slideDown( "slow" );
  } else {
    $( ".ul-main-nav" ).slideUp();
  }
});
