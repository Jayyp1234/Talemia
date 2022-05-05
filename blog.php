<?php 
include 'component/header.php';



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
                                                                                                                    $sql = "SELECT * FROM `blog` WHERE 1 ORDER  BY `date` DESC";
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
                                                                                                                                            <a href="blog.php?title='.$row['title'].'#respond" title="View comments for: '.$row['title'].'" class="post-sbs-comments">
                                                                                                                                                <i class="scape-ui-comment"></i>
                                                                                                                                                0
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
                                                                                                                                                        class="sl-count like-count">11</span></a>
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
                                                                                                                    $sql = "SELECT * FROM `blog` WHERE category = '$data'  ORDER  BY `date` DESC";
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
                                                                                                                                            <a href="blog.php?title='.$row['title'].'#respond" title="View comments for: '.$row['title'].'" class="post-sbs-comments">
                                                                                                                                                <i class="scape-ui-comment"></i>
                                                                                                                                                0
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
                                                                                                                                                        class="sl-count like-count">11</span></a>
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
                                                                                                                    $sql = "SELECT * FROM `blog` WHERE author = '$data'  ORDER  BY `date` DESC";
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
                                                                                                                                            <a href="blog.php?title='.$row['title'].'#respond" title="View comments for: '.$row['title'].'" class="post-sbs-comments">
                                                                                                                                                <i class="scape-ui-comment"></i>
                                                                                                                                                0
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
                                                                                                                                                        class="sl-count like-count">11</span></a>
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
    ?>
