<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Dual_Pricing_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'dual_pricing';
    }

    public function get_title()
    {
        return __('Dual Pricing', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-price-table';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'dual_pricing_content_section',
            [
                'label' => __('Dual Pricing Content', 'hello-elementor-child'),
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

        <section class="section-info-tile-decor block-pb-zero">
            <div class="sitd-item anchor-wrap">
                <div class="anchor-block anchor-block-lg" id="dual-pricing"></div>
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div class="col-md-7 block-zi-2 order-2 order-md-1 block-indent-right-lg">
                            <h2 class="h1">Dual Pricing</h2>
                            <p class="sub-header sub-header-sm">The Slice Dual Pricing Program is a way for you the merchant to offset your merchant service fees without increasing your sale price.</p>
                            <ul class="list-circle block-mb-sm">
                                <li>100% legal</li>
                                <li>Available in all 50 states</li>
                                <li>Collect 100% of your processing sales</li>
                                <li>Easy to order, set up and manage</li>
                                <li>Next day funding</li>
                            </ul>
                            <div class="btn-group">
                                <a href="zero-fee/processing/quick-start7673.html?us=05" class="btn btn-img">
                                   Get started</a>
                                <a href="faq.html" class="link-angle link-grey">Read FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-5 order-1 order-md-2">
                            <div class="tile-decor-wrap tile-decor-wrap-right">
                                <div class="tile-decor-substrate-wrap tdsw-01 tile-decor-substrate-anim">
                                    <div style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tile-dual-pricing.png);"></div>
                                </div>
                                <div class="tile-decor bg-v-gradient-violet">
                                    <div class="tile-decor-content">
                                        <div class="tile-decor-icon"><svg class="icon icon-cash">
                                                <use xlink:href="css/fonts/icons.svg#cash"></use>
                                            </svg></div>
                                        <p class="tile-decor-header">Slice <br>Dual Pricing <br>Program</p>
                                        <p class="tile-decor-desc">Any business that accepts credit cards can benefit from Slice</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile-icon-info block-zi-2">
                        <div class="row">
                            <div class="col-12 col-lg-auto tii-cta">
                                <p class="tii-cta-header">How <br>It works?</p>
                                <a href="zero-fee/processing/quick-start7673.html?us=05" class="link-angle">Get Started</a>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-4 tii-item">
                                        <div class="tii-item-icon"><svg class="icon icon-colored-money">
                                                <use xlink:href="css/fonts/icons.svg#colored-money"></use>
                                            </svg></div>
                                        <p class="tii-item-header">Cash is King</p>
                                        <p>Even better, your customers are rewarded for paying in cash with a 3.99% discount!</p>
                                    </div>
                                    <div class="col-sm-4 tii-item">
                                        <div class="tii-item-icon"><svg class="icon icon-colored-chart">
                                                <use xlink:href="css/fonts/icons.svg#colored-chart"></use>
                                            </svg></div>
                                        <p class="tii-item-header">A Bigger Slice</p>
                                        <p>You, the business owner, get 100% of the sale!</p>
                                    </div>
                                    <div class="col-sm-4 tii-item">
                                        <div class="tii-item-icon"><svg class="icon icon-colored-presentation">
                                                <use xlink:href="css/fonts/icons.svg#colored-presentation"></use>
                                            </svg></div>
                                        <p class="tii-item-header">Signs of the Times!</p>
                                        <p>Point-of-purchase pricing and discount signage clearly spell out the process to customers</p>
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
