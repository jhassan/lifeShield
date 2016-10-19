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
                    <h1 class="page-header"><i class="fa fa-star"></i> Night Visitors Application </h1>
                </div>
                <div class="container">
                           <?php echo "fawad";?>
                <!-- /.col-lg-12 -->
            </div>

            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    </div>

    <?php include_once('jquery.php');?>

</body>

</html>
