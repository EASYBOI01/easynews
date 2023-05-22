

<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../login/passport/<?php echo $session_passport ?>" height="100px" width="auto" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                                        <?php echo $session_fullname; ?>
                                    </strong>
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                                        <?php echo $session_uin; ?>
                                    </strong>
                                </span> <span class="text-muted text-xs block"><?php echo $session_designation; ?><b
                                        class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php" onclick="return confirm('Are You Sure To Logout?');">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class=""><a href="index.php"><i class="fa fa-th-large"></i>DASHBOARD</a></li>
                <li><a href="../index.php" target="_blank"><i class="fa fa-home"></i>Go To Homepage</a></li>
                <li class="">
                    <a href="index.php"><i class="fa fa-newspaper-o"></i> <span class="nav-label">NEWS</span> <span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li ><a href="uploadnews.php">Upload News</a></li>
                        <li><a href="uploadphoto.php">Upload Photo News</a></li>
                        <li><a href="newsinventory.php">News Inventory</a></li>
                        <li><a data-toggle="modal" data-target="#reportdate"  href="#">Report By Date</a></li>
                        <li><a data-toggle="modal" data-target="#reportcategory" href="#">Report By Category</a></li>
                        <li><a href="loggedusers.php">View Clients</a></li>
                    </ul>
                </li>

               
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" action="search.php" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="Search for Record" class="form-control"
                                name="search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome <?php echo $session_fullname; ?></span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>.
                                        <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica
                                            Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="logout.php" onclick="return confirm('Are You Sure To Logout?');">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        <!-- REPORT BY DATE MODAL -->
        <div class="modal inmodal" id="reportdate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" ><i class="fa fa-database fa-search"></i>NEWS REPORT BY DATE</h4>
                                         
                                        </div>
                                        <div class="modal-body">
                                     
                                        <form class="form-horizontal" action="datereport.php" method="post" >
                          
                                <div class="form-group"><label class="col-lg-4 control-label">Date From</label>

<div class="col-lg-6"><input type="date" name="datefrom" class="form-control"> 
</div>
</div>

<div class="form-group"><label class="col-lg-4 control-label">Date To</label>

<div class="col-lg-6"><input type="date" name="dateto" class="form-control"> 
</div>
</div> 
                           
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="datereport.php">GENERATE REPORT</button>
                                    </div>
                                </div>
                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                              <!-- REPORT BY CATEGORY MODAL -->
        <div class="modal inmodal" id="reportcategory" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" ><i class="fa fa-database fa-codepen"></i>NEWS REPORT BY CATEGORY</h4>
                                         
                                        </div>
                                        <div class="modal-body">
                                     
                                        <form class="form-horizontal" action="datecategory.php" method="post" >
                          
                                <div class="form-group"><label class="col-lg-4 control-label">Select Date From:</label>

<div class="col-lg-8"><input type="date" name="datefrom" class="form-control"> 
</div>
</div>

<div class="form-group"><label class="col-lg-4 control-label">Selct Date To:</label>

<div class="col-lg-8"><input type="date" name="dateto" class="form-control"> 
</div>
</div> 

<div class="form-group"><label class="col-lg-4 control-label">Select Category:</label>

<div class="col-lg-8"><select name="category" class="form-control"> 
    <option value="">--Select News Category--</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Sport">Sport</option>
                                <option value="Politics">Politics</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Education">Education</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Religion">Religion</option>
                                <option value="Technology">Technology</option>
                                <option value="Business">Business</option>
                                <option value="Trending Video">Trending Video</option>
</select>
</div>
</div> 
                           
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-warning btn-block" type="submit" name="datecategory">GENERATE REPORT</button>
                                    </div>
                                </div>
                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>