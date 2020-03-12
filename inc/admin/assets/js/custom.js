"use strict";

jQuery(document).ready(function ($) {
  // Slider Post type menu handler
  $('.admin_slider_button_text_div').hide();
  $('.trigger').on('click', function (e) {
    console.log($(event.target).parent().next());
    $(event.target).parent().next().slideToggle(); // e.target.next.slideToggle();
  }); // Image uploader Header 1

  var mediaUploader;
  var attachment;
  $('#upload-header-img').on('click', function (e) {
    e.preventDefault();

    if (mediaUploader) {
      mediaUploader.open();
      return;
    }

    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose a Profile Picture',
      button: {
        text: 'Choose Picture'
      },
      multiple: false
    });
    mediaUploader.on('select', function () {
      attachment = mediaUploader.state().get('selection').first().toJSON();
      console.log(attachment);
      $('#header-input').val(attachment.url);
      $('#header_image_preview img').attr('src', attachment.url);
    });
    mediaUploader.open();
  });
});