<?php 
include 'component/header.php';
$title = "Blogs - Talemia";
?>
<?php
if (!isset($_GET['title']) && !isset($_GET['tags']) && !isset($_GET['title']) && !isset($_GET['title'])){

}
?>








<!-- Comment Section Only to Echo when there is an actual title Posted-->
<?php
if (isset($_GET['title'])){
    ?>
    <style type="text/css">#page-wrap { padding-top:60px; padding-bottom:60px;}.wtbx_vc_row-76845183 .wtbx_row_bg {background-color:#09099d;}.wtbx_vc_row-76845183 .wtbx_row_bg_overlay {}.wtbx_vc_row-76845183 .wtbx_row_content_inner { height:50vh;}.wtbx_vc_row-76845183 .wtbx_row_content_inner { min-height:500px;} .wtbx_vc_row-76845183 .wtbx_row_content_inner { padding-top: 120px !important;} .wtbx_vc_row-76845183 .wtbx_row_content_inner { padding-bottom: 120px !important;} .wtbx_vc_column-76846154 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-76846154 .wtbx_column_content { padding-right: 30px !important;} .wtbx_vc_column-76846154 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-76846154 .wtbx_column_content { padding-left: 30px !important;}.wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {color:#f8b617;}.wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper { font-size: 30px; font-weight: 700;}@media only screen and (max-width: 979px) {.wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {font-size:90%} }@media only screen and (max-width: 767px) {.wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {font-size:80%} }@media only screen and (max-width: 479px) {.wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {font-size:70%} } .wtbx_vc_column-76846966 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-76846966 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-76846966 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-76846966 .wtbx_column_content { padding-left: 15px !important;}#footer, #footer .widget .wtbx_recent_posts_cont .entry-content, #footer .wtbx_recent_comments .wtbx-recent-comment .comment-text, #footer .widget_archive ul li, #footer .widget_categories ul li, #footer .widget_rss .rssSummary, #footer .widget_text, #footer .widget_recent_comments {color: #ffffff}#footer .widget a {color: #f7f8fd}#footer .widget a:hover {color: #09099d} .wtbx_vc_row-77258536 .wtbx_row_content_inner { padding-top: 60px !important;} .wtbx_vc_column-77259241 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-77259241 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77259241 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-77259241 .wtbx_column_content { padding-left: 15px !important;}.wtbx_vc_row-77259566 .wtbx_row_bg {background-color:#151221;}.wtbx_vc_row-77259566 .wtbx_row_content_inner {color:#ffffff; font-size: 14px;} .wtbx_vc_row-77259566 .wtbx_row_content_inner { padding-top: 0px !important;} .wtbx_vc_row-77259566 .wtbx_row_content_inner { padding-bottom: 30px !important;} .wtbx_vc_column-77260190 .wtbx_column_content { padding-top: 0px !important;} .wtbx_vc_column-77260190 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77260190 .wtbx_column_content { padding-bottom: 30px !important;} .wtbx_vc_column-77260190 .wtbx_column_content { padding-left: 15px !important;} .wtbx_vc_column-77260190 .wtbx_column_content { top: auto; margin-top: -85px;}.wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg_idle {background-color:#09099d;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,.wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { border-top-left-radius: 10px !important;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,.wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { border-top-right-radius: 10px !important;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,.wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { border-bottom-right-radius: 10px !important;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,.wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { border-bottom-left-radius: 10px !important;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { padding-top: 15px !important;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { padding-right: 15px !important;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { padding-bottom: 15px !important;} .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container { padding-left: 15px !important;}.wtbx_vc_empty_space-77261250 .wtbx_empty_space_inner {height:30px}.wtbx_vc_styled_heading-77261439.wtbx_vc_styled_heading .wtbx_heading_el_title {color:#ffffff;}.wtbx_vc_styled_heading-77261439.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper { font-size: 26px; font-weight: 700;}.wtbx_vc_empty_space-77261587 .wtbx_empty_space_inner {height:30px}.wtbx_vc_button-77261752.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .wtbx_button_inner {color:#09099d;}.wtbx_vc_button-77261752.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .bar,.wtbx_vc_button-77261752.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .chevron {fill:#09099d}.wtbx_vc_empty_space-77261934 .wtbx_empty_space_inner {height:30px}.wtbx_vc_column-77262130 .wtbx_vc_column_container .wtbx_column_wrapper .wtbx_column_content {color:#f7f8fd;} .wtbx_vc_column-77262130 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-77262130 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77262130 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-77262130 .wtbx_column_content { padding-left: 15px !important;}.wtbx_vc_text_element-77262464 .wtbx_text_element_content {color:#f7f8fd;}.wtbx_vc_text_element-77262464 .wtbx_text_element_content { font-size: 17px; font-weight: 600;}.wtbx_vc_empty_space-77262654 .wtbx_empty_space_inner {height:15px} .wtbx_vc_column-77265721 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-77265721 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77265721 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-77265721 .wtbx_column_content { padding-left: 15px !important;}.wtbx_vc_text_element-77266096 .wtbx_text_element_content {color:#f7f8fd;}.wtbx_vc_text_element-77266096 .wtbx_text_element_content { font-size: 17px; font-weight: 600;}.wtbx_vc_empty_space-77266379 .wtbx_empty_space_inner {height:15px} .wtbx_vc_column-77269578 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-77269578 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77269578 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-77269578 .wtbx_column_content { padding-left: 15px !important;}.wtbx_vc_text_element-77269798 .wtbx_text_element_content {color:#f7f8fd;}.wtbx_vc_text_element-77269798 .wtbx_text_element_content { font-size: 17px; font-weight: 600;}.wtbx_vc_empty_space-77269972 .wtbx_empty_space_inner {height:15px} .wtbx_vc_column-77272086 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-77272086 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77272086 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-77272086 .wtbx_column_content { padding-left: 15px !important;}.wtbx_vc_text_element-77272396 .wtbx_text_element_content {color:#f7f8fd;}.wtbx_vc_text_element-77272396 .wtbx_text_element_content { font-size: 17px; font-weight: 600;}.wtbx_vc_text_element-77272577 .wtbx_text_element_content * {color:#f7f8fd;}.wtbx_vc_text_element-77272577 .wtbx_text_element_content { font-family: 'Montserrat'; font-weight: 500;}.wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:not(:hover) i {color:#f7f8fd;}.wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:hover i {color:#f7f8fd;}.wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:not(:hover) {background-color:rgba(255,255,255,0.1);}.wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:hover {background-color:#09099d;}.wtbx_vc_empty_space-77272991 .wtbx_empty_space_inner {height:15px} .wtbx_vc_column-77274029 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-77274029 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77274029 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-77274029 .wtbx_column_content { padding-left: 15px !important;}.wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_body { max-width: 500px;} .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-top: 45px !important;} .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-right: 45px !important;} .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-bottom: 45px !important;} .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-left: 45px !important;}.wtbx_vc_styled_heading-77274688.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper { font-size: 30px; font-weight: 700;}.wtbx_vc_button-77275240.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {background-color:#09099d;} .wtbx_vc_column-77276164 .wtbx_column_content { padding-top: 15px !important;} .wtbx_vc_column-77276164 .wtbx_column_content { padding-right: 15px !important;} .wtbx_vc_column-77276164 .wtbx_column_content { padding-bottom: 15px !important;} .wtbx_vc_column-77276164 .wtbx_column_content { padding-left: 15px !important;}.wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_body { max-width: 500px;} .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-top: 45px !important;} .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-right: 45px !important;} .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-bottom: 45px !important;} .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner { padding-left: 45px !important;}.wtbx_vc_styled_heading-77276557.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper { font-size: 30px; font-weight: 700;}.wtbx_vc_button-77276895.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {background-color:#09099d;}</style>
    <?php
    $title = $_GET['title'];
    require('backend/connection.php');
    //blog past with article
    $title = $con->real_escape_string($_GET['title']);
    $sql = "SELECT * FROM `blog` WHERE `title` = '$title'";
    $store = mysqli_query($con, $sql);


        //fetch sql data
        //display blog post
        while ($row = mysqli_fetch_array($store)) {
            echo $row['body'];
        }

    ?>


    <div class="wtbx-like-wrapper wtbx-page-like-wrapper">
                                <div class="wtbx-like-inner">
                                    <a href="https://talemia.com/wp-admin/admin-ajax.php?action=process_simple_like&amp;nonce=89ca697487&amp;post_id=9758&amp;disabled=true&amp;is_comment=0"
                                        class="wtbx-like-button sl-button sl-button-9758 filled" data-nonce="89ca697487"
                                        data-post-id="9758" data-iscomment="0" title="Like"><i
                                            class="scape-ui-heart-filled"></i><span class="sl-count like-count">11
                                            Likes</span>
                                        <div class="wtbx-like-anim">
                                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                        </div>
                                    </a>
                                    <div class="wtbx-like-label wtbx-text"><span
                                            class="wtbx-like-label-prefix">Like</span> this post</div>
                                </div>
                            </div>
                            <div class="author-area clearfix">
                                <div class="author-image">
                                    <div class="author-image-inner">
                                        <img alt=""
                                            src="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=120&amp;d=mm&amp;r=g"
                                            srcset="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=240&amp;d=mm&amp;r=g 2x"
                                            class="avatar avatar-120 photo" height="120" width="120" loading="lazy">
                                    </div>


                                    <a href="https://talemia.com/author/talemiahq/" class="author-posts">8 Posts</a>
                                </div>
                                <div class="author-bio">
                                    <a class="author-name" href="https://talemia.com/author/talemiahq/">Talemia HQ </a>




                                </div>
                            </div>
                        </div>

                    </div><!-- #content -->

                </div>

                <div class="wtbx-width wtbx-large-7 wtbx-medium-8 wtbx-small-9">
                    <div class="wtbx-navigation-wrapper post-nav-wrapper wtbx-page-nav-wrapper wtbx-layout-bottom">
                        <nav class="wtbx-navigation post-nav wtbx-page-nav wtbx-skin-light">
                            <div class="wtbx-nav-inner post-nav-inner row-inner clearfix">
                                <ul class="wtbx-col-sm-12 wtbx-nav-column">

                                    <li><a class="wtbx-nav-back post-back" href="https://talemia.com" title="Back">
                                            <div class="wtbx-nav-back-inner">
                                                <div class="dot first"></div>
                                                <div class="dot second"></div>
                                                <div class="dot third"></div>
                                            </div>
                                        </a></li>
                                    <li
                                        class="wtbx-nav-prev post-prev clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible">
                                        <a href="https://talemia.com/blog/lofty-ideas-dont-always-make-great-companies/"
                                            rel="prev">
                                            <div class="wtbx-nav-thumb">
                                                <div class="wtbx-image-crop" style="padding-bottom: 100%"><img
                                                        class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                        data-bg="false" data-imgratio="1:1" data-aspectratio="0.75"
                                                        src="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-150x150.jpg"
                                                        srcset="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-225x300.jpg 225w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-768x1024.jpg 768w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112.jpg 960w"
                                                        data-sizes="auto" data-parent-fit="cover"
                                                        alt="Lofty Ideas Don’t Always Make Great Companies"
                                                        sizes="50px"></div>
                                            </div>
                                            <div class="wtbx-nav-content"><span
                                                    class="wtbx-nav-meta wtbx-nav-meta-prev">Previous Post</span><span
                                                    class="wtbx-nav-title wtbx-nav-title-prev">Lofty Ideas Don’t Always
                                                    Make Great Companies</span></div>
                                        </a></li>
                                    <li
                                        class="wtbx-nav-next post-prev clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible">
                                        <a href="https://talemia.com/blog/storytelling-for-early-stage-startups/"
                                            rel="next">
                                            <div class="wtbx-nav-content"><span
                                                    class="wtbx-nav-meta wtbx-nav-meta-next">Next Post</span><span
                                                    class="wtbx-nav-title wtbx-nav-title-next">STORYTELLING FOR EARLY
                                                    STAGE STARTUPS</span></div>
                                        </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>

            </div><!-- #container -->
        </article>


        <div class="row-inner">
            <div class="wtbx-width wtbx-large-7 wtbx-medium-8 wtbx-small-9">

                <div id="comments" class="comments-area">



                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                                    id="cancel-comment-reply-link"
                                    href="/blog/moretechies-and-talemia-wants-to-make-it-easier-for-early-stage-startups-to-access-skilled-interns/#respond"
                                    style="display:none;">(Cancel reply)</a></small></h3>
                        <form action="https://talemia.com/wp-comments-post.php" method="post" id="commentform"
                            class="comment-form">
                            <p class="comment-notes">Your email address will not be published. Required fields are
                                marked *</p>
                            <p class="comment-form-comment"><label for="comment">Comment <span class="required"
                                        aria-hidden="true">*</span></label> <textarea id="comment" name="comment"
                                    cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                            <div class="comment-form-info-fields col_container">
                                <div class="col_3 comment-form-author"><label for="author">Name</label> <span
                                        class="required">*</span><input id="author" name="author" type="text" value=""
                                        size="30" aria-required="true"></div>
                                <div class="col_3 comment-form-email"><label for="email">Email</label> <span
                                        class="required">*</span><input id="email" name="email" type="text" value=""
                                        size="30" aria-required="true"></div>
                                <div class="col_3 comment-form-url"><label for="url">Website</label><input id="url"
                                        name="url" type="text" value="" size="30"></div>
                            </div>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                    name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label
                                    for="wp-comment-cookies-consent">Save my name, email, and website in this browser
                                    for the next time I comment.</label></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit"
                                    class="submit wtbx-button wtbx-button-primary button-md" value="Post Comment">
                                <input type="hidden" name="comment_post_ID" value="9758" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
                    </div><!-- #respond -->

                </div><!-- #comments -->
            </div>
        </div>
        <?php
}
?>
                            

    </div><!-- #page-wrap  -->
</div>



<?php
    include "component/footer.php";

?>