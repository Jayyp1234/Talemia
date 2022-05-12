<?php 
include 'component/header.php';
$title = "Products - Talemia";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">
	.wtbx_vc_row-126735512 .wtbx_row_bg {
		background-color: #ffffff;
	}

	.wtbx_vc_row-126735512 .wtbx-bg-image .wtbx-bg-image-inner .wtbx_row_bg_image {
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center top
	}

	.wtbx_vc_row-126735512 .wtbx_row_bg_overlay {}

	.wtbx_vc_row-126735512 .wtbx_row_content_inner {
		height: 35vh;
	}

	.wtbx_vc_row-126735512 .wtbx_row_content_inner {
		min-height: 500px;
	}

	.wtbx_vc_row-126735512 .wtbx_row_content_inner {
		padding-top: 120px !important;
	}

	.wtbx_vc_row-126735512 .wtbx_row_content_inner {
		padding-bottom: 90px !important;
	}

	.wtbx_vc_column-126737661 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126737661 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126737661 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126737661 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_styled_heading-126739291.wtbx_vc_styled_heading .wtbx_heading_el_title {
		color: #151221;
	}

	.wtbx_vc_styled_heading-126739291.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
		font-size: 36px;
		font-weight: 700;
		line-height: 1.2;
	}

	@media only screen and (max-width: 767px) {
		.wtbx_vc_styled_heading-126739291.wtbx_vc_styled_heading .wtbx_heading_el_title {
			font-size: 85%
		}
	}

	@media only screen and (max-width: 479px) {
		.wtbx_vc_styled_heading-126739291.wtbx_vc_styled_heading .wtbx_heading_el_title {
			font-size: 75%
		}
	}

	.wtbx_vc_empty_space-126740650 .wtbx_empty_space_inner {
		height: 5px
	}

	@media only screen and (max-width:767px) {
		.wtbx_vc_empty_space-126740650 .wtbx_empty_space_inner {
			height: 15px
		}
	}

	.wtbx_vc_row-126741377 .wtbx_row_bg {
		background-color: #09099d;
	}

	.wtbx_vc_row-126741377 .wtbx_row_bg_overlay {}

	.wtbx_vc_row-126741377 .wtbx_row_content_inner {
		padding-top: 30px !important;
	}

	.wtbx_vc_row-126741377 .wtbx_row_content_inner {
		padding-bottom: 30px !important;
	}

	.wtbx_vc_column-126742143 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126742143 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126742143 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126742143 .wtbx_column_content {
		padding-left: 15px !important;
	}

	@media only screen and (max-width:767px) {
		.wtbx_vc_column-126742143 .wtbx_column_content {
			padding-bottom: 60px !important;
		}
	}

	.wtbx_vc_text_element-126743372 .wtbx_text_element_content {
		color: rgba(255, 255, 255, 1);
	}

	.wtbx_vc_text_element-126743372 .wtbx_text_element_content {
		font-size: 36px;
		font-weight: 600;
	}

	.wtbx_vc_empty_space-126743788 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_divider-126745439 .wtbx_vc_divider_inner {
		width: 100%;
		border-top-width: 1px;
		border-top-style: solid;
		border-color: rgba(255, 255, 255, 0.2);
	}

	.wtbx_vc_empty_space-126745620 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_text_element-126745806 .wtbx_text_element_content {
		color: rgba(255, 255, 255, 1);
	}

	.wtbx_vc_text_element-126745806 .wtbx_text_element_content {
		font-weight: 500;
	}

	.wtbx_vc_empty_space-126746095 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_button-126746997.wtbx_vc_button .wtbx_vc_button_container .wtbx_vc_button_inner .wtbx-button {
		line-height: 3.6;
	}

	.wtbx_vc_column-126747282 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126747282 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126747282 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126747282 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_image_element-126748435.wtbx_vc_image_element .wtbx_image_inner {
		border-radius: 15px;
	}

	.wtbx_vc_row-126751346 .wtbx_row_bg {
		background-color: #f7f8fd;
	}

	.wtbx_vc_row-126751346 .wtbx_row_bg_overlay {}

	.wtbx_vc_row-126751346 .wtbx_row_content_inner {
		padding-top: 30px !important;
	}

	.wtbx_vc_row-126751346 .wtbx_row_content_inner {
		padding-bottom: 30px !important;
	}

	.wtbx_vc_column-126751789 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126751789 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126751789 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126751789 .wtbx_column_content {
		padding-left: 15px !important;
	}

	@media only screen and (max-width:767px) {
		.wtbx_vc_column-126751789 .wtbx_column_content {
			padding-bottom: 60px !important;
		}
	}

	.wtbx_vc_text_element-126752118 .wtbx_text_element_content {
		color: #151221;
	}

	.wtbx_vc_text_element-126752118 .wtbx_text_element_content {
		font-size: 24px;
		font-weight: 600;
	}

	.wtbx_vc_empty_space-126752289 .wtbx_empty_space_inner {
		height: 15px
	}

	.wtbx_vc_text_element-126752396 .wtbx_text_element_content {
		color: #151221;
	}

	.wtbx_vc_text_element-126752396 .wtbx_text_element_content {
		font-size: 15px;
		font-weight: 500;
	}

	.wtbx_vc_column-126752677 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126752677 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126752677 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126752677 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_bg_idle {
		background-color: rgba(255, 255, 255, 1);
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-left-radius: 9px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-right-radius: 9px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-right-radius: 9px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-left-radius: 9px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		padding-top: 45px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		padding-right: 45px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		padding-bottom: 45px !important;
	}

	.wtbx_vc_content_box-126753636.wtbx_vc_content_box .wtbx_content_box_container {
		padding-left: 45px !important;
	}

	.wtbx_vc_text_element-126753958 .wtbx_text_element_content {
		color: #151221;
	}

	.wtbx_vc_text_element-126753958 .wtbx_text_element_content {
		font-size: 18px;
		font-weight: 600;
		line-height: 1.5;
	}

	.wtbx_vc_empty_space-126754135 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_button-126754262.wtbx_vc_button .wtbx_vc_button_container .wtbx_vc_button_inner .wtbx-button {
		line-height: 3.6;
	}

	.wtbx_vc_row-126754676 .wtbx_row_content_inner {
		padding-top: 60px !important;
	}

	.wtbx_vc_row-126754676 .wtbx_row_content_inner {
		padding-bottom: 60px !important;
	}

	@media only screen and (max-width:991px) {
		.wtbx_vc_row-126754676 .wtbx_row_content_inner {
			padding-top: 60px !important;
		}
	}

	.wtbx_vc_column-126754945 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126754945 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126754945 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126754945 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_vc_content_box_inner {
		max-width: 800px;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-left-radius: 30px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-right-radius: 30px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-right-radius: 30px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-left-radius: 30px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		padding-top: 45px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		padding-right: 100px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		padding-bottom: 45px !important;
	}

	.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
		padding-left: 100px !important;
	}

	@media only screen and (max-width:991px) {
		.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
			padding-right: 10% !important;
		}

		.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
			padding-left: 10% !important;
		}
	}

	@media only screen and (max-width:767px) {
		.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
			padding-right: 30px !important;
		}

		.wtbx_vc_content_box-126755172.wtbx_vc_content_box .wtbx_content_box_container {
			padding-left: 30px !important;
		}
	}

	.wtbx_vc_text_element-126755368 .wtbx_text_element_content {
		color: #151221;
	}

	.wtbx_vc_text_element-126755368 .wtbx_text_element_content {
		font-size: 36px;
		font-weight: 600;
	}

	.wtbx_vc_text_element-126755530 .wtbx_text_element_content {
		color: #151221;
	}

	.wtbx_vc_text_element-126755530 .wtbx_text_element_content {
		font-weight: 500;
	}

	.wtbx_vc_empty_space-126755664 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_button-126755777.wtbx_vc_button .wtbx_vc_button_container .wtbx_vc_button_inner .wtbx-button {
		line-height: 3.6;
	}

	.wtbx_vc_button-126755777.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
		background-color: #09099d;
	}

	.wtbx_vc_row-126756155 .wtbx_row_content_inner {
		padding-top: 60px !important;
	}

	.wtbx_vc_row-126756155 .wtbx_row_content_inner {
		padding-bottom: 60px !important;
	}

	@media only screen and (max-width:991px) {
		.wtbx_vc_row-126756155 .wtbx_row_content_inner {
			padding-top: 60px !important;
		}
	}

	.wtbx_vc_column-126756492 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126756492 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126756492 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126756492 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_bg_idle {
		background-color: #09099d;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_vc_content_box_inner {
		max-width: 800px;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-left-radius: 30px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-right-radius: 30px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-right-radius: 30px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-left-radius: 30px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		padding-top: 45px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		padding-right: 100px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		padding-bottom: 45px !important;
	}

	.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
		padding-left: 100px !important;
	}

	@media only screen and (max-width:991px) {
		.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
			padding-right: 10% !important;
		}

		.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
			padding-left: 10% !important;
		}
	}

	@media only screen and (max-width:767px) {
		.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
			padding-right: 30px !important;
		}

		.wtbx_vc_content_box-126756794.wtbx_vc_content_box .wtbx_content_box_container {
			padding-left: 30px !important;
		}
	}

	.wtbx_vc_text_element-126757084 .wtbx_text_element_content {
		color: #ffffff;
	}

	.wtbx_vc_text_element-126757084 .wtbx_text_element_content {
		font-size: 36px;
		font-weight: 600;
	}

	.wtbx_vc_text_element-126757252 .wtbx_text_element_content {
		color: #ffffff;
	}

	.wtbx_vc_text_element-126757252 .wtbx_text_element_content {
		font-weight: 500;
	}

	#footer,
	#footer .widget .wtbx_recent_posts_cont .entry-content,
	#footer .wtbx_recent_comments .wtbx-recent-comment .comment-text,
	#footer .widget_archive ul li,
	#footer .widget_categories ul li,
	#footer .widget_rss .rssSummary,
	#footer .widget_text,
	#footer .widget_recent_comments {
		color: #ffffff
	}

	#footer .widget a {
		color: #f7f8fd
	}

	#footer .widget a:hover {
		color: #09099d
	}

	.wtbx_vc_row-126763431 .wtbx_row_content_inner {
		padding-top: 60px !important;
	}

	.wtbx_vc_column-126764197 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126764197 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126764197 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126764197 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_row-126764815 .wtbx_row_bg {
		background-color: #151221;
	}

	.wtbx_vc_row-126764815 .wtbx_row_content_inner {
		color: #ffffff;
		font-size: 14px;
	}

	.wtbx_vc_row-126764815 .wtbx_row_content_inner {
		padding-top: 0px !important;
	}

	.wtbx_vc_row-126764815 .wtbx_row_content_inner {
		padding-bottom: 30px !important;
	}

	.wtbx_vc_column-126765383 .wtbx_column_content {
		padding-top: 0px !important;
	}

	.wtbx_vc_column-126765383 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126765383 .wtbx_column_content {
		padding-bottom: 30px !important;
	}

	.wtbx_vc_column-126765383 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_column-126765383 .wtbx_column_content {
		top: auto;
		margin-top: -85px;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_bg_idle {
		background-color: #09099d;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-left-radius: 10px !important;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		border-top-right-radius: 10px !important;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-right-radius: 10px !important;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_bg,
	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		border-bottom-left-radius: 10px !important;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		padding-top: 15px !important;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		padding-right: 15px !important;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_content_box-126765804.wtbx_vc_content_box .wtbx_content_box_container {
		padding-left: 15px !important;
	}

	.wtbx_vc_empty_space-126767898 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_styled_heading-126768063.wtbx_vc_styled_heading .wtbx_heading_el_title {
		color: #ffffff;
	}

	.wtbx_vc_styled_heading-126768063.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
		font-size: 26px;
		font-weight: 700;
	}

	.wtbx_vc_empty_space-126768240 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_button-126768383.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .wtbx_button_inner {
		color: #09099d;
	}

	.wtbx_vc_button-126768383.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .bar,
	.wtbx_vc_button-126768383.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .chevron {
		fill: #09099d
	}

	.wtbx_vc_empty_space-126768566 .wtbx_empty_space_inner {
		height: 30px
	}

	.wtbx_vc_column-126768797 .wtbx_vc_column_container .wtbx_column_wrapper .wtbx_column_content {
		color: #f7f8fd;
	}

	.wtbx_vc_column-126768797 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126768797 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126768797 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126768797 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_text_element-126769206 .wtbx_text_element_content {
		color: #f7f8fd;
	}

	.wtbx_vc_text_element-126769206 .wtbx_text_element_content {
		font-size: 17px;
		font-weight: 600;
	}

	.wtbx_vc_empty_space-126769446 .wtbx_empty_space_inner {
		height: 15px
	}

	.wtbx_vc_column-126775426 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126775426 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126775426 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126775426 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_text_element-126775821 .wtbx_text_element_content {
		color: #f7f8fd;
	}

	.wtbx_vc_text_element-126775821 .wtbx_text_element_content {
		font-size: 17px;
		font-weight: 600;
	}

	.wtbx_vc_empty_space-126776095 .wtbx_empty_space_inner {
		height: 15px
	}

	.wtbx_vc_column-126781910 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126781910 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126781910 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126781910 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_text_element-126782263 .wtbx_text_element_content {
		color: #f7f8fd;
	}

	.wtbx_vc_text_element-126782263 .wtbx_text_element_content {
		font-size: 17px;
		font-weight: 600;
	}

	.wtbx_vc_empty_space-126782519 .wtbx_empty_space_inner {
		height: 15px
	}

	.wtbx_vc_column-126787936 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126787936 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126787936 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126787936 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_text_element-126788449 .wtbx_text_element_content {
		color: #f7f8fd;
	}

	.wtbx_vc_text_element-126788449 .wtbx_text_element_content {
		font-size: 17px;
		font-weight: 600;
	}

	.wtbx_vc_text_element-126788758 .wtbx_text_element_content * {
		color: #f7f8fd;
	}

	.wtbx_vc_text_element-126788758 .wtbx_text_element_content {
		font-family: 'Montserrat';
		font-weight: 500;
	}

	.wtbx_vc_social_icons-126790110.wtbx_vc_social_icons a:not(:hover) i {
		color: #f7f8fd;
	}

	.wtbx_vc_social_icons-126790110.wtbx_vc_social_icons a:hover i {
		color: #f7f8fd;
	}

	.wtbx_vc_social_icons-126790110.wtbx_vc_social_icons a:not(:hover) {
		background-color: rgba(255, 255, 255, 0.1);
	}

	.wtbx_vc_social_icons-126790110.wtbx_vc_social_icons a:hover {
		background-color: #09099d;
	}

	.wtbx_vc_empty_space-126790375 .wtbx_empty_space_inner {
		height: 15px
	}

	.wtbx_vc_column-126791690 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126791690 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126791690 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126791690 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_modal-126792853.wtbx_vc_modal .wtbx_modal_body {
		max-width: 500px;
	}

	.wtbx_vc_modal-126792853.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-top: 45px !important;
	}

	.wtbx_vc_modal-126792853.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-right: 45px !important;
	}

	.wtbx_vc_modal-126792853.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-bottom: 45px !important;
	}

	.wtbx_vc_modal-126792853.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-left: 45px !important;
	}

	.wtbx_vc_styled_heading-126793371.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
		font-size: 30px;
		font-weight: 700;
	}

	.wtbx_vc_button-126793976.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
		background-color: #09099d;
	}

	.wtbx_vc_column-126795108 .wtbx_column_content {
		padding-top: 15px !important;
	}

	.wtbx_vc_column-126795108 .wtbx_column_content {
		padding-right: 15px !important;
	}

	.wtbx_vc_column-126795108 .wtbx_column_content {
		padding-bottom: 15px !important;
	}

	.wtbx_vc_column-126795108 .wtbx_column_content {
		padding-left: 15px !important;
	}

	.wtbx_vc_modal-126795436.wtbx_vc_modal .wtbx_modal_body {
		max-width: 500px;
	}

	.wtbx_vc_modal-126795436.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-top: 45px !important;
	}

	.wtbx_vc_modal-126795436.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-right: 45px !important;
	}

	.wtbx_vc_modal-126795436.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-bottom: 45px !important;
	}

	.wtbx_vc_modal-126795436.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
		padding-left: 45px !important;
	}

	.wtbx_vc_styled_heading-126795852.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
		font-size: 30px;
		font-weight: 700;
	}

	.wtbx_vc_button-126796581.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
		background-color: #09099d;
	}
    
    ul{
        padding: 0;
        list-style-type: none;
    }.container{
        padding: 90px 0;
    }.section1{
        justify-content: space-between;
        align-items: center;
        margin: 0;
        padding: 30px 0;
    }.content-desc {
        padding: 0 0 0 5pc;
        margin: 0 auto;
        text-align: start;
    }.content-desc h3{
        font-weight: bolder;
        font-size: 4rem;
    }.content-desc p{
        margin: 0;
        font-size: 1.35rem;
        text-transform: initial;
    }.content-desc p span{
        font-weight: 900;   
    }.section1 .image img{
        width: auto;
        height: 480px;
    }.content-desc .link {
        margin-top: 10px; 
    }.content-desc .link a{
        text-transform: initial;
        background: #09099d;
        color: #fff;
        font-size: 1.4rem;
        border-radius: 7px;
        margin: 1rem 0;
        padding: 8px 1.4rem;
        font-weight: bolder;
    }.section2{
        padding: 0;
        align-items: stretch;
        margin: 0;
    }.section2 .header{
        margin: 1rem auto;
        text-align:center;
        padding: 2em 1em;
    }.section2 .header h4{
        font-size: 1.6rem
    }.section2 .header p{
        margin: 0 auto;
        text-transform: initial;
        font-size: 1.2rem
    }.section2 .content{
        background-color: #09099d;
        padding: 90px;
        color: #fff;
        display: flex;
        align-items: center;
    }.section2 .content h4{
        font-weight:900;
        font-size: 2.5rem;
        color: #fff;
    }
    .section2 .content p{
        margin-top: 2.5rem;
        font-size: 1.3rem;
        line-height: 1.9pc;
        text-transform: initial;
    }.section2 .image{
        padding: 0;
    }.section3 .header{
        text-transform: initial;
        margin: 0 auto;
        text-align: center;
        color: #fff;
        font-weight: 900;
        font-size: 2rem;
        margin: 3rem auto;
    }.section3 .header h4{
        font-weight: 900;
        font-size: 2rem;
    }.section3 .row{
        align-items: center;
        justify-content: space-between;
        margin: 0 auto;
    }.section3 .row .card{
        text-align: center;
        width: 23%;
        padding: 1.5rem 1rem 2rem;
        border-radius: 1rem;
        box-shadow: 0 0 20px -2px rgb(9 31 67 / 10%);
        border-color: transparent;
        transition: .3s ease-in;
    }.section3 .row .card:hover{
        transform: scale(1.07)
    }.section3 .row .card .card-title{
        margin-bottom: 0;
        font-size: 1.5rem;
        border: 2.24px solid #09099d;
        padding: 1rem 0;
        font-weight: 600;
        border-radius: 5px;
        letter-spacing: 1px;
        color: #687188;
    }.section3 .row .card .card-title span{
        color: #09099d;
        font-weight: 800;
    }.section3 .row .card .card-body{
        padding: 0;
        margin: 1rem 0;
    }.section3 .row .card .card-body ul{
        text-align: start;
        margin-top: 14px
    }.section3 .row .card .card-body ul li{
        display: flex;
        align-items:center;
        line-height: 2.4rem;
    }.section3 .row .card .card-body ul li i{
        font-size: 20px;
        color: #687188;
    }.section3 .row .card .card-body ul li span{
        margin-left: 14px;
        font-size:  1rem;
        color: #687188;
    }.section3 .row .card .card-body a{
        background: #09099d;
        font-size: 1.2rem;
        font-weight: 800;
        color: #fff;
        margin-top: .8rem;
        border-radius: 7px;
        padding: 0.3em 1.5rem;
    }.section3 .row .card.two ul li span:not(.card.two ul li:nth-child(4) span, .card.two ul li:nth-child(5) span),
    .section3 .row .card.one ul li:first-child span,
    .section3 .row .card.three ul li span,
    .section3 .row .card.four ul li span{
        color: #09099d;
        font-weight: 800
    }
    @media (max-width: 768px){
        .section2 {
            align-items: stretch;
        }
        .section2 .image .img-fluid {
            height: 346px;
        }
    }
    @media all and (max-width: 1024px){
        .section2 {
            align-items: stretch;
        }
        .section2 .image .img-fluid {
            height: auto;
        }
        .section3 .row .card .card-body ul {
            width: 80%;
            margin: 14px auto;
        }
        .section3 .row .card .card-body ul li span {
            margin-left: 8px;
            font-size: 1.03rem;
        } 
    }
    @media (min-width: 768px) and (max-width: 1024px){
        .container {
            padding: 90px 0 0;
        }
        .content-desc {
            padding: 0 0 0 5pc;
        }.content-desc h3 {
            font-size: 2.7rem;
        }
        .content-desc .link a {
            font-size: 1.1rem;
            margin: 0.6rem 0 0;
        }
        .content-desc p {
            margin: 0;
            font-size: 1.1rem;
        }
        .section1 .image img {
            height: 340px;
        }
        .section2 .header p {
            font-size: 1.04rem;
        }
        .section2 .content {
            background-color: #09099d;
            padding: .8rem;
            justify-content: center;
        }
        .section2 .content > div {
            margin: 0 !important;
        }
        .section2 .content h4 {
            font-size: 1.7rem;
        }
        .section2 .content p {
            margin-top: 1.2rem;
            font-size: 1.1rem;
            line-height: 1.7pc;
            margin-bottom: 0;
        }
        .section2 .image .img-fluid {
            height: auto;
        }
        .section3 .header {
            margin: 2rem auto;
        }
        .section3 .header h4 {
            font-size: 1.8rem;
            margin: 0;
        }
        .section3 .row .card {
            width: 43%;
            margin: 1rem auto;
            padding: 1.5rem 0.5rem 2rem;
        }        
        .section3 .row .card .card-title {
            font-size: 1.23rem;
            padding: .8rem 0;
            border-radius: 9px;
            width: 80%;
            margin: 0 auto;
        }
        .section3 .row .card .card-body ul li span {
            margin-left: 8px;
            font-size: .9rem;
        }
        .section3 .row .card .card-body a {
            font-size: 1.05rem;
            font-weight: 700;
            margin-top: 0.55rem;
            padding: 0.5em 1.5rem;
        }
    }
    @media all and (max-width: 1024px){
        .section3 .row .card .card-body ul li span {
            margin-left: 8px;
            font-size: .91rem;
        }
        
    }
    
    @media all and (max-width: 425px){
        .content-desc {
            padding: 0;
        }.content-desc p {
            font-size: 1.07rem;
        }.content-desc .link a {
            font-size: 1rem;
        }.section1 {
            padding:80px 0 0;
        }.section .image{
            padding: 1rem 0 0;
        }.section1 .image img {
            height: 360px;
            margin-top: 2pc;
        }.content-desc h3 {
            font-weight: bolder;
            font-size: 2rem;
        }.container {
            padding: 40px 0 10px;
        }.section2 .header h4 {
            margin: 0 auto 1rem
        }.section2 .header h4 {
            font-size: 1.2rem;
        }.section2 .header p {
            text-align: start;
            font-size: .9rem;
        }.section2 .content {
            text-align: left;
            padding: 40px 1rem;
        }.section2 .content h4 {
            font-size: 1.9rem;
        }.section2 .content p {
            margin-top: 2.5rem;
            font-size: 1.05rem;
            line-height: 1.7pc;
        }.section3 .row {
            margin: 0 auto;
        }.section3 .row .card {
            margin: 2rem auto 1rem;
            width: 70%;
            padding: 1rem 1rem 1.5rem;
        }.section3 .row .card .card-title {
            font-size: 1rem;
            font-weight: 800;
        }.section3 .header {
            margin: 2rem auto 1rem;
        }.section3 .header h4 {
            font-size: 1.7rem;
            margin: 0;
        }.section3 .row .card .card-body ul li {
            line-height: 2rem;
        }.section3 .row .card .card-body ul li i {
            font-size: 15px;
        }.section3 .row .card .card-body ul li span {
            font-size: 13px;
        }.section3 .row .card .card-body a {
            font-size: 13px;
            padding: 0.7em 1.5rem;  
        } 
    }
    @media all and (max-width: 375px){
        .container {
            padding: 50px 0 15px;
        }.section1 .image img {
            height: auto;
        }.content-desc .link a {
            font-size: .8rem;
        }.section2 .content h4 {
            font-size: 1.5rem;
        }.section2 .image .img-fluid {
            height: auto;
        }.section3 .row .card {
            width: 80%;
        }
    }
