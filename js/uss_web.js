		 $(window).load(function() {
		 $('#loading').hide();
		 document.getElementById("slider").style.display = "block";
		});
		
		$(document).ready(function () {

		$(window).scroll(function () {
				if ($(this).scrollTop() > 200) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			});
			

			$('.scrollup').click(function () {
				$("html, body").animate({
					scrollTop: 0
				}, 600);
				return false;
			});

		});
		
		$('#navigation').slimmenu(
		{
			resizeWidth: '900',
			collapserTitle: '',
			animSpeed: 'medium',
			easingEffect: 'linear',
			indentChildren: false,
			childrenIndenter: '&nbsp;'
		});
		
		
		 $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
	

  // $(this).find(".panel-body").css("height", "");
	
$(".zoom").hover(function(){
	
	var div = document.createElement('div');
	div.innerHTML = $(this)[0].innerHTML;
	div.setAttribute('class', 'panel panel-default text-center '); 
   
	if($(window).width()<767){
   Messi.showdialog(div.outerHTML,{autoclose:20000,viewport:{top: $(this).offset().top-25+"px",left:($(window).width()/2)-200 +"px"}});

	}else{

   Messi.showdialog(div.outerHTML,{autoclose:20000,viewport:{top: $(this).offset().top-25+"px",left: $(this).offset().left-70+"px"}});
	   }

    }, function(){
});

// $(".client_logo").click(function(){
// 	var div = document.createElement('div');
// 	div.innerHTML = $(this).find(".client_projects")[0].innerHTML;
	
// 	if($(window).width()<992){
//    Messi.showdialog(div.outerHTML,{autoclose:20000,viewport:{top: $(this).offset().top-25+"px",left:($(window).width()/2)-200 +"px"}});

// 	}else{

//    Messi.showdialog(div.outerHTML,{autoclose:20000,viewport:{top: $(this).offset().top-25+"px",left: $(this).offset().left-100+"px"}});
// 	   }
// 	    });