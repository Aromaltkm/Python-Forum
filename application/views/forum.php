<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum :: Home Page</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--<link href="forum_files/bootstrap.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Custom -->
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- fonts -->
        <link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" media="screen">

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/settings.css" media="screen">

    </head>
    <body>

        <div class="container-fluid">

            <!-- Slider -->
            <div class="tp-banner-container" style="overflow: visible;">
                <div class="tp-banner revslider-initialised tp-simpleresponsive" style="max-height: 278px; height: 278px;" id="revslider-823">
                    <ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">	
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
                            <!-- MAIN IMAGE -->
                            <div class="slotholder" style="width:100%;height:100%;"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" data-lazydone="undefined" data-src="<?php echo base_url();?>assets/images/slide.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;<?php echo base_url();?>assets/images/slide.jpg&quot;); background-size: cover; background-position: left top; width: 100%; height: 100%; opacity: 1; position: relative;"></div></div>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                <div class="tp-loader" style="display: none;"></div><div class="tp-bannertimer" style="visibility: hidden; width: 0%;"></div></div>
            </div>
            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="http://forum.azyrusthemes.com/index.html"><img src="<?php echo base_url();?>assets/images/logo.jpg" alt=""></a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                        <!--
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#">Borderlands 2</a> <b class="caret"></b>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Borderlands 1</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Borderlands 2</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Borderlands 3</a></li>

                                </ul>
                            </div>
                         -->
                        </div>
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="#" method="post" class="form">
                                    <div class="pull-left txt"><input class="form-control" placeholder="Search Topics" type="text"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">                            
                                
                                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ask Question</button>
                                
                            </div>
                            <div class="env pull-left">
                            <a class="env" data-toggle="modal" data-target="#myModal">LOGIN
                            </a>
                          	</div>

                            <!--<div class="avatar pull-left dropdown">
                                <a href="#"><img src="forum_files/avatar.jpg" alt=""></a>
                            </div>-->
                            <div class="env pull-left">
                            <a  class="env" data-toggle="modal" data-target="#registerModal">REGISTER</a>                                
                            </div>
                                <!--
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Log Out</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-4" href="http://forum.azyrusthemes.com/04_new_account.html">Create account</a></li>
                                </ul>
                                -->
                            
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <!-- <div class="container"> -->
                    <!-- <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                    
                                </ul>
                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div> -->

                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <?php
                            foreach ($results as $key => $value){ ?>           
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="<?php echo base_url();?>assets/images/avatar2.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="<?php echo base_url();?>assets/images/icon3.jpg" alt=""><img src="<?php echo base_url();?>assets/images/icon4.jpg" alt=""><img src="<?php echo base_url();?>assets/images/icon5.jpg" alt=""><img src="<?php echo base_url();?>assets/images/icon6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href=""><?php  echo $value->title; ?></a></h2>
                                        <p><?php  echo $value->question; ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            <?php  echo $value->answer_count; ?>
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-eye"></i> <?php  echo $value->view_count; ?> </div>
                                    <div class="time"><i class="fa fa-clock-o"></i> <?php  echo $value->submission_date; ?></div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->
                                        
                                      
                            <?php } ?>


                            


                            
                            


                           


                            

                        </div>
                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            <!--
                            <div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
                                        <li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                                        <li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                                        <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                                        <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                                        <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                                        <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Poll of the Week</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <p>Which game you are playing this week?</p>
                                    <form action="#" method="post" class="form">
                                        <table class="poll">
                                            <tbody><tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                            Call of Duty Ghosts
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt1" name="opt" value="1" type="radio">  
                                                    <label for="opt1"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                            Titanfall
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt2" name="opt" value="2" checked="checked" type="radio">  
                                                    <label for="opt2"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                            Battlefield 4
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt3" name="opt" value="3" type="radio">  
                                                    <label for="opt3"></label>  
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </form>
                                    <p class="smal">Voting ends on 19th of October</p>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>My Active Threads</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



                <!-- <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">
                            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                    <li><a href="#">1586</a></li>
                                </ul>
                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

 -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">
                            <?php echo $links; ?>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="forum_files/logo.jpg" alt=""></a></div>
                        <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2014, websitename.com</div>
                        <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-cloud"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title" style="color: #1abc9c">Login to Your Account</h4>
		      </div>
		      <div class="modal-body">
		        <form method="POST" class="login">
                    <div class="alert alert-success mb-3 success-msg-login" hidden>
                         
                    </div>
                    <div class="alert alert-danger mb-3 fail-msg-login" hidden>
                         
                    </div>
					<div class="input-group input-group-lg mb-3">
						<div class="input-group-addon">
					    	<span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
					  	</div>
					  	<input type="email" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" id="email">
					</div>
					<div class="input-group input-group-lg mb-3">
						<div class="input-group-addon">
					    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></i></span>
					  	</div>
					  	<input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" id="password">					  	
					</div>
					<div class="input-group-checkbox input-group-md mb-3">
						<input type="checkbox" id="remember">
						<label for="remember" style="font-weight: initial; position: relative; vertical-align: middle">Remember me</label>
					</div>
					<div>
						<button type="submit" class="btn btn-primary btn-lg btn-block" id="login"><span class="glyphicon glyphicon-off"></span> Login</button>					  	
					</div>

		        </form>
		      </div>
		      <div class="modal-footer" style="padding: 0">
                    <div class="text-center" style="padding: 0">
                            <a href="" class="env" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal">Forgot Password?</a>
                    </div>
                    <div class="text-center" style="padding: 0">
                            Don't have an account? <a  class="env" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Sign up</a>
                    </div>

                    
		      </div>
		    </div>

		  </div>
		</div>
        <div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;
                     </button>
                    <h4 class="modal-title" style="color: #1abc9c">Create Your Account</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" class="login">
                    <div class="alert alert-success mb-3 success-msg" hidden>
                         
                    </div>
                    <div class="alert alert-danger mb-3 fail-msg" hidden>
                         
                    </div>

                    <div class="input-group mb-3 ">
                        <div class="input-group-addon">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="register_username" name="register_username">
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-addon">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" id="register_email" name="register_email">
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-addon">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" id="register_password" name="register_password">                       
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-addon">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Confirm Password" aria-label="password" aria-describedby="basic-addon1" id="register_confirm" name="register_confirm">                       
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="register"><span class="glyphicon glyphicon-off"></span> Register</button>                      
                    </div>
                    </form>
              <div class="modal-footer" style="padding: 0">
                                       
               </div>

                    
              </div>
            </div>

          </div>
        </div>
        <div id="forgotModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: #1abc9c">Forgot Password</h4>
                  </div>
                <div class="modal-body">
                    <form method="POST" class="login">
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-addon"">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div>

                            <button type="submit" class="btn btn-primary btn-lg" ><span class="glyphicon glyphicon-off"></span> RESET </button>                   
                        </div>
                    </form>
                  </div>
                </div>

            </div>
        </div>


        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery_003.js"></script>
 

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery_002.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>

        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#register').click(function(event){
                    event.preventDefault();

                    user=$('#register_username').val();
                    password=$('#register_password').val();
                    email=$('#register_email').val()
                    conf_password=$('#register_confirm').val()

                    $.ajax({
                        type : "POST",
                        url : "<?php echo base_url(); ?>index.php/forum/register",
                        data : {username:user,password:password,email:email,conf_password:conf_password},
                        dataType : 'json',
                        success : function(response){
                            
                            
                            if(response.status=="success"){
                                $('#register_username').val('');
                                $('#register_password').val('');
                                $('#register_email').val('');
                                $('#register_confirm').val('');
                                $('.fail-msg').hide();
                                $('.success-msg').show();
                                $('.success-msg').html(response.message);
                            }
                            else{
                                
                                $('.fail-msg').show();
                                $('.fail-msg').html(response.message);
                            }
                        },
                        error : function(){
                            alert("Something went wrong...");
                        }
                    });
                });
                $('#login').click(function(event){
                    event.preventDefault();
                    
                    password=$('#password').val();
                    email=$('#email').val();
                    $.ajax({
                        type : "POST",
                        url : "<?php echo base_url(); ?>index.php/forum",
                        data : {password:password,email:email},
                        dataType : 'json',
                        success : function(response){
                            if(response.status=="success"){
                                window.location.href = response.redirect_url;
                            }else{
                                $('.fail-msg-login').show();
                                $('.fail-msg-login').html(response.message);
                            }
                        },
                        error : function(){
                            alert("Something went wrong...");
                        }
                    });
                });
                $('.post').click(function(){
                    jQuery.noConflict(); 
                    $('#myModal').modal('show');
                }); 
            });
        </script>

        <!-- END REVOLUTION SLIDER -->
    
</body></html>