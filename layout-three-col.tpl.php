<?php
/**
 * Three-column layout
 */
?>
<?php include('header.inc'); ?>

<div class="left-content">
  <div class="left-content-inner inner">
    <?php print $left; ?>
  </div>
</div>

<div class="center-content">
  <div class="center-content-inner inner">
    <?php print $content; ?>
  </div>
</div>

<div class="right-content">
  <div class="right-content-inner inner">
    <?php print $right; ?>
  </div>
</div>

<?php include('footer.inc'); ?>
