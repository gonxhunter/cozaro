<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 23/09/2015
 * Time: 10:47
 * Template Name: Homepage
 */
get_header(); ?>
<?php
$jk_options = get_option('redux_demo');
?>
<?php include (TEMPLATEPATH . '/left-content.php'); ?>
<div class="right-content">
	<div class="container">
		<div class="row">
			<aside class="upsbar">
				<ul class="upsbar-list">
					<?php if($jk_options['overview_content']):?>
						<li class="upsbar-item">
							<a class="upsbar-link" href="<?php echo $jk_options['overview_url'] ?>" target="_self">
								<?php echo $jk_options['overview_content'] ?>
							</a>
						</li>
					<?php endif;?>
					<?php if($jk_options['overview_content_2']):?>
						<li class="upsbar-item">
							<a class="upsbar-link" href="<?php echo $jk_options['overview_url_2'] ?>" target="_self">
								<?php echo $jk_options['overview_content_2'] ?>
							</a>
						</li>
					<?php endif;?>
					<?php if($jk_options['overview_content_3']):?>
						<li class="upsbar-item">
							<a class="upsbar-link" href="<?php echo $jk_options['overview_url_3'] ?>" target="_self">
								<?php echo $jk_options['overview_content_3'] ?>
							</a>
						</li>
					<?php endif;?>
				</ul>
                <?php sutunam_menu('top-menu'); ?>
			</aside>
		</div>
		<div class="row">
			<div class="men-block content-block">
                <div class="content-block-img">
                    <img src="<?php echo $jk_options['men_img']['url'] ?>" alt="" />
                </div>
				<div class="content-block-body">
					<?php echo $jk_options['men_desc']?>
					<a href="<?php echo $jk_options['men_url']?>" target="_self">
						<span>shop men's</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="women-block content-block">
                <div class="content-block-img">
                    <img src="<?php echo $jk_options['women_img']['url'] ?>" alt="" />
                </div>
				<div class="content-block-body">
					<?php echo $jk_options['women_desc']?>
					<a href="<?php echo $jk_options['women_url']?>" target="_self">
						<span>shop women's</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="shoes-block content-block">
                <div class="content-block-img">
				    <img src="<?php echo $jk_options['shoes_img']['url'] ?>" alt="" />
                </div>
				<div class="content-block-body">
					<?php echo $jk_options['shoes_desc']?>
					<a href="<?php echo $jk_options['shoes_url']?>" target="_self">
						<span>get shoes</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="bigsize-block content-block">
                <div class="content-block-img">
				    <img src="<?php echo $jk_options['bigsize_img']['url'] ?>" alt="" />
				</div>
                <div class="content-block-body">
					<?php echo $jk_options['bigsize_desc']?>
					<a href="<?php echo $jk_options['bigsize_url']?>" target="_self">
						<span>get big size</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="touch-block content-block">
                <div class="content-block-img">
                    <img src="<?php echo $jk_options['touch_img']['url'] ?>" alt="" />
                </div>
				<div class="content-block-body">
					<?php echo $jk_options['touch_desc']?>
					<a href="<?php echo $jk_options['touch_url']?>" target="_self">
						<span>explore</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
