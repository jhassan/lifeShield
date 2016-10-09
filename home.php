<?php include_once('top.php');
include_once('config.php');
//echo($GLOBALS["DB_Server"] . " " . $GLOBALS["DB_Username"] ." ". $GLOBALS["DB_Password"]); die;
?>
<style>
[type="checkbox"]:not(:checked) + label:after, [type="checkbox"]:checked + label:after {
    content: '✔';
    position: absolute;
    top: 6px;
    left: 2px;
    font-size: 16px;
    line-height: 0.8;
    color: #09ad7e;
    transition: all .2s;
}
</style>
        <link rel="shortcut icon" href="../favicon.ico">
        
        
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
                    <h1 class="page-header"><i class="fa fa-dashboard"></i> Staff Attandance Report </h1>
                </div>
                <div class="container">
                   <div class="col-lg-12">
                        <form action="#">
                        <?php
                        	$SQL = "SELECT emp_id, emp_name FROM tblemployee ORDER BY emp_id DESC";			
							$result = mysqli_query($conn, $SQL);
							while($row = mysqli_fetch_array($result)) {
							//print_r(date('g:i A'));exit;
						?>
                          <p>
                            <input type="checkbox" id="<?php echo $row['emp_id'];?>" />
                            <label for="<?php echo $row['emp_id'];?>"><?php echo $row['emp_name'];?></label>
                          </p>
                        <?php } ?>
                        </form>
                    
                    </div>
                <!-- /.col-lg-12 -->
            </div>

            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once('jquery.php');?>

</body>

</html>
