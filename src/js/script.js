// Register Service Worker
// Please Ensure the path of the service worker script below
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/wp-content/themes/PaperTheme3/dist/offline-worker.js')
  .then(function(registration) {
    console.log('offline worker registered');
  });
}

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
  $('.social-tooltipped').tooltip({delay: 50});
});
