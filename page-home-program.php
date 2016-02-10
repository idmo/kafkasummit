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



<!-- Footer -->

<?php get_footer(); ?>

