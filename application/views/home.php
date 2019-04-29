<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum :: Home Page</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/notify.css" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                                    <div class="pull-left txt"><input class="form-control" placeholder="Search Topics" type="text" id="searchbox"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button" id="searchbtn"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4 avt">
                            <div class="stnt pull-left col-md-6 col-xs-6">                            
                                
                                    <button class="btn btn-primary" id="askquestionbtn">Ask Question</button>
                                
                            </div>
                            <div class="col-md-6 col-xs-6">
	                        <!--     <div class="envforum pull-left col-md-3">
				                	<li class="nav-item dropdown">
				                  	<a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                    <i class="fa fa-bell"></i>
				                  	</a>
				                    <ul class="dropdown-menu">
				                      <li class="head text-light bg-dark">
				                        <div class="row">
				                        <div class="col-lg-12 col-sm-12 col-12">
				                            <span>Notifications (3)</span>
				                            <a href="" class="float-right text-light">Mark all as read</a>
				                         </div>
				                         
				                      </li>
				                      <li class="notification-box">
				                        <div class="row">
				                          
				                          
				                        </div>
				                      </li>
				                      <li class="notification-box bg-gray">
				                        <div class="row">
				                             
				                            
				                        </div>
				                      </li>
				                      <li class="notification-box">
				                        <div class="row">
				                            
				                          
				                        </div>
				                      </li>
				                      <li class="footer bg-dark text-center">
				                        <a href="" class="text-light">View All</a>
				                      </li>
				                    </ul>
				                </li>
				                </div> -->
                                

<!-- 	                            <div class="avatar pull-left dropdown col-md-3">
	                                <a href="#"><img src=<?php echo base_url();?>"/assets/images/avatar.jpg" alt=""></a>
	                            </div> -->
	                            <div class="envforum pull-left col-md-3">
	                                <a class="env" href="<?php echo base_url();?>index.php/forum/logout"><span>LOGOUT</span></a>
	                            </div>
	                                
	                              <!--   <ul class="dropdown-menu" role="menu">
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
            </div>


            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8" id="mainbody">
                        	<br>
                        	<div class="post row" id="askquestion" hidden>
				        		<form class="form-horizontal" id="question-form" style="padding:1em 1.5em 1em 1.5em" method="POST">
							    
								    <div class="row form-input">
								        <input placeholder="Enter Topic Title" class="form-control" type="text" id="title">
								    </div>
								    <div class="row form-input">	     					       
								        <textarea name="desc" placeholder="Description" class="form-control" id="description"></textarea>						
								    </div>
								    <div class="row" style="padding-top:1em">
								    	<div class="col-lg-6 col-sm-12 col-xs-12">
											<input type="checkbox" id="notify">
											<label for="notify" style="font-weight: initial; position: relative; vertical-align: middle">Notify me when some one post a reply</label>
										</div>
										<div class="col-lg-6 col-sm-12 col-xs-12">
											<div class="pull-right">
											<button type="submit" class="btn btn-primary" id="post">Post</button>
											</div>
										</div>
									</div>    								        
				        		</form>
				        	</div>
				    
                            <?php
                            foreach ($results as $key => $value){ ?>           
                            <div class="post">
                                <div id="questionId" hidden><?php echo $value->id ?></div>
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="<?php echo base_url();?>assets/images/avatar2.jpg" alt="">
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2 id="questionTitle"><a href=""><?php  echo $value->title; ?></a></h2>
                                        <p><?php  echo $value->question; ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                            <?php  echo $value->like_count; ?>
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
                                <!-- <a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
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
	                            </div> -->
	                            <!-- <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
	                            <div class="clearfix"></div> -->
	                        <!-- </div> -->
	                    
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
                            <br>
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

                <div class="container links">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">
                            <?php echo $links; ?>
                        </div>
                    </div>
                </div>
                <!-- div class="container">
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
                </div> -->


            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src=<?php echo base_url();?>"assets/images/logo.jpg" alt=""></a></div>
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

        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery_003.js"></script>
 

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery_002.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>

        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>


        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
<!--         <script type="text/javascript">
            
            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script> -->

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
        	$(document).ready(function(){
                
        		$('#askquestionbtn').click(function(){
        			$('#askquestion').toggle();
        		});
                $('#post').click(function(event){
                    event.preventDefault();
                    title=$('#title').val();
                    desc=$('#description').val();
                    $.ajax({
                        type :"POST",
                        url :"<?php echo base_url();?>index.php/forum/question",
                        data : {title:title,description:desc},
                        dataType : 'json',
                        success : function(response){
                            if(response.status=="success"){
                                $('#title').val('');
                                $('#description').val('');
                                $('#askquestion').hide();
                                // alert("Success");
                            }else{
                                alert("Something went wrong");
                            }
                        },
                        error : function(){
                            alert("Failed");
                        } 
                    });
                });
                $("body").on("click", ".post", function(){

                    // event.preventDefault();
                    id=$(this).children('#questionId').text();
                    $('body').load("<?php echo base_url(); ?>index.php/forum/answer/"+id);
                    // $.ajax({
                    //     type:"POST",
                    //     url:"<?php echo base_url(); ?>index.php/forum/answer/"+id,
                    //     data: {id:arr[index-2]['id']},
                    //     dataType : 'json',
                    //     success : function(response){
                    //         alert('hii');
                    //     },
                    //     error : function(){
                    //         alert('hello');
                    //     }
                    // });
                });
                $('#searchbtn').click(function(event){
                    event.preventDefault();
                    keyword=$('#searchbox').val();                    
                    
                    $.ajax({
                        type :"POST",
                        url : "<?php echo base_url(); ?>index.php/forum/search",
                        data : {keyword:keyword},
                        dataType : 'json',
                        success : function(response){
                            if(response.status=="success"){
                                $('div').remove('.post');
                                $('div').remove('.links');
                                $.each(response.results,function(key,value){
                                        
                                    
                                $('#mainbody').append('<div class="post"><div id="questionId" hidden>'+value['id']+'</div><div class="wrap-ut pull-left"><div class="userinfo pull-left"><div class="avatar"><img src="<?php echo base_url();?>assets/images/avatar2.jpg" alt=""><div class="status red">&nbsp;</div></div><div class="icons"></div></div><div class="posttext pull-left"><h2 id="questionTitle"><a href="">'+value['title']+'</a></h2><p>'+value['question']+'</p></div><div class="clearfix"></div></div><div class="postinfo pull-left"><div class="comments"><div class="commentbg">'+value['answer_count']+'<div class="mark"></div></div></div><div class="views"><i class="fa fa-eye"></i>'+value['view_count']+' </div><div class="time"><i class="fa fa-clock-o"></i>'+value['submission_date']+'</div>             </div><div class="clearfix"></div></div>');
                                });
                                
                            }
                            else{
                                $('div').remove('.post');
                                $('div').remove('.links');
                                $('#mainbody').append('<div class="post"><div class="wrap-ut pull-left"><div class="userinfo pull-left"><div class="avatar"><img src="<?php echo base_url();?>assets/images/avatar2.jpg" alt=""><div class="status red">&nbsp;</div></div><div class="icons"></div></div><div class="posttext pull-left"><h2><a href="">No Results Found...</a></h2><p></p></div><div class="clearfix">');
                                
                            }
                        },
                        error : function(){
                            alert("error");
                        }
                    });
                });
        	});
        </script>
    
</body></html>