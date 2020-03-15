jQuery(document).ready(function($){

   // Slider Post type menu handler
	$('.admin_slider_button_text_div').hide();
   $('.trigger').on('click', function(e){
		console.log($(event.target).parent().next());
		$(event.target).parent().next().slideToggle();
		// e.target.next.slideToggle();
   });

   // Image uploader Header 1
	var mediaUploader;
	var attachment;

	class MediaUploader{
		constructor(button, input, preview){
			this.triggerButton = $(button);
			this.triggerInput = $(input);
			this.imagePreview = $(preview);
			this.mediaUploader = wp.media.frames.file_frame = wp.media({
					title: 'Choose a Profile Picture',
					button: {
						text: 'Choose Picture'
					},
						multiple: false,
				});
			this.uploadImage();
		}

		uploadImage(){
			this.triggerButton.on('click', this.startUpload.bind(this));
			this.mediaUploader.on('select', this.endUpload.bind(this));
		}

		startUpload(e){
			if(this.mediaUploader){
				this.mediaUploader.open();
					return;
			}
		}

		endUpload(){
				this.attachment = this.mediaUploader.state().get('selection').first().toJSON();

				this.triggerInput.val(this.attachment.url);
				this.imagePreview.attr('src', this.attachment.url);
				console.log(this.triggerInput);

			mediaUploader.open();
		}
	}

	var headerImage = new MediaUploader('#upload-header-img', '#header-input', '#header_image_preview img');

	var advertiseImage = new MediaUploader('#upload-advertis-img', '#advertis-input', '#advertis_image_preview img');



});
