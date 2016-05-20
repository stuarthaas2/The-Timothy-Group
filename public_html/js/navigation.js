// JavaScript Document
$(function(){
  
  //resize navigation
  $(window).scroll(function(){
	  if($(this).width() > 660){
		if($(this).scrollTop() > 120){
			$('#header-logo').animate({opacity: 0}, {duration: 250, queue: false});
			$('#mainnav ul').animate({'margin-top': 20}, { duration: 250, queue: false });
			$('#mainnav ul ul').animate({'margin-top': 0}, { duration: 250, queue: false });
			$('#scroll-to-top').animate({'right': 0}, { duration: 250, queue: false });
		}
		else if($(this).scrollTop() < 120){
			$('#header-logo').animate({opacity: 1}, {duration: 250, queue: false});
			$('#mainnav ul').animate({'margin-top': 60}, { duration: 250, queue: false });
			$('#mainnav ul ul').animate({'margin-top': 0}, { duration: 250, queue: false });
			$('#scroll-to-top').animate({'right': -192}, { duration: 250, queue: false });
		}  
	  }
  });
  
  //scroll to top
  $('#scroll-to-top').click(function(){
	  $('html, body').animate({'scrollTop':0}, { duration: 250, queue: false });
  });
  
  //scroll to anchor 
  function scrollToAnchor(href, offset, delay) {
	  href = typeof(href) === "string" ? href : $(this).attr("href");
  
	  if(!href){return;}
  
	  var $target = $(href);
  
	  if($target.length) {
		  $('html, body').animate({scrollTop: $target.offset().top - offset}, { duration: delay, queue: false });
		  if(history && "pushState" in history) {
			  history.pushState({}, document.title, window.location.pathname + href);
			  return false;
		  }
	  }
  } 
  scrollToAnchor(window.location.hash, 0, 750);
});