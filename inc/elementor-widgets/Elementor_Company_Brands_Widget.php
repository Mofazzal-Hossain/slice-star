<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Company_Brands_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'company_brands';
    }

    public function get_title()
    {
        return __('Company Brands', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-posts-masonry';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'company_brands_content_section',
            [
                'label' => __('Company Brands Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'form_destination_label',
            [
                'label'       => __('Form Destination Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Destinations', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'form_checkin_label',
            [
                'label'       => __('Form Check-in Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Check-In', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_checkout_label',
            [
                'label'       => __('Form Check-Out Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Check-Out', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_person_label',
            [
                'label'       => __('Form Adult Person Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Adult Person', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_child_label',
            [
                'label'       => __('Form Child Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Children', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_search_label',
            [
                'label'       => __('Form Search Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Search Now', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>

        <section class="section-img-presentation">
            <div class="container">
                <div class="text-center block-mb-md">
                    <h2>Companies that already <br>use Slice</h2>
                    <p class="sub-header sub-header-sm">With recent law changes and the advancement of our proprietary software,
                        your business can accept credit cards at No Processing cost to the merchant. Slice Introduces zero cost
                        processing solution today!</p>
                </div>
                <div class="img-presentation-info-wrap">
                    <div class="row justify-content-center align-items-center">
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-01.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-02.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-03.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-04.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-05.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-06.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-07.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-08.png');?>" alt=""></div>
                        <div class="ipi-item"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-09.png');?>" alt=""></div>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
