<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Services_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'services';
    }

    public function get_title()
    {
        return __('Services', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-cogs';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'services_content_section',
            [
                'label' => __('Services Content', 'hello-elementor-child'),
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

        <section class="bg-grey block-pt-content-01 block-pb-footer anchor-wrap">
            <div class="anchor-block anchor-block-01" id="traditional-processing"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 block-info-decor block-info-decor-left">
                        <h2 class="h1">Advanced Services <br>for your business</h2>
                        <p class="sub-header sub-header-sm block-mb-sm">Take advantage of a variety of services to navigate in today’s diverse business environment. Slice offers the widest selection of merchant services and solutions in the industry. Everything you need to run your business more smoothly no matter your size or industry. <br>Our trained team of business experts has the right solution to help you grow your business.</p>
                        <a href="zero-fee/processing/quick-start7673.html?us=05" class="btn btn-img">Get started</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="tiles-cascade-wrap" id="tiles-cascade-init">
                            <div class="row">
                                <div class="col-6">
                                    <div class="tile-icon-info-single">
                                        <div class="tiis-icon tiis-icon-yellow"><svg class="icon icon-tax">
                                                <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/icons.svg#tax"></use>
                                            </svg></div>
                                        <p class="tiis-header">Traditional Processing</p>
                                        <p>Slice offers the most competitive rates for Conventional method of processing in the industry.</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="tile-icon-info-single">
                                        <div class="tiis-icon tiis-icon-violet"><svg class="icon icon-food">
                                                <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/icons.svg#food"></use>
                                            </svg></div>
                                        <p class="tiis-header">Online Restaurant Ordering</p>
                                        <p>Slice can provide your restaurant with an array of services and solutions for your specific needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
