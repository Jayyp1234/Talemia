<?php 
ob_start();
include 'component/header.php';
include './utility.php';
?>



<!-- Filter Posts By Author -->
<?php
if (!isset($_GET['author']) && !isset($_GET['tags']) && !isset($_GET['title']) && !isset($_GET['category'])){
    $title = "Blogs - Talemia";
    ?>

<div id="main" class="wtbx-footer-default">
    <!-- Page-wrap start -->
    <div id="page-wrap" class="clearfix">
        <br><br>
        <div id="container" class="row-inner page-template-default no_sidebar width-default">
            <div id="content">


                <article id="post-9678" class="clearfix post-9678 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        <div class="wtbx_vc_row wtbx_vc_row-80533230 wtbx_stretch_row wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_bg"></div>
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-80534510">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_bg"></div>
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_text_element wtbx_vc_text_element-80535113 wtbx_display_block wtbx_disable_margin">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                <div class="wtbx_text_element_content">
                                                                                    <div
                                                                                        class="wtbx_text_element_inner">
                                                                                        <h3 style="text-align: center;">
                                                                                            <strong>Our Blog</strong>
                                                                                        </h3>
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
                        <div class="wtbx_vc_row wtbx_vc_row-80535498 wtbx_stretch_row wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-80536086">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_blog_grid wtbx_vc_blog_grid-80537221 wtbx_boxed">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_blog_grid_container">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_blog_grid_inner">
                                                                                    <div
                                                                                        class="wtbx_blog_grid_wrapper blog-boxed">
                                                                                        <div class="wtbx-grid-wrapper">
                                                                                            <div class="blog-grid wtbx-grid wtbx-grid-boxed wtbx-container-reveal wtbx-lightbox-container row-inner clearfix no-author-image no-author-name no-date no-categories"
                                                                                                data-columns="3"
                                                                                                data-gutter="30"
                                                                                                data-border="0"
                                                                                                data-id="80537226"
                                                                                                data-grid="blog"
                                                                                                data-seq=""
                                                                                                data-minwidth="0"
                                                                                                data-filter-prefix="category">

                                                                                                <!-- Actual Blog Start -->
                                                                                                <?php
                                                                                                
                                                                                                                require('backend/connection.php');

                                                                                                                    //select top 3 latest blog from blog table
                                                                                                                    $sql = "SELECT * FROM `blog` WHERE `publish` = 'yes' ORDER  BY `date` DESC";
                                                                                                                    $store = mysqli_query($con, $sql);
                                                                                                                    //fetch sql data
                                                                                                                    while ($row = mysqli_fetch_array($store)) {
                                                                                                                        echo '    
                                                                                                                    <article
                                                                                                                        id="post-9758" 
                                                                                                                        class="post-entry wtbx-grid-entry wtbx-boxed-entry wtbx-grid-anim-container post-9758 post type-post status-publish format-standard has-post-thumbnail hentry category-press-release">
                                                                                                                        <div class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                                                                                            <div class="wtbx-preloader-container">
                                                                                                                                <div class="wtbx-preloader wtbx-preloader-2">
                                                                                                                                    <svg class="circular"
                                                                                                                                        viewBox="25 25 50 50">
                                                                                                                                        <circle
                                                                                                                                            class="path"
                                                                                                                                            cx="50"
                                                                                                                                            cy="50"
                                                                                                                                            r="20"
                                                                                                                                            fill="none"
                                                                                                                                            stroke-width="3"
                                                                                                                                            stroke-miterlimit="10"
                                                                                                                                            stroke="#09099d"
                                                                                                                                            stroke-linecap="round">
                                                                                                                                        </circle>
                                                                                                                                    </svg>
                                                                                                                                </div>
        
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="post-boxed-inner wtbx-entry-inner wtbx-element-reveal wtbx_appearance_animation wtbx-grid-anim-slideup wtbx_to_be_revealed wtbx_to_be_animated wtbx_animated wtbx-element-visible">
        
                                                                                                                            <div class="post-boxed-media wtbx-entry-media">
                                                                                                                                <div class="wtbx-image-crop"
                                                                                                                                    style="padding-bottom: 62.5%">
                                                                                                                                    <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                                                                                        data-bg="false"
                                                                                                                                        data-imgratio="16:10"
                                                                                                                                        data-aspectratio="1"
                                                                                                                                        src="assets/image/'.$row['image'].'"
                                                                                                                                        data-sizes="auto"
                                                                                                                                        data-parent-fit="cover"
                                                                                                                                        alt="'.$row['title'].'"
                                                                                                                                        sizes="430px">
                                                                                                                                </div>
                                                                                                                                <div
                                                                                                                                    class="meta-categories">
                                                                                                                                    <div class="category-list">
                                                                                                                                        <a href="blog.php?category='.$row['category'].'"  rel="category tag">'.$row['category'].'</a>
                                                                                                                                    </div>
                                                                                                                                </div>
        
                                                                                                                                <a href="blog.php?title='.$row['title'].'" class="post-boxed-button">
                                                                                                                                    <i class="scape-ui-chevron-right"></i>
                                                                                                                                </a>
                                                                                                                            </div>
        
                                                                                                                            <div
                                                                                                                                class="post-entry-content">
                                                                                                                                <div class="post-entry-header">
                                                                                                                                    <div class="meta-date wtbx-text">
                                                                                                                                    '.$row['date'].'
                                                                                                                                    </div>
        
                                                                                                                                    <h1
                                                                                                                                        class="entry-title">
                                                                                                                                        <a href="blog.php?title='.$row['title'].'" title="'.$row['title'].'" rel="bookmark">'.$row['title'].'</a>
                                                                                                                                    </h1>
        
                                                                                                                                </div>
        
        
                                                                                                                                <div
                                                                                                                                    class="post-entry-footer clearfix">
        
                                                                                                                                    <div
                                                                                                                                        class="meta-author">
                                                                                                                                        <a class="meta-author-link" href="blog.php?author='.$row['author'].'"
                                                                                                                                            title="View all posts by '.$row['author'].'">
                                                                                                                                            <div class="author-image">
                                                                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=48&amp;d=mm&amp;r=g" class="avatar avatar-48 photo" height="48" width="48" loading="lazy">
                                                                                                                                            </div>
                                                                                                                                            <span>'.$row['author'].'</span>
                                                                                                                                        </a>
                                                                                                                                    </div>
        
        
                                                                                                                                    <div
                                                                                                                                        class="post-entry-footer-right">
        
                                                                                                                                        <div
                                                                                                                                            class="post-entry-footer-section">
                                                                                                                                            <a href="blog.php?title='.$row['title'].'" title="View comments for: '.$row['title'].'" class="post-sbs-comments">
                                                                                                                                                <i class="scape-ui-comment"></i>
                                                                                                                                                '.comments($row['id']).'
                                                                                                                                            </a>
                                                                                                                                        </div>
        
                                                                                                                                        <div
                                                                                                                                            class="post-entry-footer-section">
                                                                                                                                            <div
                                                                                                                                                class="post-like">
                                                                                                                                                <a href="#"
                                                                                                                                                    class="wtbx-like-button sl-button sl-button-9758"
                                                                                                                                                    title="Like"><i
                                                                                                                                                        class="scape-ui-heart"></i><span
                                                                                                                                                        class="sl-count like-count">'.likes($row['id']).'</span></a>
                                                                                                                                            </div>
                                                                                                                                        </div>
        
                                                                                                                                    </div>
        
        
                                                                                                                                </div>
                                                                                                                            </div>
        
                                                                                                                        </div>
                                                                                                                    </article>
                                                                                                                        ';
                                                                                                                    }
                                                                                                            ?>

                                                                                                <!-- End Actual Blog -->
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

                    </div><!-- .entry-content -->
                </article>


            </div><!-- #content -->



        </div><!-- #container -->

    </div><!-- #page-wrap  -->
</div>
<?php
}
?>

