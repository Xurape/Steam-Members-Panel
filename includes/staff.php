<div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <a href="index.php" class="logo"><img src="<? echo $logodacomunidade ?>" width="180" height="100"></a>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title"><?php echo CONTENT_INICIO; ?>  /  Staff  /  </h4>
                            </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <div style="padding-top: 15px; padding-right: 5px;">
                                    <a href="?l=pt"><span class="flag-icon flag-icon-pt flag-icon"></span></a>
                                </div>                                
                                <div style="padding-top: 5px; padding-right: 5px;">
                                    <a href="?l=en"><span class="flag-icon flag-icon-gb flag-icon"></span></a>
                                </div>                                                                
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo $steamprofile['avatarmedium'] ?>" alt="<?php echo $steamprofile['personaname'] ?>" title="<?php echo $steamprofile['personaname'] ?>" class="img-circle img-thumbnail img-responsive">
                            <h5><a href="<?php echo $steamprofile['profileurl'] ?>"><? echo $steamprofile['personaname'] ?></a> </h5>                            
                        </div>
                        <div style="padding-top: 15px;">
                        <?php 
                                if($steamprofile['personastate'] == 0) {
                                    echo '<span class="label label-danger">Offline</span>';
                                } elseif ($steamprofile['personastate'] == 1) {
                                    echo '<span class="label label-primary">Online</span>';
                                } elseif ($steamprofile['personastate'] == 2) {
                                    echo '<span class="label label-danger">' . CONTENT_OCUPADO . '</span>';
                                } elseif ($steamprofile['personastate'] == 3) {
                                    echo '<span class="label label-warning">' . CONTENT_AUSENTE . '</span>';
                                } elseif ($steamprofile['personastate'] == 4) {
                                    echo '<span class="label label-primary">' . CONTENT_ADORMIR . '</span>';
                                }
                            ?>                        
                        </div>
                        <ul class="list-inline" style="padding-top: 5px;">
                            <li>
                                <a href="profile.php" >
                                    <i class="zmdi zmdi-settings"></i>
                                </a>
                            </li>

                            <li>
                                <a href="?logout" class="text-custom">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect"><i class="zmdi zmdi-home zmdi-hc-fw"></i> <span> <?php echo CONTENT_INICIO; ?> </span> </a>
                            </li>

                            <li>
                                <a href="<? echo $websitedebans."?p=servers"; ?>" class="waves-effect"><i class="zmdi zmdi-dns"></i> <span> <?php echo CONTENT_SERVIDORES; ?> </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-award"></i> <span> VIP </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href=""><?php echo CONTENT_COMPRARVIP; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href=""><?php echo CONTENT_OFERECERVIP; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href="myvip.php">My VIP    </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect active"><i class="fas fa-cogs"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="staff.php"><?php echo CONTENT_STAFFINFO; ?></a></li>
                                    <li><a href="candidaturas.php"><?php echo CONTENT_CANDIDATURAS; ?></a></li>
                                    <li><a href=""><? echo CONTENT_PAINELADMIN; ?>   <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                </ul>
                            </li>                                    

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user"></i> <span> <?php echo CONTENT_CONTA; ?> </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href=""><?php echo CONTENT_AMINHACONTA; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href=""><?php echo CONTENT_DEFINIÇÕES; ?>    <span class="label label-danger"><?php echo CONTENT_SOON; ?></span></a></li>
                                    <li><a href="?logout"><?php echo CONTENT_MUDARDECONTA; ?>    </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="<? echo $discord ?>" class="waves-effect"><i class="fab fa-discord"></i> <span> Discord </span></a>
                            </li>                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                        <center>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #1</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-danger"><b><?php echo CONTENT_DEVELOPER; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #2</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-danger"><b><?php echo CONTENT_FUNDADOR; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #3</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-danger"><b><?php echo CONTENT_COFUNDADOR; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                            <br>
                            <br>                                                                                                                    
                        </center>
                        </div>
                        <div class="row">
                        <center>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #4</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-danger"><b><?php echo CONTENT_HEADADMIN; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #5</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-warning"><b><?php echo CONTENT_ADMINISTRADOR; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #6</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-warning"><b><?php echo CONTENT_MODERADOR; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                            <br>
                            <br>                                                                                                                    
                        </center>
                        </div>              
                        <div class="row">
                        <center>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #7</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-primary"><b><?php echo CONTENT_HELPER; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #8</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-success"><b>VIP</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/91/9173fe99a0270b2a3d76b5df5f256ba7a8924cc5_medium.jpg" class="img-responsive img-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h4 class="m-t-0 m-b-5 font-600">STAFF NAME #9</h4>
                                            <a href="https://steamcommunity.com/id/STAFF ID"><p class="text-muted m-b-5 font-13">Steam <i class="fas fa-external-link-alt"></i></p><a>
                                            <small class="text-sucessfull"><b><?php echo CONTENT_MEMBER; ?></b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                            <br>
                            <br>                                                                                                                    
                        </center>
                        </div>                                           
                    </div>
                </div>
            <center><p>Members panel made by <a href="https://steamcommunity.com/id/ShutAP1337">ShutAP</a></p></center>
        <script>
            var resizefunc = [];
        </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/jquery.dashboard.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
