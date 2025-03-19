<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Client_Review_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'client_review';
    }

    public function get_title()
    {
        return __('Client Review', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-review';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'client_review_content_section',
            [
                'label' => __('Client Review Content', 'hello-elementor-child'),
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

        <section class="bg-grey-blue bg-gradient-blue">
            <div class="container">
                <div class="row testimonials-preview-row">
                    <div class="col-12 col-sm-5 align-self-start block-text-light bg-dynamic-rectangle">
                        <div class="bdr-wrap">
                            <div class="bdr-item"></div>
                        </div>
                        <div class="block-zi-2">
                            <h2>Hear From <br>Our Satisfied <br>Clients</h2>
                            <!--<a href="testimonials" class="link-angle link-turquoise">Learn More Testimonials</a>-->
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-6 testimonials-preview-wrap">
                        <p class="tpw-text">…We integrated the Slice Dual Pricing Program a few months back, and the savings were
                            phenomenal! It amounted to a few thousand dollars — money I can really use to put back into the
                            businesses. And my customers really appreciate the . What a great idea. Cheers to Slice!</p>
                        <div class="tpw-author-rating">
                            <div class="tpw-author-img" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/t-01.jpg'); ?>)"></div>
                            <div class="tpw-rating">
                                <span class="d-flex">
                                    <div class="svg-inline-icon">
                                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/review-star.png'); ?>" alt="Review star">
                                    </div>
                                    <div class="svg-inline-icon">
                                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/review-star.png'); ?>" alt="Review star">
                                    </div>
                                    <div class="svg-inline-icon">
                                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/review-star.png'); ?>" alt="Review star">
                                    </div>
                                    <div class="svg-inline-icon">
                                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/review-star.png'); ?>" alt="Review star">
                                    </div>
                                    <div class="svg-inline-icon">
                                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/review-star.png'); ?>" alt="Review star">
                                    </div>
                                </span>
                            </div>
                            <p class="tpw-author-name">Molly McHugh</p>
                            <p class="tpw-author-additional">Owner and Manager, <span class="white-space-nw">O’Mally’s Pub</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    }
}
