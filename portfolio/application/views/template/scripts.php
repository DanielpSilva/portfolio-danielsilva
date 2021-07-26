<script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/php-email-form/validate.js"></script>
<script>
  $(".navbar-nav li a").click(function(event) {
    if (!$(this).parent().hasClass('dropdown'))
      $(".navbar-collapse").collapse('hide');
  });
</script>

</html>