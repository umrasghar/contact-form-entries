<?php

// frontend-shortcodes.php

/*class FrontendVxcfForm {
    private static $instance = null;

    private function __construct() {
        add_shortcode('form_fields_options', [$this, 'display_form_fields_options_shortcode']);
        add_shortcode('admin_notice', [$this, 'display_admin_notice_shortcode']);
        add_shortcode('forms_list', [$this, 'display_forms_list_shortcode']);
    }

    public static function get_instance() {
        if (self::$instance == null) {
            self::$instance = new FrontendVxcfForm();
        }
        return self::$instance;
    }
*/
        add_shortcode('form_fields_options', [$this, 'display_form_fields_options_shortcode']);
        add_shortcode('admin_notice', [$this, 'display_admin_notice_shortcode']);
        add_shortcode('forms_list', 'display_forms_list_shortcode');
        
     function display_form_fields_options_shortcode($atts) {
        ob_start();
        $form_id = isset($atts['form_id']) ? $atts['form_id'] : 0;
        $selected_val = isset($atts['selected_val']) ? $atts['selected_val'] : '';
        echo $this->form_fields_options($form_id, $selected_val);
        return ob_get_clean();
    }

     function display_admin_notice_shortcode($atts) {
        ob_start();
        $type = isset($atts['type']) ? $atts['type'] : 'admin';
        $message = isset($atts['message']) ? $atts['message'] : 'Default message';
        $id = isset($atts['id']) ? $atts['id'] : '';
        $this->display_msg($type, $message, $id);
        return ob_get_clean();
    }

     function display_forms_list_shortcode($atts) {
        ob_start();
        $forms = vxcf_form::get_forms();
        echo render_forms_list($forms);
        return ob_get_clean();
    }

    // Wrapper functions to call the original class methods

     function form_fields_options($form_id, $selected_val = "") {
        return vxcf_form::form_fields_options($form_id, $selected_val);
    }

     function display_msg($type, $message, $id = "") {
        vxcf_form::display_msg($type, $message, $id);
    }

     function get_forms() {
        return vxcf_form::get_forms();
    }

     function forms_list($forms) {
        return vxcf_form::forms_list($forms);
    }

     function render_forms_list($forms) {
        $output = '<ul>';
        foreach ($forms as $key => $form) {
            $output .= '<li>' . esc_html($form['label']) . '</li>';
            if (isset($form['forms'])) {
                $output .= '<ul>';
                foreach ($form['forms'] as $form_id => $form_title) {
                    $output .= '<li>' . esc_html($form_title) . '</li>';
                }
                $output .= '</ul>';
            }
        }
        $output .= '</ul>';
        return $output;
    }
/*}

// Initialize the frontend shortcodes
FrontendVxcfForm::get_instance();
*/