</style>
<div id="main" style="width:100%;" class="wtbx-footer-default">
	<!-- Page-wrap start -->
	<div id="page-wrap" class="clearfix">

		<div id="container" class="row-inner page-template-default no_sidebar width-default">
			<div id="content">
				<article id="post-9722" class="clearfix post-9722 page type-page status-publish hentry">
					<div class="entry-content clearfix">
						<div class="wtbx_vc_row wtbx_vc_row-126735512 wtbx_stretch_row wtbx_align_center wtbx-fadeout wtbx_anim_style_1 wtbx_row_fixed_height_screen wtbx_row-flex-align-stretch wtbx_row-content-align-middle wtbx_row-flex  wtbx_disable_height_tablet_portrait"
							data-skin="light">
							<div class="wtbx_vc_el_container wtbx_vc_row_container">
								<div class="wtbx_vc_el_inner wtbx_vc_row_inner">
									

                                <div class="container">
                                    <div class="row col-12 section1">
                                        <div class="content-desc col-10 col-md-6">
                                            <div class="col-12">
                                                <h3>Hackar.</h3>
                                                <p class="col-12">Think of a <span>Buffet</span> but for <span>Business</span>. Get what’s most important to your next level of business growth. Unique solutions to unique problems in your business 
                                                </p>
                                            </div>
                                            <div class="link">
                                                <a href="" class="btn">Choose a Plan</a>
                                            </div>
                                        </div>
                                        <div class="image col-12 col-md-6 text-center">
                                            <img src="assets/image/Picture1.png" alt="" class="img-fluid">
                                        </div>
                                        
                                    </div>
                                </div>


								</div>
							</div>
						</div>
						<div class="wtbx_vc_row wtbx_vc_row-126741377 wtbx_stretch_row wtbx_anim_style_1 wtbx_row-flex-align-stretch wtbx_row-content-align-middle wtbx_row-flex"
							id="buildr" data-skin="light">
							<div class="row col-12 section2">
                                <div class="col-12 header">
                                    <h4 style="font-weight: bolder">Let's get you Unstuck</h4>
                                    <p class="col-10 col-lg-8">Regardless of how your business journey has been, we’re here to make it super easy for you. We look at all the moving parts, figure out quickly where you’re stuck</p>
                                </div>
                                <div class="col-12 col-md-6 content">
                                    <div class="col-10 mx-auto">
                                        <h4>Hack Your Business Growth. Start Today</h4>
                                        <p class="col">We will create the fastest, shortest and the most efficient roadmap for your next level growth. Our expert team with 25 years+ combined experienced are on standby to hand-hold you. Let’s make the journey easier</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 image">
                                    <img src="assets/image/Picture5.png" alt="" class="img-fluid">
                                </div>
                            </div>
						</div>
						<div class="wtbx_vc_row wtbx_vc_row-126751346 wtbx_stretch_row wtbx_anim_style_1 wtbx_row-flex-align-stretch wtbx_row-content-align-middle wtbx_row-flex"
							data-skin="light">
							<div class="wtbx_vc_el_container wtbx_vc_row_container">
								<div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                <div class="container section3">
                                    <div class="row col-12">
                                        <div class="header col-10">
                                            <h4>Choose a Plan</h4>
                                        </div>
                                        <div class="card one col-10 col-md-6 col-lg-2">
                                            <div class="card-body">
                                                <h5 class="card-title">HACKAR<span>FLEX</span></h5>
                                                <ul>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Execution</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Performance Tracking</span></li>
                                                </ul>
                                                <a href="" class="btn">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="card two col-10 col-md-6 col-lg-2">
                                            <div class="card-body ">
                                                <h5 class="card-title">HACKAR<span>PLUS</span></h5>
                                                <ul>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Execution</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Performance Tracking</span></li>
                                                </ul>
                                                <a href="" class="btn">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="card three col-10 col-md-6 col-lg-2">
                                            <div class="card-body three">
                                                <h5 class="card-title">HACKAR<span>XTRA</span></h5>
                                                <ul>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Execution</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Performance Tracking [6x] </span></li>
                                                </ul>
                                                <a href="" class="btn">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="card four col-10 col-md-6 col-lg-2">
                                            <div class="card-body four">
                                                <h5 class="card-title">HACKAR<span>SUPA</span></h5>
                                                <ul>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Framework Session</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Strategy Execution</span></li>
                                                    <li><i class="icon-check_circle"></i><span>Performance Tracking [12x] </span></li>
                                                </ul>
                                                <a href="" class="btn">Buy Now</a>
                                            </div>
                                        </div>

                                        </div>
                                    </div>
								</div>
							</div>
						</div>
						
					</div><!-- .entry-content -->
				</article>


			</div><!-- #content -->



		</div><!-- #container -->

	</div><!-- #page-wrap  -->
</div>


<?php
    include "component/footer.php";

?>