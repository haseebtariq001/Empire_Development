var swiper = new Swiper( '.swiper-container.two', {
	// pagination: '.swiper-pagination',
	// paginationClickable: true,
	effect: 'coverflow',
	loop: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	coverflow: {
		rotate: 0,
		stretch: 100,
		depth: 350,
		modifier: 3,
		slideShadows : false,
	}
} );

var nextBtn = document.getElementsByClassName('swiper-btn-next');
// Add a click event listener to the button
if (nextBtn.length > 0){
    nextBtn[0].addEventListener('click', function() {
        swiper.slideNext();
    });
}
var PrevBtn = document.getElementsByClassName('swiper-btn-prev');
if (PrevBtn.length > 0){
// Add a click event listener to the button
PrevBtn[0].addEventListener('click', function() {
	swiper.slidePrev();
});
}

