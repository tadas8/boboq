<?php
/*
Template Name: MENU_TEMPLATE
*/
?>
<?php get_header(); ?>
<div class="catch_image">
some image here. delete height style
</div>
<div class="container home-widget">
<!--<div class="eleven columns ">-->
	<div id="content" ><!-- <<-- default content -->
		<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <div class="title">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </div>
        
            test foot test food
        
            
            <div class="entry">
                <?php the_content('Read the rest of this entry &raquo;'); ?>
                <div class="clear"></div>
            </div>
        
            <div class="general_frame" id="menu_frame" style="padding-top:20px;">
            	<div class="content">
                	<div class="food_list">
                        <!-- FOOD_MENUから撮ってきて表示　-->	
                        <?php
                        $args = array(/* 複数の引数を追加 */
                            'post_type' => 'FOOD_MENU', /* 表示する投稿タイプを指定*/
                            'posts_per_page' => 3, /* 一覧に表示するページ数 */
                            'paged' => get_query_var( 'paged' ),/* ページネーションする場合は必須だけど、今回はどちらでも */
                        ); ?>
                        <?php query_posts( $args ); ?>
                        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                            <div class="each_food">
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <table>
                                        <tr>
                                            <td>
                                                <?php  //featured image のリンクを取得
                                                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                                //echo $feat_image;
                                                ?>
                                                <img src="<?php echo $feat_image ?>" width="80px;" height="80px;"> <!-- FOOD画像 from featured image -->
                                            </td>
                                            <td class="food_content">
                                                <h3 class="food_name"><?php the_title(); ?></h3> <!-- 商品名 -->
                                                <div class="food_price">£<?php echo get_post_meta($post->ID , 'PRICE' ,true); ?></div> <!-- お値段 -->
                                                <div class="clear"></div>
                                                <div class="border"></div>
                                                <div class="food_disc">DESCRIPTION : <?php the_content(); ?></div> <!-- 内容 -->
                                            </td>
                                        </tr>
                                    </table>
                                </div><!-- #post-## -->
                            </div>
                        <?php comments_template( '', true ); ?>
                
                        <?php endwhile; // end of the loop. ?>
                        <?php next_posts_link('次のページ') ?><!-- ページネーション用タグ -->
                        <?php previous_posts_link('前のページ') ?><!-- ページネーション用タグ -->
                        <?php wp_reset_query(); ?><!-- リセット -->
                    </div><!-- end food_list -->
                    <div class="food_list">
                    	<!-- CAKE_MENUから -->	
                        <?php
                        $args = array(/* 複数の引数を追加 */
                            'post_type' => 'FOOD_MENU', /* 表示する投稿タイプを指定*/
                            'posts_per_page' => 3, /* 一覧に表示するページ数 */
                            'paged' => get_query_var( 'paged' ),/* ページネーションする場合は必須だけど、今回はどちらでも */
                        ); ?>
                        <?php query_posts( $args ); ?>
                        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                            <div class="each_food">
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <table>
                                        <tr>
                                            <td>
                                                <?php  //featured image のリンクを取得
                                                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                                //echo $feat_image;
                                                ?>
                                                <img src="<?php echo $feat_image ?>" width="80px;" height="80px;"> <!-- FOOD画像 from featured image -->
                                            </td>
                                            <td class="food_content">
                                                <h3 class="food_name"><?php the_title(); ?></h3> <!-- 商品名 -->
                                                <div class="food_price">£<?php echo get_post_meta($post->ID , 'PRICE' ,true); ?></div> <!-- お値段 -->
                                                <div class="clear"></div>
                                                <div class="border"></div>
                                                <div class="food_disc">CAKE : <?php the_content(); ?></div> <!-- 内容 -->
                                            </td>
                                        </tr>
                                    </table>
                                </div><!-- #post-## -->
                            </div>
                        <?php comments_template( '', true ); ?>
                
                        <?php endwhile; // end of the loop. ?>
                        <?php next_posts_link('次のページ') ?><!-- ページネーション用タグ -->
                        <?php previous_posts_link('前のページ') ?><!-- ページネーション用タグ -->
                        <?php wp_reset_query(); ?><!-- リセット -->
                    </div>
    			</div><!-- end content -->
            </div><!-- end general_frame id menu_frame -->
        </article>
        <?php endwhile; endif; ?>
	</div><!-- end id content -->	
</div><!-- end eleven columns -->	
<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>