$('.js--section-features').waypoint(function (direction) {
  if (direction == 'down') {
    $('.nav-bar-container').addClass('sticky');
  } else {
    $('.nav-bar-container').removeClass('sticky');
  }
}, {
  offset: '60px'
});

// Snippet from Waypoints documentation
// var waypoints = $('#handler-first').waypoint(function(direction) {
//   notify(this.element.id + ' hit 25% from top of window') 
// }, {
//   offset: '25%'
// })