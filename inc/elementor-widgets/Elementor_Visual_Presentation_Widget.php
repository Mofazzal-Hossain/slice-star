<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Visual_Presentation_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'visual_presentation';
    }

    public function get_title()
    {
        return __('Visual Presentation', 'themefic_themedev');
    }

    public function get_icon()
    {
        return 'eicon-photo-library';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'visual_presentation_content_section',
            [
                'label' => __('Visual Presentation Content', 'themefic_themedev'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'form_destination_label',
            [
                'label'       => __('Form Destination Label', 'themefic_themedev'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Destinations', 'themefic_themedev'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'form_checkin_label',
            [
                'label'       => __('Form Check-in Label', 'themefic_themedev'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Check-In', 'themefic_themedev'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_checkout_label',
            [
                'label'       => __('Form Check-Out Label', 'themefic_themedev'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Check-Out', 'themefic_themedev'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_person_label',
            [
                'label'       => __('Form Adult Person Label', 'themefic_themedev'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Adult Person', 'themefic_themedev'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_child_label',
            [
                'label'       => __('Form Child Label', 'themefic_themedev'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Children', 'themefic_themedev'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'form_search_label',
            [
                'label'       => __('Form Search Label', 'themefic_themedev'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Search Now', 'themefic_themedev'),
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

    <section class="section-visual-presentation block-pt-0">
        <div class="container">
            <div class="text-center block-mb-md">
                <h2 class="block-mt-0">We change the way you get paid</h2>
                <p class="sub-header sub-header-sm">With recent law changes and the advancement of our proprietary software,
                    your business can accept credit cards at No Processing cost to the merchant. Slice Introduces zero cost
                    processing solution today!</p>
            </div>
            <div class="row">
                <div class="col-auto svp-card-wrap">
                    <div class="card-element-wrap">
                        <div class="card-element"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-card.jpg" alt="credit card"></div>
                        <div class="card-element-decor ced-first"></div>
                        <div class="card-element-decor ced-second"></div>
                    </div>
                </div>
                <div class="col-auto svp-list-wrap">
                    <ul class="list-icon-header lih-01">
                        <li>
                            <div class="additional-info">
                                <div class="additional-info-xl">0</div>
                                <div class="additional-info-sm">Cost Processing<br>to the Merchant</div>
                            </div>
                            <div class="lih-icon"><svg class="icon icon-cash">
                                    <use xlink:href="css/fonts/icons.svg#cash"></use>
                                </svg></div>
                            <p class="lih-header">Dual Pricing</p>
                            <p class="lih-desc">The Slice Dual Pricing Program is a way for you the merchant to offset your
                                merchant service fees without increasing your sale price.</p>
                            <a href="processing.html#dual-pricing" class="link-angle">Learn More</a>
                        </li>
                        <li>
                            <div class="additional-info">
                                <div class="additional-info-lg">1.29%</div>
                                <div class="additional-info-md">Start from</div>
                            </div>
                            <div class="lih-icon"><svg class="icon icon-tax">
                                    <use xlink:href="css/fonts/icons.svg#tax"></use>
                                </svg></div>
                            <p class="lih-header">Traditional Processing</p>
                            <p class="lih-desc">Slice offers the most competitive rates for Conventional method of processing in
                                the industry.</p>
                            <a href="processing.html#traditional-processing" class="link-angle">Learn More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php
    }
}
