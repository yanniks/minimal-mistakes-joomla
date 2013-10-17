<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <!doctype html>
   <!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
   <!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
   <!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
   <!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
   <head>
   <meta charset="utf-8">
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

   <!-- http://t.co/dKP3o1e -->
   <meta name="HandheldFriendly" content="True">
   <meta name="MobileOptimized" content="320">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Google Webfonts -->
   <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
   <!-- For all browsers -->
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.min.css">

   <!--[if (lt IE 9) & (!IEMobile)]>
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie.min.css">
   <![endif]-->

   <meta http-equiv="cleartype" content="on">

   <!-- Load Modernizr -->
   <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.6.2.custom.min.js"></script>

   <!-- Icons -->
   <!-- 16x16 -->
   <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico">
   <!-- 32x32 -->
   <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.png">
   <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
   <link rel="apple-touch-icon-precomposed" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/apple-touch-icon-precomposed.png">
   <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/apple-touch-icon-72x72-precomposed.png">
   <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/apple-touch-icon-114x114-precomposed.png">
   <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/apple-touch-icon-144x144-precomposed.png">

   </head>

   <body class="home" itemscope itemtype="http://schema.org/WebPage">

   <!--[if lt IE 9]><div class="browser-upgrade alert alert-info">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</div><![endif]-->

   <div class="navigation-wrapper">
   	<div class="site-name">
   		<a href="http://yanniks.de/cms/">yanniks.de</a>
   	</div><!-- /.site-name -->
   	<div class="top-navigation">
   		<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
   		    <ul>
		        <jdoc:include type="modules" name="top" />
   		    </ul>
   		</nav>
   	</div><!-- /.top-navigation -->
   </div><!-- /.navigation-wrapper -->

   <div class="image-wrap">
     <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/texture-feature-02.jpg" alt=" feature image" itemprop="primaryImageOfPage">
     <span class="image-credit">Photo Credit: <a href="http://texturelovers.com">Texture Lovers</a></span>
   </div><!-- /.image-wrap -->

   <div class="article-author-top">
     <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/bio-photo.jpg" class="bio-photo" alt="bio photo"></a>
   <h3>Your name</h3>
   <p>What are you doing?</p>
   <a href="http://twitter.com/" class="author-social" target="_blank"><i class="icon-twitter"></i> Twitter</a>
   <a href="http://facebook.com/" class="author-social" target="_blank"><i class="icon-facebook"></i> Facebook</a>
   <a href="https://plus.google.com/" class="author-social" target="_blank"><i class="icon-google-plus"></i> Google+</a>

   <a href="http://instagram.com/" class="author-social" target="_blank"><i class="icon-instagram"></i> Instagram</a>
   <a href="http://github.com/" class="author-social" target="_blank"><i class="icon-github"></i> Github</a>


   </div>

   <jdoc:include type="component" />

   </div><!-- /#index -->

   <div class="footer-wrap">
     <footer>
       <span>&copy; <?php echo date("Y") ?> Your name. Powered by <a href="http://www.joomla.org">Joomla!</a> using the <a href="http://mademistakes.com/">Minimal Mistakes</a> theme ported to Joomla 3.1.</span>

     </footer>
   </div><!-- /.footer-wrap -->

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
   <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/scripts.min.js"></script>

  
   </body>
   </html>
