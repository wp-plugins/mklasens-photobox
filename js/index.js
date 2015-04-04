jQuery(document).ready(function ($) {
	console.log('test');
	jQuery('.entry-content a > img').each(function(e) {
		if ($(this).parent('.gallery').length > 0) {
			classesArr = $('.entry-content a > img').closest('.gallery').attr('class');
			if (classesArr) {
				classes = classesArr.split(" ");
				idClass = classes[1];
				id = idClass.replace('galleryid-', '');
			}
		} else {
			id = false;
		}
		if (id) {
			rel = 'prettyPhoto[' + id + ']';
		} else {
			rel = 'prettyPhoto';
		}
		
		
		jQuery(this).parent().attr('rel', 'prettyPhoto[' + id + ']');
	});
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({
		theme: 'pp_default',
		deeplinking: false,
		social_tools: ''
	});
});