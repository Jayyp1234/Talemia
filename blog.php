<?php 
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
                                                                                        <h3><strong>Our Blog</strong>
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
                                                                                        <h3><strong><?php echo $_GET['category']; ?></strong>
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
                                                                                        <h3><strong>Blog Posts by
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
            $title = $row['title'];
            $id = $row['id'];
            $body = $row['body'];
        }

    ?>
<div id="main" class="wtbx-footer-default">


<br><br>
    <div id="page-header" class="layout-five type-content_block wtbx-fadeout" data-fullscroll="">
        <div class="wtbx_vc_row wtbx_vc_row-141164155 wtbx_stretch_row wtbx_center_align_tablet_portrait wtbx_anim_style_1 wtbx_row_fixed_height_screen wtbx_row-flex-align-stretch wtbx_row-content-align-middle wtbx_row-flex"
            data-skin="light">
            <div class="wtbx_vc_el_container wtbx_vc_row_container">
                <div class="wtbx_vc_el_inner wtbx_vc_row_inner">
                    <div class="wtbx_row_wrapper">
                        <div class="wtbx_row_bg"></div>
                        <div class="wtbx_row_content clearfix">
                            <div class="wtbx_row_content_wrapper">
                                <div class="wtbx_row_content_inner clearfix">
                                    <div
                                        class="wtbx_vc_column vc_col-sm-8 vc_col-md-6 wtbx_with_image wtbx_vc_column-141165853">
                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                <div class="wtbx_column_wrapper clearfix">
                                                    <div class="wtbx_column_content">
                                                        <div
                                                            class="wtbx_vc_styled_heading wtbx_vc_styled_heading-141166661 wtbx_style_default">
                                                            <div
                                                                class="wtbx_vc_el_container wtbx_vc_styled_heading_container clearfix">
                                                                <div
                                                                    class="wtbx_vc_el_inner wtbx_vc_styled_heading_inner">
                                                                    <div class="wtbx_heading_el_title_wrapper h1">
                                                                        <h1 class="wtbx_heading_el_title wtbx-text">
                                                                            <?php  echo $title; ?></h1>
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
                                        class="wtbx_vc_column vc_col-sm-4 vc_col-md-6 wtbx_with_image wtbx_vc_column-141167155">
                                        <div class="wtbx_vc_el_container wtbx_vc_column_container">
                                            <div class="wtbx_vc_el_inner wtbx_vc_column_inner">
                                                <div class="wtbx_column_wrapper clearfix">
                                                    <div class="wtbx_column_content"></div>
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
                                    <a href="#" class="wtbx-like-button sl-button like sl-button-9881 filled" title="Like">
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
                                                                <button>Replies</button>
                                                                <i class='icon-circle'></i>
                                                                <span>10 Likes</span>
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
                                                <button>Reply</button>
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
                                    <li
                                        class="wtbx-nav-prev post-prev clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible">
                                        <a href="https://talemia.com/blog/moretechies-and-talemia-wants-to-make-it-easier-for-early-stage-startups-to-access-skilled-interns/"
                                            rel="prev">
                                            <div class="wtbx-nav-thumb">
						    
						    
						    
						<!-- function for previous and next post   -->
						    
						    
						    
						    
                                                <?php
                                            require('backend/connection.php');
                                                function previous($id) {
                                                    require('backend/connection.php');
                                                    $previous_id = $id-1;
                                                    $previous_post = mysqli_query($con, "SELECT * FROM `blog` WHERE `id` = '$previous_id'");
                                                    while ($row = mysqli_fetch_array($previous_post)) {
                                                        $title = $row['title'];
                                                        echo "
                                                        <li
                                        class='wtbx-nav-next post-prev clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible'>
                                        <a href='https://talemia.com/blog.php?title=$title'
                                            rel='next'>
                                            <div class='wtbx-nav-content'><span
                                                    class='wtbx-nav-meta wtbx-nav-meta-next'>Next Post</span><span
                                                    class='wtbx-nav-title wtbx-nav-title-next'>$title</span></div>
                                        </a></li>
                                                        ";
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
                                        class='wtbx-nav-next post-prev clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible'>
                                        <a href='https://talemia.com/blog.php?title=$title'
                                            rel='next'>
                                            <div class='wtbx-nav-content'><span
                                                    class='wtbx-nav-meta wtbx-nav-meta-next'>Next Post</span><span
                                                    class='wtbx-nav-title wtbx-nav-title-next'>$title</span></div>
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
						    
						    
						    
						    
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>

            </div><!-- #container -->
        </article>


        <!-- 
        <aside class="wtbx-related-posts">
            <div class="wtbx-related-posts-inner row-inner">
                <div class="wtbx-width wtbx-large-7 wtbx-medium-8 wtbx-small-9">
                    <h3 class="wtbx-related-posts-title">Related Posts</h3>

                    <div class="wtbx-related-posts-container">

                        <div class="wtbx-related-posts-wrapper slick-initialized slick-slider" data-autoplay="4">
                            <div class="slick-list draggable">
                                <div class="slick-track"
                                    style="opacity: 1; width: 2728px; transform: translate3d(-1488px, 0px, 0px);">
                                    <div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/lofty-ideas-dont-always-make-great-companies/"
                                                            rel="bookmark"
                                                            title="Lofty Ideas Don’t Always Make Great Companies"
                                                            tabindex="-1">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="0.75"
                                                                    src="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-150x150.jpg"
                                                                    srcset="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-225x300.jpg 225w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-768x1024.jpg 768w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112.jpg 960w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Lofty Ideas Don’t Always Make Great Companies"
                                                                    sizes="208px"></div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="-1">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/lofty-ideas-dont-always-make-great-companies/"
                                                                    rel="bookmark"
                                                                    title="Lofty Ideas Don’t Always Make Great Companies"
                                                                    tabindex="-1">Lofty Ideas Don’t Always Make Great
                                                                    Companies</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/acquiring-your-first-set-of-users/"
                                                            rel="bookmark" title="Acquiring Your First Set Of Users"
                                                            tabindex="-1">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="0.7994"
                                                                    src="https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-150x150.jpeg"
                                                                    srcset="https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-240x300.jpeg 240w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-819x1024.jpeg 819w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-768x961.jpeg 768w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post.jpeg 1080w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Acquiring Your First Set Of Users"
                                                                    sizes="208px"></div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="-1">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/acquiring-your-first-set-of-users/"
                                                                    rel="bookmark"
                                                                    title="Acquiring Your First Set Of Users"
                                                                    tabindex="-1">Acquiring Your First Set Of Users</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/fall-in-love-with-the-problem/"
                                                            rel="bookmark" title="Fall In Love With The Problem"
                                                            tabindex="-1">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="1"
                                                                    src="https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-150x150.png"
                                                                    srcset="https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-300x300.png 300w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-1024x1024.png 1024w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-150x150.png 150w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-768x768.png 768w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post.png 1400w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Fall In Love With The Problem" sizes="208px">
                                                            </div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="-1">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/fall-in-love-with-the-problem/"
                                                                    rel="bookmark" title="Fall In Love With The Problem"
                                                                    tabindex="-1">Fall In Love With The Problem</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="0" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">



                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/lofty-ideas-dont-always-make-great-companies/"
                                                            rel="bookmark"
                                                            title="Lofty Ideas Don’t Always Make Great Companies"
                                                            tabindex="-1">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="0.75"
                                                                    src="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-150x150.jpg"
                                                                    srcset="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-225x300.jpg 225w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-768x1024.jpg 768w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112.jpg 960w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Lofty Ideas Don’t Always Make Great Companies"
                                                                    sizes="208px"></div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="-1">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/lofty-ideas-dont-always-make-great-companies/"
                                                                    rel="bookmark"
                                                                    title="Lofty Ideas Don’t Always Make Great Companies"
                                                                    tabindex="-1">Lofty Ideas Don’t Always Make Great
                                                                    Companies</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="2" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/acquiring-your-first-set-of-users/"
                                                            rel="bookmark" title="Acquiring Your First Set Of Users"
                                                            tabindex="-1">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="0.7994"
                                                                    src="https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-150x150.jpeg"
                                                                    srcset="https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-240x300.jpeg 240w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-819x1024.jpeg 819w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-768x961.jpeg 768w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post.jpeg 1080w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Acquiring Your First Set Of Users"
                                                                    sizes="208px"></div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="-1">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/acquiring-your-first-set-of-users/"
                                                                    rel="bookmark"
                                                                    title="Acquiring Your First Set Of Users"
                                                                    tabindex="-1">Acquiring Your First Set Of Users</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-current slick-active" data-slick-index="3"
                                        aria-hidden="false" style="width: 248px;">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/fall-in-love-with-the-problem/"
                                                            rel="bookmark" title="Fall In Love With The Problem"
                                                            tabindex="0">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="1"
                                                                    src="https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-150x150.png"
                                                                    srcset="https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-300x300.png 300w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-1024x1024.png 1024w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-150x150.png 150w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-768x768.png 768w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post.png 1400w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Fall In Love With The Problem" sizes="208px">
                                                            </div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="0">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/fall-in-love-with-the-problem/"
                                                                    rel="bookmark" title="Fall In Love With The Problem"
                                                                    tabindex="0">Fall In Love With The Problem</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned slick-active" data-slick-index="4" id=""
                                        aria-hidden="false" style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">



                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned slick-active" data-slick-index="5" id=""
                                        aria-hidden="false" style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/lofty-ideas-dont-always-make-great-companies/"
                                                            rel="bookmark"
                                                            title="Lofty Ideas Don’t Always Make Great Companies"
                                                            tabindex="0">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="0.75"
                                                                    src="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-150x150.jpg"
                                                                    srcset="https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-225x300.jpg 225w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112-768x1024.jpg 768w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220215-WA0112.jpg 960w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Lofty Ideas Don’t Always Make Great Companies"
                                                                    sizes="208px"></div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="0">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/lofty-ideas-dont-always-make-great-companies/"
                                                                    rel="bookmark"
                                                                    title="Lofty Ideas Don’t Always Make Great Companies"
                                                                    tabindex="0">Lofty Ideas Don’t Always Make Great
                                                                    Companies</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/acquiring-your-first-set-of-users/"
                                                            rel="bookmark" title="Acquiring Your First Set Of Users"
                                                            tabindex="-1">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="0.7994"
                                                                    src="https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-150x150.jpeg"
                                                                    srcset="https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-240x300.jpeg 240w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-819x1024.jpeg 819w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post-768x961.jpeg 768w, https://talemia.com/wp-content/uploads/2021/12/Chima-3rd-Blog-Post.jpeg 1080w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Acquiring Your First Set Of Users"
                                                                    sizes="208px"></div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="-1">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/acquiring-your-first-set-of-users/"
                                                                    rel="bookmark"
                                                                    title="Acquiring Your First Set Of Users"
                                                                    tabindex="-1">Acquiring Your First Set Of Users</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true"
                                        style="width: 248px;" tabindex="-1">
                                        <div>
                                            <article class="wtbx-related-post wtbx-reveal-cont wtbx_preloader_cont"
                                                style="width: 100%; display: inline-block;">


                                                <div
                                                    class="wtbx-preloader-wrapper wtbx-preloader-el preloader-hidden preloader-display-none">
                                                    <div class="wtbx-preloader-container">


                                                        <div class="wtbx-preloader wtbx-preloader-2">
                                                            <svg class="circular" viewBox="25 25 50 50">
                                                                <circle class="path" cx="50" cy="50" r="20" fill="none"
                                                                    stroke-width="3" stroke-miterlimit="10"
                                                                    stroke="#09099d" stroke-linecap="round"></circle>
                                                            </svg>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div
                                                    class="wtbx-related-post-inner wtbx-element-reveal wtbx-element-visible">

                                                    <div class="wtbx-related-post-thumbnail">
                                                        <a href="https://talemia.com/blog/fall-in-love-with-the-problem/"
                                                            rel="bookmark" title="Fall In Love With The Problem"
                                                            tabindex="-1">
                                                            <div class="wtbx-image-crop" style="padding-bottom: 100%">
                                                                <img class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                                    data-bg="false" data-imgratio="1:1"
                                                                    data-aspectratio="1"
                                                                    src="https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-150x150.png"
                                                                    srcset="https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-300x300.png 300w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-1024x1024.png 1024w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-150x150.png 150w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post-768x768.png 768w, https://talemia.com/wp-content/uploads/2021/12/Bolu-2nd-Blog-Post.png 1400w"
                                                                    data-sizes="auto" data-parent-fit="cover"
                                                                    alt="Fall In Love With The Problem" sizes="208px">
                                                            </div>
                                                        </a>

                                                        <div class="wtbx-related-post-content">
                                                            <div class="meta-categories">
                                                                <div class="category-list"><a
                                                                        href="https://talemia.com/blog/category/startup-tip/"
                                                                        rel="category tag" tabindex="-1">Startup Tip</a>
                                                                </div>
                                                            </div>

                                                            <h3 class="entry-title">
                                                                <a href="https://talemia.com/blog/fall-in-love-with-the-problem/"
                                                                    rel="bookmark" title="Fall In Love With The Problem"
                                                                    tabindex="-1">Fall In Love With The Problem</a>
                                                            </h3>
                                                        </div>

                                                    </div>




                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    -->
        <div class="row-inner">
            <div class="wtbx-width wtbx-large-7 wtbx-medium-8 wtbx-small-9">

                <div id="comments" class="comments-area">



                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                        <form action="backend/comments.php" method="post" id="commentform"
                            class="comment-form">
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
                                <div class="col_3 comment-form-author"><label for="author">Name</label> <span
                                        class="required">*</span><input id="author" name="name" type="text" value=""
                                        size="30" aria-required="true"></div>
                                <div class="col_3 comment-form-email"><label for="email">Email</label> <span
                                        class="required">*</span><input id="email" name="email" type="text" value=""
                                        size="30" aria-required="true"></div>
                            </div>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                    name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label
                                    for="wp-comment-cookies-consent">Save my name, email, and website in this browser
                                    for the next time I comment.</label></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit"
                                    class="submit wtbx-button wtbx-button-primary button-md" value="Post Comment">
                                <input type="hidden" name="blog_id" value="<?php echo $id ?>" id="comment_post_ID">
                                <input type="hidden" name="comment_id" value="" id="comment_post_ID">
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
<script>
	$(document).ready(function(){
		$('.wtbx-like-button.sl-button.like').on('click', function(e){
            e.preventDefault();
			var postid = <?php echo $id; ?>;
			$.ajax({
				url: 'backend/likes.php',
				type: 'POST',
				data: {
					'postid': postid,
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