<!-- Filter Posts By Categories-->
<?php
if (isset($_GET['category'])){
    $title = "Blog | Categories - Talemia";
    ?>

<div id="main" class="wtbx-footer-default">
    <!-- Page-wrap start -->
    <div id="page-wrap" class="clearfix">
        <br><br>
        <div id="container" class="row-inner page-template-default no_sidebar width-default">
            <div id="content">


                <article id="post-9678" class="clearfix post-9678 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        <div class="wtbx_vc_row wtbx_vc_row-80533230 wtbx_stretch_row wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_bg"></div>
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-80534510">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_bg"></div>
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_text_element wtbx_vc_text_element-80535113 wtbx_display_block wtbx_disable_margin">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                <div class="wtbx_text_element_content">
                                                                                    <div
                                                                                        class="wtbx_text_element_inner">
                                                                                        <h3 style="text-align: center;">
                                                                                            <strong><?php echo $_GET['category']; ?></strong>
                                                                                        </h3>
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
                        <div class="wtbx_vc_row wtbx_vc_row-80535498 wtbx_stretch_row wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-80536086">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_blog_grid wtbx_vc_blog_grid-80537221 wtbx_boxed">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_blog_grid_container">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_blog_grid_inner">
                                                                                    <div
                                                                                        class="wtbx_blog_grid_wrapper blog-boxed">
                                                                                        <div class="wtbx-grid-wrapper">
                                                                                            <div class="blog-grid wtbx-grid wtbx-grid-boxed wtbx-container-reveal wtbx-lightbox-container row-inner clearfix no-author-image no-author-name no-date no-categories"
                                                                                                data-columns="3"
                                                                                                data-gutter="30"
                                                                                                data-border="0"
                                                                                                data-id="80537226"
                                                                                                data-grid="blog"
                                                                                                data-seq=""
                                                                                                data-minwidth="0"
                                                                                                data-filter-prefix="category">

                                                                                                <!-- Actual Blog Start -->
                                                                                                <?php
                                                                                                                require('backend/connection.php');
                                                                                                                    $data = $_GET['category'];
                                                                                                                    //select top 3 latest blog from blog table
                                                                                                                    $sql = "SELECT * FROM `blog` WHERE category = '$data' and publish = 'yes' ORDER  BY `date` DESC";
                                                                                                                    $store = mysqli_query($con, $sql);
                                                                                                                    //fetch sql data
                                                                                                                    while ($row = mysqli_fetch_array($store)) {
                                                                                                                        echo '    
                                                                                                                    <article
                                                                                                                        id="post-9758" 
                                                                                                                        class="post-entry wtbx-grid-entry wtbx-boxed-entry wtbx-grid-anim-container post-9758 post type-post status-publish format-standard has-post-thumbnail hentry category-press-release">
                                                                                                                        <div class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                                                                                            <div class="wtbx-preloader-container">
                                                                                                                                <div class="wtbx-preloader wtbx-preloader-2">
                                                                                                                                    <svg class="circular"
                                                                                                                                        viewBox="25 25 50 50">
                                                                                                                                        <circle
                                                                                                                                            class="path"
                                                                                                                                            cx="50"
                                                                                                                                            cy="50"
                                                                                                                                            r="20"
                                                                                                                                            fill="none"
                                                                                                                                            stroke-width="3"
                                                                                                                                            stroke-miterlimit="10"
                                                                                                                                            stroke="#09099d"
                                                                                                                                            stroke-linecap="round">
                                                                                                                                        </circle>
                                                                                                                                    </svg>
                                                                                                                                </div>
        
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="post-boxed-inner wtbx-entry-inner wtbx-element-reveal wtbx_appearance_animation wtbx-grid-anim-slideup wtbx_to_be_revealed wtbx_to_be_animated wtbx_animated wtbx-element-visible">
        
                                                                                                                            <div class="post-boxed-media wtbx-entry-media">
                                                                                                                                <div class="wtbx-image-crop"
                                                                                                                                    style="padding-bottom: 62.5%">
                                                                                                                                    <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                                                                                        data-bg="false"
                                                                                                                                        data-imgratio="16:10"
                                                                                                                                        data-aspectratio="1"
                                                                                                                                        src="assets/image/'.$row['image'].'"
                                                                                                                                        data-sizes="auto"
                                                                                                                                        data-parent-fit="cover"
                                                                                                                                        alt="'.$row['title'].'"
                                                                                                                                        sizes="430px">
                                                                                                                                </div>
                                                                                                                                <div
                                                                                                                                    class="meta-categories">
                                                                                                                                    <div class="category-list">
                                                                                                                                        <a href="blog.php?category='.$row['category'].'"  rel="category tag">'.$row['category'].'</a>
                                                                                                                                    </div>
                                                                                                                                </div>
        
                                                                                                                                <a href="blog.php?title='.$row['title'].'" class="post-boxed-button">
                                                                                                                                    <i class="scape-ui-chevron-right"></i>
                                                                                                                                </a>
                                                                                                                            </div>
        
                                                                                                                            <div
                                                                                                                                class="post-entry-content">
                                                                                                                                <div class="post-entry-header">
                                                                                                                                    <div class="meta-date wtbx-text">
                                                                                                                                    '.$row['date'].'
                                                                                                                                    </div>
        
                                                                                                                                    <h1
                                                                                                                                        class="entry-title">
                                                                                                                                        <a href="blog.php?title='.$row['title'].'" title="'.$row['title'].'" rel="bookmark">'.$row['title'].'</a>
                                                                                                                                    </h1>
        
                                                                                                                                </div>
        
        
                                                                                                                                <div
                                                                                                                                    class="post-entry-footer clearfix">
        
                                                                                                                                    <div
                                                                                                                                        class="meta-author">
                                                                                                                                        <a class="meta-author-link" href="blog.php?author='.$row['author'].'"
                                                                                                                                            title="View all posts by '.$row['author'].'">
                                                                                                                                            <div class="author-image">
                                                                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=48&amp;d=mm&amp;r=g" class="avatar avatar-48 photo" height="48" width="48" loading="lazy">
                                                                                                                                            </div>
                                                                                                                                            <span>'.$row['author'].'</span>
                                                                                                                                        </a>
                                                                                                                                    </div>
        
        
                                                                                                                                        <div
                                                                                                                                        class="post-entry-footer-right">
        
                                                                                                                                        <div
                                                                                                                                            class="post-entry-footer-section">
                                                                                                                                            <a href="blog.php?title='.$row['title'].'" title="View comments for: '.$row['title'].'" class="post-sbs-comments">
                                                                                                                                                <i class="scape-ui-comment"></i>
                                                                                                                                                '.comments($row['id']).'
                                                                                                                                            </a>
                                                                                                                                        </div>
        
                                                                                                                                        <div
                                                                                                                                            class="post-entry-footer-section">
                                                                                                                                            <div
                                                                                                                                                class="post-like">
                                                                                                                                                <a href="#"
                                                                                                                                                    class="wtbx-like-button sl-button sl-button-9758"
                                                                                                                                                    title="Like"><i
                                                                                                                                                        class="scape-ui-heart"></i><span
                                                                                                                                                        class="sl-count like-count">'.likes($row['id']).'</span></a>
                                                                                                                                            </div>
                                                                                                                                        </div>
        
                                                                                                                                    </div>
        
        
                                                                                                                                </div>
                                                                                                                            </div>
        
                                                                                                                        </div>
                                                                                                                    </article>
                                                                                                                        ';
                                                                                                                    }
                                                                                                            ?>

                                                                                                <!-- End Actual Blog -->
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

                    </div><!-- .entry-content -->
                </article>


            </div><!-- #content -->



        </div><!-- #container -->

    </div><!-- #page-wrap  -->
</div>
<?php
}
?>

