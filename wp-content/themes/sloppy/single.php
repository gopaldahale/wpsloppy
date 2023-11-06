<?php //get_header();
get_header('mycustom');

// the_post();
echo '<h1 class="forme">this is from single.php</h1>'; ?>

<main id="main" class="site-main " style="margin-top: 0px;">
    <section id="site_content" class="">
        <div id="content" class="cl-layout-right_sidebar cl-single-blog">
            <div class="cl-post-header cl-post-header--light">
                <div class="cl-post-header__overlay"></div>
                <div class="cl-post-header__image"
                    style="background-image: url(&#39;https://preview.codeless.co/thype/blog/wp-content/uploads/2018/12/Depositphotos_135490180_xl-2015.jpg&#39;); ">
                </div>
                <div class="cl-post-header__content d-flex align-items-center h-100">
                    <div class="cl-post-header__container">
                        <div class="cl-post-header__row align-items-center row justify-content-center">
                            <div class="cl-post-header__text col-md-12">
                                <div class="cl-entry__header">
                                    <div class="cl-entry__author">
                                        <img alt=""
                                            src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/9685f431b0b9035a02c9d52264f94bb6.jpeg"
                                            srcset="https://secure.gravatar.com/avatar/9685f431b0b9035a02c9d52264f94bb6?s=60&amp;d=mm&amp;r=g 2x"
                                            class="avatar avatar-30 photo" height="30" width="30">
                                        <div class="cl-entry__author-data">
                                            <div class="cl-entry__categories"><a
                                                    href="https://preview.codeless.co/thype/blog/?cat=206"
                                                    rel="category">Tech</a></div>
                                            by admin-
                                            <?php the_author(); ?>
                                        </div>
                                    </div>
                                    <h1 class="cl-post-header__title cl-custom-font">
                                        <?php the_title(); ?>
                                    </h1>
                                    <div class="cl-entry__details">
                                        <div class="cl-entry__meta-wrapper">
                                            <div class="cl-entry__meta cl-entry__meta--date">
                                                <span class="cl-entry__meta-prepend"></span>
                                                <span class="time"><a
                                                        href="https://preview.codeless.co/thype/blog/?p=2520"
                                                        rel="bookmark">
                                                        <?php the_date(); ?>
                                                    </a></span>
                                            </div>
                                        </div>
                                        <div class="cl-entry__tools">
                                            <div class="cl-entry__tool cl-entry__tool--comments">
                                                <a href="https://preview.codeless.co/thype/blog/?p=2520#comments"
                                                    class="comments"><span class="cl-entry__tool-count">3</span>
                                                    <i class="fa-regular fa-comment"></i></a>
                                            </div>
                                            <div class="cl-entry__tool cl-entry__tool--likes">
                                                <a href="https://preview.codeless.co/thype/blog/?p=2520#" class="like "
                                                    id="codeless-like-2520"><span
                                                        class="cl-entry__tool-count">52</span><i
                                                        class="fa-regular fa-heart"></i> </a>
                                            </div>
                                            <div class="cl-entry__tool cl-entry__tool--share">
                                                <a href="https://preview.codeless.co/thype/blog/?p=2520#"
                                                    class="cl-entry__share-open"><i
                                                        class="cl-icon-share-variant"></i></a>
                                                <div class="cl-entry__share-container hidden"><a
                                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520"
                                                        title="Social Share facebook" target="_blank"><i
                                                            class="fa-brands fa-facebook-f"></i></a><a
                                                        href="https://twitter.com/intent/tweet?text=How%20to%20Use%20Checklists%20to%20Improve%20Your%20UX&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520"
                                                        title="Social Share twitter" target="_blank"><i
                                                            class="fa-brands fa-twitter"></i></a><a
                                                        href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520&amp;title=How%20to%20Use%20Checklists%20to%20Improve%20Your%20UX"
                                                        title="Social Share linkedin" target="_blank"><i
                                                            class="fa-brands fa-linkedin-in"></i></a><a
                                                        href="mailto:?subject=How%20to%20Use%20Checklists%20to%20Improve%20Your%20UX&amp;body=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520"
                                                        title="Social Share pinterest" target="_blank"><i
                                                            class="fa-solid fa-envelope"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cl-wrapper-layout">
                <div class="inner-content container">
                    <div class="inner-content-row row">
                        <div class="content-col col-md-8">
                            <?php the_content(); ?>
                            <?php comments_template(); ?>
                            <?php echo do_shortcode('[foogallery id="131"]'); ?>

                        </div>
                        <aside id="secondary" class="widget-area cl-aside col-md-4 cl-aside--widget-title-text">
                            <div class="cl-sticky-wrapper">
                                <?php //get_sidebar('sidebar');?>
                                <div id="widget_aboutme-3" class="widget widget_aboutme">
                                    <div class="wrapper">
                                        <img class="image"
                                            src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/img.jpg"
                                            alt="About Me">
                                        <p class="text">Hi, I am Lara freelancer based in New York, Web
                                            Development &amp; Web Design remains one of my...</p>
                                        <img class="signature"
                                            src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/sign-1.jpg"
                                            alt="Signature">
                                    </div>
                                </div>
                                <div id="widget_most_popular-2" class="widget widget_most_popular">
                                    <div class="cl-widget-title-wrapper">
                                        <h3 class="widget-title cl-custom-font">Recent Posts</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="media"><img width="150" height="150"
                                                    src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/Depositphotos_135490180_xl-2015-1-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="">
                                            </div>
                                            <div class="content">
                                                <h5><a href="https://preview.codeless.co/thype/blog/?p=2520">How
                                                        to Use Checklists to Improve Your UX</a></h5><span
                                                    class="data"><span class="author">by admin</span> <span
                                                        class="divider">/ </span>December 6, 2018</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><img width="150" height="150"
                                                    src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/Depositphotos_200162996_xl-2015-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="">
                                            </div>
                                            <div class="content">
                                                <h5><a href="https://preview.codeless.co/thype/blog/?p=2557">An
                                                        Ongoing Machine Ethnography</a></h5><span class="data"><span
                                                        class="author">by admin</span> <span class="divider">/
                                                    </span>December 7, 2018</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><img width="150" height="150"
                                                    src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/Depositphotos_39382993_xl-2015-min-150x150.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="">
                                            </div>
                                            <div class="content">
                                                <h5><a href="https://preview.codeless.co/thype/blog/?p=2565">A
                                                        Sample of a BlockQuote</a></h5><span class="data"><span
                                                        class="author">by admin</span> <span class="divider">/
                                                    </span>December 7, 2018</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="categories-2" class="widget widget_categories">
                                    <?php // get_sidebar('Page-Sidebar');?>
                                    <?php dynamic_sidebar('pagiwidget-id'); ?>
                                    <?php //dynamic_sidebar('demiccatgory');?>
                                    <?php dynamic_sidebar('brand-id'); ?>
                                    <ul>
                                        <h2 class="widgettitle">Categories</h2>
                                        <?php
                                        $cat = get_categories(['taxonomy' => 'category_of_brand', 'hide_empty' => false]);
                                        ?>
                                        <!-- <pre> -->
                                        <?php //print_r($cat);?>
                                        <!-- </pre> -->
                                        <?php
                                        foreach ($cat as $catarray) {
                                            ?>
                                            <li class="widget_categories">
                                                <?php $meta_image = get_wp_term_image($catarray->term_id);
                                                if ($meta_image) { ?>
                                                    <img src="<?php print_r($meta_image) ?>" alt="" width="50px" style="
                                                border-radius:25px;
                                                border-radius: 25px;
                                                width: 35px;
                                                background: yellow;
                                                height: 35px;
                                                box-shadow: black 1px 1px 8px -3px;
                                                margin-right: 12px;
                                                ">
                                                <?php } ?>
                                                <a href="<?php echo esc_url(get_term_link($catarray));?>">
                                                    <?php echo $catarray->name; ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                    </ul>
                                    <!-- <div class="cl-widget-title-wrapper">
                                        <h3 class="widget-title cl-custom-font">Categories</h3>
                                    </div>
                                    <ul>
                                        <li class="cat-item cat-item-204"><a
                                                href="https://preview.codeless.co/thype/blog/?cat=204">Culture</a>
                                        </li>
                                        <li class="cat-item cat-item-205"><a
                                                href="https://preview.codeless.co/thype/blog/?cat=205">Design</a>
                                        </li>
                                        <li class="cat-item cat-item-207"><a
                                                href="https://preview.codeless.co/thype/blog/?cat=207">Popular</a>
                                        </li>
                                        <li class="cat-item cat-item-211"><a
                                                href="https://preview.codeless.co/thype/blog/?cat=211">Slider</a>
                                        </li>
                                        <li class="cat-item cat-item-206"><a
                                                href="https://preview.codeless.co/thype/blog/?cat=206">Tech</a>
                                        </li>
                                    </ul> -->
                                </div>
                                <div id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
                                    <div class="cl-widget-title-wrapper">
                                        <h3 class="widget-title cl-custom-font">Newsletter Signup</h3>
                                    </div>
                                    <script>(function () {
                                            if (!window.mc4wp) {
                                                window.mc4wp = {
                                                    listeners: [],
                                                    forms: {
                                                        on: function (event, callback) {
                                                            window.mc4wp.listeners.push({
                                                                event: event,
                                                                callback: callback
                                                            });
                                                        }
                                                    }
                                                }
                                            }
                                        })();
                                    </script>
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1712" method="post"
                                        data-id="1712" data-name="Side">
                                        <div class="mc4wp-form-fields"><input type="email" name="EMAIL"
                                                placeholder="Your email address" required="">
                                            <input type="submit" value="Subscribe">
                                        </div><label style="display: none !important;">Leave this field
                                            empty if you're human: <input type="text" name="_mc4wp_honeypot" value=""
                                                tabindex="-1" autocomplete="off"></label><input type="hidden"
                                            name="_mc4wp_timestamp" value="1697435832"><input type="hidden"
                                            name="_mc4wp_form_id" value="1712"><input type="hidden"
                                            name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                        <div class="mc4wp-response"></div>
                                    </form>
                                </div>
                                <div id="media_image-2" class="widget widget_media_image"><a
                                        href="https://preview.codeless.co/thype/blog/?p=2520#"><img width="370"
                                            height="300"
                                            src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/banner.jpg"
                                            class="image wp-image-3022  attachment-full size-full" alt=""
                                            style="max-width: 100%; height: auto;"
                                            srcset="https://preview.codeless.co/thype/blog/wp-content/uploads/2019/01/banner.jpg 370w, https://preview.codeless.co/thype/blog/wp-content/uploads/2019/01/banner-300x243.jpg 300w"
                                            sizes="(max-width: 370px) 100vw, 370px"></a></div>
                                <div id="tag_cloud-2" class="widget widget_tag_cloud">
                                    <div class="cl-widget-title-wrapper">
                                        <h3 class="widget-title cl-custom-font">Tags</h3>
                                    </div>
                                    <div class="tagcloud"><a
                                            href="https://preview.codeless.co/thype/blog/?tag=advertisement"
                                            class="tag-cloud-link tag-link-208 tag-link-position-1"
                                            style="font-size: 8pt;"
                                            aria-label="advertisement (1 item)">advertisement</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=cities"
                                            class="tag-cloud-link tag-link-209 tag-link-position-2"
                                            style="font-size: 8pt;" aria-label="cities (1 item)">cities</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=forest"
                                            class="tag-cloud-link tag-link-210 tag-link-position-3"
                                            style="font-size: 8pt;" aria-label="forest (1 item)">forest</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=man"
                                            class="tag-cloud-link tag-link-196 tag-link-position-4"
                                            style="font-size: 21.341176470588pt;" aria-label="man (12 items)">man</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=nature"
                                            class="tag-cloud-link tag-link-197 tag-link-position-5"
                                            style="font-size: 21.341176470588pt;"
                                            aria-label="nature (12 items)">nature</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=photo"
                                            class="tag-cloud-link tag-link-198 tag-link-position-6"
                                            style="font-size: 21.341176470588pt;"
                                            aria-label="photo (12 items)">photo</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=portrait"
                                            class="tag-cloud-link tag-link-201 tag-link-position-7"
                                            style="font-size: 21.341176470588pt;"
                                            aria-label="portrait (12 items)">portrait</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=sea"
                                            class="tag-cloud-link tag-link-202 tag-link-position-8"
                                            style="font-size: 21.341176470588pt;" aria-label="sea (12 items)">sea</a>
                                        <a href="https://preview.codeless.co/thype/blog/?tag=sky"
                                            class="tag-cloud-link tag-link-203 tag-link-position-9"
                                            style="font-size: 22pt;" aria-label="sky (13 items)">sky</a>
                                    </div>
                                </div>
                                <div id="widget_instagram-2" class="widget widget_instagram">
                                    <div class="cl-widget-title-wrapper">
                                        <h3 class="widget-title cl-custom-font">Instagram</h3>
                                    </div>
                                    <div class="cl-instafeed"
                                        data-token="9467036365.1677ed0.3492540f62084025b6bdeede1dd85c92"
                                        data-userid="9467036365"></div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="cl-entry-single-navigation">
                        <div class="single-post-nav single-post-nav--prev"><a
                                href="https://preview.codeless.co/thype/blog/?p=2569" rel="prev"><span
                                    class="single-post-nav__wrapper"><img
                                        src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog & Magazine WordPress Theme_files/img/Depositphotos_200162996_xl-2015-150x150.jpg"
                                        class="pagination-previous wp-post-image" alt=""> <span
                                        class="single-post-nav__content"><span class="single-post-nav__title h5">An
                                            Ongoing Machine
                                            Ethnography</span><span class="single-post-nav__data">by admin
                                            <span class="time">/ December 7,
                                                2018</span></span></span></span></a></div><a
                            href="https://preview.codeless.co/thype/blog" class="single-post-nav__grid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php // comment_form();?>
</main>

<?php get_footer(); ?>