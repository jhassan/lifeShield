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
                    <h1 class="page-header">View Vhief Records</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Employee List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Chief Name</th>
                                            <th>DOB</th>
                                            <th>Phone No</th>
                                            <th>CNIC no.</th>
                                            <th>Address</th>
                                            <th>Join Date</th>
                                            <th>Emp Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
       
                                    <?php
                                    	$SQL = "SELECT * FROM tblchief ORDER BY chief_id DESC";			
    									$result = MySQLQuery($SQL);
    									while($row = mysqli_fetch_array($result)) {
											//print_r($row); die;// ,MYSQL_ASSOC 
                                            if(count($row) > 0)
                                            {
    									if(empty($row['dob']) || $row['dob'] == "0000-00-00") $row['dob'] = "N/A";
									?>
                                        <tr class="odd gradeX" id="DelID_<?php echo $row['chief_id'];?>">
                                            <td class="center"><?php echo $row['chief_id'];?></td>
                                            <td class="center"><?php echo $row['chief_name'];?></td>
                                            <td class="left"><?php echo age($row['dob']);?></td>
                                            <td class="center"><?php echo $row['phone_no'];?></td>
                                            <td class="center"><?php echo $row['NIC_no'];?></td>
                                            <td class="center"><?php echo $row['address'];?></td>
                                            <td class="center"><?php echo $row['join_date'];?></td>
                                            <td class="center"><img src="security_staff_images/chief/<?php echo $row['img_name'];?>" height="50" width="50"></td>
                                            <td class="center"><a href="add_chief_record?id=<?php echo $row['chief_id'];?>"><img height="16" width="16" src="../images/edit.png" alt="Edit"></a>&nbsp;&nbsp;&nbsp;<a id="<?php echo $row['chief_id'];?>" class='clsDelete'><img data-target="#myModal" data-toggle="modal" src="../images/delete.png" height="16" width="16" alt="Delete"></a></td>
                                        </tr>
									<?php } } ?>
                                        
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
			var action = "DeleteChief";
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
