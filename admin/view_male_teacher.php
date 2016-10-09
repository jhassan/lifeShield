<?php include_once('top.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php include_once('header.php');?>    

        <?php include_once('leftsidebar.php');?>     
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Teacher</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Teacher
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Class</th>
                                            <th>Designation</th>
                                            <th>User Belong</th>
                                            <th>Phone #</th>
                                            <th>Address</th>
                                            <th>Join Date</th>
                                            <th>Image</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
       
                                    <?php
                                    	$SQL = "SELECT * FROM school_staff WHERE (user_type = '1' OR user_type = '2' OR user_type = '4') and gender = '1' ORDER BY school_id ASC";			
    									$result = MySQLQuery($SQL);
    									while($row = mysqli_fetch_array($result)) { // ,MYSQL_ASSOC
										//pr($row);exit;
    								?>
                                        <tr class="odd gradeX" id="DelID_<?php echo $row['school_id'];?>">
                                            <td class="center"><?php echo $row['school_id'];?></td>
                                            <td class="center"><?php echo $row['name'];?></td>
                                            <td class="center"><?php echo $row['father_name'];?></td>
                                            <td class="center"><?php echo age($row['dob']);?></td>
                                            <td class="center">
	                                            <?php if($row['gender'] == 1){ 
														echo "Male";
													 }else if($row['gender'] == 2){
														 echo "Female";
													 }?>
                                            </td>
                                            <td class="center"><?php echo $row['class'];?></td>
                                            <td class="center">
	                                            <?php if($row['user_type'] == 1){ 
														echo "Principle";
													 }else if($row['user_type'] == 2){
														 echo "Teacher";
													 } else if($row['user_type'] == 3){
														 echo "Student";
													}else if($row['user_type'] == 4){
														 echo "Worker";
												}?>
                                            </td>
                                            <td class="center">
	                                            <?php if($row['user_belongs'] == 1){ 
														echo "Colony";
													 }else if($row['user_belongs'] == 2){
														 echo "Outsider";
													 }
												?>
                                            </td>
                                            <td class="center"><?php echo $row['phone_no'];?></td>
                                            <td class="center"><?php echo $row['address'];?></td>
                                            <td class="center"><?php echo $row['join_date'];?></td>
                                            <td class="center"><img height="50" width="50" src="security_staff_images/school_staff_img/<?php echo $row['img_name'];?>" alt=""></td>

                                            <td class="center"><a href="school_staff?id=<?php echo $row['school_id'];?>"><img height="16" width="16" src="../images/edit.png" alt="Edit"></a>&nbsp;&nbsp;&nbsp;<a id="<?php echo $row['staf_id'];?>" class='clsDelete'><img data-target="#myModal" data-toggle="modal" src="../images/delete.png" height="16" width="16" alt="Delete"></a></td>
                                        </tr>
									<?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-body">Do you want to delete this record?</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" id="DeleteRecord">Delete</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
   <input type="hidden" id="currentID" value="" />
    <?php include_once('jquery.php');?>
    
    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
		// Get Delete Record ID
		jQuery(document).on('click','.clsDelete',function(e){
			var DelID = jQuery(this).attr("id");
			$("#currentID").val(DelID);
		});	
		
		// Delete Record show Dialog Box
		jQuery(document).on('click','#DeleteRecord',function(e){
			var DelID = $("#currentID").val();
			var action = "DeleteDepartment";
			jQuery.ajax({
				type: "POST",
				url: "action.php",
				data: {DelID : DelID, action : action},
				cache: false,
				success: function(response)
				{
					if(response == "Record Deleted Successfully!")
					{
						jQuery("#DelID_"+DelID).hide();	
						$("#myModal").modal('hide');
					}
					 
				}
			});
		});
    });
    </script>

</body>

</html>
