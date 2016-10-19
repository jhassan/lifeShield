<?php 
	include_once('top.php');
	include_once('config.php');
?>



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

                                            <th>Name</th>

                                            <th>Department</th>

                                            <th>Vehicle #</th>

                                            <th>Entry Time</th>

                                            <th>Exit Time</th>

                                            <!--<th>Action</th>-->

                                        </tr>

                                    </thead>

                                    <tbody>

       

                                    <?php

                                    	$SQL = "SELECT emp_rec.*,departments.depart_name FROM emp_rec

										INNER Join departments ON departments.depart_id = emp_rec.emp_department";
//echo $SQL; die;
    									$result = mysqli_query($conn, $SQL);

    									while($row = mysqli_fetch_array($result)) { // ,MYSQL_ASSOC

										//print_r($row);

									?>

                                        <tr class="odd gradeX" id="DelID_<?php echo $row['emp_rec_id'];?>">

                                            <td class="center"><?php echo $row['emp_rec_id'];?></td>

                                            <td class="center"><?php echo $row['emp_name'];?></td>

                                            <td class="center"><?php echo $row['depart_name'];?></td>

                                            <td class="center"><?php echo $row['emp_vehicle'];?></td>

                                            <td class="center"><?php echo $row['entry_time'];?></td>

                                            <td class="center">
												<?php if(empty($row['exit_time'])){?>
                                                    <span name="exit_time" class="exit_time" id="<?php echo $row['emp_rec_id'];?>" style="cursor:pointer" onClick="UpadateExitTime()"><u>Exit time</u></span>
                                                <?php }else{ echo $row['exit_time'];}?>
                                            </td>
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