<style type="text/css">
    #page-wrap {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .wtbx_vc_row-76845183 .wtbx_row_bg {
        background-color: #09099d;
    }

    .wtbx_vc_row-76845183 .wtbx_row_bg_overlay {}

    .wtbx_vc_row-76845183 .wtbx_row_content_inner {
        height: 50vh;
    }

    .wtbx_vc_row-76845183 .wtbx_row_content_inner {
        min-height: 500px;
    }

    .wtbx_vc_row-76845183 .wtbx_row_content_inner {
        padding-top: 120px !important;
    }

    .wtbx_vc_row-76845183 .wtbx_row_content_inner {
        padding-bottom: 120px !important;
    }

    .wtbx_vc_column-76846154 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-76846154 .wtbx_column_content {
        padding-right: 30px !important;
    }

    .wtbx_vc_column-76846154 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-76846154 .wtbx_column_content {
        padding-left: 30px !important;
    }

    .wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {
        color: #f8b617;
    }

    .wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 30px;
        font-weight: 700;
    }

    @media only screen and (max-width: 979px) {
        .wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {
            font-size: 90%
        }
    }

    @media only screen and (max-width: 767px) {
        .wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {
            font-size: 80%
        }
    }

    @media only screen and (max-width: 479px) {
        .wtbx_vc_styled_heading-76846541.wtbx_vc_styled_heading .wtbx_heading_el_title {
            font-size: 70%
        }
    }

    .wtbx_vc_column-76846966 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-76846966 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-76846966 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-76846966 .wtbx_column_content {
        padding-left: 15px !important;
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

    .wtbx_vc_row-77258536 .wtbx_row_content_inner {
        padding-top: 60px !important;
    }

    .wtbx_vc_column-77259241 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-77259241 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77259241 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-77259241 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_row-77259566 .wtbx_row_bg {
        background-color: #151221;
    }

    .wtbx_vc_row-77259566 .wtbx_row_content_inner {
        color: #ffffff;
        font-size: 14px;
    }

    .wtbx_vc_row-77259566 .wtbx_row_content_inner {
        padding-top: 0px !important;
    }

    .wtbx_vc_row-77259566 .wtbx_row_content_inner {
        padding-bottom: 30px !important;
    }

    .wtbx_vc_column-77260190 .wtbx_column_content {
        padding-top: 0px !important;
    }

    .wtbx_vc_column-77260190 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77260190 .wtbx_column_content {
        padding-bottom: 30px !important;
    }

    .wtbx_vc_column-77260190 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_column-77260190 .wtbx_column_content {
        top: auto;
        margin-top: -85px;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg_idle {
        background-color: #09099d;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-left-radius: 10px !important;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        border-top-right-radius: 10px !important;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-right-radius: 10px !important;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_bg,
    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        border-bottom-left-radius: 10px !important;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        padding-top: 15px !important;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        padding-right: 15px !important;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_content_box-77260617.wtbx_vc_content_box .wtbx_content_box_container {
        padding-left: 15px !important;
    }

    .wtbx_vc_empty_space-77261250 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_styled_heading-77261439.wtbx_vc_styled_heading .wtbx_heading_el_title {
        color: #ffffff;
    }

    .wtbx_vc_styled_heading-77261439.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 26px;
        font-weight: 700;
    }

    .wtbx_vc_empty_space-77261587 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_button-77261752.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .wtbx_button_inner {
        color: #09099d;
    }

    .wtbx_vc_button-77261752.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .bar,
    .wtbx_vc_button-77261752.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button:hover .chevron {
        fill: #09099d
    }

    .wtbx_vc_empty_space-77261934 .wtbx_empty_space_inner {
        height: 30px
    }

    .wtbx_vc_column-77262130 .wtbx_vc_column_container .wtbx_column_wrapper .wtbx_column_content {
        color: #f7f8fd;
    }

    .wtbx_vc_column-77262130 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-77262130 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77262130 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-77262130 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-77262464 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-77262464 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_empty_space-77262654 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-77265721 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-77265721 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77265721 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-77265721 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-77266096 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-77266096 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_empty_space-77266379 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-77269578 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-77269578 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77269578 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-77269578 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-77269798 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-77269798 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_empty_space-77269972 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-77272086 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-77272086 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77272086 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-77272086 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_text_element-77272396 .wtbx_text_element_content {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-77272396 .wtbx_text_element_content {
        font-size: 17px;
        font-weight: 600;
    }

    .wtbx_vc_text_element-77272577 .wtbx_text_element_content * {
        color: #f7f8fd;
    }

    .wtbx_vc_text_element-77272577 .wtbx_text_element_content {
        font-family: 'Montserrat';
        font-weight: 500;
    }

    .wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:not(:hover) i {
        color: #f7f8fd;
    }

    .wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:hover i {
        color: #f7f8fd;
    }

    .wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:not(:hover) {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .wtbx_vc_social_icons-77272836.wtbx_vc_social_icons a:hover {
        background-color: #09099d;
    }

    .wtbx_vc_empty_space-77272991 .wtbx_empty_space_inner {
        height: 15px
    }

    .wtbx_vc_column-77274029 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-77274029 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77274029 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-77274029 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_body {
        max-width: 500px;
    }

    .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-top: 45px !important;
    }

    .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-right: 45px !important;
    }

    .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_modal-77274399.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-left: 45px !important;
    }

    .wtbx_vc_styled_heading-77274688.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 30px;
        font-weight: 700;
    }

    .wtbx_vc_button-77275240.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
        background-color: #09099d;
    }

    .wtbx_vc_column-77276164 .wtbx_column_content {
        padding-top: 15px !important;
    }

    .wtbx_vc_column-77276164 .wtbx_column_content {
        padding-right: 15px !important;
    }

    .wtbx_vc_column-77276164 .wtbx_column_content {
        padding-bottom: 15px !important;
    }

    .wtbx_vc_column-77276164 .wtbx_column_content {
        padding-left: 15px !important;
    }

    .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_body {
        max-width: 500px;
    }

    .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-top: 45px !important;
    }

    .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-right: 45px !important;
    }

    .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-bottom: 45px !important;
    }

    .wtbx_vc_modal-77276364.wtbx_vc_modal .wtbx_modal_wrapper .wtbx_modal_content .wtbx_modal_inner {
        padding-left: 45px !important;
    }

    .wtbx_vc_styled_heading-77276557.wtbx_vc_styled_heading .wtbx_heading_el_title_wrapper {
        font-size: 30px;
        font-weight: 700;
    }

    .wtbx_vc_button-77276895.wtbx_vc_button.wtbx_style_arrow.wtbx_type_simple .wtbx_vc_button_inner .wtbx-button {
        background-color: #09099d;
    }.post-tags-n-social {
    display: inline-block;
    margin: 0;
    width: 100%;
}

