<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">LifeShield</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php if($_SESSION['user_type']==3){?>
                        	Security Officer
                        <?php }else if($_SESSION['user_type']==1){?>
                        	<?php if($_SESSION["strUserName"]=="dayOfficer"){
									echo "DayOfficer ";	
								  }else if($_SESSION["strUserName"]=="noonOfficer"){
								  	echo "NoonOfficer ";	
								  }else if($_SESSION["strUserName"]=="nightOfficer"){
								  	echo "NightOfficer ";	
								  }
							?>
                        <?php }else if($_SESSION['user_type']==2){?>
                        	Computer Operator
                        <?php }?>
                        <!--<i class="fa fa-user fa-fw"></i>  -->
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="hide"><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="hide"><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->