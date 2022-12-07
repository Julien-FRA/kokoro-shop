<?php 

/* Template Name: Custom_about_us */

?>
<?php get_header(); ?>

<div
    class="<?php echo ( (isset($page_title_option)) && ($page_title_option == "on") ) ? 'page-title-shown':'page-title-hidden';?>">

    <div id="primary" class="content-area">

        <div id="content" class="site-content" role="main">

          <div class="custom-page">
            <h2 class="subtitle">A propos</h2>
            <div class="text-container">
              KOKORO est un projet démarré en 2021 par l’initiative de Mylton et
              Lucas, deux potes amoureux de la mode et influencés par des
              courants et pratiques artistiques comme le pop art et le street
              art ainsi que par la culture urbaine.
            </div>
            <div class="text-container">
              Fondé en banlieue parisienne et aujourd’hui installé dans la
              capitale, KOKORO vise à proposer des pièces et imprimés de qualité
              premium et utilisant des matériaux respectueux de l’environnement.
            </div>
            <div class="text-container">
              KOKORO, du japonais signifie à la fois le cœur, l’âme et l’esprit
              soit les lignes directrices avec lesquelles le projet s’est
              construit et continue aujourd’hui d’avancer.
            </div>
            <div class="img-container">
              <figure class="figure-container">
                <img
                  src="https://kokoro-shop.fr/wp-content/uploads/2021/12/IMG_2496-scaled.jpg"
                  alt="design"
                  class="img"
                />
              </figure>
            </div>
          </div>

        </div><!-- #content -->

    </div><!-- #primary -->

</div>

<?php get_footer(); ?>