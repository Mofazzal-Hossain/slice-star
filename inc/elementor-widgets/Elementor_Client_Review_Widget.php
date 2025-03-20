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
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Hear From', 'hello-elementor-child') . ' <br>' . __('Our Satisfied', 'hello-elementor-child') . '</br>' . __('Clients', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'testimonial_review',
            [
                'label'       => __('Review', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('…We integrated the Slice Dual Pricing Program a few months back, and the savings were phenomenal! It amounted to a few thousand dollars — money I can really use to put back into the businesses. And my customers really appreciate the . What a great idea. Cheers to Slice!', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'testimonial_image',
            [
                'label'       => __('Image', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     =>
                [
                    'url' => get_stylesheet_directory_uri() . '/assets/images/t-01.jpg',
                ],
                'dynamic'     => ['active' => true],
            ]
        );
        
        $this->add_control(
            'testimonial_rating',
            [
                'label'       => __('Rating', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::NUMBER,
                'min'         => 1,
                'max'         => 5,
                'default'     => 5,
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'testimonial_name',
            [
                'label'       => __('Name', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Molly McHugh', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'testimonial_designation',
            [
                'label'       => __('Designation', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Owner and Manager, O’Mally’s Pub', 'hello-elementor-child'),
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
                            <?php if(!empty($settings['section_title'])): ?>
                                <h2><?php echo wp_kses_post($settings['section_title']); ?></h2>    
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-6 testimonials-preview-wrap">
                        <?php if(!empty($settings['testimonial_review'])): ?>
                            <p class="tpw-text"><?php echo wp_kses_post($settings['testimonial_review']); ?></p>
                        <?php endif; ?>
                        <div class="tpw-author-rating">
                            <div class="tpw-author-img" style="background-image: url(<?php echo esc_url($settings['testimonial_image']['url']); ?>)"></div>
                            <div class="tpw-rating">
                                <span class="d-flex">
                                    <?php foreach (range(1, $settings['testimonial_rating']) as $index): ?>
                                        <div class="svg-inline-icon">
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/review-star.png'); ?>" alt="Review star">
                                        </div>
                                    <?php endforeach;?>
                                </span>
                            </div>
                            <?php if(!empty($settings['testimonial_name'])): ?>
                                <p class="tpw-author-name"><?php echo esc_html($settings['testimonial_name']); ?></p>
                            <?php endif; ?>
                            <?php if(!empty($settings['testimonial_designation'])): ?>
                                <p class="tpw-author-additional">
                                    <?php echo wp_kses_post($settings['testimonial_designation']); ?>
                                </span>
                            <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    }
}
