/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/assets/js/profile.js ***!
  \****************************************/
var api;
$(document).ready(function () {
  if ($('#newsletter-api').length === 1) {
    init();
  }
});

function init() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  api = $('#newsletter-api').val();
  handle($('input[name="mail_release"]'));
  handle($('input[name="mail_newsletter"]'));
  handle($('input[name="mail_vote"]'));
}

function handle(element) {
  $(element).change(function (e) {
    var name = this.name;
    var data = {};
    data[name] = this.checked ? 1 : 0;
    $.post(api, data);
  });
}
/******/ })()
;