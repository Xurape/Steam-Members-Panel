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
                                <h4 class="page-title"><?php echo CONTENT_INICIO; ?>  /  <? echo CONTENT_CANDIDATURAS ?>  /  </h4>
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
                            <div class="col-lg-12">
                                <div class="card-box">
                        			<h4 class="header-title m-t-0 m-b-30"><?php echo CONTENT_CANDIDATURAS; ?></h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th><?php echo CONTENT_COMPRASNR; ?></th>
                                                <th><?php echo CONTENT_COMPRASNM; ?></th>
                                                <th><?php echo CONTENT_COMPRASD; ?></th>
                                                <th><?php echo CONTENT_COMPRASS; ?></th>
                                                <th><?php echo CONTENT_COMPRAST; ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>                                        
                                            <?php
                                                $con=mysqli_connect($db_host,$db_username,$db_password,$db_name);
                                                if (mysqli_connect_errno())
                                                {
                                                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                                }

                                                $result = mysqli_query($con,"SELECT * FROM candidaturas");

                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['number'] . "</td>";
                                                    echo "<td>" . $row['nickname'] . "</td>";
                                                    echo "<td>" . $row['data'] . "</td>";
                                                    if($row['status'] == 'Aprovado') {
                                                        echo "<td><span class='label label-success'>" . $row['status'] . "</span></td>";
                                                    } elseif($row['status'] == 'Recusado') {
                                                        echo "<td><span class='label label-danger'>" . $row['status'] . "</span></td>";
                                                    } elseif($row['status'] == 'Em revisão') {
                                                    echo "<td><span class='label label-warning'>" . $row['status'] . "</span></td>";
                                                    }                                                    
                                                    echo "<td>" . $row['cargo'] . "</td>";
                                                    echo "</tr>";                                                    
                                                }

                                                mysqli_close($con);
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            $con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
                            mysqli_select_db($con, $db_name);
                            $name = $_POST['name'];
                            $steamlink = $_POST['steamlink'];
                            $email = $_POST['email'];
                            $cargo = $_POST['cargo'];
                            $knowledge = $_POST['knowledge'];
                            
                            $s = " select * from candidaturas where steamlink = '$steamlink'";

                            $result = mysqli_query($con, $s);

                            $num = mysqli_num_rows($result);
                        ?>
                        <div class="wrapper">
		                	<div class="inner">
			                	<form action="candidaturas.php" method="post">
			            		<h3><? echo CONTENT_CANDIDATURAS; ?></h3>
			            		<p><? echo CONTENT_CANDIDATURASTEXTO; ?></p>
			            		<label class="form-group">
			            			<input type="text" name="name" class="form-control"  required>
			            			<span><? echo CONTENT_YOURNAME; ?></span>
			            			<span class="border"></span>
			            		</label>
				            	<label class="form-group">
				            		<input type="text" name="steamlink" class="form-control"  required>
				            		<span for=""><? echo CONTENT_YOURSTEAM; ?></span>
				            		<span class="border"></span>
                                </label>
				            	<label class="form-group">
				            		<input type="text" name="email" class="form-control"  required>
				            		<span for=""><? echo CONTENT_YOUREMAIL; ?></span>
				            		<span class="border"></span>
                                </label>     
				            	<label class="form-group" >
				            		<input type="text" name="cargo" class="form-control" required></textarea>
				            		<span for=""><? echo CONTENT_CARGO; ?></span>
				            		<span class="border"></span>
				            	</label>                                                           
				            	<label class="form-group" >
				            		<textarea name="conhecimento" id="" class="form-control" required></textarea>
				            		<span for=""><? echo CONTENT_KNOWLEGDGE; ?></span>
				            		<span class="border"></span>
				            	</label>
				            	<button><? echo CONTENT_ENVIAR ?> 
						            <i class="zmdi zmdi-arrow-right"></i>
                                </button>
                                <?php
                               if($num == 1){

                              }else{
                                  $reg= " insert into candidaturas(number, nickname, data, status, cargo, name, steamlink, email, knowledge) values ('X', '$nickname', CURRENT_TIMESTAMP, 'Em revisão', '$cargo', '$name', '$steamlink', '$email', '$knowledge')";
                                  mysqli_query($con, $reg);
                              }
                              ?>
				                </form>
			</div>
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
