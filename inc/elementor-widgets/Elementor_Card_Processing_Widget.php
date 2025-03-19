<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Card_Processing_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'card_processing';
    }

    public function get_title()
    {
        return __('Card Processing', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-product-upsell';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'card_processing_content_section',
            [
                'label' => __('Card Processing Content', 'hello-elementor-child'),
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

        <section class="block-shadow-bottom">
            <div class="container">
                <div class="row align-items-center calculator-wrap">
                    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-6 cw-control" id="animation-tile-card-info">
                        <h1>See how much<br> you <span class="white-space-nw">can save</span></h1>
                        <p class="sub-header sub-header-sm block-mb-sm">Use the calculator below to determine your potential
                            <br>savings on an annual basis
                        </p>
                        <p class="cw-info-highlight">Annual Credit Card <span class="white-space-nw">Processing Volume</span></p>
                        <div class="slider-input-field">
                            <input id="amount-value" type="tel" class="interactive-val">
                        </div>
                        <div class="money-slider-wrap">
                            <div id="money-slider" class="slider"></div>
                        </div>
                        <p class="cw-info-desc">*Calculation is based on annual credit card processing volume multiplied by 3%</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-6">
                        <div class="tile-card-info-wrap">
                            <div class="tile-card-info">
                                <div class="tile-card-info-bg"></div>
                                <div class="row tci-container align-items-center">
                                    <div class="col-12">
                                        <p class="tci-header">
                                            <span class="tci-money-currency">$</span><span class="tci-money-value"
                                                id="calculator-result">7500</span><span class="tci-money-desc">/yr.</span>
                                        </p>
                                        <div class="tci-body">
                                            <p class="tci-sub-header">Potential Annual Savings <br>with Slice</p>
                                            <p>Start saving towards your company success with credit card processing fees off your list</p>
                                        </div>
                                        <div class="tci-cta text-center">
                                            <a href="zero-fee/processing/quick-start7673.html?us=05" class="btn btn-lg">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tile-card-decor tcd-first"></div>
                            <div class="tile-card-decor tcd-second"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    }
}
