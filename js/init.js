$(document).ready(function() {
  // Init Side nav
  $(".sidenav").sidenav();

  // Init Slider
  $(".slider").slider({
    indicators: false,
    height: 400,
    transition: 500,
    interval: 6000
  });

  // Init Parallax
  $(".parallax").parallax();

  // Init Tooltipped
  $(".tooltipped").tooltip();

  // Init Dropdown
  $(".dropdown-trigger").dropdown();
});
