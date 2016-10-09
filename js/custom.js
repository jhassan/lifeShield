$(document).ready(function(){
	$('#addAccompanying').click(function(){
		$('#accompanyingInput')
			.append("<div class=\"form-group m-b-0 col-lg-3\">")
		   .append("<label>Accompanying name</label>")
		   .append("<input type='text' placeholder=\"Accompanying name\" name=\"accompanying_name\" class=\"form-control required\"/>")
		   .append("</div>");
		   
	});
	

	$("#exit_time").click(function(){ //console.log('fawad');
			$btn=$(this).val(1);
			console.log($btn);
			url="action.php";
			$.post(url,{id:$(this).val()},function(data){
				var obj=jQuery.parseJSON(data);
				if(obj.accept){
					$btn.parent().parent().html('<i class="fa fa-check "></i>');
				}

		});
	});
}); 