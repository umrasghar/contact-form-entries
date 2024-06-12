<?php


      

 add_shortcode('form_list2', 'display_form_list2_shortcode');

function display_form_list2_shortcode($atts) {
    // Start output buffering at the beginning
    ob_start();

  ?>
    <h1 > Its new testing2 </h1>
    <h2 class="vx_top_head"><?php _e('Entries Stats','contact-form-entries') ?></h2>
<form method="get">
    
                <input type="hidden" name="page" value="<?php echo esc_html(vxcf_form::post('page')) ?>">
                <input type="hidden" name="tab" value="<?php echo esc_html(vxcf_form::post('tab')) ?>">
                
                <select name="form" class="crm_input_inline">
                <option value=""><?php _e('All Forms','contact-form-entries') ?></option>
          <?php
     if(!empty($all_forms)){     
  foreach($all_forms as $f_key=>$platform){
     if(isset($platform['label'])){
      ?>
      <optgroup label="<?php echo esc_html($platform['label']) ?>">
      <?php
    if(isset($platform['forms']) && is_array($platform['forms'])){
    foreach($platform['forms'] as  $form_id_=>$form_title){  
  $sel="";
  $form_id_arr=$f_key.'_'.$form_id_;
  if(!empty($_REQUEST['form']) && $_REQUEST['form'] == $form_id_arr){
  $sel="selected='selected'";
  }
  echo "<option value='".esc_html($form_id_arr)."' $sel>".esc_html($form_title)."</option>"; 
    }      
  }
  ?>
  </optgroup>
  <?php
     } } }
  ?>
</select>
</form>

<?php

    // Return the buffered content
    return ob_get_clean();
}

  add_shortcode('form_list', 'display_form_list_shortcode');

function display_form_list_shortcode($atts) {
    // Start output buffering at the beginning
    ob_start();

    // Output the heading and test messages
    echo "This is testing";
    echo "<h1>Its new testing</h1>";

    // Get forms and render them
    $forms = vxcf_form::get_forms();
    echo render_forms_list($forms);

    // Output more test messages
    echo "This is testing";
    echo "<h1>Its new testing</h1>";

    // Return the buffered content
    return ob_get_clean();
}