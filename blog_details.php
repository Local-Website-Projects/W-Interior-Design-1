<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Details || Interior Design</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    include ('includes/css.php');
    require_once('admin/config/dbConfig.php');
    $db_handle = new DBController();
    $page = 'Blog';
    $fetch_details = $db_handle->runQuery("select * from blogs where blog_id = '{$_GET['blog_id']}'");
    ?>

</head>

<body>
<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Header Main Area -->
    <header class="site-header header-style-3">
        <?php include ('includes/header.php');?>
    </header>
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title"> Blog Details</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
								<span>
									<a title="" href="Home" class="home"><span>Xinterio</span></a>
								</span>
                            <span class="sep">
									<i class="pbmit-base-icon-angle-right"></i>
								</span>
                            <span><span class="post-root post post-post current-item"> Blog Details</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <div class="page-content">
        <!-- Blog Details -->
        <section class="site-content blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <article>
                                    <div class="post blog-classic">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="images/blog/blog-02-img.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-blog-classic-inner">
                                            <div class="pbmit-blog-meta pbmit-blog-meta-top">
												<span class="pbmit-meta pbmit-meta-cat">
													<a href="blog-classic.html" rel="category tag">Interior</a>
												</span>
                                                <span class="pbmit-meta pbmit-meta-date">
													<i class="pbmit-base-icon-calendar-3"></i>
													<a href="blog-single-details.html" rel="bookmark">
														<time class="entry-date published" datetime="2023-08-29T09:05:54+00:00"><?php echo $fetch_details[0]['publish_date'];?></time>

													</a>
												</span>
                                                <span class="pbmit-meta pbmit-meta-author">
													<i class="pbmit-base-icon-user-3"></i>by
													<a class="pbmit-author-link" href="#">admin</a>
												</span>

                                            </div>
                                            <div class="pbmit-entry-content">
                                                <p class="pbmit-firstletter">
                                                    <?php echo $fetch_details[0]['blog_body'];?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details End -->
    </div>

    <!-- footer -->
    <?php include ('includes/footer.php');?>
    <!-- footer End -->

</div>
<!-- Page Wrapper End -->


<!-- Scroll To Top -->
<div class="pbmit-progress-wrap">
    <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- Scroll To Top End -->

<!-- JS
    ============================================ -->
<?php include ('includes/js.php');?>

</body>


</html>