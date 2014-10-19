$(document).ready(function(){ 
	
	
   	var current = 1;
	
//----------------------------------------------------------------------------------------------------//
//------------------ Functions -----------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------//
	function showCount()
	{
		var controls = current+' / '+count;
		$("div.bannerCount").html(controls);
	}
	
	function next()
	{
		$("div#banner"+current).fadeOut('fast');
		
		if(current == count)
			current = 1;
		else
			current++;
			
		showCount();
			
		$("div#banner"+current).delay(220).fadeIn('fast');
	} 
	
	function prev()
	{
		$("div#banner"+current).fadeOut('fast');
		
		if(current == 1)
			current = count;
		else
			current--;
			
		showCount();

			
		$("div#banner"+current).delay(200).fadeIn('fast');
	} 
//----------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------//
//----------------------------------------------------------------------------------------------------//


	
	//Show first banner by default
	showCount();
	$("div#banner1").fadeIn('fast');
	
	
	//Dropdowns
	$("div.naviItem a").mouseenter(function() { 
   
         $(this).parent().find("div.dropDown").slideDown('fast').show();
   
         $(this).parent().hover(function() {  
         }, function(){  
             $(this).parent().find("div.dropDown").slideUp('fast');
         });   
     });  
   
	
	//Banner Controls
	$("img.controlNext").click(next);
	$("img.controlPrev").click(prev);
   
	
	//Auto Scroll
	window.setInterval(next, 15000);
	
	
	
	
     $("div.gridItem").mouseenter(function() { 
	
		var src = $(this).find('.gridItemThumbActive').html();
		$(this).find('.gridItem').attr("src", src);			  
		
	});
	
     $("div.gridItem").click(function() { 
		
		if($(this).attr('id') != "gridItem62")
		{
			var src = $("div#gridItem62").find('.gridItemThumb').html();
			$("div#gridItem62").find('.gridItem').attr("src", src);
		}		
		
		var src = $(this).find('.gridItemPhoto').html();
		$('img#viewer').attr("src", src);
		
		var name = '<h1>'+$(this).find('.gridItemName').html()+'</h1>';
		if($(this).find('.gridItemAttachment').html() != '')
		{
			var cv = '<div class="rightButton"><a href="'+$(this).find('.gridItemAttachment').html()+'" target="_blank">';
			cv += '<img src="/wp-content/themes/corbett/images/button-downloadCV.gif" /></a></div>';
		}
		else
			cv = '';
		var text = $(this).find('.gridItemText').html();
		
		$("div.text").html(name+cv+'<p>'+text+'</p>');
		 
     });  


     $("div.gridItem").mouseleave(function() { 
		
		var src = $(this).find('.gridItemThumb').html();
		$(this).find('.gridItem').attr("src", src);
		 
     }); 

   
});  