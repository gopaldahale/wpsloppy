<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
echo "this is coming from index.php";
//the_post(); ?>

<main id="main" class="site-main ">
	<section id="site_content" class="">
		<div id="content" class="cl-layout-fullwidth cl-content-builder">
			<div class="inner-content container">
				<div class="inner-content-row row">
					<div class="content-col cl-page-content col-md-12">
						<div class="vc_row-full-width vc_clearfix"></div>
						<div class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id="id5c0be48bdfcd23-33799930"
											class="cl-element cl-blog cl-blog--style-default cl-blog--module-isotope cl-blog--animated "
											style="">
											<div class="cl-filter-centered">
												<div class="cl-filter cl-filter--blog cl-filter--ajax">
													<div class="cl-filter__inner">
														<a data-filter="*"
															href="https://preview.codeless.co/thype/blog/?page_id=2949"
															class="active">All</a>
														<a href="https://preview.codeless.co/thype/blog/?page_id=2949&amp;cl_cat=204"
															data-filter=".category-culture">Culture</a>
														<a href="https://preview.codeless.co/thype/blog/?page_id=2949&amp;cl_cat=205"
															data-filter=".category-design">Design</a>
														<a href="https://preview.codeless.co/thype/blog/?page_id=2949&amp;cl_cat=207"
															data-filter=".category-popular">Popular</a>
														<a href="https://preview.codeless.co/thype/blog/?page_id=2949&amp;cl_cat=206"
															data-filter=".category-tech">Tech</a>
													</div>
												</div>
											</div>
											<div class="cl-blog__list cl-items-container " data-items="2"
												data-isotope-type="masonry" data-transition-duration="0.4"
												style="opacity: 1; position: relative; height: 1054.36px;">
												<!-- [loop starts] -->
												<?php while (have_posts()) {
													the_post(); ?>
													<article id=""
														class="cl-entry cl-animate-on-visible bottom-t-top cl-isotope-item cl-msn-size-small cl-hide-post-content post-2585 post type-post status-publish format-standard has-post-thumbnail hentry category-popular tag-man tag-nature tag-photo tag-portrait tag-sea tag-sky start_animation"
														data-speed="300" data-delay="100"
														style="position: absolute; left: 0%; top: 0px;">
														<div class="cl-entry__media" style="">
															<div class="cl-entry__overlay"></div>
															<a href="<?php the_permalink(); ?>"
																class="cl-entry__overlay-link"
																style="box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;"></a>
															<div class="cl-entry__post-thumbnail">
																<img src="<?php
																$thumd = wp_get_attachment_image_src(get_post_thumbnail_id(), array('100', '100'));
																echo $thumd[0];
																?>" class="attachment-blog_custm size-blog_custm wp-post-image" alt=""
																	sizes="(max-width: 565px) 100vw, 565px"
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
																		<a href="<?php the_permalink();?>"
																			rel="bookmark">
																			<?php the_title(); ?>
																		</a>
																	</h2>
																	<div class="cl-entry__details">
																		<div class="cl-entry__meta-wrapper">
																			<div
																				class="cl-entry__meta cl-entry__meta--date">
																				<span class="cl-entry__meta-prepend"></span>
																				<span class="time"><a
																						href="<?php the_permalink();?>"
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
												<?php } ?>
												<!-- [loop ends] -->
											</div>
											<?php echo wp_pagenavi(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- NOT NOT  NOT NOT NOT  -->
						<div class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id="id5c0bf2ce0efca1-35792436"
											class="cl-element cl-blog cl-blog--style-alternate cl-blog--module-carousel "
											style="">
											<div class="cl-element__title-wrapper only_text">
												<h4 class="cl-element__title cl-custom-font">Popular Posts
												</h4>
											</div>
											<div class="cl-blog__list cl-items-container owl-carousel cl-carousel owl-theme owl-loaded owl-drag"
												data-items="2" data-nav="1" data-slide-by="1"
												data-responsive="{&quot;0&quot;: {&quot;items&quot;: 1}, &quot;992&quot;: {&quot;items&quot;: 2 } }"
												data-transition-duration="0.4">
												<div class="owl-stage-outer owl-height" style="height: 166px;">
													<div class="owl-stage"
														style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2280px;">
														<div class="owl-item active" style="width: 570px;">
															<article id="post-2644"
																class="cl-entry post-2644 post type-post status-publish format-standard has-post-thumbnail hentry category-slider tag-man tag-nature tag-photo tag-portrait tag-sea tag-sky">
																<div class="cl-entry__alternate-wrapper">
																	<div class="cl-entry__media" style="">
																		<div class="cl-entry__overlay">
																		</div>
																		<a href="" class="cl-entry__overlay-link"></a>
																		<div class="cl-entry__post-thumbnail">
																			<img src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/Depositphotos_102339260_xl-2015-1-744x620.jpg"
																				class="attachment-codeless_blog_entry size-codeless_blog_entry wp-post-image"
																				alt=""
																				sizes="(max-width: 744px) 100vw, 744px">
																		</div>
																	</div>
																	<div class="cl-entry__wrapper">
																		<div class="cl-entry__wrapper-content">
																			<header class="cl-entry__header">
																				<div class="cl-entry__author">
																					<img alt=""
																						src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/9685f431b0b9035a02c9d52264f94bb6.jpeg"
																						srcset="https://secure.gravatar.com/avatar/9685f431b0b9035a02c9d52264f94bb6?s=60&amp;d=mm&amp;r=g 2x"
																						class="avatar avatar-30 photo"
																						height="30" width="30">
																					<div class="cl-entry__author-data">
																						<div
																							class="cl-entry__categories">
																							<a href="https://preview.codeless.co/thype/blog/?cat=211"
																								rel="category">Slider</a>
																						</div>
																						by admin
																					</div>
																				</div>
																				<h2
																					class="cl-entry__title cl-custom-font">
																					<a href="https://preview.codeless.co/thype/blog/?p=2644"
																						rel="bookmark">Blog
																						Can Be Everything
																						Nowadays</a>
																				</h2>
																				<div class="cl-entry__details">
																					<div class="cl-entry__meta-wrapper">
																						<div
																							class="cl-entry__meta cl-entry__meta--date">
																							<span
																								class="cl-entry__meta-prepend"></span>
																							<span class="time"><a
																									href="https://preview.codeless.co/thype/blog/?p=2644"
																									rel="bookmark">December
																									8,
																									2018</a></span>
																						</div>
																					</div>
																					<div class="cl-entry__tools">
																						<div
																							class="cl-entry__tool cl-entry__tool--comments">
																							<a href="https://preview.codeless.co/thype/blog/?p=2644#comments"
																								class="comments"><span
																									class="cl-entry__tool-count">0</span><i
																									class="cl-icon-comment"></i></a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--likes">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="like "
																								id="codeless-like-2644"><span
																									class="cl-entry__tool-count">10</span><i
																									class="cl-icon-heart"></i>
																							</a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--share">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="cl-entry__share-open"><i
																									class="cl-icon-share-variant"></i></a>
																							<div
																								class="cl-entry__share-container hidden">
																								<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2644"
																									title="Social Share facebook"
																									target="_blank"><i
																										class="cl-icon-facebook"></i></a><a
																									href="https://twitter.com/intent/tweet?text=Blog%20Can%20Be%20Everything%20Nowadays&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2644"
																									title="Social Share twitter"
																									target="_blank"><i
																										class="cl-icon-twitter"></i></a><a
																									href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2644&amp;title=Blog%20Can%20Be%20Everything%20Nowadays"
																									title="Social Share linkedin"
																									target="_blank"><i
																										class="cl-icon-linkedin"></i></a><a
																									href="mailto:?subject=Blog%20Can%20Be%20Everything%20Nowadays&amp;body=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2644"
																									title="Social Share pinterest"
																									target="_blank"><i
																										class="cl-icon-email"></i></a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</header>
																			<div class="cl-entry__content">
																				<p>Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in
																					create entire designs
																					with Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in
																					society, most problems
																					are actually problems of
																					perception. Wider
																					Galleries What does […]
																				</p>
																			</div>
																			<a href="https://preview.codeless.co/thype/blog/?p=2644"
																				class="cl-entry__readmore">Read
																				More</a>
																		</div>
																	</div>
																</div>
															</article>
														</div>
														<div class="owl-item active" style="width: 570px;">
															<article id="post-2626"
																class="cl-entry post-2626 post type-post status-publish format-standard has-post-thumbnail hentry category-design tag-man tag-nature tag-photo tag-portrait tag-sea tag-sky">
																<div class="cl-entry__alternate-wrapper">
																	<div class="cl-entry__media" style="">
																		<div class="cl-entry__overlay">
																		</div>
																		<a href="https://preview.codeless.co/thype/blog/?p=2626"
																			class="cl-entry__overlay-link"></a>
																		<div class="cl-entry__post-thumbnail">
																			<img src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/b5-1-744x620.jpg"
																				class="attachment-codeless_blog_entry size-codeless_blog_entry wp-post-image"
																				alt=""
																				sizes="(max-width: 744px) 100vw, 744px">
																		</div>
																	</div>
																	<div class="cl-entry__wrapper">
																		<div class="cl-entry__wrapper-content">
																			<header class="cl-entry__header">
																				<div class="cl-entry__author">
																					<img alt=""
																						src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/9685f431b0b9035a02c9d52264f94bb6.jpeg"
																						srcset="https://secure.gravatar.com/avatar/9685f431b0b9035a02c9d52264f94bb6?s=60&amp;d=mm&amp;r=g 2x"
																						class="avatar avatar-30 photo"
																						height="30" width="30">
																					<div class="cl-entry__author-data">
																						<div
																							class="cl-entry__categories">
																							<a href="https://preview.codeless.co/thype/blog/?cat=205"
																								rel="category">Design</a>
																						</div>
																						by admin
																					</div>
																				</div>
																				<h2
																					class="cl-entry__title cl-custom-font">
																					<a href="https://preview.codeless.co/thype/blog/?p=2626"
																						rel="bookmark">Design
																						an Amazing Blog WP
																						Site</a>
																				</h2>
																				<div class="cl-entry__details">
																					<div class="cl-entry__meta-wrapper">
																						<div
																							class="cl-entry__meta cl-entry__meta--date">
																							<span
																								class="cl-entry__meta-prepend"></span>
																							<span class="time"><a
																									href="https://preview.codeless.co/thype/blog/?p=2626"
																									rel="bookmark">December
																									8,
																									2018</a></span>
																						</div>
																					</div>
																					<div class="cl-entry__tools">
																						<div
																							class="cl-entry__tool cl-entry__tool--comments">
																							<a href="https://preview.codeless.co/thype/blog/?p=2626#comments"
																								class="comments"><span
																									class="cl-entry__tool-count">0</span><i
																									class="cl-icon-comment"></i></a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--likes">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="like "
																								id="codeless-like-2626"><span
																									class="cl-entry__tool-count">19</span><i
																									class="cl-icon-heart"></i>
																							</a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--share">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="cl-entry__share-open"><i
																									class="cl-icon-share-variant"></i></a>
																							<div
																								class="cl-entry__share-container hidden">
																								<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2626"
																									title="Social Share facebook"
																									target="_blank"><i
																										class="cl-icon-facebook"></i></a><a
																									href="https://twitter.com/intent/tweet?text=Design%20an%20Amazing%20Blog%20WP%20Site&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2626"
																									title="Social Share twitter"
																									target="_blank"><i
																										class="cl-icon-twitter"></i></a><a
																									href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2626&amp;title=Design%20an%20Amazing%20Blog%20WP%20Site"
																									title="Social Share linkedin"
																									target="_blank"><i
																										class="cl-icon-linkedin"></i></a><a
																									href="mailto:?subject=Design%20an%20Amazing%20Blog%20WP%20Site&amp;body=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2626"
																									title="Social Share pinterest"
																									target="_blank"><i
																										class="cl-icon-email"></i></a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</header>
																			<div class="cl-entry__content">
																				<p>Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in
																					create entire designs
																					with Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in
																					society, most problems
																					are actually problems of
																					perception. Wider
																					Galleries What does […]
																				</p>
																			</div>
																			<a href="https://preview.codeless.co/thype/blog/?p=2626"
																				class="cl-entry__readmore">Read
																				More</a>
																		</div>
																	</div>
																</div>
															</article>
														</div>
														<div class="owl-item" style="width: 570px;">
															<article id="post-2557"
																class="cl-entry post-2557 post type-post status-publish format-image has-post-thumbnail hentry category-design tag-advertisement tag-cities tag-forest tag-sky post_format-post-format-image">
																<div class="cl-entry__alternate-wrapper">
																	<div class="cl-entry__media" style="">
																		<div class="cl-entry__overlay">
																		</div>
																		<a href="https://preview.codeless.co/thype/blog/?p=2557"
																			class="cl-entry__overlay-link"></a>
																		<div class="cl-entry__post-thumbnail">
																			<img src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/Depositphotos_200162996_xl-2015-1-744x620.jpg"
																				class="attachment-codeless_blog_entry size-codeless_blog_entry wp-post-image"
																				alt=""
																				sizes="(max-width: 744px) 100vw, 744px">
																		</div>
																	</div>
																	<div class="cl-entry__wrapper">
																		<div class="cl-entry__wrapper-content">
																			<header class="cl-entry__header">
																				<div class="cl-entry__author">
																					<img alt=""
																						src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/9685f431b0b9035a02c9d52264f94bb6.jpeg"
																						srcset="https://secure.gravatar.com/avatar/9685f431b0b9035a02c9d52264f94bb6?s=60&amp;d=mm&amp;r=g 2x"
																						class="avatar avatar-30 photo"
																						height="30" width="30">
																					<div class="cl-entry__author-data">
																						<div
																							class="cl-entry__categories">
																							<a href="https://preview.codeless.co/thype/blog/?cat=205"
																								rel="category">Design</a>
																						</div>
																						by admin
																					</div>
																				</div>
																				<h2
																					class="cl-entry__title cl-custom-font">
																					<a href="https://preview.codeless.co/thype/blog/?p=2557"
																						rel="bookmark">An
																						Ongoing Machine
																						Ethnography</a>
																				</h2>
																				<div class="cl-entry__details">
																					<div class="cl-entry__meta-wrapper">
																						<div
																							class="cl-entry__meta cl-entry__meta--date">
																							<span
																								class="cl-entry__meta-prepend"></span>
																							<span class="time"><a
																									href="https://preview.codeless.co/thype/blog/?p=2557"
																									rel="bookmark">December
																									7,
																									2018</a></span>
																						</div>
																					</div>
																					<div class="cl-entry__tools">
																						<div
																							class="cl-entry__tool cl-entry__tool--comments">
																							<a href="https://preview.codeless.co/thype/blog/?p=2557#comments"
																								class="comments"><span
																									class="cl-entry__tool-count">0</span><i
																									class="cl-icon-comment"></i></a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--likes">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="like "
																								id="codeless-like-2557"><span
																									class="cl-entry__tool-count">31</span><i
																									class="cl-icon-heart"></i>
																							</a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--share">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="cl-entry__share-open"><i
																									class="cl-icon-share-variant"></i></a>
																							<div
																								class="cl-entry__share-container hidden">
																								<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2557"
																									title="Social Share facebook"
																									target="_blank"><i
																										class="cl-icon-facebook"></i></a><a
																									href="https://twitter.com/intent/tweet?text=An%20Ongoing%20Machine%20Ethnography&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2557"
																									title="Social Share twitter"
																									target="_blank"><i
																										class="cl-icon-twitter"></i></a><a
																									href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2557&amp;title=An%20Ongoing%20Machine%20Ethnography"
																									title="Social Share linkedin"
																									target="_blank"><i
																										class="cl-icon-linkedin"></i></a><a
																									href="mailto:?subject=An%20Ongoing%20Machine%20Ethnography&amp;body=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2557"
																									title="Social Share pinterest"
																									target="_blank"><i
																										class="cl-icon-email"></i></a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</header>
																			<div class="cl-entry__content">
																				<p>Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in
																					society, most problems
																					are actually problems of
																					perception. You can
																					create entire designs
																					with just type.
																					Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in […]
																				</p>
																			</div>
																			<a href="https://preview.codeless.co/thype/blog/?p=2557"
																				class="cl-entry__readmore">Read
																				More</a>
																		</div>
																	</div>
																</div>
															</article>
														</div>
														<div class="owl-item" style="width: 570px;">
															<article id="post-2520"
																class="cl-entry cl-hide-post-content post-2520 post type-post status-publish format-standard has-post-thumbnail hentry category-tech tag-man tag-nature tag-photo tag-portrait tag-sea tag-sky">
																<div class="cl-entry__alternate-wrapper">
																	<div class="cl-entry__media" style="">
																		<div class="cl-entry__overlay">
																		</div>
																		<a href="https://preview.codeless.co/thype/blog/?p=2520"
																			class="cl-entry__overlay-link"></a>
																		<div class="cl-entry__post-thumbnail">
																			<img src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/Depositphotos_135490180_xl-2015-1-744x620.jpg"
																				class="attachment-codeless_blog_entry size-codeless_blog_entry wp-post-image"
																				alt=""
																				sizes="(max-width: 744px) 100vw, 744px">
																		</div>
																	</div>
																	<div class="cl-entry__wrapper">
																		<div class="cl-entry__wrapper-content">
																			<header class="cl-entry__header">
																				<div class="cl-entry__author">
																					<img alt=""
																						src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/img/9685f431b0b9035a02c9d52264f94bb6.jpeg"
																						srcset="https://secure.gravatar.com/avatar/9685f431b0b9035a02c9d52264f94bb6?s=60&amp;d=mm&amp;r=g 2x"
																						class="avatar avatar-30 photo"
																						height="30" width="30">
																					<div class="cl-entry__author-data">
																						<div
																							class="cl-entry__categories">
																							<a href="https://preview.codeless.co/thype/blog/?cat=206"
																								rel="category">Tech</a>
																						</div>
																						by admin
																					</div>
																				</div>
																				<h2
																					class="cl-entry__title cl-custom-font">
																					<a href="https://preview.codeless.co/thype/blog/?p=2520"
																						rel="bookmark">How
																						to Use Checklists to
																						Improve Your UX</a>
																				</h2>
																				<div class="cl-entry__details">
																					<div class="cl-entry__meta-wrapper">
																						<div
																							class="cl-entry__meta cl-entry__meta--date">
																							<span
																								class="cl-entry__meta-prepend"></span>
																							<span class="time"><a
																									href="https://preview.codeless.co/thype/blog/?p=2520"
																									rel="bookmark">December
																									6,
																									2018</a></span>
																						</div>
																					</div>
																					<div class="cl-entry__tools">
																						<div
																							class="cl-entry__tool cl-entry__tool--comments">
																							<a href="https://preview.codeless.co/thype/blog/?p=2520#comments"
																								class="comments"><span
																									class="cl-entry__tool-count">3</span><i
																									class="cl-icon-comment"></i></a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--likes">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="like "
																								id="codeless-like-2520"><span
																									class="cl-entry__tool-count">52</span><i
																									class="cl-icon-heart"></i>
																							</a>
																						</div>
																						<div
																							class="cl-entry__tool cl-entry__tool--share">
																							<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
																								class="cl-entry__share-open"><i
																									class="cl-icon-share-variant"></i></a>
																							<div
																								class="cl-entry__share-container hidden">
																								<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520"
																									title="Social Share facebook"
																									target="_blank"><i
																										class="cl-icon-facebook"></i></a><a
																									href="https://twitter.com/intent/tweet?text=How%20to%20Use%20Checklists%20to%20Improve%20Your%20UX&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520"
																									title="Social Share twitter"
																									target="_blank"><i
																										class="cl-icon-twitter"></i></a><a
																									href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520&amp;title=How%20to%20Use%20Checklists%20to%20Improve%20Your%20UX"
																									title="Social Share linkedin"
																									target="_blank"><i
																										class="cl-icon-linkedin"></i></a><a
																									href="mailto:?subject=How%20to%20Use%20Checklists%20to%20Improve%20Your%20UX&amp;body=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fp%3D2520"
																									title="Social Share pinterest"
																									target="_blank"><i
																										class="cl-icon-email"></i></a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</header>
																			<div class="cl-entry__content">
																				<p>Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in
																					society, most problems
																					are actually problems of
																					perception. You can
																					create entire designs
																					with just type.
																					Engineers, medical
																					people, scientific
																					people, have an
																					obsession with solving
																					the problems of reality,
																					once you reach a basic
																					level of wealth in […]
																				</p>
																			</div>
																			<a href="https://preview.codeless.co/thype/blog/?p=2520"
																				class="cl-entry__readmore">Read
																				More</a>
																		</div>
																	</div>
																</div>
															</article>
														</div>
													</div>
												</div>
												<div class="cl-owl-nav"><button type="button" role="presentation"
														class="owl-prev disabled">←</button><button type="button"
														role="presentation" class="owl-next">→</button></div>
												<div class="owl-dots disabled"></div>
											</div>
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
echo "i am from index.php";
get_footer();