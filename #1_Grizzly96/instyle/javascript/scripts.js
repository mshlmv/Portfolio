var doctors = 0;

function change_doctors(id) {	if( document.getElementById(id).checked == true ) {		
		doctors++;
	
	}
	else {		if( doctors > 0 ) {			
			doctors--;
		
		}
	}

	document.getElementById("doctors_number").innerHTML = doctors.toString();

	if(doctors == 2) {		for(i=0;i<cache.length;i++) {
			if(cache[i].checked != true) {				cache[i].disabled = true;
			}
		}
	}
	else {		for(i=0;i<cache.length;i++) {
			cache[i].disabled = false;		}
	}}

$(document).ready( function() {
	
	$(".close-order").click( function() {
		
		$('input[name="action"]').val("complete");
		$(this).parents("form").submit();
		
	});
	
	$(".unclose-order").click( function() {
		
		$('input[name="action"]').val("uncomplete");
		$(this).parents("form").submit();
			
	});
	
	$(".edit-order").click( function() {
		
		$('input[name="action"]').val("edit");
		$(this).parents("form").submit();
			
	});
	
});