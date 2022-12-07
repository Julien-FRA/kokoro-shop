<?php 

/* Template Name: Custom_coming_soon */

?>
<?php get_header(); ?>

<div
    class="<?php echo ( (isset($page_title_option)) && ($page_title_option == "on") ) ? 'page-title-shown':'page-title-hidden';?>">

    <div id="primary" class="content-area">

        <div id="content" class="site-content" role="main">

        <div class="coming-soon">
            <h2 class="subtitle">Coming soon</h2>
            <div class="img-container">
                <div class="loader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
            </div>
          </div>

        </div><!-- #content -->

    </div><!-- #primary -->

</div>

<?php get_footer(); ?>