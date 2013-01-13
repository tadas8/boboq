<?php get_header(); ?>

<div class="container">
<div class="slidebox">
<div class="flexslider">
	<ul class="slides">	
		<?php 
			$slide = get_option('orio_slide_cat');
			$count = get_option('orio_slide_count');
			$slide_query = new WP_Query( 'category_name='.$slide.'&posts_per_page='.$count.'' );
			while ( $slide_query->have_posts() ) : $slide_query->the_post();
		?>	
		<li>
			<a href="<?php the_permalink() ?>"><img class="slideimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo get_image_url()?>&amp;h=350&amp;w=960&amp;zc=1" title="" alt="" /></a>
		</li>
		<?php endwhile; ?>
	</ul>
</div><!-- end flexslider -->
</div><!-- end slidebox -->
</div><!-- end container -->

<!--
<div class="container home-widget">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Services widgets') ) : else : ?>
	<?php endif; ?>
	<hr/>
</div>
-->

<div class="container home-widget">
	<div class="eight columns alpha">
    	<div class="general_frame" id="top_video">
        	<div class="circle_title">
            </div>
        	<div class="content">
    			video contents
    		</div>
    	</div>
    </div>
    <div class="eight columns omega" style="float:right">
    	<div class="general_frame" id="top_news">
        	<div class="circle_title">
            </div>
            <div class="content">
                <!-- NEWSから撮ってきて表示　-->	
                <?php
                $args = array(/* 配列（$args）に複数の引数を追加 */
                     'post_type' => 'NEWS', /* 表示する投稿タイプを指定*/
                     'posts_per_page' => 3, /* 一覧に表示するページ数 */
                     'paged' => get_query_var( 'paged' ),/* ページネーションする場合は必須 */
                ); ?>
                
                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- ループの開始 -->
     
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                             <h3 class="entry-title"><?php the_date(); ?>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                             <div class="entry-content">
                             <?php the_content(); ?>
                             </div><!-- .entry-content -->
    					</div><!-- end id=post -->
				<?php endwhile; // end of the loop. ?>
			</div>
        </div>
    </div>
    <span style="clear:both"></span>
</div>

<!--
<div class="container ">

<?php 
	$hpostcount = get_option('orio_hpostcount');
	$my_query = new WP_Query('showposts='.$hpostcount.'');
	while ($my_query->have_posts()) : $my_query->the_post();
?>

<div class="four columns">

<article class="post" id="post-<?php the_ID(); ?>">

<?php
if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink() ?>"><img class="scale-with-grid" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=250&amp;w=450&amp;zc=1" alt=""/></a>
<?php } else { ?>
	<a href="<?php the_permalink() ?>"><img class="scale-with-grid" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" /></a>
<?php } ?>

<div class="btitle">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="boxentry">
<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>

</article>

</div>

<?php if(++$counter % 4 == 0) : ?>
<div class="clear"></div>
<?php endif; ?>
<?php endwhile; ?>
<div class="clear"></div>

</div>
-->


<?php get_footer(); ?>