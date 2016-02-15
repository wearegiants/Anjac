<?php Themewrangler::setup_page();get_header('splash' /***Template Name: Splash */); ?>

<div class="splash__wrapper relative">

  <div class="splash__header">
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <div class="text-right">
          <a class="btn btn__icon btn__outline ss-gizmo ss-login right" href="#">Log Into Yardy</a>
        </div>
      </div>
    </div>
  </div>

<?php $logo = get_field('logo'); ?>

  <div class="splash__logo centered centered-full">
    <div class="fs-row">
      <div class="fs-cell fs-xl-third fs-lg-half fs-md-4 fs-sm-hide fs-xs-hide fs-centered splash__logo">
        <img src="/assets/img/anjac_logo.png" alt="<?php bloginfo( 'sitename' ) ?>" class="img-responsive" />
      </div>
      <div class="fs-cell fs-xl-third fs-lg-hide fs-md-hide fs-sm-half fs-xs-3 fs-centered splash__logo">
        <img src="/assets/img/anjac_logo.svg" alt="<?php bloginfo( 'sitename' ) ?>" class="img-responsive" />
      </div>
    </div>
  </div>

  <div class="splash__overlay covered"></div>

<?php $images = get_field('gallery'); ?>

  <div class="splash__carousel carousel royalslider rsMinW relative">

<?php foreach($images as $image): ?>
    <img src="<?php echo $image['sizes']['gallery-xl']; ?>" class="rsImg" />
<?php endforeach; ?>

  </div>

  <div class="splash__footer">
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <?php the_field('footer'); ?>
      </div>
    </div>
  </div>

</div>

<?php get_footer('splash'); ?>