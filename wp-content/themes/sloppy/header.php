<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<!-- saved from url=(0052)https://preview.codeless.co/thype/blog/?page_id=2949 -->
<html lang="en-US"
	class="js_active vc_desktop vc_transform vc_transform wf-notoserif-i7-active wf-notoserif-n7-active wf-montserrat-n5-active wf-montserrat-n7-active wf-notosans-n4-active wf-active">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="https://preview.codeless.co/thype/blog/xmlrpc.php">
	<title>
		<?php wp_title();
		if (is_front_page()) {
			bloginfo('name');
			bloginfo('description');
		} ?>
	</title>
	<meta name="robots" content="noindex,nofollow">
	<link rel="dns-prefetch" href="https://s.w.org/">
	<link rel="alternate" type="application/rss+xml" title="Thype - Personal Blog &amp; Magazine WordPress Theme » Feed"
		href="https://preview.codeless.co/thype/blog/?feed=rss2">
	<link rel="alternate" type="application/rss+xml"
		title="Thype - Personal Blog &amp; Magazine WordPress Theme » Comments Feed"
		href="https://preview.codeless.co/thype/blog/?feed=comments-rss2">
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/preview.codeless.co\/thype\/blog\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.12" } };
		!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode; p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<script
		src="/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/wp-emoji-release.min.js.download"
		type="text/javascript" defer=""></script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="wp-block-library-css"
		href="wp-content/themes/sloppy/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/style.min.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="contact-form-7-css"
		href="wp-content/themes/sloppy/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/styles.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="bootstrap-css"
		href="wp-content/themes/sloppy/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/bootstrap.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="codeless-theme-style-css"
		href="wp-content/themes/sloppy/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/theme.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="codeless-style-css" href="/style.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="owl-carousel-css"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/owl.carousel.min.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="ilightbox-skin-css"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/skin.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="ilightbox-css"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/ilightbox.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="js_composer_front-css"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/js_composer.min.css"
		type="text/css" media="all">
	<link rel="stylesheet" id="codeless-dynamic-css"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/codeless-dynamic.css"
		type="text/css" media="all">
	<!-- fontaweome cdn start -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- fontaweome cdn close -->

	<style id="codeless-dynamic-inline-css" type="text/css">
		.cl-header__row--main {
			border-bottom-width: 0px;
			padding-left: 0;
			padding-right: 0;
			padding-top: 0px;
		}


		@media (min-width:992px) {

			body.cl-header-transparent .cl-page-header__content,
			body.cl-header-transparent .cl-post-header__content {
				padding-top: 100px;
			}

		}

		@media (min-width:992px) {

			body.cl-layout-wrapper .cl-page-header__content,
			body.cl-layout-wrapper .cl-post-header__content {
				padding-bottom: 0px;
			}
		}



		.cl-header__row--top {
			border-bottom-width: 0px;
			padding-top: 0px;
		}



		.cl-header__row--extra {
			border-bottom-width: 0px;
		}


		footer#colophon .cl-footer__main {
			padding-top: 30px;
			padding-bottom: 0px;
		}






		body:not(.cl-layout-boxed),
		body.cl-layout-boxed #wrapper.cl-boxed-layout {
			background-color: #ffffff !important
		}


		.cl-slider--modern .cl-entry__wrapper,
		.cl-slider--modern .cl-owl-nav {
			width: 1170px;
		}


		input:not([type="submit"])::-webkit-input-placeholder,
		select::-webkit-input-placeholder,
		textarea::-webkit-input-placeholder {
			color: #a7acb6
		}

		input:not([type="submit"]):-moz-placeholder,
		select:-moz-placeholder,
		textarea:-moz-placeholder {
			color: #a7acb6
		}

		input:not([type="submit"]):-ms-input-placeholder,
		select:-ms-input-placeholder,
		textarea:-ms-input-placeholder {
			color: #a7acb6
		}


		.vc_row[data-vc-full-width="true"] {
			margin-top: 30px;
			margin-bottom: 30px;
		}

		.vc_row-full-width.vc_clearfix+.vc_row[data-vc-full-width="true"] {
			margin-top: -30px;
		}

		.vc_row[data-vc-full-width="true"] {
			padding-top: 60px;
		}

		.vc_row[data-vc-full-width="true"] {
			padding-bottom: 60px;
		}

		@media (max-width:767px) {
			.wpb_column>.vc_column-inner {
				padding-top: calc(30px);
				padding-bottom: calc(30px);
			}
		}


		.vc_col-has-fill>.vc_column-inner,
		.vc_row-has-fill+.vc_row-full-width+.vc_row>.vc_column_container>.vc_column-inner,
		.vc_row-has-fill+.vc_row>.vc_column_container>.vc_column-inner,
		.vc_row-has-fill>.vc_column_container>.vc_column-inner {
			padding-top: 0;
		}
	</style>
	<link rel="stylesheet" id="kirki-styles-cl_thype-css"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/kirki-styles.css"
		type="text/css" media="all">
	<style id="kirki-styles-cl_thype-inline-css" type="text/css">
		.cl-logo__font {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 36px;
			font-weight: 700;
			font-style: italic;
			letter-spacing: 0px;
			text-align: left;
			text-transform: lowercase;
			color: #e94828;
		}

		.cl-header__navigation:not(.cl-mobile-menu) .cl-header__menu>li>a,
		.cl-offcanvas-menu nav ul li a,
		.cl-fullscreen-overlay__menu li {
			font-family: Montserrat, Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 500;
			letter-spacing: 0px;
			line-height: 20px;
			text-align: center;
			text-transform: uppercase;
		}

		.cl-header__menu__megamenu h6,
		.cl-header__menu li ul li.has-submenu>a,
		.cl-mobile-menu nav>ul>li>a {
			font-size: 14px;
			font-weight: 400;
			letter-spacing: 0px;
			line-height: 20px;
			text-transform: uppercase;
			color: #6c7781;
		}

		.cl-header__navigation.cl-mobile-menu li a,
		.cl-header__navigation:not(.cl-mobile-menu) .cl-header__menu li ul li:not(.has-submenu) a,
		.cl-submenu a,
		.cl-submenu .empty,
		.cl-header__tool--shop .total {
			font-size: 14px;
			font-weight: 400;
			letter-spacing: 0px;
			line-height: 24px;
			text-transform: none;
			color: #6c7781;
		}

		.cl-header__row--top {
			height: 50px;
			font-size: 11px;
			font-weight: 400;
			line-height: 1.2;
			text-transform: uppercase;
			color: #6c7781;
			background-color: #f1f1f1;
			border-color: #eaebec;
		}

		.cl-header__row--extra {
			height: 40px;
			color: #6c7781;
			background-color: #f1f1f1;
		}

		.vc_row:not(.vc_inner):not([data-vc-full-width="true"]) {
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.inner-content-row,
		.vc_row:first-child:not(.vc_inner) {
			padding-top: 70px;
		}

		.inner-content-row,
		.vc_row:last-child:not(.vc_inner) {
			padding-bottom: 70px;
		}

		.cl-element,
		.wpb_content_element,
		.vc_row.vc_inner {
			margin-bottom: 30px;
		}

		aside .widget,
		.cl-sidenav .widget {
			padding-bottom: 22px;
			padding-top: 22px;
		}

		.cl-header__navigation:not(.cl-mobile-menu) .cl-header__menu>li>a {
			color: #6c7781;
		}

		.cl-header--dark .cl-header__navigation:not(.cl-mobile-menu) .cl-header__menu>li:hover>a,
		.cl-header--dark .cl-header__navigation:not(.cl-mobile-menu) .cl-header__menu>li.current-menu-item>a,
		.cl-header--dark .cl-header__navigation:not(.cl-mobile-menu) .cl-header__menu>li.current-menu-parent>a {
			color: #191e23 !important;
		}

		.cl-header__row--main {
			color: #6c7781;
		}

		.cl-header__row--main,
		.cl-header__row--main:before {
			background-color: #ffffff;
		}

		.cl-header__row--main,
		.cl-header__row--main .cl-header__element,
		.cl-header__tool {
			border-color: #eaebec;
		}

		.cl-header__row--extra,
		.cl-header__row--extra .cl-header__container {
			border-color: #eaebec;
		}

		.cl-header__menu li ul a:hover,
		.cl-header__navigation.cl-mobile-menu li a:hover,
		.cl-header__navigation.cl-mobile-menu h6:hover,
		#site-header-search input[type="search"] {
			color: #191e23 !important;
		}

		.cl-header__menu__megamenu,
		.cl-header__menu>li ul,
		.cl-mobile-menu,
		.cl-submenu {
			background-color: #ffffff;
		}

		.cl-header__navigation .cl-header__menu__megamenu>ul>li {
			border-color: #ebebeb;
		}

		.cl-header--sticky-prepare .cl-header__row--main {
			background-color: #fff !important;
		}

		.cl-header__tool--side-menu .cl-header__tool__link span {
			background-color: #e94828;
		}

		.cl-header__socials a i {
			color: #6c7781;
		}

		.cl-header__socials--style-circle-bg a {
			background-color: #f1f1f1;
		}

		.cl-header__socials--style-circle-bg a,
		.cl-header__socials--style-circle-border a {
			border-color: #dbbcbc;
		}

		.cl-header__icontext-icon {
			color: #6c7781;
		}

		body:not(.cl-layout-boxed),
		body.cl-layout-boxed #wrapper.cl-boxed-layout {
			background-color: #ffffff;
		}

		.cl-entry-single-section--tags a,
		.cl-blog--style-big .cl-entry,
		.cl-slider--image-no,
		.cl-blog--style-default .cl-entry__wrapper {
			background-color: #fbfbfb;
		}

		#respond .form-submit .cl-btn,
		.widget_polls-widget .Buttons,
		.widget_mc4wp_form_widget input[type="submit"] {
			background-color: #191e23;
		}

		#respond .form-submit .cl-btn,
		.widget_polls-widget .Buttons {
			border-color: #191e23;
		}

		article.sticky,
		.widget-title,
		.widget_divider,
		.cl-entry-single-navigation,
		.cl-pagination li .current,
		.cl-pagination-jump a,
		.cl-blog--style-headlines-2 .cl-entry__wrapper,
		.cl-single-share-buttons a,
		.cl-owl-nav button,
		.apsc-each-profile,
		.cl-blog--module-grid-blocks.cl-blog--style-simple-no_content.cl-blog--grid-7 .cl-entry:first-child .cl-entry__wrapper,
		.cl-post-header--without-image,
		.widget_aboutme .wrapper,
		input:not([type="submit"]),
		select,
		textarea {
			border-color: #eaeaea;
		}

		.has-primary-accent-color,
		.cl-entry .cl-entry__categories a,
		cl-post-header--dark .cl-entry__categories a,
		.cl-dropcap,
		.widget_categories li:hover:before,
		.widget_archive li:hover:before,
		.cl-header__socials--style-simple a:hover i,
		p.has-drop-cap:not(:focus):first-letter,
		.cl-pagination a:hover,
		a:hover,
		.widget_contactinfo .info i,
		.widget_contactinfo .info.mail,
		.cl-entry__readmore:hover {
			color: #e94828;
		}

		.cl-header__mobile-button span,
		.cl-header__hamburger-button span,
		.cl-header--light .cl-header__tool__link .cart-total,
		.has-primary-accent-background-color,
		.cl-header__socials--style-circle-border a:hover,
		.cl-header__socials--style-circle-bg a:hover,
		.cl-sidenav__close span,
		.cl-entry-single-section--tags a:hover,
		.cl-footer-toparea .mc4wp-form .mc4wp-form-fields [type="submit"],
		.cl-pagination-jump a:hover,
		.cl-blog:not(.cl-blog--style-alternate):not(.cl-blog--style-simple-no_content) .format-quote .cl-entry__overlay,
		.cl-owl-nav button:hover,
		.cl-footer__main input[type="submit"],
		.cl-fullscreen-overlay__close span,
		.cl-entry__readmore:hover:before,
		.cl-pagination-numbers ul .current,
		.cl-blog--style-media article:not(.has-post-thumbnail) .cl-entry__media {
			background-color: #e94828;
		}

		.cl-header__socials--style-circle-border a:hover,
		.cl-pagination-jump a:hover,
		.cl-owl-nav button:hover,
		.cl-header__navigation .cl-header__menu>li>ul.sub-menu,
		.cl-header__navigation .cl-header__menu>li>ul.sub-menu>li>ul.sub-menu,
		.cl-header__navigation .cl-header__menu>li>ul.sub-menu>li>ul.sub-menu>li>ul.sub-menu {
			border-color: #e94828;
		}

		html,
		body,
		blockquote {
			color: #626264;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.widget_calendar caption,
		.widget_recent_comments .comment-author-link,
		.widget_recent_entries a,
		.widget_rss .rsswidget,
		.has-heading-color,
		.widget_most_popular .content .author,
		.widget_recent_comments .comment-author-link,
		.widget_recent_entries a,
		.widget_tag_cloud .tag-cloud-link:hover,
		.widget_rss .rsswidget,
		.cl-content blockquote p {
			color: #3a3a3a;
		}

		.cl-entry__details,
		.cl-entry__details a,
		.cl-entry__readmore,
		.widget_most_popular .data,
		.widget_recent_comments li,
		.widget_recent_entries span,
		.widget_tag_cloud .tag_cloud_link,
		.widget_rss .rssSummary,
		.cl-sidenav .widget_nav_menu a,
		.widget_socials ul i,
		aside .widget_text p,
		.cl-page-header__desc,
		.wp-block-image figcaption,
		.has-labels-color,
		.cl-entry-single-section--tags a,
		.cl-entry-single-comments .comment-meta-item,
		.comment-reply-link,
		.comment-edit-link,
		#cancel-comment-reply-link,
		.single-post-nav__data .time,
		.cl-pagination a,
		.cl-pagination-jump a,
		.cl-blog--style-headlines .cl-entry__time,
		.cl-filter a,
		.cl-single-share-buttons span,
		.cl-blog--style-big .cl-entry__content,
		.cl-owl-nav button,
		.cl-blog--style-top-news .cl-entry__date,
		.apsc-count,
		#respond .logged-in-as,
		#respond .logged-in-as a,
		#respond .comment-notes,
		#respond .comment-notes span {
			color: #6c7781;
		}

		.cl-entry__readmore:before {
			background-color: #6c7781;
		}

		.cl-entry-single-author__title,
		.cl-entry-single-section__title,
		.cl-filter a:hover,
		.cl-filter a.active,
		.wp-polls-ul li label,
		.cl-entry__author-data {
			color: #3a3a3a;
		}

		.cl-btn--color-normal {
			color: #fff;
			background-color: #e94828;
			border-color: #e94828;
		}

		.cl-btn--color-normal:hover {
			color: #fff;
			background-color: #c23013;
			border-color: #c23013;
		}

		.cl-btn--color-alt {
			color: #6c7781;
			background-color: #fff;
			border-color: #e7e9eb;
		}

		.cl-btn--color-alt:hover {
			color: #fff;
			background-color: #e94828;
			border-color: #e94828;
		}

		.cl-video-gallery .cl-scrollable__slider,
		.cl-video-gallery,
		.cl-video-gallery__featured article.cl-prepare-video .cl-entry__overlay {
			background-color: #191e23 !important;
		}

		.cl-video-gallery .cl-scrollable__pane,
		.cl-video-gallery .cl-video-entry__wrapper:hover {
			background-color: #3e4751;
		}

		.cl-video-gallery .cl-video-entry.cl-video-playing .cl-video-entry__wrapper {
			background-color: #586777;
		}

		input:not([type="submit"]),
		select,
		textarea {
			background-color: #fbfbfb;
		}

		footer#colophon {
			background-color: #ffffff;
			color: #363b43;
		}

		footer#colophon .widget-title,
		footer#colophon .rsswidget {
			color: #191e23;
		}

		footer#colophon a,
		footer#colophon .widget_rss cite,
		footer#colophon .widget_calendar thead th {
			color: #363b43;
		}

		footer#colophon a:hover {
			color: #e94828;
		}

		.cl-footer__main .widget_headlines article,
		.cl-footer__main,
		.cl-footer__main select,
		.cl-footer__main input:not([type="submit"]),
		.cl-footer__main textarea {
			border-color: #edeeef;
		}

		.cl-footer__main input:not([type="submit"]),
		.cl-footer__main select,
		.cl-footer__main textarea {
			background-color: #242b32;
		}

		.cl-footer__main input:not([type="submit"])::-webkit-input-placeholder,
		.cl-footer__main select::-webkit-input-placeholder,
		.cl-footer__main textarea::-webkit-input-placeholder,
		.cl-footer__main input:not([type="submit"]):-moz-placeholder,
		.cl-footer__main select:-moz-placeholder,
		.cl-footer__main textarea:-moz-placeholder,
		.cl-footer__main input:not([type="submit"])::-moz-placeholder,
		.cl-footer__main select::-moz-placeholder,
		.cl-footer__main textarea::-moz-placeholder,
		.cl-footer__main input:not([type="submit"]):-ms-input-placeholder,
		.cl-footer__main select:-ms-input-placeholder,
		.cl-footer__main textarea:-ms-input-placeholder,
		.cl-footer__main select {
			color: #6c7781;
		}

		#copyright {
			background-color: #ffffff;
			color: #363b43;
		}

		#copyright a {
			color: #363b43 !important;
		}

		#copyright a:hover {
			color: #e94828 !important;
		}

		#copyright .cl-footer__content {
			border-color: #edeeef;
			padding-top: 20px;
			padding-bottom: 20px;
		}

		html,
		body,
		blockquote cite a,
		.cl-blog__title {
			font-family: "Noto Sans", Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 0px;
			line-height: 1.75;
			text-transform: none;
		}

		h1:not(.cl-custom-font),
		.h1 {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 60px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 1.2;
			text-transform: none;
		}

		h2:not(.cl-custom-font),
		.h2 {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 42px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 1.2;
			text-transform: none;
		}

		h3:not(.cl-custom-font),
		.h3 {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 26px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 1.2;
			text-transform: none;
		}

		h4:not(.cl-custom-font),
		.h4 {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 20px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 1.2;
			text-transform: none;
		}

		h5:not(.cl-custom-font),
		.h5,
		.wp-polls form>p {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 16px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 1.75;
			text-transform: none;
		}

		h6:not(.cl-custom-font),
		.h6,
		.cl-video-entry__content a,
		.widget_headlines .cl-entry__title {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 12px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 1.75;
			text-transform: none;
		}

		aside .widget-title,
		.cl-sidenav .widget-title {
			font-family: Montserrat, Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 700;
			line-height: 28px;
			text-transform: uppercase;
		}

		.cl-blog:not(.cl-blog--style-big) h2.cl-entry__title {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 26px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 1.2;
			text-transform: none;
		}

		.cl-single-blog .cl-content {
			font-size: 18px;
			line-height: 1.75;
		}

		.cl-entry-single-section__title {
			font-family: Montserrat, Helvetica, Arial, sans-serif;
			font-size: 18px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 27px;
			text-transform: uppercase;
		}

		blockquote p {
			font-family: "Noto Serif", Georgia, serif;
			font-size: 26px;
			font-weight: 400;
			line-height: 36px;
			text-transform: none;
		}

		.cl-element__title {
			font-family: Montserrat, Helvetica, Arial, sans-serif;
			font-size: 16px;
			font-weight: 700;
			letter-spacing: 0px;
			line-height: 28px;
			text-transform: uppercase;
		}

		footer .widget-title {
			font-family: Montserrat, Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 700;
			line-height: 28px;
			text-transform: uppercase;
		}

		cl-btn {
			border-width: 1px;
		}

		footer#colophon .widget {
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.red-more {
			font-style: italic;
			position: absolute;
			bottom: 0;
			right: 50px;
		}

		.red-more>a {
			font-style: italic;
		}

		.forme {
			position: absolute;
			z-index: 99;
			opacity: 0.1;
			color: black;
			font-size: 24px !important;
			transform: rotate(-25deg);
			top: 150px;
			left: 100px;
		}

		@media (min-width: 992px) {
			.cl-header__menu>li {
				padding-left: 8px;
				padding-right: 8px;
			}

			.cl-header__row--main {
				height: 100px;
			}

			.cl-header__padding {
				padding-top: 100px;
			}

			.cl-header--sticky-active .cl-header__row--main {
				height: 60px;
			}

			.cl-post-header__title {
				font-family: "Noto Serif", Georgia, serif;
				font-size: 60px;
				font-weight: 700;
				line-height: 1.2;
				text-transform: none;
			}
		}

		@media (min-width: 768px) {
			.cl-header__row--main .cl-header__element {
				padding-right: 20px !important;
				padding-left: 20px !important;
			}

			.cl-header__row--top .cl-header__element {
				padding-right: 15px;
				padding-left: 15px;
			}

			.cl-header__row--extra .cl-header__element {
				padding-right: 15px;
				padding-left: 15px;
			}
		}

		@media (min-width: 1200px) {
			.container {
				width: 1170px;
			}
		}
	</style>
	<script type="text/javascript"
		src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/jquery.js.download"></script>
	<script type="text/javascript"
		src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/jquery-migrate.min.js.download"></script>
	<script type="text/javascript"
		src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/imagesloaded.min.js.download"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var codeless_global = { "ajax_url": "https:\/\/preview.codeless.co\/thype\/blog\/wp-admin\/admin-ajax.php", "FRONT_LIB_JS": "https:\/\/preview.codeless.co\/thype\/blog\/wp-content\/themes\/thype\/js\/", "FRONT_LIB_CSS": "https:\/\/preview.codeless.co\/thype\/blog\/wp-content\/themes\/thype\/css\/", "postSwiperOptions": { "effect": "scroll", "lazyLoading": false, "autoplay": "", "loop": false, "pagination": ".swiper-pagination", "paginationClickable": true, "nextButton": ".swiper-button-next", "prevButton": ".swiper-button-prev" }, "cl_btn_classes": "cl-btn cl-btn--color-normal cl-btn--size-medium cl-btn--style-square", "lightbox": { "skin": "dark", "path": "vertical", "mousewheel": "1", "toolbar": "1", "arrows": "1", "slideshow": "", "fullscreen": "1", "thumbnail": "1", "swipe": "1", "contextmenu": "1" } };
		/* ]]> */
	</script>
	<script type="text/javascript"
		src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/codeless-main.js.download"></script>
	<script type="text/javascript"
		src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/bowser.min.js.download"></script>
	<script type="text/javascript"
		src="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/jquery.nanoscroller.min.js.download"></script>
	<link rel="https://api.w.org/" href="https://preview.codeless.co/thype/blog/index.php?rest_route=/">
	<link rel="EditURI" type="application/rsd+xml" title="RSD"
		href="https://preview.codeless.co/thype/blog/xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
		href="https://preview.codeless.co/thype/blog/wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 5.0.12">
	<link rel="canonical" href="https://preview.codeless.co/thype/blog/?page_id=2949">
	<link rel="shortlink" href="https://preview.codeless.co/thype/blog/?p=2949">
	<link rel="alternate" type="application/json+oembed"
		href="https://preview.codeless.co/thype/blog/index.php?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fpage_id%3D2949">
	<link rel="alternate" type="text/xml+oembed"
		href="https://preview.codeless.co/thype/blog/index.php?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fpreview.codeless.co%2Fthype%2Fblog%2F%3Fpage_id%3D2949&amp;format=xml">
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://preview.codeless.co/thype/blog/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1548327103551 {
			margin-top: 0px !important;
			padding-top: 35px !important;
			padding-bottom: 35px !important;
			background-color: #363b43 !important;
		}
	</style>
	<link rel="stylesheet"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/myscriptfolder/css"
		media="all">
	<noscript>
		<style type="text/css">
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
	<link rel="stylesheet"
		href="<?php bloginfo('template_directory'); ?>/Home 9 – Thype – Personal Blog &amp; Magazine WordPress Theme_files/mysrciptfolder/codeless-icons.css">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- for plugins custom css  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<style>
		/* pagination navigation css  */
		.wp-pagenavi a,
		.wp-pagenavi span {
			text-decoration: none;
			padding: 8px 15px;
			margin: 5px;
			border: 0.5px solid #e9eaeb;
			cursor: pointer;
		}

		.wp-pagenavi a:hover,
		.wp-pagenavi span:hover {
			background: #e94828;
			color: white;
			border: 0.5px solid #e94828;
			transition: background 0.5s, border 0.4s;
		}

		.wp-pagenavi a.current,
		.wp-pagenavi span.current {
			border: 0.5px solid #ff8d76bd;
			color: #e94828cf;
			cursor: pointer;
		}

		.wp-pagenavi a.current:hover,
		.wp-pagenavi span.current:hover {
			background: #e94828;
			color: white;
			border: 0.5px solid #e94828;
			transition: background 0.5s, border 0.4s;
		}

		.wp-pagenavi>.nextpostslink {
			padding: 8px 13px;
		}

		.nextpostslink>i {
			font-size: 14px;
		}

		.previouspostslink>i {
			font-size: 14px;
		}

		/* comment.php css  */
		.comments-area {
			padding-top: 50px;
		}

		.comments-area h2 {
			font-family: monospace;
			font-size: 26px;
		}

		p.comment-form-comment textarea {
			padding: 15px;
			resize: none;
		}

		input#submit {
			padding: 10px 25px;
			background: #ffabab;
			border-radius: 5px;
		}

		/* Widget category  */
		#categories-2::marker {
			content: '';
		}

		li.widget_pages::marker {
			content: '';
		}

		li.widget_categories::marker {
			content: '';
		}

		h2.widgettitle {
			padding-bottom: 10px;
			font-family: Montserrat, Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 700;
			line-height: 28px;
			text-transform: uppercase;
			border-bottom: 1px solid #eaeaea;
		}

		.watermark {
			font-size: 24px !important;
			font-family: 'Montserrat' !important;
			opacity: 0.2;
			transform: rotate(-5deg);
			z-index: 99999;
			position: absolute;
			top: 100px;
			left: 100px;
		}

		.btn {
			width: 150px;
			font-size: 16px;
			font-weight: 600;
			padding: 5px 20px;
			border-radius: 5px;
			background: #e94828;
			color: white;
			font-family: 'Montserrat';
			letter-spacing: 2px;
			cursor: pointer;
		}

		.btn:active {
			background: #ff4621;
		}

		.posts-form input,
		textarea,
		select {
			margin-bottom: 20px;
		}

		a.anchor-submenu {
			position: relative;
		}

		a.anchor-submenu::after {
			content: '\f35f';
			position: absolute;
			font-family: "codeless-icons";
			font-size: 11px;
			right: -10px;
		}
	</style>

