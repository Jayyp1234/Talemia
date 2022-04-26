<?php 
include 'component/header.php';
$title = "Faqs - Talemia";
?>
<style type="text/css">
    .wtbx_vc_row-28475347 .wtbx_row_bg {
        background-color: #09099d;
    }

    .wtbx_vc_row-28475347 .wtbx_row_content_inner {
        padding-top: 180px !important;
    }

    .wtbx_vc_column-28476193 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28476193 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28476193 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28476193 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_styled_heading-28476569.wtbx_vc_styled_heading .wtbx_heading_el_title {
        color: #f7f8fd;
    }

    .wtbx_vc_styled_heading-28476569.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 40px;
    }

    @media only screen and (max-width: 979px) {
        .wtbx_vc_styled_heading-28476569.wtbx_vc_styled_heading .wtbx_heading_el_title {
            font-size: 90%
        }
    }

    @media only screen and (max-width: 767px) {
        .wtbx_vc_styled_heading-28476569.wtbx_vc_styled_heading .wtbx_heading_el_title {
            font-size: 80%
        }
    }

    @media only screen and (max-width: 479px) {
        .wtbx_vc_styled_heading-28476569.wtbx_vc_styled_heading .wtbx_heading_el_title {
            font-size: 70%
        }
    }

    .wtbx_vc_text_element-28476850 .wtbx_text_element_content {
        color: #ffffff;
    }

    .wtbx_vc_text_element-28476850 .wtbx_text_element_content {
        font-size: 16px;
    }

    .wtbx_vc_row-28477204 .wtbx_row_bg {
        background-color: #09099d;
    }

    .wtbx_vc_row-28477204 .wtbx_row_content_inner {
        padding-top: 30px !important;
    }

    .wtbx_vc_row-28477204 .wtbx_row_content_inner {
        padding-bottom: 60px !important;
    }

    .wtbx_vc_column-28477819 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28477819 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28477819 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28477819 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_bg_idle {
        background-color: #ffffff;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-left-radius: 8px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-right-radius: 8px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-right-radius: 8px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-left-radius: 8px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        padding-top: 45px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        padding-right: 45px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_content_box-28478230.wtbx_vc_content_box .wtbx_content_box_container {
        padding-left: 45px !important;
    }

    .wtbx_vc_service-28479867.wtbx_vc_service.wtbx_vc_service .wtbx_vc_service_inner .wtbx_service_bullet_inner,
    .wtbx_vc_service-28479867.wtbx_vc_service.wtbx_vc_service .wtbx_vc_service_inner .wtbx_service_bullet_inner i {
        color: #09099d;
    }

    .wtbx_vc_service-28479867.wtbx_vc_service .wtbx_service_content .wtbx_service_title {
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
    }

    .wtbx_vc_expandable_list-28480534.wtbx_vc_expandable_list .wtbx_vc_el_inner .wtbx_vc_exp_list_item .wtbx_exp_list_title_wrapper,
    .wtbx_vc_expandable_list-28480534.wtbx_vc_expandable_list .wtbx_vc_el_inner .wtbx_vc_exp_list_item .wtbx_exp_list_title_wrapper .wtbx_exp_list_title {
        font-size: 16px;
        font-weight: 400;
    }

    .wtbx_vc_empty_space-28484223 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_bg_idle {
        background-color: #ffffff;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-left-radius: 8px !important;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-right-radius: 8px !important;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-right-radius: 8px !important;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-left-radius: 8px !important;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        padding-top: 45px !important;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        padding-right: 45px !important;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_content_box-28484450.wtbx_vc_content_box .wtbx_content_box_container {
        padding-left: 45px !important;
    }

    .wtbx_vc_service-28484727.wtbx_vc_service.wtbx_vc_service .wtbx_vc_service_inner .wtbx_service_bullet_inner,
    .wtbx_vc_service-28484727.wtbx_vc_service.wtbx_vc_service .wtbx_vc_service_inner .wtbx_service_bullet_inner i {
        color: rgba(137, 95, 255, 1);
    }

    .wtbx_vc_service-28484727.wtbx_vc_service .wtbx_service_content .wtbx_service_title {
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
    }

    .wtbx_vc_expandable_list-28484857.wtbx_vc_expandable_list .wtbx_vc_el_inner .wtbx_vc_exp_list_item .wtbx_exp_list_title_wrapper,
    .wtbx_vc_expandable_list-28484857.wtbx_vc_expandable_list .wtbx_vc_el_inner .wtbx_vc_exp_list_item .wtbx_exp_list_title_wrapper .wtbx_exp_list_title {
        font-size: 16px;
        font-weight: 400;
    }

    .wtbx_vc_column-28486040 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28486040 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28486040 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28486040 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_bg_idle {
        background-color: #ffffff;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-left-radius: 8px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-right-radius: 8px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-right-radius: 8px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-left-radius: 8px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        padding-top: 45px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        padding-right: 45px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_content_box-28486426.wtbx_vc_content_box .wtbx_content_box_container {
        padding-left: 45px !important;
    }

    .wtbx_vc_service-28486785.wtbx_vc_service.wtbx_vc_service .wtbx_vc_service_inner .wtbx_service_bullet_inner,
    .wtbx_vc_service-28486785.wtbx_vc_service.wtbx_vc_service .wtbx_vc_service_inner .wtbx_service_bullet_inner i {
        color: rgba(137, 95, 255, 1);
    }

    .wtbx_vc_service-28486785.wtbx_vc_service .wtbx_service_content .wtbx_service_title {
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
    }

    .wtbx_vc_expandable_list-28486981.wtbx_vc_expandable_list .wtbx_vc_el_inner .wtbx_vc_exp_list_item .wtbx_exp_list_title_wrapper,
    .wtbx_vc_expandable_list-28486981.wtbx_vc_expandable_list .wtbx_vc_el_inner .wtbx_vc_exp_list_item .wtbx_exp_list_title_wrapper .wtbx_exp_list_title {
        font-size: 16px;
        font-weight: 400;
    }

    .wtbx_vc_empty_space-28488883 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_row-28489350 .wtbx_row_bg {}

    .wtbx_vc_row-28489350 .wtbx_row_bg {
        border-top-width: 1px !important;
    }

    .wtbx_vc_row-28489350 .wtbx_row_bg {
        border-right-width: 0px !important;
    }

    .wtbx_vc_row-28489350 .wtbx_row_bg {
        border-bottom-width: 0px !important;
    }

    .wtbx_vc_row-28489350 .wtbx_row_bg {
        border-left-width: 0px !important;
    }

    .wtbx_vc_row-28489350 .wtbx_row_bg {
        border-style: solid !important;
    }

    .wtbx_vc_row-28489350 .wtbx_row_content_inner {
        padding-top: 60px !important;
    }

    .wtbx_vc_row-28489350 .wtbx_row_content_inner {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_row-28489350 .wtbx_row_bg {
        border-color: #ebebf5;
    }

    .wtbx_vc_column-28490059 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28490059 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28490059 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28490059 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_styled_heading-28490506.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 20px;
        font-weight: 600;
    }

    .wtbx_vc_text_element-28490731 .wtbx_text_element_content {
        font-size: 16px;
    }

    .wtbx_vc_empty_space-28490910 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_button-28491108.wtbx_vc_button.wtbx_style_arrow .wtbx_vc_button_container .wtbx-button {
        margin-top: 15px;
        margin-right: 15px;
        margin-bottom: 15px;
        margin-left: 15px;
    }

    .wtbx_vc_button-28491108.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
        background-color: #09099d;
    }

    .wtbx_vc_button-28491385.wtbx_vc_button.wtbx_style_arrow .wtbx_vc_button_container .wtbx-button {
        margin-top: 15px;
        margin-right: 15px;
        margin-bottom: 15px;
        margin-left: 15px;
    }

    .wtbx_vc_button-28491385.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
        background-color: #00a2f4;
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

    .wtbx_vc_row-28495166 .wtbx_row_content_inner {
        padding-top: 60px !important;
    }

    .wtbx_vc_column-28495980 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28495980 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28495980 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28495980 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_row-28496469 .wtbx_row_bg {
        background-color: #151221;
    }

    .wtbx_vc_row-28496469 .wtbx_row_content_inner {
        color: #ffffff;
        font-size: 14px;
    }

    .wtbx_vc_row-28496469 .wtbx_row_content_inner {
        padding-top: 0px !important;
    }

    .wtbx_vc_row-28496469 .wtbx_row_content_inner {
        padding-bottom: 30px !important;
    }

    .wtbx_vc_column-28497113 .wtbx_column_content {
        padding-top: 0px !important;
    }

    .wtbx_vc_column-28497113 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28497113 .wtbx_column_content {
        padding-bottom: 30px !important;
    }

    .wtbx_vc_column-28497113 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_column-28497113 .wtbx_column_content {
        top: auto;
        margin-top: -85px;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_bg_idle {
        background-color: #09099d;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-left-radius: 10px !important;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-right-radius: 10px !important;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-right-radius: 10px !important;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-left-radius: 10px !important;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        padding-top: 15px !important;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        padding-right: 15px !important;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_content_box-28497453.wtbx_vc_content_box .wtbx_content_box_container {
        padding-left: 15px !important;
    }

    .wtbx_vc_empty_space-28498064 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_styled_heading-28498291.wtbx_vc_styled_heading .wtbx_heading_el_title {
        color: #ffffff;
    }

    .wtbx_vc_styled_heading-28498291.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 26px;
        font-weight: 700;
    }

    .wtbx_vc_empty_space-28498545 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_button-28498736.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .wtbx_button_inner {
        color: #09099d;
    }

    .wtbx_vc_button-28498736.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .bar,
    .wtbx_vc_button-28498736.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .chevron {
        fill: #09099d
    }

    .wtbx_vc_empty_space-28498968 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_column-28499282 .wtbx_vc_column_container .wtbx_column_wrapper .wtbx_column_content {
        color: #f7f8fd;
    }

    .wtbx_vc_column-28499282 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28499282 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28499282 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28499282 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-28499677 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-28499677 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_empty_space-28499846 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-28502879 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28502879 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28502879 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28502879 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-28503239 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-28503239 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_empty_space-28503520 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-28505351 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28505351 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28505351 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28505351 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-28505557 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-28505557 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_empty_space-28505715 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-28508183 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28508183 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28508183 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28508183 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-28508597 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-28508597 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_text_element-28508851 .wtbx_text_element_content * {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-28508851 .wtbx_text_element_content {
        font-family: 'Montserrat';
        font-weight: 500;
    }

    .wtbx_vc_social_icons-28509216.wtbx_vc_social_icons a:not(:hover) i {
        color: #f7f8fd;
    }

    .wtbx_vc_social_icons-28509216.wtbx_vc_social_icons a:hover i {
        color: #f7f8fd;
    }

    .wtbx_vc_social_icons-28509216.wtbx_vc_social_icons a:not(:hover) {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .wtbx_vc_social_icons-28509216.wtbx_vc_social_icons a:hover {
        background-color: #09099d;
    }

    .wtbx_vc_empty_space-28509469 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-28510769 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28510769 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28510769 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28510769 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_modal-28511178.wtbx_vc_modal .wtbx_modal_body {
        max-width: 500px;
    }

    .wtbx_vc_modal-28511178.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-top: 45px !important;
    }

    .wtbx_vc_modal-28511178.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-right: 45px !important;
    }

    .wtbx_vc_modal-28511178.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_modal-28511178.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-left: 45px !important;
    }

    .wtbx_vc_styled_heading-28511474.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 30px;
        font-weight: 700;
    }

    .wtbx_vc_button-28511863.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
        background-color: #09099d;
    }

    .wtbx_vc_column-28513135 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-28513135 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-28513135 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-28513135 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_modal-28513460.wtbx_vc_modal .wtbx_modal_body {
        max-width: 500px;
    }

    .wtbx_vc_modal-28513460.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-top: 45px !important;
    }

    .wtbx_vc_modal-28513460.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-right: 45px !important;
    }

    .wtbx_vc_modal-28513460.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_modal-28513460.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-left: 45px !important;
    }

    .wtbx_vc_styled_heading-28513671.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 30px;
        font-weight: 700;
    }

    .wtbx_vc_button-28514000.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
        background-color: #09099d;
    }
