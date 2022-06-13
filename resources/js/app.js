window.addEventListener('load', function(){
  new Glider(document.querySelector('.glider'), {
		slidesToShow: 1,
    slidesToScroll: 1,
    itemWidth: 150,
    draggable: true,
    scrollLock: false,
    dots: '.dots',
    rewind: true,
  	arrows: {
    	prev: '.glider-prev',
    	next: '.glider-next'
  	},
  	responsive: [
    	{
      	breakpoint: 480,
      	settings: {
        	slidesToShow: 2,
        	slidesToScroll: 1,
        	itemWidth: 150,
        	duration: 0.25
      	}
    	},{
      	breakpoint: 768,
      	settings: {
        	slidesToShow: 3,
        	slidesToScroll: 1,
        	itemWidth: 150,
        	duration: 0.25
      	}
    	},{
      	breakpoint: 992,
      	settings: {
        	slidesToShow: 4,
        	slidesToScroll: 1,
        	itemWidth: 150,
        	duration: 0.25
      	}
    	},{
      	breakpoint: 1200,
      	settings: {
        	slidesToShow: 5,
        	slidesToScroll: 1,
        	itemWidth: 150,
        	duration: 0.25
      	}
    	}
  	]
  });
});

