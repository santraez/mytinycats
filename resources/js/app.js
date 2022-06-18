/////////////////////////////////////////////////////////
// START
/////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function() {
	startApp();
});
function startApp() {
  previewVideo();
}

/////////////////////////////////////////////////////////
// CAROUSEL CARDS
/////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////
// CONSTANTS

const content = document.querySelector('.glider-slide-in__button');
const video = document.querySelector('.glider-slide-in__video');

/////////////////////////////////////////////////////////
// FUNTIONS

function previewVideo() {
	content.addEventListener( 'mouseover', togglePreview );
	content.addEventListener( 'mouseleave', togglePreview );
}
function togglePreview() {
	/*
	video.classList.toggle('display-none');
	*/
	if(video.classList.contains('display-none')) {
		video.classList.remove('display-none');
	} else {
		video.classList.add('display-none');
	}
}