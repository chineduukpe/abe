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
    e.preventDefault()
	$('.custom-modal').removeClass('active');
})

$('a[data-target="#removePlaylistItem"]').click(function (e) {
    let payload = $(this).parent().parent().attr('data-id');
    $('#videoToRemove').val(payload);
})

$('.switch').click(function(){
	$(this).toggleClass('active');
})

$('nav .dropdown-link').click(function (e) {
	let is_active = $(this).hasClass('active');
    $('nav .dropdown-link').removeClass('active')

	is_active ? $(this).removeClass('active') : $(this).addClass('active')
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

$('a[data-toggle="show"]').click(function (evt) {
	let target = $(this).attr('data-target');
	$(target).toggleClass('hide');
})

$('select').selectpicker()

//PREVIEW CHANGED FILE
function readURL(input, target) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $(target).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).on('change', 'input[data-toggle="previewable-image"]', function(evt) {
	console.log('changing image...')
    readURL(this, $(this).attr('data-target'))
})


//END PREVIEW CHANGED FILE



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


//RANDOM BALLs
function createMultipleBalls(config){
    config.color = config.color ? config.color :  100000 + Math.floor(Math.random() * 999999)
    for (let index = 0; index < config.balls_count; index++) {
        let color = config.randomColor ? 100000 + Math.floor(Math.random() * 999999) : config.color
        let ball = document.createElement('span');
        document.querySelector(config.parent).appendChild(ball);
        new Ball({
            element: ball,
            backgroundColor: `#${color}`,
            size: 10 + Math.random() * 100,
            speed: 500 + Math.random() * 1000,
            x: 1 + Math.random() * 100,
            y: 1 + Math.random() * 100,
            borderRadius: `${config.borderRadius}%` || '0%',
            opacity: .4,
            zIndex: 0,
        })
    }
}


function Ball( config ) {
    this.speed = config.speed || 1000;
    this.x = config.x || 0;
    this.y = config.y || 0;
    this.xSteps = config.xSteps | 10;
    this.ySteps = config.ySteps || 10;
    this.el = config.element
    this.size = config.size
    this.onClickSpeed = config.onClickSpeed || 100
    this.shouldMoveForward = true;
    this.shouldMoveUpward = true
    this.width = config.boxWidth || false
    this.height = config.boxHeight || false
    this.el.style.backgroundColor = config.backgroundColor || "#000069",
        this.el.style.borderRadius = config.borderRadius || '50%',
        this.el.style.position = config.position || 'absolute'
    this.el.style.opacity = config.opacity || 1
    this.el.style.zIndex = config.zIndex || 0

    let self = this


    self.el.addEventListener("click",function () {
        self.shrink()
        let initial_speed = self.speed
        self.speed = self.onClickSpeed
        self.init()
        setTimeout(function () {
            self.speed = initial_speed
            clearInterval(self.interval)
            self.init()
        },5000);
    })

    this.setBoxSize = function(){
        if (self.height && self.width) {
            this.el.style.width = `${this.width}px`
            this.el.style.height = `${this.height}px`
            return;
        }

        return this.el.style.width = this.el.style.height =  `${this.size}px`
    }

    this.shrink = function(share = 2){
        if (self.height && self.width) {
            self.height = Math.ceil(self.height / share)
            self.width = Math.ceil(self.width / share)
            return
        }
        self.size = Math.floor(self.size / share)
        self.speed = Math.floor(self.speed / 2)

    }

    this.init = function () {
        console.log('Creating box')
        self.setBoxSize()
        self.el.style.transitionDuration = `${self.speed}ms`
        self.el.style.transitionProperty = `all`
        self.el.style.transitionTimingFunction = `linear`
        self.interval = setInterval(function () {
            self.el.transform = "rotateY(50deg)"
            self.shouldMoveForward ? self.x = (self.x + self.xSteps + Math.random(0,50))  : self.x -= self.xSteps + Math.random(0,50);
            self.shouldMoveUpward ? self.y += self.ySteps + Math.random(0,50) : self.y -= self.ySteps  + Math.random(0,50);
            self.el.style.left = `${self.x}%`
            self.el.style.top = `${self.y}%`

            self.x < 1 || self.x > 99 ? self.shouldMoveForward = !self.shouldMoveForward : null;
            self.y < 1 || self.y > 99 ? self.shouldMoveUpward = !self.shouldMoveUpward : null;

        },self.speed)
    }

    // Call the movement methods
    this.init()
}




//END RANDOM BALLS