<?php 
include 'component/header.php';
$title = "Buildr";
?>

<style type="text/css">
	a{
		text-decoration:none !important;
	}
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
	}a{
	text-decoration:none;
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
        padding: 0;
    }.content-desc {
        padding: 0;
        margin: 0 auto;
        text-align: start;
    }.content-desc h3 {
    font-weight: bolder;
    font-size: 4rem;
    color: rgba(12, 12, 100, 1);
	}.content-desc p{
        margin: 0;
        font-size: 1.35rem;
        text-transform: initial;
    }.content-desc p span {
    font-weight: 900;
    color: rgba(9, 9, 157, 1);
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
        padding: 50px;
        color: #fff;
        display: flex;
        align-items: center;
    }.section2 .content h4{
        font-weight:900;
        font-size: 2.5rem;
        color: #fff;
	}.section2 .content p{
        margin-top: 2.5rem;
        font-size: 1.3rem;
        line-height: 1.9pc;
        text-transform: initial;
    }.section2 .image{
        padding: 0;
    }
	
	

	.sectiontwo{
        padding: 50px 0 50px;
        align-items: stretch;
        margin: 0;
    }.sectiontwo .header{
        margin: 1rem auto;
        text-align:center;
        padding: 2em 1em;
    }.sectiontwo .header h4{
        font-size: 1.6rem
    }.sectiontwo .header p{
        margin: 0 auto;
        text-transform: initial;
        font-size: 1.2rem
    }.sectiontwo .body{
        background-color: #09099d;
        padding: 90px;
        color: #fff;
        display: flex;
        align-items: center;
    }.sectiontwo .body h4{
        font-weight:900;
        font-size: 2.5rem;
        color: #fff;
    }.sectiontwo .body p{
        margin-top: 2.5rem;
        font-size: 1.3rem;
        line-height: 1.9pc;
        text-transform: initial;
	}.sectiontwo .privileges, .sectiontwo .privileges ul{
        padding: 0;
    }.sectiontwo .privileges{
		background: #f6f6f6;
        padding:45px;
	}.sectiontwo .privileges > div{
		display: flex;
		align-items: center;
		justify-content: center;
	}.sectiontwo .privileges ul li{
		display: flex;
		align-items: center;
		font-size: 1.6rem;
		line-height: 1.8;
    }.sectiontwo .privileges ul li i{
		color: #09099d;
		display: flex;
		align-items: center;
		font-size: 1.45rem;
	}.sectiontwo .privileges ul li span{
		font-weight: 600;
		margin-left: 2rem;
		color: #09099d;
		font-size: 1.4rem;
    }

	
	
	
	
	.section3{
		padding: 90px 0 135px;
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
        font-size: 1.1rem;
		border: 1.8px solid #09099d;
		padding: 0.75rem 0;
		font-weight: 600;
		border-radius: 5px;
		letter-spacing: 1px;
		color: #687188;
		width: 86%;
		margin: 0 auto;
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
        font-size: 17px;
        color: #687188;
    }.section3 .row .card .card-body ul li span{
        margin-left: 14px;
        font-size:  .85rem;
        color: #687188;
    }.section3 .row .card .card-body a{
		background: #09099d;
		font-size: .93rem;
		transition:.5s ease-in;
		font-weight: 700;
		color: #fff;
		margin-top: 0.8rem;
		border-radius: 7px;
		padding: 0.4rem 1.5rem;
	}.section3 .row .card .card-body a:hover{     
    	box-shadow: 0 14px 30px -7px rgb(9 31 67 / 30%);
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
            padding: 70px 0 0;
        }
        .content-desc {
            padding: 0;
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
		.sectiontwo .privileges ul li{
			font-size: 1.3rem;
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
		.sectiontwo .body {
			padding: 40px;
		}
		.sectiontwo .privileges ul li i {
			font-size: 1.25rem;
		}
		.sectiontwo .privileges ul li span {
			font-size: 1.25rem;
		}
		
        
    }
    @media all and (max-width:769px){
		.section3 .row .card {
            width: 95%;
        }
		.sectiontwo .body h4 {
			font-weight: 800;
			font-size: 2.1rem;
		}
		.sectiontwo .body p {
			font-size: 1rem;
		}
		.sectiontwo .privileges ul li i, .sectiontwo .privileges ul li span {
			font-size: 1.17rem;
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
        }.sectiontwo {
			padding: 90px 0 50px;
		}.sectiontwo .body {
			padding: 40px 3rem;
		}.sectiontwo .body h4 {
			font-weight: 800;
			font-size: 1.6rem;
		}.sectiontwo .body p {
			margin-top: 1.5rem;
			font-size: 1.08rem;
			line-height: 1.6pc;
			text-align: start;
		}.sectiontwo .privileges {
			padding: 40px 1rem;
		}.sectiontwo .privileges ul li i{
			font-size: 1.2rem;
		}.sectiontwo .privileges ul li span{
			font-size: 1rem;
			font-weight: 500;
		}.section3 .row {
            margin: 0 auto;
        }.section3 .row .card {
            margin: 2rem auto 1rem;
            width: 93% !important;
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
        }.sectiontwo .privileges ul li i{
			font-size: 1.07rem;
		}.sectiontwo .privileges ul li span{
			font-size: 1.1rem;
			font-weight: 500;
		}.section3 .row .card .card-body a {
            font-size: 13px;
            padding: 0.7em 1.5rem;  
        } 
		.wtbx_vc_row .wtbx_row_wrapper {
			padding: 20px 0 30px;
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
            width: 93%;
        }.sectiontwo {
			padding: 50px 0 10px;
		}.sectiontwo .body {
			padding: 40px 1rem;
		}.sectiontwo .body h4 {
			font-size: 1.75rem;
		}.sectiontwo .body p {
			font-size: 1rem;
		}.sectiontwo .privileges ul li i{
			font-size: 1.03rem;
		}.sectiontwo .privileges ul li span{
			font-size: 1.07rem;
			font-weight: 500;
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
                                        <div class="content-desc wow fadeInLeftBig col-10 col-md-6">
                                            <div class="col-12">
                                                <h3>0 to 1.</h3>
                                                <p class="col-12">
												A practical weekly virtual knowledge session where we host
												established <span> African founders</span> and key players in the startup
												space to share relatable information around <span>launching</span>,
												<span>building</span> and <span>scaling</span> a startup in Africa

                                                </p>
                                            </div>
											<br>
                                            <div class="wtbx_vc_button wtbx_vc_button-126754262 wtbx_style_arrow wtbx_type_simple wtbx_skin_dark wtbx_size_ wtbx_display_block">
																									<div class="wtbx_vc_el_container wtbx_vc_button_container">
																										<div class="wtbx_vc_el_inner wtbx_vc_button_inner">
																											<a href="#" target="_self" class="wtbx-button wtbx-button-arrow" rel="noopener"><span class="wtbx_button_inner">Free Access</span><svg class="wtbx_link_arrow" viewBox="0 0 813 486" xmlns="http://www.w3.org/2000/svg">
																													<rect class="bar" height="60" rx="30" width="800" y="213">
																													</rect>
																													<path class="chevron" d="m793.388955 224.472433c9.626991 11.783528 8.945751 29.177709-2.043717 40.167177l-200.139611 200.139611c-11.715728 11.715728-30.710678 11.715728-42.426406 0-11.715729-11.715729-11.715729-30.710679 0-42.426407l179.073593-179.073593-179.352814-179.3528141c-11.715729-11.7157288-11.715729-30.7106781 0-42.4264069 11.715729-11.71572875 30.710678-11.71572875 42.426407 0l199.418831 199.418831c1.122031 1.122031 2.136603 2.310828 3.043717 3.553602z">
																													</path>
																												</svg></a>
																										</div>
																									</div>
																								</div>
                                        </div>
                                        <div class="image col-12 wow fadeInRightBig col-md-6 text-center">
                                            <img src="assets/image/Picture3.png" alt="" class="img-fluid">
                                        </div>
                                        
                                    </div>
                                </div>

								</div>
							</div>
						</div>
					
						<!-- bootstrap cdn link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
	.para{
		font-weight: 900;
		font-size: 3.7rem;
	}.inner-para{
		font-weight: 700;
		font-size: 1.5rem;
	}.wtbx_vc_button-126746997.wtbx_vc_button .wtbx_vc_button_container .wtbx_vc_button_inner .wtbx-button {
		line-height: 3.6;
		font-size: 1.05rem;
		font-weight: 900;
	}.section2{
        padding: 0px 0 150px;
        align-items: stretch;
        margin: 0;
    }.section2 .header{
        margin: 1rem auto;
        text-align:center;
        padding: 2em 1em;
    }.section2 .header h4{
        font-size: 1.6rem;
		color: #09099d;
    }.section2 .header p{
        margin: 0 auto;
        text-transform: initial;
        font-size: 1.2rem
    }.section2 .content{
        background-color: #09099d;
        color: #fff;
        display: flex;
        align-items: center;
    }.section2 .content h4{
        font-weight:900;
        font-size: 2.5rem;
        color: #fff;
		
    }.section2 .content p{
        margin-top: 2.5rem;
        font-size: 1.3rem;
        line-height: 1.9pc;
        text-transform: initial;
	}.section2 .privileges, .section2 .privileges ul{
        padding: 0;
    }.section2 .privileges{
		background: #f6f6f6;
        padding:45px;
	}.section2 .privileges > div{
		display: flex;
		align-items: center;
		justify-content: center;
	}.section2 .privileges ul li{
		display: flex;
		align-items: center;
		font-size: 1.6rem;
		line-height: 1.8;
    }.section2 .privileges ul li i{
		color: #09099d;
		display: flex;
		align-items: center;
		font-size: 1.4rem;
	}.section2 .privileges ul li span{
		font-weight: 600;
		margin-left: 2rem;
		color: #09099d;
		font-size: 1.4rem;
    }

	@media (min-width: 768px) and (max-width: 1025px){
		.para {
			font-size: 2.5rem;
		}
		.wtbx-image-crop img {
			height: 300px;
		}.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx-button {
   			padding: 0 1.8em;
		}.wtbx_vc_button-126755777.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
			padding: 0 1.8em;
			font-size: 14px;
		}.wtbx_vc_button-126746997.wtbx_vc_button .wtbx_vc_button_container .wtbx_vc_button_inner .wtbx-button {
			font-size: 13px;
		}.wtbx-image-crop {
    		justify-content: center;
			padding-bottom: 100% !important;
		}.wtbx_vc_styled_heading-126739291.wtbx_vc_styled_heading .wtbx_heading_el_title {
			font-size: 1.9rem;
		}.wtbx_vc_column-126742143 .wtbx_column_content {
			padding-left: 40px !important;
		}.inner-para {
			font-size: 1rem;
		}.section2 .header p {
			font-size: 1.04rem;
		}.wtbx_vc_row.wtbx_row-flex .wtbx_row_content .wtbx_row_content_inner .wtbx_vc_column {
			margin: 0 auto;
		}.section2 .content,.section2 .privileges {
			padding: 50px;
		}.section2 .content h4 {
			font-size: 2rem;
		}.section2 .content p {
			margin-top: 2rem;
			font-size: 1.05rem;
			line-height: 1.7pc;
		}.section2 .privileges ul li i,
		.section2 .privileges ul li span {
			font-size: 1.2rem;
		}
	}

	@media all and (max-width: 425px){
		.para {
			font-weight: 800;
			font-size: 2.7rem;
		}.inner-para {
			font-weight: 600;
			font-size: 1.1rem;
		}.wtbx_vc_row-126741377 .wtbx_row_content_inner {
			padding-top: 10px !important;
		}		.wtbx_vc_column-126742143 .wtbx_column_content {
			padding-bottom: 0px !important;
		} .wtbx_vc_row.wtbx_row-flex-align-stretch.wtbx_vc_inner_row .wtbx_inner_row_content_inner {
    		padding: 0 !important;
		}.wtbx_vc_button-126746997.wtbx_vc_button .wtbx_vc_button_container .wtbx_vc_button_inner .wtbx-button {
			font-size: .9rem;
			padding: 0 1.5rem;
			font-weight: 800;
		}.wtbx_vc_row-126754676 .wtbx_row_content_inner {
			padding-bottom: 10px !important;
		}.wtbx_vc_text_element-126755530 .wtbx_text_element_content {
			font-size: 13px;
			margin-top: 1rem;
			text-align: justify;
		}.wtbx_vc_button-126755777.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
			background-color: #09099d;
			font-size: 12px;
		}.wtbx_vc_styled_heading-126739291.wtbx_vc_styled_heading .wtbx_heading_el_title {
			font-size: 68%;
		}.wtbx-image-crop img {
			height: auto;
    		width: auto;
		}.section2 .content {
            text-align: left;
			padding: 40px 1rem;
		}.section2 .header p {
			font-size: .95rem;
			text-align: justify;
		}.section2 .header h4 {
			font-size: 1.5rem;
		}.section2 .privileges {
			padding: 40px 1rem;
		}.section2 .content h4 {
			font-weight: 800;
			font-size: 1.6rem;
		}.section2 .content p {
			margin-top: 1.5rem;
			font-size: 1.08rem;
			line-height: 1.6pc;
			text-align: start;
		}.section2 .privileges ul li i {
			font-size: 1.1rem;
		}.section2 .privileges ul li span {
			font-size: 1.2rem;
		}
	}

	@media all and (max-width: 375px){
		.section2 .header p {
			font-size: .9rem;
			font-weight: 600;
		}.section2 .content h4 {
			font-size: 1.75rem;
		}.section2 .content p {
			font-size: 1rem;
		}.section2 .privileges ul li {
			font-size: 1.1rem;
		}
	}
	
	</style>
			<div class="row col-12 section2">
				<div class="col-12 header wow flipInX" data-wow-delay="0.2s">
					<h4 style="font-weight: bolder"> Knowledge that triggers Execution</h4>
					<p class="col-10 col-md-8">There’s absolutely no need to bore you with what’s googleable. We bring you practical and relatable unique stories from big players in the African startup ecosystem so that you can move seamlessly from 0 to 1</p>
				</div>
				<div class="col-12 col-md-6 content">
					<div class="col-10 mx-auto wow fadeInUp">
						<h4>Go from 0 to 1</h4>
						<p class="col">Ideas are $0. Execution is the game! Go from knowing to doing. There are no ‘Unicorn Ideas’. Ideas no longer rule the world, Execution does</p>
					</div>
				</div>
				<div class="col-12 col-md-6 privileges">
					<div>
						<ul>
							<li class="wow fadeInUp" data-wow-delay="0.1s"><i class="icon-check_circle"></i><span>Startup Playbook</span></li>
							<li class="wow fadeInUp" data-wow-delay="0.3s"><i class="icon-check_circle"></i><span>Launch Tools</span></li>
							<li class="wow fadeInUp" data-wow-delay="0.5s"><i class="icon-check_circle"></i><span>Group Coaching calls</span></li>
							<li class="wow fadeInUp" data-wow-delay="0.7s"><i class="icon-check_circle"></i><span>Free Event Access</span></li>
							<li class="wow fadeInUp" data-wow-delay="0.9s"><i class="icon-check_circle"></i><span>Accessibility</span></li>
							<li class="wow fadeInUp" data-wow-delay="1.1s"><i class="icon-check_circle"></i><span>Digital Visibility</span></li>
							<li class="wow fadeInUp" data-wow-delay="1.3s"><i class="icon-check_circle"></i><span>Network Collaboration</span></li>
						</ul>
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














