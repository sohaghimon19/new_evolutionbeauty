//JQuery Module Pattern

// An object literal
var app = {
  init: function() {
    app.functionOne();
  },
  functionOne: function () {
  }
};
$("document").ready(function () {
  app.init();
});
/// select item form the DOM
$(document).ready(function(){
  $('.menu-btn').click(function(){
    $('nav').toggleClass('active')
  })
})

$(document).ready(function(){
  $('.menu-btn').click(function(){
    $('.menu-btn').toggleClass('active')
  })
})

