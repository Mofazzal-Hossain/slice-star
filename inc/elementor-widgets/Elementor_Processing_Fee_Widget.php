<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Processing_Fee_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'processing_fee';
    }

    public function get_title()
    {
        return __('Processing Fee', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-flip';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'processing_fee_content_section',
            [
                'label' => __('Processing Fee Content', 'hello-elementor-child'),
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

        <section class="section-cta block-pb-footer">
            <div class="container">
                <div class="row">
                    <div class="cta-wrap">
                        <h3 class="text-color-darkblue">Stop paying <span class="white-space-nw">high processing fees</span></h3>
                        <p class="sub-header font-header">Start using Zero cost processing to the merchant solution today!</p>
                        <ul class="list-checked block-mb-xs">
                            <li>Easy to start</li>
                            <li>No hidden fees</li>
                            <li>Save from day one</li>
                        </ul>
                        <div class="btn-group">
                            <a href="zero-fee/processing/quick-start7673.html?us=05" class="btn">Get Started</a><br>
                            <a href="contact-us.html" class="link-angle">Talk To Our Expert Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
