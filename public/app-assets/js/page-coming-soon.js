/*=========================================================================================
    File Name: coming-soon.js
    Description: Coming Soon
==========================================================================================*/

/*******************************
 *       js of Countdown        *
 ********************************/

$(document).ready(function () {

  var remainingTime = new Date()
  remainingTime.setDate(remainingTime.getDate() + 10)

  $('#clockFlat').countdown(remainingTime).on('update.countdown', function (event) {
    var $this = $(this).html(event.strftime('' +
      '<div class="clockCard d-inline-block text-center px-3 px-sm-4 py-3"><span>%D</span><br><p class="lead m-0">Day%!D</p></div>' +
      '<div class="clockCard d-inline-block text-center px-3 px-sm-4 py-3"><span>%H</span><br><p class="lead m-0">Hour%!H</p></div>' +
      '<div class="clockCard d-inline-block text-center px-3 px-sm-4 py-3"><span>%M</span><br><p class="lead m-0">Minute%!M</p></div>' +
      '<div class="clockCard d-inline-block text-center px-3 px-sm-4 py-3"><span>%S</span><br><p class="lead m-0">Second%!S</h5></div>'
    ))
  });
});
