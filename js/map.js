$(document).ready(function(){  

	$("area").mouseenter(function() { 
		
		var id = $(this).attr('id').replace('area2-', '');
		id = id.replace('area-', '');
		var mouseover = id+'-on';
		var mouseout = id+'-off';
		
		$('img#'+id).attr('src', '/wp-content/themes/corbett/images/map/'+mouseover+'.png');
		
	});   

	$("area").mouseleave(function() { 
		
		var id = $(this).attr('id').replace('area2-', '');
		id = id.replace('area-', '');
		var mouseout = id+'-off';
		
		$('img#'+id).attr('src', '/wp-content/themes/corbett/images/map/'+mouseout+'.png');
		
	});  
	
	$("area").click(function() { 
		
		var id = $(this).attr('id').replace('area2-', '');
		id = id.replace('area-', '');
		
		if($('div#mapText').css('display') == 'block')
			$('div#mapText').fadeOut('fast');
		
		if($('div#info-'+id).css('display') == 'block')
		{
			$('div#info-'+id).fadeOut('fast');
			$('div#mapText').delay(220).fadeIn('fast');
		}
		else
		{
			$('div.mapInfo').fadeOut('fast');
			$('div#info-'+id).delay(220).fadeIn('fast');
		}
			
	});  

});  