.post-tags-n-social .post-tags {
    display: block;
    text-align: center;
    margin: 2em 0 0;
    -webkit-transition: opacity 0.3s cubic-bezier(0.2, 0, 0.3, 1) 0.6s, visibility 0s cubic-bezier(0.2, 0, 0.3, 1) 0.6s;
    -moz-transition: opacity 0.3s cubic-bezier(0.2, 0, 0.3, 1) 0.6s, visibility 0s cubic-bezier(0.2, 0, 0.3, 1) 0.6s;
    -ms-transition: opacity 0.3s cubic-bezier(0.2, 0, 0.3, 1) 0.6s, visibility 0s cubic-bezier(0.2, 0, 0.3, 1) 0.6s;
    -o-transition: opacity 0.3s cubic-bezier(0.2, 0, 0.3, 1) 0.6s, visibility 0s cubic-bezier(0.2, 0, 0.3, 1) 0.6s;
    transition: opacity 0.3s cubic-bezier(0.2, 0, 0.3, 1) 0.6s, visibility 0s cubic-bezier(0.2, 0, 0.3, 1) 0.6s;
}.post-tags-n-social .post-tags .tag-links {
    display: inline-block;
}.post-tags-n-social .post-tags .tag-links span {
    display: inline-block;
    margin: 0.4em 0.4em;
}.post-tags-n-social .post-tags .tag-links span a:not(:hover) {
    box-shadow: 0 5px 25px -4px rgb(9 31 67 / 15%);
    border-color: transparent;
    background-color: #fff;
}.post-tags-n-social .post-tags .tag-links span a {
    line-height: 2.6;
    font-size: 0.857143em;
    font-weight: 600;
    padding: 0 1.3em;
    display: block;
    border-radius: 3em;
    -webkit-transition: all 0.3s cubic-bezier(0.2, 0, 0.3, 1);
    -moz-transition: all 0.3s cubic-bezier(0.2, 0, 0.3, 1);
    -ms-transition: all 0.3s cubic-bezier(0.2, 0, 0.3, 1);
    -o-transition: all 0.3s cubic-bezier(0.2, 0, 0.3, 1);
    transition: all 0.3s cubic-bezier(0.2, 0, 0.3, 1);
}
.wtbx-like-wrapper {
  margin: 4em auto;
  text-align: center;
}