</style>
<div id="main" class="wtbx-footer-default">



    <!-- Page-wrap start -->
    <div id="page-wrap" class="clearfix">

        <div id="container" class="row-inner page-template-default no_sidebar width-default">
            <div id="content">


                <article id="post-2840" class="clearfix post-2840 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        <div class="wtbx_vc_row wtbx_vc_row-28475347 wtbx_stretch_row wtbx_align_center wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_bg"></div>
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-28476193">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_styled_heading wtbx_vc_styled_heading-28476569 wtbx_style_default">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_styled_heading_container clearfix">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_styled_heading_inner">
                                                                                    <div
                                                                                        class="wtbx_heading_el_title_wrapper h1">
                                                                                        <h1
                                                                                            class="wtbx_heading_el_title wtbx-text">
                                                                                            Frequently Asked Questions
                                                                                        </h1>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wtbx_vc_text_element wtbx_vc_text_element-28476850 wtbx_display_block">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                <div class="wtbx_text_element_content">
                                                                                    <div
                                                                                        class="wtbx_text_element_inner">
                                                                                        <p>Here’s a few answers to our
                                                                                            most common questions.</p>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wtbx_vc_row wtbx_vc_row-28477204 wtbx_stretch_row wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_bg"></div>
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-6 wtbx_with_image wtbx_vc_column-28477819">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_content_box wtbx_vc_content_box-28478230 wtbx_style_custom wtbx_small_shadow wtbx_hover_no_shadow wtbx_border_default wtbx_scale_">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_content_box_container wtbx_equal_height_cont clearfix">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_content_box_inner wtbx_equal_height_cont clearfix">
                                                                                    <div
                                                                                        class="wtbx_content_box_bg wtbx_content_box_bg_idle">
                                                                                    </div>
                                                                                    <div
                                                                                        class="wtbx_content_box_container">
                                                                                        <div
                                                                                            class="wtbx_content_box_wrapper">
                                                                                            <div
                                                                                                class="wtbx_content_box_content">
                                                                                                <div
                                                                                                    class="wtbx_vc_service wtbx_vc_service-28479867 wtbx_style_left wtbx_bullet_cont_empty wtbx_bullet_no_shadow wtbx_bullet_no_border">
                                                                                                    <div
                                                                                                        class="wtbx_vc_el_container wtbx_vc_service_container">
                                                                                                        <div
                                                                                                            class="wtbx_vc_el_inner wtbx_vc_service_inner icon_anim_container">
                                                                                                            <div
                                                                                                                class="wtbx_service_content">
                                                                                                                <div
                                                                                                                    class="wtbx_service_title wtbx_textholder wtbx-text">
                                                                                                                    Talemia
                                                                                                                    FAQs
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="wtbx_vc_expandable_list wtbx_vc_expandable_list-28480534 wtbx_style_default wtbx_skin_light">
                                                                                                    <div
                                                                                                        class="wtbx_vc_el_container wtbx_vc_expandable_list_container">
                                                                                                        <div
                                                                                                            class="wtbx_vc_el_inner wtbx_vc_expandable_list_inner">
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28481228 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    01.
                                                                                                                                    Is
                                                                                                                                    Talemia
                                                                                                                                    a
                                                                                                                                    Startup
                                                                                                                                    School
                                                                                                                                    like
                                                                                                                                    YC?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="wtbx_exp_list_content_wrapper"
                                                                                                                            style="display: none;">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28481571 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>No,
                                                                                                                                                    we
                                                                                                                                                    are
                                                                                                                                                    a
                                                                                                                                                    solution
                                                                                                                                                    based
                                                                                                                                                    platform
                                                                                                                                                    that’s
                                                                                                                                                    designing
                                                                                                                                                    experiences
                                                                                                                                                    that
                                                                                                                                                    helps
                                                                                                                                                    early
                                                                                                                                                    stage
                                                                                                                                                    African
                                                                                                                                                    founders
                                                                                                                                                    launch
                                                                                                                                                    their
                                                                                                                                                    startups
                                                                                                                                                    faster.
                                                                                                                                                    We
                                                                                                                                                    are
                                                                                                                                                    a
                                                                                                                                                    mix
                                                                                                                                                    of
                                                                                                                                                    knowledge
                                                                                                                                                    sharing
                                                                                                                                                    +
                                                                                                                                                    community
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28481756 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    02.
                                                                                                                                    Does
                                                                                                                                    Talemia
                                                                                                                                    give
                                                                                                                                    seed
                                                                                                                                    capital
                                                                                                                                    to
                                                                                                                                    early
                                                                                                                                    stage
                                                                                                                                    founders?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28481931 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>We
                                                                                                                                                    don’t
                                                                                                                                                    give
                                                                                                                                                    seed
                                                                                                                                                    capital
                                                                                                                                                    for
                                                                                                                                                    now
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28482075 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    03.
                                                                                                                                    Does
                                                                                                                                    Talemia
                                                                                                                                    help
                                                                                                                                    early
                                                                                                                                    stage
                                                                                                                                    founders
                                                                                                                                    with
                                                                                                                                    structure?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28482243 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Absolutely!
                                                                                                                                                    This
                                                                                                                                                    is
                                                                                                                                                    why
                                                                                                                                                    we
                                                                                                                                                    launched
                                                                                                                                                    Buildr,
                                                                                                                                                    our
                                                                                                                                                    early
                                                                                                                                                    stage
                                                                                                                                                    founders
                                                                                                                                                    community
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28482404 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    04.
                                                                                                                                    Does
                                                                                                                                    Talemia
                                                                                                                                    work
                                                                                                                                    with
                                                                                                                                    non-African
                                                                                                                                    early
                                                                                                                                    stage
                                                                                                                                    founders?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28482576 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>No
                                                                                                                                                    we
                                                                                                                                                    dont.
                                                                                                                                                    We
                                                                                                                                                    are
                                                                                                                                                    ridiculously
                                                                                                                                                    focused
                                                                                                                                                    on
                                                                                                                                                    African
                                                                                                                                                    founders
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28482717 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    05.
                                                                                                                                    Does
                                                                                                                                    Talemia
                                                                                                                                    work
                                                                                                                                    with
                                                                                                                                    startup
                                                                                                                                    founders
                                                                                                                                    who
                                                                                                                                    have
                                                                                                                                    gone
                                                                                                                                    beyond
                                                                                                                                    early
                                                                                                                                    stage
                                                                                                                                    level?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28482880 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Our
                                                                                                                                                    target
                                                                                                                                                    market
                                                                                                                                                    is
                                                                                                                                                    restricted
                                                                                                                                                    to
                                                                                                                                                    early
                                                                                                                                                    stage
                                                                                                                                                    founders
                                                                                                                                                    for
                                                                                                                                                    now
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28483020 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    06.
                                                                                                                                    Will
                                                                                                                                    Talemia
                                                                                                                                    become
                                                                                                                                    a
                                                                                                                                    Venture
                                                                                                                                    Capital
                                                                                                                                    Platform
                                                                                                                                    in
                                                                                                                                    a
                                                                                                                                    few
                                                                                                                                    years?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28483184 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Maybe
                                                                                                                                                    we
                                                                                                                                                    could!
                                                                                                                                                    Fingers
                                                                                                                                                    crossed
                                                                                                                                                    🤞🏾
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28483332 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    07.
                                                                                                                                    Does
                                                                                                                                    Talemia
                                                                                                                                    consult
                                                                                                                                    for
                                                                                                                                    Traditional
                                                                                                                                    based
                                                                                                                                    small
                                                                                                                                    businesses?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28483500 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Absolutely.
                                                                                                                                                    We
                                                                                                                                                    have
                                                                                                                                                    a
                                                                                                                                                    faculty
                                                                                                                                                    of
                                                                                                                                                    business
                                                                                                                                                    gurus
                                                                                                                                                    (experts).
                                                                                                                                                    Shoot
                                                                                                                                                    us
                                                                                                                                                    an
                                                                                                                                                    email
                                                                                                                                                    on
                                                                                                                                                    hello@talemia.com
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28483639 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    08.
                                                                                                                                    Does
                                                                                                                                    Talemia
                                                                                                                                    register
                                                                                                                                    businesses
                                                                                                                                    for
                                                                                                                                    entrepreneurs?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28483803 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Yes!
                                                                                                                                                    We
                                                                                                                                                    have
                                                                                                                                                    partnered
                                                                                                                                                    with
                                                                                                                                                    a
                                                                                                                                                    few
                                                                                                                                                    legal
                                                                                                                                                    firms
                                                                                                                                                    who
                                                                                                                                                    make
                                                                                                                                                    the
                                                                                                                                                    process
                                                                                                                                                    hassle
                                                                                                                                                    free
                                                                                                                                                    and
                                                                                                                                                    faster.
                                                                                                                                                    Shoot
                                                                                                                                                    us
                                                                                                                                                    an
                                                                                                                                                    email
                                                                                                                                                    on
                                                                                                                                                    hello@talemia.com
                                                                                                                                                </p>
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
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="wtbx_vc_empty_space wtbx_vc_empty_space-28484223">
                                                                            <span class="wtbx_empty_space_inner"></span>
                                                                        </div>
                                                                        <div
                                                                            class="wtbx_vc_content_box wtbx_vc_content_box-28484450 wtbx_style_custom wtbx_small_shadow wtbx_hover_no_shadow wtbx_border_default wtbx_scale_">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_content_box_container wtbx_equal_height_cont clearfix">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_content_box_inner wtbx_equal_height_cont clearfix">
                                                                                    <div
                                                                                        class="wtbx_content_box_bg wtbx_content_box_bg_idle">
                                                                                    </div>
                                                                                    <div
                                                                                        class="wtbx_content_box_container">
                                                                                        <div
                                                                                            class="wtbx_content_box_wrapper">
                                                                                            <div
                                                                                                class="wtbx_content_box_content">
                                                                                                <div
                                                                                                    class="wtbx_vc_service wtbx_vc_service-28484727 wtbx_style_left wtbx_bullet_cont_empty wtbx_bullet_no_shadow wtbx_bullet_no_border">
                                                                                                    <div
                                                                                                        class="wtbx_vc_el_container wtbx_vc_service_container">
                                                                                                        <div
                                                                                                            class="wtbx_vc_el_inner wtbx_vc_service_inner icon_anim_container">
                                                                                                            <div
                                                                                                                class="wtbx_service_content">
                                                                                                                <div
                                                                                                                    class="wtbx_service_title wtbx_textholder wtbx-text">
                                                                                                                    0 to
                                                                                                                    1
                                                                                                                    FAQs
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="wtbx_vc_expandable_list wtbx_vc_expandable_list-28484857 wtbx_style_default wtbx_skin_light">
                                                                                                    <div
                                                                                                        class="wtbx_vc_el_container wtbx_vc_expandable_list_container">
                                                                                                        <div
                                                                                                            class="wtbx_vc_el_inner wtbx_vc_expandable_list_inner">
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28485020 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    01.
                                                                                                                                    What
                                                                                                                                    is
                                                                                                                                    the
                                                                                                                                    access
                                                                                                                                    fee
                                                                                                                                    to
                                                                                                                                    join
                                                                                                                                    0
                                                                                                                                    to
                                                                                                                                    1
                                                                                                                                    weekly
                                                                                                                                    sessions?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28485199 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Absolutely
                                                                                                                                                    free!
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28485389 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    02.
                                                                                                                                    What
                                                                                                                                    is
                                                                                                                                    the
                                                                                                                                    access
                                                                                                                                    code
                                                                                                                                    to
                                                                                                                                    join
                                                                                                                                    0
                                                                                                                                    to
                                                                                                                                    1
                                                                                                                                    weekly
                                                                                                                                    sessions?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28485652 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Search
                                                                                                                                                    for
                                                                                                                                                    ‘’Talemia’’
                                                                                                                                                    on
                                                                                                                                                    Clubhouse
                                                                                                                                                    and
                                                                                                                                                    join
                                                                                                                                                    our
                                                                                                                                                    room
                                                                                                                                                    or
                                                                                                                                                    visit
                                                                                                                                                    <span
                                                                                                                                                        style="text-decoration: underline;">www.talemia.com/product</span>
                                                                                                                                                </p>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-6 wtbx_with_image wtbx_vc_column-28486040">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_content_box wtbx_vc_content_box-28486426 wtbx_style_custom wtbx_small_shadow wtbx_hover_no_shadow wtbx_border_default wtbx_scale_">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_content_box_container wtbx_equal_height_cont clearfix">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_content_box_inner wtbx_equal_height_cont clearfix">
                                                                                    <div
                                                                                        class="wtbx_content_box_bg wtbx_content_box_bg_idle">
                                                                                    </div>
                                                                                    <div
                                                                                        class="wtbx_content_box_container">
                                                                                        <div
                                                                                            class="wtbx_content_box_wrapper">
                                                                                            <div
                                                                                                class="wtbx_content_box_content">
                                                                                                <div
                                                                                                    class="wtbx_vc_service wtbx_vc_service-28486785 wtbx_style_left wtbx_bullet_cont_empty wtbx_bullet_no_shadow wtbx_bullet_no_border">
                                                                                                    <div
                                                                                                        class="wtbx_vc_el_container wtbx_vc_service_container">
                                                                                                        <div
                                                                                                            class="wtbx_vc_el_inner wtbx_vc_service_inner icon_anim_container">
                                                                                                            <div
                                                                                                                class="wtbx_service_content">
                                                                                                                <div
                                                                                                                    class="wtbx_service_title wtbx_textholder wtbx-text">
                                                                                                                    Buildr
                                                                                                                    FAQs
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="wtbx_vc_expandable_list wtbx_vc_expandable_list-28486981 wtbx_style_default wtbx_skin_light">
                                                                                                    <div
                                                                                                        class="wtbx_vc_el_container wtbx_vc_expandable_list_container">
                                                                                                        <div
                                                                                                            class="wtbx_vc_el_inner wtbx_vc_expandable_list_inner">
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28487202 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    01.
                                                                                                                                    What
                                                                                                                                    is
                                                                                                                                    the
                                                                                                                                    access
                                                                                                                                    fee
                                                                                                                                    to
                                                                                                                                    join
                                                                                                                                    Buildr?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28487415 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>You
                                                                                                                                                    can
                                                                                                                                                    access
                                                                                                                                                    buildr
                                                                                                                                                    at
                                                                                                                                                    a
                                                                                                                                                    $3
                                                                                                                                                    monthly
                                                                                                                                                    subscription
                                                                                                                                                    fee.
                                                                                                                                                    Cheaper
                                                                                                                                                    than
                                                                                                                                                    Netflix!
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28487566 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    02.
                                                                                                                                    Are
                                                                                                                                    there
                                                                                                                                    other
                                                                                                                                    charges
                                                                                                                                    to
                                                                                                                                    access
                                                                                                                                    buildr
                                                                                                                                    apart
                                                                                                                                    from
                                                                                                                                    the
                                                                                                                                    $3
                                                                                                                                    fee?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28487731 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Nope!
                                                                                                                                                    We
                                                                                                                                                    don’t
                                                                                                                                                    do
                                                                                                                                                    hidden
                                                                                                                                                    charges
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28487868 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    03.
                                                                                                                                    What
                                                                                                                                    are
                                                                                                                                    the
                                                                                                                                    steps
                                                                                                                                    required
                                                                                                                                    to
                                                                                                                                    join
                                                                                                                                    Buildr?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28488032 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>Easy!
                                                                                                                                                    Create
                                                                                                                                                    your
                                                                                                                                                    application.
                                                                                                                                                    Set
                                                                                                                                                    up
                                                                                                                                                    your
                                                                                                                                                    subscription.
                                                                                                                                                    Enter
                                                                                                                                                    the
                                                                                                                                                    community
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28488168 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    04.
                                                                                                                                    Is
                                                                                                                                    Buildr
                                                                                                                                    limited
                                                                                                                                    to
                                                                                                                                    only
                                                                                                                                    tech
                                                                                                                                    based
                                                                                                                                    early
                                                                                                                                    stage
                                                                                                                                    founders?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28488339 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>We
                                                                                                                                                    also
                                                                                                                                                    accept
                                                                                                                                                    early
                                                                                                                                                    stage
                                                                                                                                                    founders
                                                                                                                                                    with
                                                                                                                                                    traditional
                                                                                                                                                    business
                                                                                                                                                    models
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wtbx_vc_child_container">
                                                                                                                <div
                                                                                                                    class="wtbx_vc_exp_list_item wtbx_vc_exp_list_item-28488484 wtbx_with_bullet">
                                                                                                                    <div
                                                                                                                        class="wtbx_exp_list_item_inner">
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_title_wrapper wtbx-click">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_bullet">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_bullet_plus">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_title">
                                                                                                                                <div
                                                                                                                                    class="wtbx_exp_list_title_wrap">
                                                                                                                                    05.
                                                                                                                                    Is
                                                                                                                                    there
                                                                                                                                    a
                                                                                                                                    lifespan
                                                                                                                                    duration
                                                                                                                                    at
                                                                                                                                    Buildr?
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="wtbx_exp_list_content_wrapper">
                                                                                                                            <div
                                                                                                                                class="wtbx_exp_list_content">
                                                                                                                                <div
                                                                                                                                    class="wtbx_vc_text_element wtbx_vc_text_element-28488646 wtbx_display_block">
                                                                                                                                    <div
                                                                                                                                        class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                                                                        <div
                                                                                                                                            class="wtbx_text_element_content">
                                                                                                                                            <div
                                                                                                                                                class="wtbx_text_element_inner">
                                                                                                                                                <p>You
                                                                                                                                                    can
                                                                                                                                                    be
                                                                                                                                                    in
                                                                                                                                                    the
                                                                                                                                                    community
                                                                                                                                                    for
                                                                                                                                                    as
                                                                                                                                                    long
                                                                                                                                                    as
                                                                                                                                                    you
                                                                                                                                                    want
                                                                                                                                                </p>
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
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="wtbx_vc_empty_space wtbx_vc_empty_space-28488883">
                                                                            <span class="wtbx_empty_space_inner"></span>
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
                                </div>
                            </div>
                        </div>
                        <div class="wtbx_vc_row wtbx_vc_row-28489350 wtbx_stretch_row wtbx_align_center wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_bg">
                                            <div class="wtbx_row_bg_inner wtbx-reveal-cont">
                                                <div class="wtbx_row_bg_media_wrapper wtbx-entry-media">
                                                    <div class="wtbx_row_bg_media"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-28490059">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_styled_heading wtbx_vc_styled_heading-28490506 wtbx_style_default">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_styled_heading_container clearfix">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_styled_heading_inner">
                                                                                    <div
                                                                                        class="wtbx_heading_el_title_wrapper div">
                                                                                        <div
                                                                                            class="wtbx_heading_el_title wtbx-text">
                                                                                            Haven't found the answer?
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wtbx_vc_text_element wtbx_vc_text_element-28490731 wtbx_display_block">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                <div class="wtbx_text_element_content">
                                                                                    <div
                                                                                        class="wtbx_text_element_inner">
                                                                                        <div>Try our lightning fast
                                                                                            support.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="wtbx_vc_empty_space wtbx_vc_empty_space-28490910">
                                                                            <span class="wtbx_empty_space_inner"></span>
                                                                        </div>
                                                                        <div
                                                                            class="wtbx_vc_button wtbx_vc_button-28491108 wtbx_style_arrow wtbx_type_simple wtbx_skin_dark wtbx_size_">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_button_container">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_button_inner">
                                                                                    <a href="mailto:hello@talemia.com"
                                                                                        target="_self"
                                                                                        class="wtbx-button wtbx-button-arrow"><span
                                                                                            class="wtbx_button_inner">Send
                                                                                            us a mail</span><svg
                                                                                            class="wtbx_link_arrow"
                                                                                            viewBox="0 0 813 486"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect class="bar"
                                                                                                height="60" rx="30"
                                                                                                width="800" y="213">
                                                                                            </rect>
                                                                                            <path class="chevron"
                                                                                                d="m793.388955 224.472433c9.626991 11.783528 8.945751 29.177709-2.043717 40.167177l-200.139611 200.139611c-11.715728 11.715728-30.710678 11.715728-42.426406 0-11.715729-11.715729-11.715729-30.710679 0-42.426407l179.073593-179.073593-179.352814-179.3528141c-11.715729-11.7157288-11.715729-30.7106781 0-42.4264069 11.715729-11.71572875 30.710678-11.71572875 42.426407 0l199.418831 199.418831c1.122031 1.122031 2.136603 2.310828 3.043717 3.553602z">
                                                                                            </path>
                                                                                        </svg></a></div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wtbx_vc_button wtbx_vc_button-28491385 wtbx_style_arrow wtbx_type_simple wtbx_skin_dark wtbx_size_">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_button_container">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_button_inner">
                                                                                    <a href="https://twitter.com/talemiahq"
                                                                                        target="_self"
                                                                                        class="wtbx-button wtbx-button-arrow"
                                                                                        rel="noopener"><span
                                                                                            class="wtbx_button_inner">Send
                                                                                            us a tweet</span><svg
                                                                                            class="wtbx_link_arrow"
                                                                                            viewBox="0 0 813 486"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect class="bar"
                                                                                                height="60" rx="30"
                                                                                                width="800" y="213">
                                                                                            </rect>
                                                                                            <path class="chevron"
                                                                                                d="m793.388955 224.472433c9.626991 11.783528 8.945751 29.177709-2.043717 40.167177l-200.139611 200.139611c-11.715728 11.715728-30.710678 11.715728-42.426406 0-11.715729-11.715729-11.715729-30.710679 0-42.426407l179.073593-179.073593-179.352814-179.3528141c-11.715729-11.7157288-11.715729-30.7106781 0-42.4264069 11.715729-11.71572875 30.710678-11.71572875 42.426407 0l199.418831 199.418831c1.122031 1.122031 2.136603 2.310828 3.043717 3.553602z">
                                                                                            </path>
                                                                                        </svg></a></div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .entry-content -->
                </article>


            </div><!-- #content -->



        </div><!-- #container -->

    </div><!-- #page-wrap  -->


    <?php
    include "component/footer.php";

?>