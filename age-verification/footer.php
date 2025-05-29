<?php
/**
 * Age Verification Modal Footer Template
 * 
 * This file contains the HTML structure for the age verification modal.
 * Uses Advanced Custom Fields (ACF) for dynamic content management.
 * Include this in your WordPress theme's footer.php or as a separate template part.
 */

// Get ACF button values
$avs_buttons = array(
    'button_1' => get_field('avs_button_1', 'option'),
    'button_2' => get_field('avs_button_2', 'option'), 
    'button_3' => get_field('avs_button_3', 'option')
);
?>

<!-- Age Verification Modal -->
<div class="modal-verification" id="modal_verification">
  <div class="modal-data-panel">
    <div class="modal-header-panel text-center">

      <?php if (!empty(get_field('avs_header_logo', 'option'))): ?>
        <div class="modal-logo">
          <img src="<?php echo get_field('avs_header_logo', 'option'); ?>" alt="" />
        </div>
      <?php endif; ?>

      <div class="modal-header-data">

        <?php if (!empty(get_field('avs_heading', 'option'))): ?>
          <h5 style="margin-top: 0;"><?php echo get_field('avs_heading', 'option'); ?></h5>
        <?php endif; ?>

        <?php if (!empty(get_field('avs_subheading', 'option'))): ?>
          <h2 class='h1' style="margin-top: 0; margin-bottom: 10px; font-weight: 500;"><?php echo get_field('avs_subheading', 'option'); ?></h2>
        <?php endif; ?>

        <?php if (!empty(get_field('avs_description', 'option'))): ?>
          <div class="modal-header-content text-base">
            <p><?php echo get_field('avs_description', 'option'); ?></p>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div class="modal-content-panel">

      <?php if (!empty($avs_buttons)): ?>
        <div class="btn-stack">

          <?php if (!empty($avs_buttons['button_1'])): ?>
            <a href="javascript:void(0)" id="under-18" class="btn-default"><?php echo $avs_buttons['button_1']; ?></a>
          <?php endif; ?>

          <?php if (!empty($avs_buttons['button_2'])): ?>
            <a href="javascript:void(0)" id="18-23" class="btn-default"><?php echo $avs_buttons['button_2']; ?></a>
          <?php endif; ?>

          <?php if (!empty($avs_buttons['button_3'])): ?>
            <a href="javascript:void(0)" id="over-24" class="btn-default"><?php echo $avs_buttons['button_3']; ?></a>
          <?php endif; ?>

        </div>
      <?php endif; ?>

      <?php if (!empty(get_field('avs_verification_check_text', 'option'))): ?>
        <div class="verification-check">
          <div class="form-group">
            <input type="checkbox" checked="checked" name="" id="age_verify" />
            <label for="age_verify"><?php echo get_field('avs_verification_check_text', 'option'); ?></label>
          </div>
        </div>
      <?php endif; ?>

    </div>

    <?php if (!empty(get_field('avs_confirmation_text', 'option'))): ?>
      <div class="modal-bottom-text text-center">
        <p><?php echo get_field('avs_confirmation_text', 'option'); ?></p>
      </div>
    <?php endif; ?>

  </div>
</div>
<div class="modal-overlayer"></div>

<!-- Example content blocks that will be controlled by the script -->
<!-- Remove these if you don't need them or have your own content structure -->
<!--
<div class="code-block">
    <h3>Casino Highlight Content</h3>
    <p>This content will be hidden for users under 24 or those who opt out.</p>
</div>
-->

<style>
/* Basic modal styling - customize as needed */
.modal-verification {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 2rem;
    border-radius: 8px;
    z-index: 1001;
    display: none;
    max-width: 500px;
    width: 90%;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.modal-verification.modal-visible {
    display: block;
}

.modal-overlayer {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    z-index: 1000;
    display: none;
}

.modal-overlayer.visible {
    display: block;
}

.modal-data-panel {
    padding: 1rem;
}

.modal-header-panel {
    margin-bottom: 2rem;
}

.modal-logo img {
    max-width: 150px;
    height: auto;
    margin-bottom: 1rem;
}

.modal-header-data h5 {
    font-size: 1rem;
    color: #666;
    margin-bottom: 0.5rem;
}

.modal-header-data h2 {
    font-size: 1.75rem;
    color: #333;
    margin-bottom: 1rem;
}

.modal-header-content p {
    color: #666;
    line-height: 1.5;
}

.btn-stack {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.btn-default {
    padding: 0.75rem 1rem;
    border: 2px solid #007cba;
    background: white;
    color: #007cba;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    text-decoration: none;
    text-align: center;
    transition: all 0.3s ease;
    display: block;
}

.btn-default:hover {
    background: #007cba;
    color: white;
    text-decoration: none;
}

.verification-check {
    margin-bottom: 1rem;
}

.form-group {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.form-group input[type="checkbox"] {
    margin: 0;
}

.form-group label {
    cursor: pointer;
    margin: 0;
    line-height: 1.4;
}

.modal-bottom-text {
    padding-top: 1rem;
    border-top: 1px solid #eee;
    color: #666;
    font-size: 0.9rem;
}

.text-center {
    text-align: center;
}

.text-base {
    font-size: 1rem;
}

.overflow-hidden {
    overflow: hidden;
}

.d-none {
    display: none !important;
}
</style>
