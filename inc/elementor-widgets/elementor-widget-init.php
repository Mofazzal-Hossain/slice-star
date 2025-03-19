<?php

class Themefic_ThemeDev_Elementor_Widgets
{

    public function __construct()
    {
        add_action('elementor/widgets/register', [$this, 'hello_elementor_child_register_widgets']);
    }

  
    public function hello_elementor_child_register_widgets()
    {
        // Check if Elementor is loaded
        if (did_action('elementor/loaded')) {
            $this->include_widgets();
            $this->register_widget_classes();
        }
    }

    // Method to include widget files
    private function include_widgets()
    {
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Hero_Banner_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Visual_Presentation_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Client_Review_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Company_Brands_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Card_Processing_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Processing_Fee_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Processing_Banner_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Law_Features_Widget.php';
        require_once get_stylesheet_directory() . '/inc/elementor-widgets/Elementor_Dual_Pricing_Widget.php';
    }

    // Method to register the widget classes
    private function register_widget_classes()
    {
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Hero_Banner_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Visual_Presentation_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Client_Review_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Company_Brands_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Card_Processing_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Processing_Fee_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Processing_Banner_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Law_Features_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register(new \Elementor_Dual_Pricing_Widget());
    }
}

new Themefic_ThemeDev_Elementor_Widgets();