.wtbx-like-wrapper .wtbx-like-inner {
  display: inline-block;
  margin: 0 auto;
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-label {
  font-size: .785714em;
  font-weight: 600;
  text-transform: uppercase;
  margin-top: 2em;
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button {
  position: relative;
  margin: 0 auto;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  display: flex;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  display: flex;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -moz-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -ms-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -o-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button:before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border-radius: 50%;
  z-index: -1;
  -webkit-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -moz-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -ms-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -o-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button i {
  line-height: 30px;
  font-size: 20px;
  -webkit-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -moz-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -ms-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  -o-transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
  transition: all 0.2s cubic-bezier(0.2, 0, 0.3, 1);
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button span {
  line-height: 15px;
  font-size: 10px;
  font-weight: 600;
  text-transform: uppercase;
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button:hover:before {
  background-color: #fff;
  box-shadow: 0 20px 70px -10px rgba(9, 31, 67, 0.15);
  -moz-transform: scale3d(1.05, 1.05, 1);
  -o-transform: scale3d(1.05, 1.05, 1);
  -ms-transform: scale3d(1.05, 1.05, 1);
  -webkit-transform: scale3d(1.05, 1.05, 1);
  -webkit-transform: -webkit-scale3d(1.05, 1.05, 1);
  transform: scale3d(1.05, 1.05, 1);
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button .wtbx-like-anim {
  position: absolute;
  width: 75px;
  height: 75px;
  top: 50%;
  left: 50%;
  -moz-transform: translate3d(-50%, -50%, 0);
  -o-transform: translate3d(-50%, -50%, 0);
  -ms-transform: translate3d(-50%, -50%, 0);
  -webkit-transform: translate3d(-50%, -50%, 0);
  -webkit-transform: -webkit-translate3d(-50%, -50%, 0);
  transform: translate3d(-50%, -50%, 0);
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button .wtbx-like-anim span {
  position: absolute;
  top: 50%;
  left: 50%;
  height: 100%;
  display: block;
  opacity: 0;
}

.wtbx-like-wrapper .wtbx-like-inner .wtbx-like-button .wtbx-like-anim span:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  margin-left: -1.5px;
  width: 3px;
  height: 10px;
  border-radius: 10px;
  -moz-transform-origin: top center;
  -o-transform-origin: top center;
  -ms-transform-origin: top center;
  -webkit-transform-origin: top center;
  transform-origin: top center;
}.author-area > div{
    display: flex;
    align-items: center;
}.author-image-inner h6{
    display: none;
}.post-wrapper{
    display: flex;
    align-items: center;
    width: 100%;
    margin-left: 2.5rem;
}.post-wrapper .comment {
    text-align: left;
}
.post-wrapper .comment h6{
    display: flex;
    align-items: center;
    margin: 0;
    text-transform: capitalize;
}.post-wrapper .comment h6 span{
    margin: 0 5px;
    color: #777;
}.post-wrapper .comment * [class="icon-circle"]{
    font-size: 5px;
    color: #999;
}.post-wrapper .comment h6 [class="icon-circle"]{
    margin: 0 5px 0 10px;
}.post-wrapper .comment p{
    text-transform: initial;
    margin: 0;
}.post-wrapper .comment .icon button{
    outline: none;
    border: none;
    background: none;
    font-size: 14px;
    padding: 0;
    color:#151221;
}.comment .icon a, .icon span{
    color:#151221;
    font-size: 14px;
}.comment .icon > [class="icon-circle"]{
    margin: 0 7px;
}
/* subcomment styles */
.sub-comment {
    display: flex;
    align-items: flex-start !important;
    margin: 1rem 0 0 6.5rem;
}.sub-comment .comment {
    text-align: left;
}
.sub-comment .author-image-inner img{
    border-radius: 100%;
    width: 40px;
}.sub-comment .post-wrapper{
    margin-left: 1rem;
}.sub-comment .post-wrapper .comment h6 {
    margin: 0;
    font-size: 13px;
    text-transform: capitalize;
}.sub-comment .post-wrapper .comment p{
    margin: 0;
    font-size: 13px;
}.sub-comment .post-wrapper .comment * [class="icon-circle"]{
    font-size: 4px;
}.sub-comment .post-wrapper .comment .icon [class="icon-thumbs-up"],
.sub-comment .post-wrapper .comment .icon [class="icon-thumbs-down"]{
    font-size: 13px;
}.sub-comment .post-wrapper .comment .icon button, .sub-comment .comment .icon a, .sub-comment .icon span{
    font-size: 13px;
}

@media all and (max-width: 425px){
    .author-area {
        padding:0 0 1rem;
    }
    .author-area > div{
        padding: 1.3rem .7rem .3rem;
        display: block;
    }.author-area .author-image {
        width: 100%;
        float: none;
        align-items: center;
        text-align: center;
        display: flex;
        margin: 0;
        justify-content: space-between;
    }.author-area .post-wrapper .comment{
        margin-left: 2.5rem;
    }
    .author-area .author-image .author-image-inner {
        width: auto;
        display: flex;
        height: auto;
        align-items: center;
        border-radius: unset;
        margin: 0;
    }.author-area .author-image .author-image-inner h6 {
        margin: 0 0 0 10px;
        font-size: 13px;
        font-weight: 600;
        display: block;
    }.author-area .author-image .author-image-inner img {
        border-radius: 100%;
        width: 30px;
        height: 30px;
    }.author-area .author-image .author-posts {
        margin:0;
    }.post-wrapper{
        margin: 0 auto;
    }.post-wrapper .comment h6 {
        display: none;
    }.post-wrapper .comment p {
        margin: 5px 0;
        line-height: 1rem;
        font-size: 13px;
    }.post-wrapper .comment .icon button, .comment .icon a, .icon span {
    font-size: 12px;
    }.comment .icon .thumb{
        font-size: 14px;
    }form label{
        white-space: normal;
    }
    /* sub-comment style */
    .sub-comment {
        margin: 0 0 0 3rem;
        padding: 0 !important;
    }.sub-comment .post-wrapper {
        margin-left: 0;
    }.sub-comment .author-image-inner img {
        width: 25px;
    }.sub-comment .author-image-inner h6 {
        display: block;
    }.sub-comment .author-image-inner{
        display: flex;
        align-items: center;
    }.sub-comment .author-image-inner h6 {
        margin: 0 0 0 10px;
        font-size: 12px;
    }.sub-comment .post-wrapper .comment p {
        margin: 4px 0 6px 0;
        font-size: 12px;
    }.sub-comment .post-wrapper .comment{
        margin-left: 2.1rem;
    }.sub-comment .post-wrapper .comment .icon button, .sub-comment .comment .icon a,.sub-comment .icon span {
        font-size: 12px;
    }

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
        while ($row = mysqli_fetch_array($store)) {
            $title = $row['title'];
            //echo $row['body'];
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
                            <div class="entry-meta single-post-meta">

                                <span class="meta-author">By <a class="meta-author-link"
                                        href="blog.php?author=talemiahq"
                                        title="View all posts by Talemia HQ">Talemia HQ</a>
                                </span>

                                <span class="meta-category">
                                    in<span class="category-list"><a
                                            href="https://talemia.com/blog/category/startup-tip/"
                                            rel="category tag">Startup Tip</a></span>
                                </span>

                            </div>
                            <div class="entry-content">
                                <ol>
                                    <li>Hey Tribe,<br>
                                        Welcome to a new quarter and a new month. Cheers to a productive and fruitful
                                        Q2.</li>
                                </ol>
                                <p>You must have missed our bi-weekly posts. We are fully back with much more content
                                    for you and we are definitely better than ever. Check back every Mondays and Fridays
                                    for new articles that challenge your mind as an early stage founder.</p>
                                <p>Our first post this quarter is from our 0 to 1 session on Storytelling which featured
                                    Blessing Abeng and David Hundeyin. 0 to 1 holds from 7:00pm WAT every Friday on
                                    Twitter Spaces. You can check out our Twitter page <a
                                        href="https://twitter.com/talemiahq" target="_blank" rel="noopener">HERE</a> and
                                    set reminders for upcoming spaces. Blessing and David shared so many insightful and
                                    practical tips that we couldn’t help but make it into a blog post.</p>
                                <p>Read on to have your mind blown…<span id="more-9881"></span></p>
                                <p><em>Startups can no longer afford to be faceless in a highly competitive
                                        ecosystem<strong>. </strong>Startups must convey their stories with empathy and
                                        connect deeper with their target audience to survive.</em></p>
                                <p><strong>What is Storytelling?</strong><br>
                                    Storytelling is when you pass across the most incredible amount of information in
                                    the fewest possible words.</p>
                                <p>As a startup founder, if you are trying to include storytelling in your growth
                                    strategy, you must have a realistic understanding of what storytelling is.
                                    Storytelling metrics are not equivalent to sales metrics. Different goals exist
                                    within storytelling. These goals include awareness, perception building,
                                    trust-building, and education.</p>
                                <p><strong>How do you know what Stories to tell as an early-stage startup?</strong></p>
                                <p>People know their problems; they may not know how to articulate them. By asking
                                    better questions and listening to what is said and unsaid, you will be able to
                                    extract what is essential to them and their pain points, and you will be able to
                                    make stories out of that. Many startups use surveys in research, but a better way to
                                    get answers from people is through conversations. Have conversations, prioritize
                                    conversations too, listen and also tell.</p>
                                <p><strong>How do you tell your story as an Early Stage Startup?</strong></p>
                                <ul>
                                    <li><strong>Set goals</strong><br>
                                        Founders must be specific about what goal they want their startup to achieve
                                        with storytelling specifically. For starters, an early stage Startup would
                                        prioritize awareness and perception building.</li>
                                    <li><strong>Have Conversations</strong><br>
                                        Surveys may not bring out the accurate data you need, so you must engage in
                                        conversations. Listen to what is said and unsaid.</li>
                                    <li><strong>Be empathetic</strong><br>
                                        Stories that hold <strong>Top of Mind Awareness</strong> are the ones that
                                        connect to people’s pain points.<br>
                                        Sharing your target audience’s pain points is one way to show empathy.</li>
                                    <li><strong>Write, publish and iterate</strong><br>
                                        There is no formula to storytelling. Experiment, do trial and error and iterate
                                        from what is not working to what is producing results.</li>
                                </ul>
                                <p>Conversations fuel life. If your story is good enough, it will come up in
                                    conversations. Tell stories that emphasize how your startup solves people’s
                                    problems.
                                    <!--more-->
                                </p>
                                <div class="fm fn fo fp fq l">
                                    <div class="o dd">
                                        <div class="ds ea fr fs ft fu fv fw fx fy fz">
                                            <article>
                                                <div class="l">
                                                    <div class="l">
                                                        <section>
                                                            <div>
                                                                <div class="ir is it iu iv">
                                                                    <p id="df1e"
                                                                        class="pw-post-body-paragraph kj kk iy kl b km kn ko kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg ir ha"
                                                                        data-selectable-paragraph="">There you have
                                                                        it,<br>
                                                                        <strong>You need to tell your story to survive
                                                                            as a startup</strong><br>
                                                                        I hope this has helped you<br>
                                                                        Have anything to add? Or something that stood
                                                                        out to you? Feel free to comment</p>
                                                                    <p id="a330"
                                                                        class="pw-post-body-paragraph kj kk iy kl b km kn ko kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg ir ha"
                                                                        data-selectable-paragraph="">You can check out
                                                                        Blessing Abeng and David Hundeyin on Twitter, <a
                                                                            href="https://twitter.com/blessingabeng_"
                                                                            target="_blank" rel="noopener">HERE</a> and
                                                                        <a href="https://twitter.com/DavidHundeyin"
                                                                            target="_blank" rel="noopener">HERE</a></p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <!--more-->
                                </p>
                                <p data-selectable-paragraph="">Don’t forget to check back every Monday and Friday for
                                    new content specially curated to help, educate and teach you on your journey as a
                                    founder.</p>
                                <p data-selectable-paragraph="">You can check out other expressions of Talemia <a
                                        href="https://talemia.disha.page/" target="_blank" rel="noopener">HERE</a></p>
                                <p id="f0b6"
                                    class="pw-post-body-paragraph kj kk iy kl b km kn ko kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg ir ha"
                                    data-selectable-paragraph="">Are you building a tech startup and want us to feature
                                    you or know someone who is?<br>
                                    Tweet at us: @talemiahq<br>
                                    Email us: talemiahq@gmail.com</p>
                                <p id="9892"
                                    class="pw-post-body-paragraph kj kk iy kl b km kn ko kp kq kr ks kt ku kv kw kx ky kz la lb lc ld le lf lg ir ha"
                                    data-selectable-paragraph="">Let us help you launch your business faster than you
                                    can. We are doing this for other African founders who have joined Buildr. Click this
                                    link:&nbsp;<a
                                        href="https://talemia.com/joinbuildr/">https://talemia.com/joinbuildr/</a></p>

                            </div>                       
                            <!-- .entry-content -->            
                            <div class="post-tags-n-social">
                                <div class="post-tags">
                                    <div class="tag-links"><span><a
                                                href="https://talemia.com/blog/tag/creating-awareness/"
                                                rel="tag">Creating Awareness</a></span><span><a
                                                href="https://talemia.com/blog/tag/early-stage-founders/"
                                                rel="tag">Early-Stage Founders</a></span><span><a
                                                href="https://talemia.com/blog/tag/startups/"
                                                rel="tag">Startups</a></span><span><a
                                                href="https://talemia.com/blog/tag/storytelling/"
                                                rel="tag">storytelling</a></span><span><a
                                                href="https://talemia.com/blog/tag/storytelling-for-growth/"
                                                rel="tag">Storytelling for Growth</a></span><span><a
                                                href="https://talemia.com/blog/tag/storytelling-for-startups/"
                                                rel="tag">Storytelling for Startups</a></span><span><a
                                                href="https://talemia.com/blog/tag/visibility/"
                                                rel="tag">Visibility</a></span></div>
                                </div>
                            </div>


                            <div class="wtbx-like-wrapper wtbx-page-like-wrapper">
                                <div class="wtbx-like-inner">
                                    <a href="https://talemia.com/wp-admin/admin-ajax.php?action=process_simple_like&amp;nonce=89ca697487&amp;post_id=9881&amp;disabled=true&amp;is_comment=0"
                                        class="wtbx-like-button sl-button sl-button-9881 filled" data-nonce="89ca697487"
                                        data-post-id="9881" data-iscomment="0" title="Like"><i
                                            class="scape-ui-heart-filled"></i><span class="sl-count like-count">2
                                            Likes</span>
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
                                <div>
                                    <div class="author-image">
                                        <div class="author-image-inner">
                                            <img alt=""
                                                src="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=120&amp;d=mm&amp;r=g"
                                                srcset="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=240&amp;d=mm&amp;r=g 2x"
                                                class="avatar avatar-120 photo" height="120" width="120" loading="lazy">
                                                <h6>Okeke John Paul</h6>
                                        </div>


                                        <a href="https://talemia.com/author/talemiahq/" class="author-posts">8 Posts</a>
                                    </div>
                                    <div class="post-wrapper">
                                        <div class="comment">
                                            <h6><b>Okeke John Paul</b> <i class="icon-circle"></i> <span>4h</span> </h6>
                                            <p>Tech is one of the best thing that can happen to man actually.</p>
                                            <div class="icon" style="display: flex; align-items:center; justify-content: flex-start;">
                                                <button>Replies</button>
                                                <i class="icon-circle"></i>
                                                <a href="#">Share</a>
                                                <i class="icon-circle"></i>
                                                <span>10 Likes</span>
                                                <i class="icon-circle"></i>
                                                <i class="icon-thumbs-up thumb" style="margin: 0 4px 0 6px;color: #999;"></i>
                                                <i class="icon-thumbs-down thumb"style="transform: rotateY(180deg);margin-left: 8px;color: #999;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-comment">
                                    <div class="author-image-sub-comment">
                                        <div class="author-image-inner">
                                            <img alt=""
                                                src="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=120&amp;d=mm&amp;r=g"
                                                srcset="https://secure.gravatar.com/avatar/d43ab1573f2e6770c84bd9747a50e167?s=240&amp;d=mm&amp;r=g 2x"
                                                class="avatar avatar-120 photo" height="120" width="120" loading="lazy">
                                                <h6>Oladipo Isaac</h6>
                                        </div>
                                        <!-- <a href="https://talemia.com/author/talemiahq/" class="author-posts">8 Posts</a> -->
                                    </div>
                                    <div class="post-wrapper">
                                        <div class="comment">
                                            <h6><b>Oladipo Isaac</b> <i class="icon-circle"></i> <span>now</span> </h6>
                                            <p>I find it fun and interesting to work with every single time.</p>
                                            <div class="icon" style="display: flex; align-items:center; justify-content: flex-start;">
                                                <button>Replies</button>
                                                <i class="icon-circle"></i>
                                                <a href="#">Share</a>
                                                <i class="icon-circle"></i>
                                                <span>10 Likes</span>
                                                <i class="icon-circle"></i>
                                                <i class="icon-thumbs-up" style="margin: 0 4px 0 6px;color: #999;"></i>
                                                <i class="icon-thumbs-down"style="transform: rotateY(180deg);margin-left: 8px;color: #999;"></i>
                                            </div>
                                        </div>
                                    </div>
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
                                        <a href="https://talemia.com/blog/moretechies-and-talemia-wants-to-make-it-easier-for-early-stage-startups-to-access-skilled-interns/"
                                            rel="prev">
                                            <div class="wtbx-nav-thumb">
                                                <div class="wtbx-image-crop" style="padding-bottom: 100%"><img
                                                        class="wtbx-image wtbx-lazy lazyautosizes wtbx-lazyloaded"
                                                        data-bg="false" data-imgratio="1:1" data-aspectratio="1"
                                                        src="https://talemia.com/wp-content/uploads/2022/02/IMG-20220214-WA0009-150x150.jpg"
                                                        srcset="https://talemia.com/wp-content/uploads/2022/02/IMG-20220214-WA0009-300x300.jpg 300w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220214-WA0009-1024x1024.jpg 1024w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220214-WA0009-150x150.jpg 150w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220214-WA0009-768x768.jpg 768w, https://talemia.com/wp-content/uploads/2022/02/IMG-20220214-WA0009.jpg 1080w"
                                                        data-sizes="auto" data-parent-fit="cover"
                                                        alt="MoreTechies and Talemia wants to make it easier for early stage startups to access skilled Interns"
                                                        sizes="50px"></div>
                                            </div>
                                            <div class="wtbx-nav-content"><span
                                                    class="wtbx-nav-meta wtbx-nav-meta-prev">Previous Post</span><span
                                                    class="wtbx-nav-title wtbx-nav-title-prev">MoreTechies and Talemia
                                                    wants to make it easier for early stage startups to access skilled
                                                    Interns</span></div>
                                        </a></li>
                                    <li
                                        class="wtbx-nav-next post-prev clearfix wtbx-element-reveal wtbx-reveal-cont wtbx-element-visible">
                                        <a href="https://talemia.com/blog/resources-for-early-stage-founders/"
                                            rel="next">
                                            <div class="wtbx-nav-content"><span
                                                    class="wtbx-nav-meta wtbx-nav-meta-next">Next Post</span><span
                                                    class="wtbx-nav-title wtbx-nav-title-next">Resources For Early Stage
                                                    Founders</span></div>
                                        </a></li>
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
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                                    id="cancel-comment-reply-link"
                                    href="/blog/storytelling-for-early-stage-startups/#respond"
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
                                <input type="hidden" name="comment_post_ID" value="9881" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
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








<?php
    include "component/footer.php";
?>