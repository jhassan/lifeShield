$(document).ready(function(){
	$('#addAccompanying').click(function(){
		$('#accompanyingInput')
			.append("<div class=\"form-group m-b-0 col-lg-3\">")
		   .append("<label>Accompanying name</label>")
		   .append("<input type='text' placeholder=\"Accompanying name\" name=\"accompanying_name\" class=\"form-control required\"/>")
		   .append("</div>");
		   
	});
	

	/*$(".exit_time").click(function(){ //console.log('fawad');
			var id = $(this).attr("id");
			var action = "UpadeteExitTime";
			var myKeyVals = { id : id, action: action };
			//console.log(id); return false;
			$.ajax({
				url: "action.php",
				type: "post",
				data: myKeyVals ,
				success: function (response) {
					console.log(response);   return false;
				   // you will get response from your php page (what you echo or print)                 
		
				},
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				}
		
		
			});
			//console.log(id);
			//return false;
			//url="action.php?action=UpadeteExitTime";
			//var myKeyVals = { id : id}
//			
//			var saveData = $.ajax({
//				  type: 'POST',
//				  url: "action.php?action=UpadeteExitTime",
//				  data: myKeyVals,
//				  dataType: "text",
//				  
//			});
			
			/*$.post(url,{id:$(this).val()},function(data){
				var obj=jQuery.parseJSON(data);
				if(obj.accept){
					$btn.parent().parent().html('<i class="fa fa-check "></i>');
				}

		});
	});*/
	
//	function UpadateExitTime() {console.log('bbb');
//	 //$.post("includes/db_update.php", $("#console").serialize());
//	 	if('.exit_time'){
//			console.log('aaa');
//		}
//
//	}
//	$('.exit_time').onclick(function UpadateExitTime(){
//		console.log('aaa');
//	});
}); 


function UpadateExitTime(){
	console.log('fawad');
	var id = $(this).attr("name","exit_time");
	console.log(id);
	return false;
      $.ajax({
        type: "POST",
        url: "your_php_page.php",
        data: { name: $("select[name='players']").val()},
        success:function( msg ) {
         alert( "Data Saved: " + msg );
        }
       });
  }
//        function UpadateExitTime() {// console.log('aaa');
//         //$.post("includes/db_update.php", $("#console").serialize());
//			if('.exit_time'){
////				console.log('fawad');
////			var myKeyVals = { id : id}
//				//var id = $(this).attr("id");
//				var id = document.getElementById(".exit_time");
//				console.log(id); return false;
//				var action = "UpadeteExitTime";
//				var myKeyVals = { id : id, action: action };
//				console.log(id); return false;
//				$.ajax({
//					url: "action.php?action=UpadeteExitTime",
//					type: "POST",
//					data: myKeyVals ,
//					success: function (response) {
//						console.log(response);   return false;
//					   // you will get response from your php page (what you echo or print)                 
//			
//					},
//					error: function(jqXHR, textStatus, errorThrown) {
//					   console.log(textStatus, errorThrown);
//					}
//			
//			
//				});
//			}
//        }
