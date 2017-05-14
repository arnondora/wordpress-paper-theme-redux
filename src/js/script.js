$('.headernav-button-collapse').sideNav(
  {
      menuWidth: 150, // Default is 300
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
);

// Init Parallax Effect for Page page
$(document).ready(function(){
  $('#page-parallax').parallax();
});
