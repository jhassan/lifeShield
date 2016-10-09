// autocomplet : this function will be executed every time we change the text
function autocomplet_emp() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#emp_name').val();
	//console.log(keyword);
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'js/ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#emp_name_list').show();
				$('#emp_name_list').html(data);
			}
		});
	} else {
		$('#emp_name_list').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#emp_name').val(item);
	// hide proposition list
	$('#emp_name_list').hide();
}

/*========================================================*/

function autocomplet_visitor() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#whome_to_meet').val();
	//console.log(keyword);
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'js/ajax_visitor.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#whome_to_meet_list').show();
				$('#whome_to_meet_list').removeClass('hidden');
				$('#whome_to_meet_list').html(data);
			}
		});
	} else {
/*		$( "#whome_to_meet" ).focusout(function(){console.log('aaaa');
			if (keyword.length <= min_length) {console.log('bbbbb');
				$('#whome_to_meet_list').addClass('hidden');
			}
			
		});*/
		$('#whome_to_meet_list').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#whome_to_meet').val(item);
	// hide proposition list
	$('#whome_to_meet_list').hide();
}