<!-- Filter Posts By Author -->
<?php
if (isset($_GET['author'])){
    $title = "Blog | Author - Talemia";
    ?>

<div id="main" class="wtbx-footer-default">
    <!-- Page-wrap start -->
    <div id="page-wrap" class="clearfix">
        <br><br>
        <div id="container" class="row-inner page-template-default no_sidebar width-default">
            <div id="content">


                <article id="post-9678" class="clearfix post-9678 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        <div class="wtbx_vc_row wtbx_vc_row-80533230 wtbx_stretch_row wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_bg"></div>
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-80534510">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_bg"></div>
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_text_element wtbx_vc_text_element-80535113 wtbx_display_block wtbx_disable_margin">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_text_element_container">
                                                                                <div class="wtbx_text_element_content">
                                                                                    <div
                                                                                        class="wtbx_text_element_inner">
                                                                                        <h3 style="text-align: center;">
                                                                                            <strong>Blog Posts by
                                                                                                <?php echo $_GET['author']; ?></strong>
                                                                                        </h3>
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
                        <div class="wtbx_vc_row wtbx_vc_row-80535498 wtbx_stretch_row wtbx_anim_style_1"
                            data-skin="light">
                            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                                    <div class="wtbx_row_wrapper">
                                        <div class="wtbx_row_content clearfix">
                                            <div class="wtbx_row_content_wrapper">
                                                <div class="wtbx_row_content_inner clearfix">
                                                    <div
                                                        class="wtbx_vc_column vc_col-sm-12 wtbx_with_image wtbx_vc_column-80536086">
                                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                                <div class="wtbx_column_wrapper clearfix">
                                                                    <div class="wtbx_column_content">
                                                                        <div
                                                                            class="wtbx_vc_blog_grid wtbx_vc_blog_grid-80537221 wtbx_boxed">
                                                                            <div
                                                                                class="wtbx_vc_el_container wtbx_vc_blog_grid_container">
                                                                                <div
                                                                                    class="wtbx_vc_el_inner wtbx_vc_blog_grid_inner">
                                                                                    <div
                                                                                        class="wtbx_blog_grid_wrapper blog-boxed">
                                                                                        <div class="wtbx-grid-wrapper">
                                                                                            <div class="blog-grid wtbx-grid wtbx-grid-boxed wtbx-container-reveal wtbx-lightbox-container row-inner clearfix no-author-image no-author-name no-date no-categories"
                                                                                                data-columns="3"
                                                                                                data-gutter="30"
                                                                                                data-border="0"
                                                                                                data-id="80537226"
                                                                                                data-grid="blog"
                                                                                                data-seq=""
                                                                                                data-minwidth="0"
                                                                                                data-filter-prefix="category">

                                                                                                <!-- Actual Blog Start -->
                                                                                                <?php
                                                                                                                require('backend/connection.php');
                                                                                                                    $data = $_GET['author'];
                                                                                                                    //select top 3 latest blog from blog table
                                                                                                                    $sql = "SELECT * FROM `blog` WHERE author = '$data' and publish = 'yes' ORDER  BY `date` DESC";
                                                                                                                    $store = mysqli_query($con, $sql);
                                                                                                                    //fetch sql data
                                                                                                                    while ($row = mysqli_fetch_array($store)) {
                                                                                                                        echo '    
                                                                                                                    <article
                                                                                                                        id="post-9758" 
                                                                                                                        class="post-entry wtbx-grid-entry wtbx-boxed-entry wtbx-grid-anim-container post-9758 post type-post status-publish format-standard has-post-thumbnail hentry category-press-release">
                                                                                                                        <div class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                                                                                            <div class="wtbx-preloader-container">
                                                                                                                                <div class="wtbx-preloader wtbx-preloader-2">
                                                                                                                                    <svg class="circular"
                                                                                                                                        viewBox="25 25 50 50">
                                                                                                                                        <circle
                                                                                                                                            class="path"
                                                                                                                                            cx="50"
                                                                                                                                            cy="50"
                                                                                                                                            r="20"
                                                                                                                                            fill="none"
                                                                                                                                            stroke-width="3"
                                                                                                                                            stroke-miterlimit="10"
                                                                                                                                            stroke="#09099d"
                                                                                                                                            stroke-linecap="round">
                                                                                                                                        </circle>
                                                                                                                                    </svg>
                                                                                                                                </div>
        
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="post-boxed-inner wtbx-entry-inner wtbx-element-reveal wtbx_appearance_animation wtbx-grid-anim-slideup wtbx_to_be_revealed wtbx_to_be_animated wtbx_animated wtbx-element-visible">
        
                                                                                                                            <div class="post-boxed-media wtbx-entry-media">
                                                                                                                                <div class="wtbx-image-crop"
                                                                                                                                    style="padding-bottom: 62.5%">
                                                                                                                                    <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                                                                                        data-bg="false"
                                                                                                                                        data-imgratio="16:10"
                                                                                                                                        data-aspectratio="1"
                                                                                                                                        src="assets/image/'.$row['image'].'"
                                                                                                                                        data-sizes="auto"
                                                                                                                                        data-parent-fit="cover"
                                                                                                                                        alt="'.$row['title'].'"
                                                                                                                                        sizes="430px">
                                                                                                                                </div>
                                                                                                                                <div
                                                                                                                                    class="meta-categories">
                                                                                                                                    <div class="category-list">
                                                                                                                                        <a href="blog.php?category='.$row['category'].'"  rel="category tag">'.$row['category'].'</a>
                                                                                                                                    </div>
                                                                                                                                </div>
        
                                                                                                                                <a href="blog.php?title='.$row['title'].'" class="post-boxed-button">
                                                                                                                                    <i class="scape-ui-chevron-right"></i>
                                                                                                                                </a>
                                                                                                                            </div>
        
                                                                                                                            <div
                                                                                                                                class="post-entry-content">
                                                                                                                                <div class="post-entry-header">
                                                                                                                                    <div class="meta-date wtbx-text">
                                                                                                                                    '.$row['date'].'
                                                                                                                                    </div>
        
                                                                                                                                    <h1
                                                                                                                                        class="entry-title">
                                                                                                                                        <a href="blog.php?title='.$row['title'].'" title="'.$row['title'].'" rel="bookmark">'.$row['title'].'</a>
                                                                                                                                    </h1>
        
                                                                                                                                </div>
        
        
                                                                                                                                <div
                                                                                                                                    class="post-entry-footer clearfix">
        
                                                                                                                                    <div
                                                                                                                                        class="meta-author">
                                                                                                                                        <a class="meta-author-link" href="blog.php?author='.$row['author'].'"
                                                                                                                                            title="View all posts by '.$row['author'].'">
                                                                                                                                            <div class="author-image">
                                                                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=48&amp;d=mm&amp;r=g" class="avatar avatar-48 photo" height="48" width="48" loading="lazy">
                                                                                                                                            </div>
                                                                                                                                            <span>'.$row['author'].'</span>
                                                                                                                                        </a>
                                                                                                                                    </div>
        
        
                                                                                                                                    <div
                                                                                                                                        class="post-entry-footer-right">
        
                                                                                                                                        <div
                                                                                                                                            class="post-entry-footer-section">
                                                                                                                                            <a href="blog.php?title='.$row['title'].'" title="View comments for: '.$row['title'].'" class="post-sbs-comments">
                                                                                                                                                <i class="scape-ui-comment"></i>
                                                                                                                                                '.comments($row['id']).'
                                                                                                                                            </a>
                                                                                                                                        </div>
        
                                                                                                                                        <div
                                                                                                                                            class="post-entry-footer-section">
                                                                                                                                            <div
                                                                                                                                                class="post-like">
                                                                                                                                                <a href="#"
                                                                                                                                                    class="wtbx-like-button sl-button sl-button-9758"
                                                                                                                                                    title="Like"><i
                                                                                                                                                        class="scape-ui-heart"></i><span
                                                                                                                                                        class="sl-count like-count">'.likes($row['id']).'</span></a>
                                                                                                                                            </div>
                                                                                                                                        </div>
        
                                                                                                                                    </div>
        
        
                                                                                                                                </div>
                                                                                                                            </div>
        
                                                                                                                        </div>
                                                                                                                    </article>
                                                                                                                        ';
                                                                                                                    }
                                                                                                            ?>

                                                                                                <!-- End Actual Blog -->
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

                    </div><!-- .entry-content -->
                </article>


            </div><!-- #content -->



        </div><!-- #container -->

    </div><!-- #page-wrap  -->
</div>
<?php
}
?>




