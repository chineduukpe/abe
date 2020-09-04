$('.nav-toggle').click(function(e){
	$('.main-content').toggleClass('collapsed');
	$('.sidemenu').toggleClass('active');
})

$('.sidemenu .menu li a').click(function(e){
	$('.sidemenu .menu li').removeClass('active');
	$(this).parent().addClass('active');
})

$('a[data-toggle="submenu"]').click(function(e){
	e.currentTarget.parentNode.querySelector('.submenu').classList.toggle('active');
})

$('.file-form-group button.file-upload-button').click(function(e){
	e.currentTarget.parentNode.querySelector('input[type="file"]').click()
});
$('.file-form-group input[type="file"]').change(function(e){
	let filename = this.files.item(0).name;
	let name_filename_container = e.currentTarget.parentNode.querySelector('span.upload-file-name')
	name_filename_container.innerText = filename
});

$('a[data-toggle="message-box"]').click(function(e){
	$('.message-box').toggleClass('show');
})

$('a[data-toggle="custom-modal"]').click(function(e){
	e.preventDefault()
	let target = $(this).attr('data-target');
	$(target).addClass('active');
})

$('.close-modal').click(function(e){
	$('.custom-modal').removeClass('active');
})

$('.switch').click(function(){
	$(this).toggleClass('active');
})



$('a[data-role="playAudio"]').click(function(evt){
	let $this = $(this)
	// Pause all other audios
	let all_audios = $('a[data-role="playAudio"]');
	console.log(all_audios);
	Array.prototype.forEach.call(all_audios,function(audio){
		audio.classList.remove('playing')
		audio.getElementsByTagName('audio')[0].pause();
		audio.getElementsByTagName('i')[0].classList.remove('fa-pause-circle');
		audio.getElementsByTagName('i')[0].classList.remove('animated-bg');
		audio.getElementsByTagName('i')[0].classList.add('fa-play-circle');
	});

	$this.find('i').toggleClass('animated-bg').toggleClass('fa-play-circle').toggleClass('fa-pause-circle');
	$this.toggleClass('playing')
	if ($this.hasClass('playing')) {
		return $this.find('audio').get(0).play()
	}
	return $this.find('audio').get(0).pause();

});

// FADE ITEM IN ON SCROLL
// $(window).on("load",function() {
//   $(window).scroll(function() {
//     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//     $(".fadeInOnScroll").each(function() {
//       /* Check the location of each desired element */
//       var objectBottom = $(this).offset().top + $(this).outerHeight();
      
//        If the element is completely within bounds of the window, fade it in 
//       if (objectBottom < windowBottom) { //object comes into view (scrolling down)
//         if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
//       } else { //object goes out of view (scrolling up)
//         if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
//       }
//     });
//   }).scroll(); //invoke scroll-handler on page-load
// });

 $(window).on("load",function() {
    function fade() {
        var animation_height = $(window).innerHeight() * 0.50;
        var ratio = Math.round( (1 / animation_height) * 10000 ) / 10000;

        $('.fadeInOnScroll').each(function() {

            var objectTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).innerHeight();

            if ( objectTop < windowBottom ) {
                if ( objectTop < windowBottom - animation_height ) {
                    // $(this).html( 'fully visible' );
                    $(this).css( {
                        transition: 'opacity 0.1s linear',
                        opacity: 1
                    } );

                } else {
                    // $(this).html( 'fading in/out' );
                    $(this).css( {
                        transition: 'opacity 0.25s linear',
                        opacity: (windowBottom - objectTop) * ratio
                    } );
                }
            } else {
                // $(this).html( 'not visible' );
                $(this).css( 'opacity', 0 );
            }
        });
    }
    $('.fade').css( 'opacity', 0 );
    fade();
    $(window).scroll(function() {fade();});
});