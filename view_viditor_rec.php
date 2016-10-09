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
                    <h1 class="page-header">View Employee Record</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Employee Record
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Child Name</th>
                                            <th>Child Age</th>
                                            <th>Child Class</th>
                                            <th>Gender</th>
                                            <th>Return Pass</th>
                                            <th>Entry Time</th>
                                            <th>Exit Time</th>
                                            <!--<th>Action</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
       
                                    <?php
                                    	$SQL = "SELECT emp_rec.*,departments.depart_name FROM emp_rec ORDER BY emp_rec_id DESC
										INNER Join departments ON departments.depart_id = emp_rec=depart_id";
    									$result = MySQLQuery($SQL);
    									while($row = mysqli_fetch_array($result)) { // ,MYSQL_ASSOC
										print_r($row);
									?>
                                        <tr class="odd gradeX" id="DelID_<?php echo $row['child_id'];?>">
                                            <td class="center"><?php echo $row['child_id'];?></td>
                                            <td class="center"><?php echo $row['child_name'];?></td>
                                            <td class="center"><?php echo $row['child_age'];?></td>
                                            <td class="center"><?php echo $row['child_class'];?></td>
                                            <td class="center">
												<?php 
													if($row['gender'] == 1){ 
														echo "Girl";
													 }else if($row['gender'] == 2){
														 echo "Boy";
													}
												?>
                                            </td>
                                            <td class="center"><?php if(empty($row['return_pass'])){?><a href="<?php ?>">Return pass</a>
																						<?php }else{ echo $row['return_pass'];}?></td>
                                            <td class="center"><?php echo $row['entry_time'];?></td>
                                            <td class="center"><?php if(empty($row['exit_time'])){?><a href="<?php ?>">Exit time</a>
                                            												<?php }else{ echo $row['exit_time'];}?></td>
<!--                                            <td class="center"><a href="add_user?id=<?php echo $row['user_id'];?>"><img height="16" width="16" src="../images/edit.png" alt="Edit"></a>&nbsp;&nbsp;&nbsp;<a id="<?php echo $row['staf_id'];?>" class='clsDelete'><img data-target="#myModal" data-toggle="modal" src="../images/delete.png" height="16" width="16" alt="Delete"></a></td>-->                                        </tr>
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
			var action = "DeleteEmployee";
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