</head>

<body
	class="page-template-default page page-id-2949 cl-header-dark cl-search-creative cl-page-with-builder wpb-js-composer js-comp-ver-5.6 vc_responsive">
	<div id="viewport" class="">
		<div id="wrapper" class="">
			<div class="cl-header cl-header--layout-top cl-header--menu-style-simple cl-header--dark cl-header--sticky cl-header--sticky-mobile cl-header--divider-small cl-header--divider"
				data-sticky-content-color="dark">
				<div class="cl-header__row-wrapper">
					<div class="cl-header__row cl-header__row--main" data-row="main">
						<div class="cl-header__container container-fluid">
							<div class="cl-header__col cl-header__col--left cl-header__col--mobile-order-0"
								data-col="left">
								<div class="cl-header__element cl-header__element--logo ">
									<a href="<?php site_url(); ?>"
										class="cl-logo__font cl-logo__font--responsive-dark">sloppy.</a>
								</div>
							</div>
							<div class="cl-header__col cl-header__col--middle cl-header__col--mobile-order-1"
								data-col="middle"></div>
							<div class="cl-header__col cl-header__col--right cl-header__col--mobile-order-2"
								data-col="right">
								<div class="cl-header__element cl-header__element--menu ">
									<div id="navigation" class="cl-header__nav-wrapper">
										<nav class="cl-header__navigation cl-header__navigation--dropdown">
											<?php wp_nav_menu(
												array(
													'theme_location' => 'header-menu',
													'menu_class' => 'menu cl-header__menu',
													'menu_id' => 'menu-categories',
													'container' => false,
													'add_li_class' => 'menu-item menu-item-type-taxonomy menu-item-object-category none',
												)
											); ?>
										</nav>
									</div>
									<div class="cl-header__mobile-button cl-header__mobile-button--dark">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
								<div class="cl-header__element cl-header__element--tools ">
									<div class="cl-header__tools">
										<div
											class="cl-header__tool--search cl-header__tool cl-header__tool--search-style-box has-submenu">
											<a href="" id="cl-header__search-btn" class="cl-header__tool__link">
												<i class="fa-solid fa-magnifying-glass"></i></a>
											<div
												class="cl-header__box cl-header__box--search cl-submenu cl-hide-on-mobile ">
												<div class="cl-header__search-form">
													<form role="search" method="get" class="search-form" action="">

														<label for="search-form-6528e20a5fdc8">
															<span class="screen-reader-text">Search for:</span>
														</label>

														<input type="search" id="search-form-6528e20a5fdc8"
															class="search-field" placeholder="Search articles here..."
															value="" name="title">

														<i class="fa-solid fa-magnifying-glass"></i>

														<input type="submit" value="Submit">
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="cl-header__element cl-header__element--socials ">
									<div class="cl-header__element-container cl-header__socials hidden-xs hidden-sm hidden-md cl-header__socials--size-medium cl-header__socials--style-simple"
										style="margin-top: 0px;">
										<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
											title="Facebook">
											<i class="fa-brands fa-facebook"></i>
										</a>
										<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
											title="Instagram">
											<i class="fa-brands fa-instagram"></i>
										</a>
										<a href="https://preview.codeless.co/thype/blog/?page_id=2949#" title="Twitter">
											<i class="fa-brands fa-square-twitter"></i>
										</a>
										<a href="https://preview.codeless.co/thype/blog/?page_id=2949#" title="Email">
											<i class="fa-solid fa-envelope"></i>
										</a>
										<a href="https://preview.codeless.co/thype/blog/?page_id=2949#"
											title="Linkedin">
											<i class="fa-brands fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cl-header__padding" style="padding-top: 100px;"></div>
			</div>