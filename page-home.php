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




<!-- Footer -->

<?php get_footer(); ?>

