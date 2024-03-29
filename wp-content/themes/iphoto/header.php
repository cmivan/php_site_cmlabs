<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<?php include('includes/seo.php'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="http://mufeng.me/favicon.ico" type="image/x-icon" />
<?php if(get_option('iphoto_lib')!="") : ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<?php else : ?>	
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jquery.min.js"></script>
<?php endif; ?>
<?php if (is_home() || is_archive()) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jquery.waterfall.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/index.js"></script>
<?php }?>
<?php if (is_singular()){ ?><!--[if lte IE 8]><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jQuery.autoIMG.js"></script><![endif]--><?php }?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="header"><div id="header-inner">
		<div id="header-box">
			<div id="logo"><h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a></h1></div>
			<?php wp_nav_menu(array( 'theme_location'=>'primary','container_id' => 'nav')); ?>
			<div id="search">
				<?php if(get_option('iphoto_gsearch')!=""){ ?>
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/search">
						<input type="text" value="keywords..." name="g" id="s" size="15" onfocus="this.value = this.value == this.defaultValue ? '' : this.value" onblur="this.value = this.value == '' ? this.defaultValue : this.value"/>
						<input type="image" src="<?php bloginfo('template_url'); ?>/images/icosearch.png" id="searchsubmit" value="Go" />
					</form>
				<?php }else{?>	
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
						<input type="text" value="keywords..." name="s" id="s" size="15" onfocus="this.value = this.value == this.defaultValue ? '' : this.value" onblur="this.value = this.value == '' ? this.defaultValue : this.value"/>
						<input type="image" src="<?php bloginfo('template_url'); ?>/images/icosearch.png" id="searchsubmit" value="Go" />
					</form>
				<?php }?>
			</div><!--end search-->
			<div class="clear"></div>
		</div><!--end header-box-->
</div>
	</div><!--end header-->
	<?php if (is_home()) { ?>
		<div id="cate" title="<?php echo get_option('iphoto_easing');?>" alt="<?php echo get_option('iphoto_animate');?>" noajax="<?php echo get_option('iphoto_noajax');?>">home</div><!--end cate-->
	<?php } elseif (is_archive()){?>
		<div id="cate" title="<?php echo get_option('iphoto_easing');?>" alt="<?php echo get_option('iphoto_animate');?>" noajax="<?php echo get_option('iphoto_noajax');?>"><?php $category=get_the_category($post->ID);$name = $category[0]->slug;echo $name;?></div><!--end cate-->
	<?php }?>
	<div id="wrapper">