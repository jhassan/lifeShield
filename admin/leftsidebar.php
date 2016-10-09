<!--
    1	officer
    2	client
    3	admin
-->
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search hide">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="home"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <!--Dashboard End-->
                        <?php if($_SESSION["user_type"] == 2){?>
                        <!--attandance report-->
                         <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Attendance Report <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="daily_attendance">Daily Attendance Report</a>
                                </li>
                                <li> 
                                    <a href="monthly_attendance">Monthly Attendance Report</a>
                                </li>
                            </ul>
                            <!-- /.nav-3rd-level -->
                        </li>
                        <?php } ?>
                        <?php if($_SESSION["user_type"] == 3){?>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Security Chief<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_chief_record">Add Chief Record</a>
                                </li>
                                <li>
                                    <a href="view_chief_record">View Chief Record</a>
                                </li>
                         </ul>
                         	
                            <!-- /.nav-1st-level -->
                        </li>
                        <!--Security Offiers-->
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Security Officers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_sec_off">Add Security Officer</a>
                                </li>
                                <li>
                                    <a href="view_sec_off.php">View Security Officer</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <!--add users-->
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Add User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_user">Add User</a>
                                </li>
                                <li>
                                    <a href="view_user">View User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--School staf-->
                        <li>
                            <a href="school_staff"><i class="fa fa-files-o fa-fw"></i> Add School staf</span></a>
                        </li>
                        
                        <!--View staff-->
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> View Staff <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="hidden">
                                    <a href="view_principle">View Principle</a>
                                </li>
                                <li>
                                    <a href="view_male_teacher">View Male Teachers</a>
                                </li>
                                <li>
                                    <a href="view_female_teacher">View Female Teachers</a>
                                </li>
                                <li>
                                    <a href="view_male_students">View Male Students</a>
                                </li>
                                <li>
                                    <a href="view_female_students">View Female Students</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--employee tree-->
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Employee Tree<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="hidden">
                                    <a href="add_user">Add User</a>
                                </li>
                                <li>
                                    <a href="employee_tree">Employee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                        <?php if($_SESSION["user_type"] == 1){?>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Security Staff Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            
                            	<?php //print_r(empCount($_SESSION["strUserName"]));die;
								if(empCount($_SESSION["strUserName"])!= 10){?>
                                <li>
                                    <a href="add_staf_emp">Add Staff Employee</a>
                                </li>
                                <?php }else{?>
                                <li>
                                    <a href="javascript:void(0);"><u>Employee List are complete</u></a>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="view_staf_emp">View Staff Employee List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <!--Add Employee-->
                         <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Colony Employee <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_emp">Add Employee</a>
                                </li>
                                <li> 
                                    <a href="view_emp">View Employee</a>
                                </li>
                            </ul>
                            <!-- /.nav-3rd-level -->
                        </li>
                        
                        <!--add departments-->
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Departments <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_department">Add Departments</a>
                                </li>
                                <li> 
                                    <a href="view_department">View Departments</a>
                                </li>
                            </ul>
                            <!-- /.nav-3rd-level -->
                        </li>
                        
                        <!--add designation-->
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Designation <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_designation">Add Designation</a>
                                </li>
                                <li> 
                                    <a href="view_designation">View Designation</a>
                                </li>
                            </ul>
                            <!-- /.nav-3rd-level -->
                        </li>
                        <?php } ?>                        <!--<li>
                            <a href="employee_tree"><i class="fa fa-tree fa-fw"></i>Security Employee Tree</span></a>
                        </li>-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->