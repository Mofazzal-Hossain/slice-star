<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Law_Features_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'law_features';
    }

    public function get_title()
    {
        return __('Law Features', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-posts-ticker';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'law_features_content_section',
            [
                'label' => __('Law Features Content', 'hello-elementor-child'),
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

        <section class="block-pb-md law-features-block">
            <div class="container">
                <div class="text-center block-mb-md">
                    <h2 class="wrap-br-01">Are you Still Paying <br>to Get Paid?</h2>
                    <p class="sub-header sub-header-sm">With recent law changes and the advancement of our proprietary software, your business can accept credit cards at No Processing cost to the merchant. Slice Introduces zero cost processing solution today!</p>
                </div>
                <div class="row align-items-xl-center block-mb-lg justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-7 col-md-12">
                        <div class="row wrap-div-01 justify-content-between">
                            <div class="col-6">
                                <ul class="list-checked-circle lcc-01">
                                    <li>
                                        <h5>It’s 100% legal</h5>
                                        <p>Chosen solution for over 50,000 restaurants and bars across the country</p>
                                    </li>
                                    <li>
                                        <h5>Easy to start</h5>
                                        <p>All it takes a brief conversation with one of our professionals who will guide through the rest of the set up process.</p>
                                    </li>
                                    <li>
                                        <h5>One Slice fits all</h5>
                                        <p>Slice accommodates all credit card types and mobile wallet systems such as ApplePay® and Android®</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-checked-circle lcc-01">
                                    <li>
                                        <h5>No hidden fees</h5>
                                        <p>We believe everything has to be transparent and fair</p>
                                    </li>
                                    <li>
                                        <h5>Save from day one</h5>
                                        <p>With Slice, the days of hefty credit card fees and interchange charges are over. It’s like giving yourself a big raise</p>
                                    </li>
                                    <li>
                                        <h5>Supersmart technology</h5>
                                        <p>Terminals with EMV Chip Reader. Cloud-based receipt system. Easy integration with any POS.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