<!-- Comment Section Only to Echo when there is an actual title Posted-->
<?php
if (isset($_GET['title'])){
    $title = $_GET['title']."| Blog  - Talemia";
    include './assets/blog.html';

    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    nav a,
    footer a,
    .post-tags-n-social a,
    .like,
    .wtbx_header_part.header_button.header_custom_button.header_button_height a,
    .entry-content a {
        text-decoration: none !important;
    }

    .modal-backdrop {
        display: none !important;
    }

    .modal-dialog {
        opacity: 1 !important;
        z-index: 99999999999;
    }

    form p,
    .col_container {
        text-align: left;
    }

    body {
        font-family: 'Montserrat', Arial, Helvetica, sans-serif !important
    }

    p {
    margin-top: 20px;
    margin-bottom: 20px;
    line-height:27px;
    letter-spacing: 0.045em;
}
p a{
    color: #09099d;
    font-weight: 500;

}ol{
    padding-left:0px;
}
ol li{
    margin-top: 12px;
    margin-bottom: 12px;
    line-height: 27px;
    letter-spacing: 0.045em;
}
.post-categories a{
    color: #09099d !important;
    text-transform: uppercase;
    text-align: left;
    font-weight:500;
    font-size:14px;
    text-decoration: none !important;
    }.entry-title{
        font-weight: bold;
        margin-top:20px;
        line-height: 42px;
        margin-bottom:10px;
        text-align: left;
    }@media all and (max-width:600px){
        .wtbx-large-7 {
            max-width: 90%;
            margin: 0 auto;
        }
    }.inhype-data-post-details{
        display:flex;
        align-items:baseline;
        margin-top:15px;
        font-size:14px;
        margin-bottom:25px;
    }.inhype-post .post-author a {
        color: #022b69;
        font-size: 14px;
        text-decoration: none;
    }
    .vcard{
        font-weight:550;
    }.fn{
        color:#022b69;
        font-weight:500;
    }.inhype-post .post-info-dot {
    display: inline-block;
    margin-left: 7px;
    margin-right: 7px;
    border-radius: 5px;
    width: 6px;
    height: 6px;
    border: 1px solid #909090;
    top: -1px;
    position: relative;
}
    @media all and (max-width:600px){
        .inhype-data-post-details{
            display:grid;
            justify-content:start;
        }
        .inhype-post .post-info-dot {
            display: none;
        }

    }.vc_single_image-img{
        border-radius:7px;
    }
</style>
<?php
    $title = $_GET['title'];
    require('backend/connection.php');
    //blog past with article
    $title = $con->real_escape_string($_GET['title']);
    $sql = "SELECT * FROM `blog` WHERE `title` = '$title'";
    $store = mysqli_query($con, $sql);


        //fetch sql data
        //display blog post
        if ($store){
            if(mysqli_num_rows($store) > 0){
                while ($row = mysqli_fetch_array($store)) {
                    $title = $row['title'];
                    $id = $row['id'];
                    $blog = $row['body'];
                    $category = $row['category'];
                    $author = $row['author'];
                    $image = $row['image']; 
                    $duration = $row['duration'];
                    $time = $row['date'];
                }
            }
            else{
                header('Location:blog.php');
                ob_end_flush();
            }
        }
        else{
            header('Location:blog.php');
            ob_end_flush();
        }
        

    ?>
<div id="main" class="wtbx-footer-default">


    <br><br>
    <div id="page-header" class="layout-five type-content_block wtbx-fadeout" data-fullscroll="">
        <div class="wtbx-large-7">
            <br><br>
            <div class="inhype-post-single inhype-post">
                <div class="post-categories"><a href="blog.php?category=<?php echo $category; ?>"><span
                            class="cat-title"><?php echo $category; ?></span></a></div>
                <div class="inhype-post-details">
                    <h1 class="post-title entry-title" ><?php echo $title; ?>
                    </h1>
                    <div class="inhype-data-post-details">
                    <div class="post-author">
                        <span class="vcard">
                            By: <span class="fn"><a href="blog.php?author=<?php echo $author; ?>" title="Posts by <?php echo $author; ?>"
                                    rel="author"><?php echo $author; ?></a></span>
                        </span>
                    </div>
                    <div class="post-info-dot"></div>
                    <div class="post-date">
                        <span class="vcard">
                            Published On:
                            <span class="fn"> <time class="entry-date published updated"><?php echo $time; ?></time> </span>
                        </span>
                        
                    </div>
                    <div class="post-info-dot"></div>
                    <div class="post-read-time">
                        <span class="vcard">
                            Duration:
                            <span class="fn"> <time class="entry-date published updated"><?php echo $duration; ?></time> </span>
                        </span></div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="row">
                <figure class="wpb_wrapper vc_figure">
                    <div class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey">
                        <img class="vc_single_image-img " src="./assets/image/<?php echo $image; ?>" width="1024"
                            height="819" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                    </div>
                </figure>
            </div>
        </div>


    </div>
    <!-- Page-wrap start -->
    <div id="page-wrap" class="clearfix">

        <article itemscope="" itemtype="http://schema.org/Article" id="post-9881"
            class="post-entry clearfix post-9881 post type-post status-publish format-standard hentry category-startup-tip tag-creating-awareness tag-early-stage-founders tag-startups tag-storytelling tag-storytelling-for-growth tag-storytelling-for-startups tag-visibility">
            <div id="container" class="row-inner no_sidebar width-default">

                <div class="wtbx-content-body wtbx-post-body clearfix">
                    <div id="content">


                        <div class="wtbx-width wtbx-large-7 wtbx-medium-8 wtbx-small-9">
                            <div class="post-entry-header">
                            </div><!-- .entry-header -->
                            
                            <?php echo $blog; ?>


                            <div class="post-tags-n-social">
                                <div class="post-tags">
                                    <div class="tag-links">

                                        <?php
                                            require('backend/connection.php');
                                            $categories = "SELECT * FROM `blog` WHERE `title` = '$title'";
                                            $tags = mysqli_query($con, $categories);
                                            while ($row = mysqli_fetch_array($tags)) {
                                                $tag = $row['tags'];
                                            }
                                            $tag = explode(",",$tag);
                                            foreach ($tag as $value) {
                                                echo"
                                            <span><a href='blog.php?tag=$value' rel='tag'>$value</a></span>
                                            ";
                                              }
                                            
                                        ?>


                                    </div>
                                </div>
                            </div>


                            <div class="wtbx-like-wrapper wtbx-page-like-wrapper">
                                <div class="wtbx-like-inner">
                                    <a href="#" class="wtbx-like-button sl-button like sl-button-9881 filled"
                                        title="Like">
                                        <i class="scape-ui-heart-filled"></i>

                                        <?php
                                            $new_likes = "SELECT * FROM `likes` WHERE `blog_id` = '$id'";
                                            $update_likes = mysqli_query($con, $new_likes);
                                            $x = 0;
                                            while ($row = mysqli_fetch_array($update_likes)) {
                                                $x += 1;
                                            }
                                            echo"<span class='sl-count like-count'>$x Likes</span> ";
                                        ?>

                                        <div class="wtbx-like-anim">
                                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                        </div>
                                    </a>
                                    <div class="wtbx-like-label wtbx-text"><span
                                            class="wtbx-like-label-prefix">Like</span> this post</div>
                                </div>
                            </div>
                            <!-- Comment Section -->

                            <div class="author-area clearfix ">
                                <?php
                            require('backend/connection.php');
                            function replies($id) {
                                require('backend/connection.php');
                                $comments = "SELECT * FROM `comments` WHERE `comment_id` = '$id'";
                                            $display = mysqli_query($con, $comments);
                                            while ($row = mysqli_fetch_array($display)) {
                                                $name = $row['name'];
                                                $comment = $row['description'];
                                                $date = $row['date'];
                                                    echo "
                                                    <div class='sub-comment'>
                                                    <div class='author-image-sub-comment'>
                                                        <div class='author-image-inner'>
                                                            <img alt=''
                                                                src='https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=120&amp;d=mm&amp;r=g'
                                                                srcset='https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=240&amp;d=mm&amp;r=g 2x'
                                                                class='avatar avatar-120 photo' height='120' width='120' loading='lazy'>
                                                                <h6>$name</h6>
                                                        </div>
                                                        <!-- <a href='https://talemia.com/author/talemiahq/' class='author-posts'>8 Posts</a> -->
                                                    </div>
                                                    <div class='post-wrapper'>
                                                        <div class='comment'>
                                                            <h6><b>$name</b> <i class='icon-circle'></i> <span>$date</span> </h6>
                                                            <p>$comment</p>
                                                            <div class='icon' style='display: flex; align-items:center; justify-content: flex-start;'>
                                                                <span>0 Likes</span>
                                                                <i class='icon-circle'></i>
                                                                <i class='icon-thumbs-up' style='margin: 0 4px 0 6px;color: #999;'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    ";
                                            }

                            }
                                            $title = $_GET['title'];
                                            $comments = "SELECT * FROM `comments` WHERE `blog_id` = '$id' AND `comment_id` = '0'";
                                            $display = mysqli_query($con, $comments);
                                            while ($row = mysqli_fetch_array($display)) {
                                                $comment_id = $row['comment_id'];
                                                $id1 = $row['id'];
                                                $name = $row['name'];
                                                $comment = $row['description'];
                                                $date = $row['date'];
                                                echo   '
                                                <div style="margin-bottom:10px;">
                                    <div class="author-image">
                                        <div class="author-image-inner">
                                            <img alt=""
                                                src="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=120&amp;d=mm&amp;r=g"
                                                srcset="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=240&amp;d=mm&amp;r=g 2x"
                                                class="avatar avatar-120 photo" height="120" width="120" loading="lazy">
                                                <h6>'.$name.'</h6>
                                        </div>
                                    </div>
                                    <div class="post-wrapper">
                                    <!-- Display comments -->
                                    <div class="comment">
                                            <h6><b>'.$name.'</b> <i class="icon-circle"></i> <span>'.$date.'</span> </h6>
                                            <p>'.$comment.'</p>

                                            <div class="icon" style="display: flex; align-items:center; justify-content: flex-start;">
                                                <button class="linker" data_value='.$id1.' data-bs-toggle="modal" data-bs-target="#exampleModal">Reply</button>
                                                <i class="icon-circle"></i>
                                                <span>10 Likes</span>
                                                <i class="icon-circle"></i>
                                                <i class="icon-thumbs-up thumb" style="margin: 0 4px 0 6px;color: #999;"></i>
                                            </div>
                                        </div>
                                               
                                    </div>
                                </div>
                                                 ';
                                            
                                               //calling reply finction
                                               replies($id1);
                                            }
                                        ?>

                                <!-- End Comment -->

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

                                    <!-- function for previous and next post   -->




                                    <?php
                                            require('backend/connection.php');
                                            function previous($id) {
                                                require('backend/connection.php');
                                                $data = '';
                                                $previous_id = intval($id)-1;
                                                $previous_post = mysqli_query($con, "SELECT * FROM `blog` WHERE `id` = '$previous_id'");
                                                while ($row = mysqli_fetch_array($previous_post)) {
                                                    $title = $row['title'];
                                                    echo '
                                                    <li class="wtbx-nav-prev post-prev clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible">
                                                        <a href="blog.php?title='.$title.'"
                                                            rel="prev">
                                                            <div class="wtbx-nav-thumb">
                                                                <div class="wtbx-image-crop" style="padding-bottom: 100%"><img
                                                                        class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                        data-bg="false" data-imgratio="1:1" data-aspectratio="1"
                                                                        src="./assets/image/'.$row['image'].'"
                                                                        data-sizes="auto" data-parent-fit="cover"
                                                                        alt="'.$title.'"
                                                                        sizes="50px"></div>
                                                            </div>
                                                            <div class="wtbx-nav-content"><span
                                                                    class="wtbx-nav-meta wtbx-nav-meta-prev">Previous Post</span><span
                                                                    class="wtbx-nav-title wtbx-nav-title-prev">'.$title.'</span></div>
                                                        </a>
                                                    </li>';
                                                }
                                            }


                                                function next_post($id) {
                                                    require('backend/connection.php');
                                                    $previous_id = $id+1;
                                                    $previous_post = mysqli_query($con, "SELECT * FROM `blog` WHERE `id` = '$previous_id'");
                                                    while ($row = mysqli_fetch_array($previous_post)) {
                                                        $title = $row['title'];
                                                        echo "
                                                        <li
                                        class='wtbx-nav-next post-next clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible'>
                                        <a href='blog.php?title=$title'
                                            rel='next'>
                                            
                                            <div class='wtbx-nav-content'><span
                                                    class='wtbx-nav-meta wtbx-nav-meta-next'>Next Post</span><span
                                                    class='wtbx-nav-title wtbx-nav-title-next'>$title</span></div>
                                                    <div class='wtbx-nav-thumb'>
                                                    <div class='wtbx-image-crop' style='padding-bottom: 100%'><img
                                                            class='wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded'
                                                            data-bg='false' data-imgratio='1:1' data-aspectratio='1'
                                                            src='./assets/image/".$row['image']."'
                                                            data-sizes='auto' data-parent-fit='cover'
                                                            alt='".$title."'
                                                            sizes='50px'></div>
                                                </div>
                                        </a></li>
                                                        ";
                                                    }
                                                }
                                                $title = $_GET['title'];
                                                $get_id = mysqli_query($con, "SELECT `id` FROM `blog` WHERE `title` = '$title'");
                                                while ($row = mysqli_fetch_array($get_id)) {
                                                    $id = $row['id'];
                                                }
                                                previous($id);
                                                next_post($id);
                                            ?>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true"
                                        style="background-color: #0000001c;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Leave a Reply</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="respond" class="comment-respond">
                                                        <form action="backend/comments.php" method="post"
                                                            id="commentform" class="comment-form">
                                                            <?php
                                $title = $_GET['title'];
                                echo" <input type='hidden' name='title' value='$title'>";
                            ?>
                                                            <p class="comment-notes">Your email address will not be
                                                                published. Required fields are
                                                                marked *</p>
                                                            <p class="comment-form-comment"><label for="comment">Comment
                                                                    <span class="required"
                                                                        aria-hidden="true">*</span></label> <textarea
                                                                    id="comment" name="comment" cols="45" rows="8"
                                                                    maxlength="65525" required="required"></textarea>
                                                            </p>
                                                            <div class="comment-form-info-fields col_container">
                                                                <div class="col_3 comment-form-author"><label
                                                                        for="author">Name</label> <span
                                                                        class="required">*</span><input id="author"
                                                                        name="name" type="text" value="" size="30"
                                                                        aria-required="true"></div>
                                                                <div class="col_3 comment-form-email"><label
                                                                        for="email">Email</label> <span
                                                                        class="required">*</span><input id="email"
                                                                        name="email" type="text" value="" size="30"
                                                                        aria-required="true"></div>
                                                            </div>
                                                            <br>
                                                            <p class="form-submit"><input name="submit" type="submit"
                                                                    id="submit"
                                                                    class="submit wtbx-button wtbx-button-primary button-md"
                                                                    value="Post Comment">
                                                                <input type="hidden" name="blog_id"
                                                                    value="<?php echo $id ?>" id="comment_post_ID">
                                                                <input type="hidden" name="comment_id" class="commentid"
                                                                    value="" id="comment_post_ID">
                                                            </p>
                                                            <br>
                                                        </form>
                                                    </div><!-- #respond -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>



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
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                        <form action="backend/comments.php" method="post" id="commentform" class="comment-form">
                            <?php
                                $title = $_GET['title'];
                                echo" <input type='hidden' name='title' value='$title'>";
                            ?>
                            <p class="comment-notes">Your email address will not be published. Required fields are
                                marked *</p>
                            <p class="comment-form-comment"><label for="comment">Comment <span class="required"
                                        aria-hidden="true">*</span></label> <textarea id="comment" name="comment"
                                    cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                            <div class="comment-form-info-fields col_container">
                                <div class="col_3 comment-form-author"><label for="author">Name <span
                                        class="required">*</span></label> 
                                        <input id="author" name="name" type="text" value=""
                                        size="30" aria-required="true"></div>
                                <div class="col_3 comment-form-email"><label for="email">Email <span
                                        class="required">*</span></label> <input id="email" name="email" type="text" value=""
                                        size="30" aria-required="true"></div>
                            </div>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                    name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label
                                    for="wp-comment-cookies-consent">Save my name, email, and website in this browser
                                    for the next time I comment.</label></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit"
                                    class="submit wtbx-button wtbx-button-primary button-md" value="Post Comment">
                                <input type="hidden" name="blog_id" value="<?php echo $id ?>" id="comment_post_ID">
                                <input type="hidden" class="commentid" name="comment_id" value="" id="comment_post_ID">
                            </p>
                        </form>
                    </div><!-- #respond -->

                </div><!-- #comments -->
            </div>
        </div>

    </div><!-- #page-wrap  -->

</div>
<?php
}
?>

</div><!-- #page-wrap  -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function(){
        $(document).on("click", ".linker", function(){
            alert();
            $('.commentid').val($(this).attr('data_value'));
        });
        $('.wtbx-like-button.sl-button.like').on('click', function(e){
            e.preventDefault();
            var postid = <?php echo $id; ?>;
            $.ajax({
                url: 'backend/likes.php',
                type: 'POST',
                data: {
                    'postid': postid
                },
                success: function(response){
                    $(this).removeClass('like');
                    $(this).addClass('unlike');
                    $('.sl-count.like-count').text(response);
                }
            });
        });
        
    });
</script>










<?php
    include "component/footer.php";
?>