var doctors = 0;

function change_doctors(id) {
		doctors++;
	
	}
	else {
			doctors--;
		
		}
	}

	document.getElementById("doctors_number").innerHTML = doctors.toString();

	if(doctors == 2) {
			if(cache[i].checked != true) {
			}
		}
	}
	else {
			cache[i].disabled = false;
	}

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