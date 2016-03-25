<?php 
/**
 * Template Name: Home Page with Progam Committe
 *
 */

 ?>


<?php get_header(); ?>


    <?php get_template_part('loop', 'home'); ?>    
	



<div class="slide" id="get-updates">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Stay In Touch</h3>
      <div class="thin pull-right">get news updates</div>
    </div>
    <div class="col-md-6">
      <!-- Embed HubSpot Form -->


      <!--[if lte IE 8]>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
      <![endif]-->
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
      <script>
        hbspt.forms.create({ 
          sfdcCampaignId: '701j0000000nKkpAAE',
          css: '',
          portalId: '540072',
          formId: 'b0acdb26-5892-4fdc-9c22-278a05df8507'
        });
      </script>
      <!-- end HubSpot Form -->
    </div>
  </div>
</div>
</div>


<div id="sponsors" class="slide">
<div class="container">
  <div class="row">
  <div class="col-md-12">
  <h2>Sponsors</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/signalfx/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/signal-fx.png" alt="Signal FX" class="img-responsive thumbnai center-block" width="75%"> 
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/data-dog/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/datadog.png" alt="Data Dog" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/qubole/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/qubole.png" alt="Quoble" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/mapr/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/mapr.png" alt="Mapr" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/heroku/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/heroku.png" alt="Heroku" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/salesforce/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/salesforce.png" alt="Salesforce" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/memsql/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/memsql.png" alt="MemSQL" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/opsclarity/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/opsclarity.png" alt="Ops Clarity" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/ge-digital/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/ge-digital.png" alt="GE Digital" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/microsoft/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/microsoft.png" alt="Microsoft" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/linkedin/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/linkedin.png" alt="LinkedIn" class="img-responsive center-block" width="75%">
              </a>
            </div>            
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/striim/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/striim.png" alt="Striim" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/citus-data/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/citus-data.png" alt="Citus Data" class="img-responsive center-block" width="75%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="http://kafka-summit.org/sponsors/mesosphere/">
              <img src="http://kafka-summit.org/wp-content/uploads/2016/03/mesosphere.png" alt="Mesosphere" class="img-responsive center-block" width="75%">
              </a>
            </div>

        </div>
        <!-- Add Pagination -->
        <p>Interested in sponsoring Kafka Summit? Contact <a href="mailto:organizers@kafka-summit.org">organizers@kafka-summit.org</a>.</p>
    </div>    
    </div>
  </div>
</div>
</div>

<div class="slide" id="program-committee">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <h2>Kafka Summit Program Committee</h2>
    </div>
    </div>
  </div>
  <div class="container">
    <div class="row seven-cols">
      <div class="col-md-1"><a href="/people/neha-narkhede"><img src="<?php echo get_template_directory_uri() ?>/images/neha-narkhede.png" alt="Neha Narkhede" class="img-responsive thumbnail"><p>Neha Narkhede<br>Program Chair</p></a></div>
      <div class="col-md-1"><a href="/people/tyler-akidau"><img src="<?php echo get_template_directory_uri() ?>/images/tyler-akidau.png" alt="Tyler Akidau" class="img-responsive thumbnail"><p>Tyler Akidau</p></a></div>
      <div class="col-md-1"><a href="/people/joe-crobak"><img src="<?php echo get_template_directory_uri() ?>/images/joe-crobak.png" alt="Joe Crobak" class="img-responsive thumbnail"><p>Joe Crobak</p></a></div>
      <div class="col-md-1"><a href="/people/todd-palino"><img src="<?php echo get_template_directory_uri() ?>/images/todd-palino.png" alt="Todd Palino" class="img-responsive thumbnail"><p>Todd Palino</p></a></div>
      <div class="col-md-1"><a href="/people/jun-rao"><img src="<?php echo get_template_directory_uri() ?>/images/jun-rao.png" alt="Jun Rao" class="img-responsive thumbnail"><p>Jun Rao</p></a></div>
      <div class="col-md-1"><a href="/people/gwen-shapira"><img src="<?php echo get_template_directory_uri() ?>/images/gwen-shapira.png" alt="Gwen Shapira" class="img-responsive thumbnail"><p>Gwen Shapira</p></a></div>      
      <div class="col-md-1"><a href="/people/joe-stein"><img src="<?php echo get_template_directory_uri() ?>/images/joe-stein.png" alt="Joe Stein" class="img-responsive thumbnail"><p>Joe Stein</p></a></div>      
    </div>
  </div>
</div>


<!-- Swiper JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/Swiper/dist/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        autoplay: 2000,
        autoplayDisableOnInteraction: false
    });
    </script>


<!-- Footer -->

<?php get_footer(); ?>

