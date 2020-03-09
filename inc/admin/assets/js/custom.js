"use strict";

jQuery(document).ready(function ($) {
  $('.admin_slider_button_text_div').hide();
  $('.trigger').on('click', function (e) {
    console.log($(event.target).parent().next());
    $(event.target).parent().next().slideToggle(); // e.target.next.slideToggle();
  });
});