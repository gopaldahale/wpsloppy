<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
echo '<h1 class="forme">its from page.php</h1>';

/* Start the Loop */
// while ( have_posts() ) :
// 	the_post();
// 	get_template_part( 'template-parts/content/content-page' );

// 	// If comments are open or there is at least one comment, load up the comment template.
// 	if ( comments_open() || get_comments_number() ) {
// 		comments_template();
// 	}
// End of the loop.
// endwhile; 
$paged =  get_query_var('paged') ? get_query_var('paged') : 1;    
?>

<main id="main" class="site-main ">
    <section id="site_content" class="">
        <div id="content" class="cl-layout-fullwidth cl-content-builder">
            <div class="inner-content container">
                <div class="inner-content-row row">
                    <div class="content-col cl-page-content col-md-12">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div id="id5c0be48bdfcd23-33799930"
                                            class="cl-element cl-blog cl-blog--style-default cl-blog--module-isotope cl-blog--animated "
                                            style="">
                                            <div class="cl-blog__list cl-items-container " data-items="2"
                                                data-isotope-type="masonry" data-transition-duration="0.4"
                                                style="height: 600px; display:flex;flex-wrap:wrap;">
                                                <!-- [loop starts] -->
                                                <?php
                                                // query_posts('');
                                                $paged = get_query_var('paged') ? get_query_var('paged') :1;
                                                $my_wpquery = new WP_Query(
                                                    [
                                                        'post_type' => ['post', 'brand'],
                                                        // 'post_type' => 'post',
                                                        'posts_per_page' => 2,
                                                        // 'post_status' => 'publish',
                                                        // 'order-by' => 'date',
                                                        // 'order' => 'ASC',
                                                        'paged' => $paged,  
                                                    ],
                                                );

                                                while ($my_wpquery->have_posts()) {
                                                    $my_wpquery->the_post();
                                                    ?>
                                                    <article id=""
                                                        class="cl-entry cl-animate-on-visible bottom-t-top cl-isotope-item cl-msn-size-small cl-hide-post-content post-2585 post type-post status-publish format-standard has-post-thumbnail hentry category-popular tag-man tag-nature tag-photo tag-portrait tag-sea tag-sky start_animation"
                                                        data-speed="300" data-delay="100"
                                                        style="position:relative;height:500px;">
                                                        <div class="cl-entry__media" style="">
                                                            <div class="cl-entry__overlay"></div>
                                                            <a href="<?php the_permalink(); ?>"
                                                                class="cl-entry__overlay-link"
                                                                style="box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;"></a>
                                                            <div class="cl-entry__post-thumbnail">
                                                                <img src="<?php
                                                                $thumd = wp_get_attachment_image_src(get_post_thumbnail_id(), array('100', '100'));
                                                                echo $thumd[0];
                                                                ?>"
                                                                    class="attachment-blog_custm size-blog_custm wp-post-image"
                                                                    alt="" sizes="(max-width: 565px) 100vw, 565px"
                                                                    style="width:553px;height:300px;object-fit:cover;">
                                                            </div>
                                                        </div>
                                                        <div class="cl-entry__wrapper">
                                                            <div class="cl-entry__wrapper-content">
                                                                <header class="cl-entry__header">
                                                                    <div class="cl-entry__author">
                                                                        <img alt=""
                                                                            src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/9685f431b0b9035a02c9d52264f94bb6.jpeg"
                                                                            srcset="https://secure.gravatar.com/avatar/9685f431b0b9035a02c9d52264f94bb6?s=60&amp;d=mm&amp;r=g 2x"
                                                                            class="avatar avatar-30 photo" height="30"
                                                                            width="30">
                                                                        <div class="cl-entry__author-data">
                                                                            <div class="cl-entry__categories"><a
                                                                                    href="https://preview.codeless.co/thype/blog/?cat=207"
                                                                                    rel="category">Popular</a>
                                                                            </div>
                                                                            by admin
                                                                        </div>
                                                                    </div>
                                                                    <h2 class="cl-entry__title cl-custom-font">
                                                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                                            <?php the_title(); ?>
                                                                        </a>
                                                                    </h2>
                                                                    <div class="cl-entry__details">
                                                                        <div class="cl-entry__meta-wrapper">
                                                                            <div
                                                                                class="cl-entry__meta cl-entry__meta--date">
                                                                                <span class="cl-entry__meta-prepend"></span>
                                                                                <span class="time"><a
                                                                                        href="<?php the_permalink(); ?>"
                                                                                        rel="bookmark">
                                                                                        <?php echo get_the_date(); ?>
                                                                                    </a></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cl-entry__tools">
                                                                            <div
                                                                                class="cl-entry__tool cl-entry__tool--comments">
                                                                                <a href="https://preview.codeless.co/thype/blog/?p=2585#comments"
                                                                                    class="comments"><span
                                                                                        class="cl-entry__tool-count">0</span>
                                                                                    <i
                                                                                        class="fa-regular fa-comment"></i></a>
                                                                            </div>
                                                                            <div
                                                                                class="cl-entry__tool cl-entry__tool--likes">
                                                                                <a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
                                                                                    class="like "
                                                                                    id="codeless-like-2585"><span
                                                                                        class="cl-entry__tool-count">12</span><i
                                                                                        class="fa-regular fa-heart"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="cl-entry__tool cl-entry__tool--share">
                                                                                <a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
                                                                                    class="cl-entry__share-open"><i
                                                                                        class="fa-solid fa-share"></i></a>
                                                                                <div
                                                                                    class="cl-entry__share-container hidden">
                                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2585"
                                                                                        title="Social Share facebook"
                                                                                        target="_blank"><i
                                                                                            class="cl-icon-facebook"></i></a><a
                                                                                        href="https://twitter.com/intent/tweet?text=Have%20an%20Obsession%20with%20solving%20the%20problems&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2585"
                                                                                        title="Social Share twitter"
                                                                                        target="_blank"><i
                                                                                            class="cl-icon-twitter"></i></a><a
                                                                                        href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2585&amp;title=Have%20an%20Obsession%20with%20solving%20the%20problems"
                                                                                        title="Social Share linkedin"
                                                                                        target="_blank"><i
                                                                                            class="cl-icon-linkedin"></i></a><a
                                                                                        href="mailto:?subject=Have%20an%20Obsession%20with%20solving%20the%20problems&amp;body=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2585"
                                                                                        title="Social Share pinterest"
                                                                                        target="_blank"><i
                                                                                            class="cl-icon-email"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="red-more">
                                                                        <a href="<?php the_permalink(); ?>">Read more <i
                                                                                class="fa-brands fa-readme"></i></a>
                                                                    </div>
                                                                </header>
                                                                <div class="cl-entry__content">
                                                                    <p>
                                                                        <?php the_excerpt(); ?>
                                                                    </p>
                                                                </div>
                                                                <a href="https://preview.codeless.co/thype/blog/?p=2585"
                                                                    class="cl-entry__readmore">Read More</a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                <?php }
                                                ; ?>
                                                <!-- [loop ends] -->
                                            </div>
                                            <?php //echo wp_pagenavi(['query'=>$my_wpquery]);
                                                    echo the_posts_pagination(['query'=> $my_wpquery]);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
