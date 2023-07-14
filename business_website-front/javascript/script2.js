// $('#style_button').click(function(){
//    $('.simple_span').parent().css('border', '2px solid red');
// });

// $('#style_button').click(function(){
// 	$('.simple_span').parents().css('border', '2px solid red');
//  });
















// Parent method of selection Element
/*
 $('#style_button').click(function(){
	$('.simple_span').parentsUntil('div').css('border', '2px solid red');
 });
*/

/*
// ...................
 $('#style_button').click(function(){
	$('.simple.div').find('*').css('border', '2px solid red');
 });
*/

//  siblings method of selection
/*
 $('#style_button').click(function(){
	$('.simple.heading').siblings().css('color', 'red');
 });
 */
//  next method of selection
/*
$('#style_button').click(function(){
	$('.simple.heading').next().css('color', 'red');
 });

//   nextAll method of selection
$('#style_button').click(function(){
	$('.simple.heading').nextAll().css('color', 'red');
 }); 

//  nextUntil method of selection
$('#style_button').click(function(){
	$('.simple.heading').nextUntil('h3').css('color', 'red');
 }); 

//   prevAll method of selection
$('#style_button').click(function(){
	$('.simple.heading').prevAll().css('color', 'red');
 }); 

 // prevAll of selection
$('#style_button').click(function(){
	$('.simple.heading').prevUntil('.first').css('color', 'red');
 }); 




// first method of selection
$('#style_button').click(function(){
	$('.simple.heading1').first().css('color', 'red');
 }); 

// first method of selection
$('#style_button').click(function(){
	$('.simple.heading1').last().css('color', 'red');
 }); 

// equivalent method of selection
$('#style_button').click(function(){
	$('.simple.heading1').eq(4).css('color', 'red');
 }); 





// filter method of selection
$('#style_button').click(function(){
	$('.simple.heading1').filter('.select').css('color', 'red');
 }); 
*/

 // equivalent method of selection
$('#style_button').click(function(){
	$('.simple.heading1').not('.select').css('color', 'red');
 }); 


/*
$("#change").click(function(){
	let dimension = $(".sample_box").width();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(".sample_box").height();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(".sample_box").innerWidth();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(".sample_box").innerHeight();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(".sample_box").outerWidth();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(".sample_box").outerHeight();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(".sample_box").outerWidth(true);
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(".sample_box").outerHeight(true);
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(document).width();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(window).width();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(document).height();
	console.log(dimension);
});

$("#change").click(function(){
	let dimension = $(window).height();
	console.log(dimension);
});
*/




/*
$("#change").click(function(){
	$(".sample_box").css({'background':'red', 'padding': '50px', 'border': '4px solid yellow'});
});


$("#add").click(function(){
     $(".paragraph").before(' <b>this is the second paragraph</b> ');
});
*/















$('#reg_form').on('submit', function(e){
     e.preventDefault();
	 $('#first_name').val('morrhtech');
});


/*
$(document).ready(function(){
	$('.box').text('this is another text');
 });

 $(document).ready(function(){
	$('.box').html('this is <h1>jjj</h1> another text');
 });
 */

 /*
$(document).ready(function(){
   let boxText = $('.box').html();
   console.log(boxText)
});




$(document).ready(function(){
	alert('Do you want to see the jquery animations!!!!');
	 $(".box")
	 .animate({left: '100px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '200px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '300px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '400px', width: '500px', top: '100px', height: '300px'})
	 .animate({opacity: 0.5, height: '350px', width: '600px'})
	 .animate({opacity: 1, height: '350px', width: '600px'})
	 .animate({left: '500px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '600px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '700px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '800px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '900px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '1000px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '900px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '800px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '700px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '600px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '500px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '400px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '300px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '200px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '100px', width: '500px', top: '100px', height: '300px'})
	 .animate({left: '0px', width: '200px', top: '0px', height: '20px'});

   $('.box').hide('slow', function(){
	alert('Refresh this tab to view the animation again!!!!');
   });

});

*/

// $(document).ready(function(){
// 	  $('.box').hide('slow');
//       alert('box hidden');
// });


// jquery call-back functions
// READ JQUERY TRANSVERSING ANCESTORS



		$('#hamburger_menu').click(function(){
			$('#media_menu').slideToggle('slow');
		});
		
		
		
		
	
	