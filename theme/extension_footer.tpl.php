<div class="row-fluid">
  <div class="span10">
    <p><a href="http://oregonstate.edu/copyright">Copyright</a> &copy; <?php print date("Y"); ?> Oregon State University</p>
    <p><?php print variable_get('extension_footer_contact'); ?></p>
    <p><a href="<?php print variable_get('extension_footer_webmaster_url'); ?>"><?php print variable_get('extension_footer_webmaster_title'); ?></a></p>
    <p><a href="http://oregonstate.edu/disclaimer">Disclaimer</a></p>
  </div>
  <div class="span2">
    <div class="social-media">
      <?php print doug_fir_social_media(); ?>
    </div>

    <?php
      global $base_url;
      if (!user_is_logged_in()) {
        $link_text = "Log in";
        $link_path = "$base_url/user/login";
      }
      else {
        $link_text = "Log out";
        $link_path = "$base_url/user/logout";
      }
    ?>

    <div class="login">
      <a href="<?php print $link_path; ?>"><?php print $link_text; ?></a>
    </div>
  </div>
</div>