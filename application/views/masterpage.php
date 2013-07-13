<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Thailand Software Enginereer Academy</title>
        <meta name="author" content="Agile66">
        <meta name="keywords" content="Software Enginereer, Agile, Video Tutorial, Project Management">
        <meta name="description" content="Thailand SE Academy Developer">
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/base.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/skeleton.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/camera.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/mediaelementplayer.min.css" />
        <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>	

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?=base_url() ?>images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

        <!-- JS -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?=base_url() ?>js/jquery.easing.1.3.js"></script>	
        <script type="text/javascript" src="<?=base_url() ?>js/superfish.js"></script>
        <script type="text/javascript" src="<?=base_url() ?>js/camera.min.js"></script>
        <script type="text/javascript" src="<?=base_url() ?>js/jquery.mobile.customized.min.js"></script>	
        <script type="text/javascript" src="<?=base_url() ?>js/jcarousel.min.js"></script>
        <script type="text/javascript" src="<?=base_url() ?>js/mediaelement-and-player.min.js"></script>
        <script type="text/javascript" src="<?=base_url() ?>js/scrolltopcontrol.js"></script>
    </head>
    <body>
        <!-- Primary Page Layout -->
        <!-- START MENU WRAPPER -->
        <div id="menu-wrapper">
            <div class="container">
                <div class="four columns">
                    <div id="logo">
                        <a href="index.html"><img src="<?=base_url() ?>images/logo.png" alt="Thailand Software Engineering Academy" ></a>
                    </div><!-- .logo -->
                </div><!-- four columns -->
                <div class="twelve columns navigation">
                    <div id="menu" class="fix-fish-menu">
                        <!--ul id="nav" class="sf-menu">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="video.html">Video</a></li>
                        </ul-->  <!-- end #nav  -->
                    </div>	<!-- end #menu  -->	
                </div><!-- .twelve columns -->
            </div><!-- .container -->
        </div><!-- #slider-wraper -->
        <!-- END MENU WRAPPER -->
        <?php 
        foreach ($query->result() as $row) {
            echo $row->video_id."<br />";
            echo $row->video_name."<br />";
            echo $row->video_content."<br />";
        }
        ?>
        

	<!-- START SLIDER WRAPPER -->
	<div id="slider-wrapper">
		<div class="btop-1px"></div>
		<div class="container">
			<div class="sixteen columns" id="cta-block">
				<h5>แหล่งรวบรวม Video ที่เกี่ยวข้องกับด้านการพัฒนาซอร์ฟแวร์ในประเทศไทย</h5>
			</div><!-- #cta-block -->

			<!-- start slider -->
			<div class="sixteen columns camera_wrap camera_burgundy_skin clearfix" id="camera_wrap_1">
				<div data-src="<?=base_url() ?>images/sliders/camera/slide03.jpg"></div>			
				<div data-src="<?=base_url() ?>images/sliders/camera/slide00.jpg"></div>
				<div data-src="<?=base_url() ?>images/sliders/camera/slide01.jpg">
					<div class="camera_caption fadeFromBottom">
						Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
					</div>
				</div>
				<div data-src="images/sliders/camera/slide02.jpg">
					<div class="camera_caption fadeFromBottom">
						It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
					</div>
				</div>
			</div><!-- #camera_wrap_1 -->
			<!-- end slider -->

		</div><!-- .container -->
		<div class="bbottom-1px"></div>
	</div><!-- #slider-wraper -->
	<!-- END SLIDER WRAPPER -->	

        
        <!-- CLIENTS -->
        <div class="container header-block">
            <!-- start header -->
            <div class="sixteen columns lp-header">
                <h6>Our Clients</h6>
                <div class="nav-projects">
                </div><!-- .nav-projects -->
            </div><!-- .sixteen  -->
            <!-- end header -->
        </div><!-- .container -->

        <div id="clients" class="container">
            <ul id="clients-carousel" class="jcarousel-skin-tango" >
                <!-- start carousel -->
                <li><div class="four columns">
                        <div class="block">
                            <a href="#"><img src="<?=base_url() ?>images/clients/envato.png" alt="" /></a>
                        </div><!-- block -->  
                    </div><!-- .four  --></li>

                <li><div class="four columns">
                        <div class="block">
                            <a href="#"><img src="<?=base_url() ?>images/clients/rockablepress.png" alt="" /></a>
                        </div><!-- block -->  
                    </div><!-- .four  --></li>

                <li><div class="four columns">
                        <div class="block">
                            <a href="#"><img src="<?=base_url() ?>images/clients/audiojungle.png" alt="" /></a>
                        </div><!-- block -->  
                    </div><!-- .four  --></li>

                <li><div class="four columns">
                        <div class="block">
                            <a href="#"><img src="<?=base_url() ?>images/clients/photodune.png" alt="" /></a>
                        </div><!-- block -->  
                    </div><!-- .four  --></li>

                <li><div class="four columns">
                        <div class="block">
                            <a href="#"><img src="<?=base_url() ?>images/clients/themeforest.png" alt="" /></a>
                        </div><!-- block -->  
                    </div><!-- .four  --></li>

                <li><div class="four columns">
                        <div class="block">
                            <a href="#"><img src="<?=base_url() ?>images/clients/tutorials.png" alt="" /></a>
                        </div><!-- block -->  
                    </div><!-- .four  --></li>			
            </ul><!-- #clients-carousel -->
        </div><!-- .container -->
        <!-- END CLIENTS -->
        <!-- -============== END CONTENT WRAPPER =================- -->
        <!-- START FOOTER -->
        <div id="footer">
            <div class="btop-1px"></div>
            <div class="container">
                <div class="four columns copyright">
                    <img src="images/logo-footer.png" alt="" />
                    <p class="last">@2013 All Rights Reserved.</p>
                </div><!-- .copyright -->
                <div class="twelve columns">
                    <div id="secondary-nav" class="clearfix">
                        <!--ul class="clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="video.html">Video</a></li>
                        </ul-->
                        <div class="gray-dash-3px"></div>
                    </div><!-- #secondary-nav -->
                    <!--ul id="footer-social">
                        <li class="twitter"><a href="http://twitter.com"></a></li>
                        <li class="dribbble"><a href="http://dribbble.com"></a></li>
                        <li class="facebook"><a href="http://facebook.com"></a></li>
                        <li class="google"><a href="http://plus.google.com"></a></li>
                        <li class="linkedin"><a href="http://linkedin.com"></a></li>
                        <li class="behance"><a href="http://behance.net"></a></li>
                        <li class="rss"><a href="#"></a></li>
                    </ul><!-- footer-social -->
                </div><!-- twelve columns -->
            </div><!-- container -->
        </div><!-- #footer -->
        <!-- END FOOTER -->
        <script type="text/javascript" src="<?=base_url() ?>js/contact.js"></script>
        <script type="text/javascript" src="<?=base_url() ?>js/custom.js"></script>
        <script type="text/javascript">
            /***************************************************
             Camera Slider
             ***************************************************/
            jQuery.noConflict()(function($) {
                $('#camera_wrap_1').camera({
                    thumbnails: false,
                    pagination: false,
                    loader: 'bar',
                    loaderPadding: 0,
                    loaderStroke: 3,
                    pagination: true,
                            loaderColor: '#7d7d7d'
                });
            });
        </script>

        <script>
            jQuery.noConflict()(function($) {
                // create player
                $('#player2').mediaelementplayer({
                    // add desired features in order
                    // I've put the loop function second,
                    features: ['playpause', 'loop', 'current', 'progress', 'duration']
                });
            });
        </script>
        <!-- End Document
        ================================================== -->
    </body>
</html>