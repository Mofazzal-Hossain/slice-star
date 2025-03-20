<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Processing_Banner_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'processing_banner';
    }

    public function get_title()
    {
        return __('Processing Banner', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-banner';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'processing_banner_content_section',
            [
                'label' => __('Hero Slider Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'banner_bg_image',
            [
                'label'       => __('Background Image', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => get_stylesheet_directory_uri() . '/assets/images/bg-free-processing.jpg',
                ],
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'banner_title',
            [
                'label'       => __('Subtitle', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Zero Cost ', 'hello-elementor-child') . '<br>' . __('Processing', 'hello-elementor-child') . '<br>' . __('to the Merchant', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'btn_label',
            [
                'label'       => __('Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Learn More', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label'       => __('Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default'     => ['url' => '#'],
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'featured_title',
            [
                'label'       => __('Featured Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('As featured in', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        // slider repeater
        $featured_list = new \Elementor\Repeater();


        $featured_list->add_control(
            'featured_image',
            [
                'label'       => __('Featured Image', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );



        $this->add_control(
            'featured_list',
            [
                'label'   => __('Banner Slider', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $featured_list->get_controls(),
                'default' => [
                    [
                        'featured_image' => ['url' => get_stylesheet_directory_uri() . '/assets/images/f-01.png'],
                    ],
                    [
                        'featured_image' => ['url' => get_stylesheet_directory_uri() . '/assets/images/f-02.png'],
                    ],
                    [
                        'featured_image' => ['url' => get_stylesheet_directory_uri() . '/assets/images/f-03.png'],
                    ],
                    [
                        'featured_image' => ['url' => get_stylesheet_directory_uri() . '/assets/images/f-04.png'],
                    ],
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>

        <script>
            function sectionAppear() {
                setTimeout(function() {
                    document.getElementById('section-appear').classList.remove('section-appear');
                }, 50);
            }
        </script>
        <section class="section-page-hero processing-banner-section bg-header-overlay section-appear" id="section-appear">
            <div class="sph-bg-figure sph-bg-figure-01">
                <div class="sph-bg-figure-img">
                    <img src="<?php echo esc_url($settings['banner_bg_image']['url']); ?>" alt="banner image" onload="sectionAppear()">
                </div>
            </div>
            <div class="container">
                <div class="sph-info">
                    <?php if (!empty($settings['banner_title'])): ?>
                        <h1><?php echo wp_kses_post($settings['banner_title']); ?></h1>
                    <?php endif; ?>
                    <?php if (!empty($settings['btn_label'])): ?>
                        <p class="block-mb-lg">
                            <a href="<?php echo esc_url($settings['btn_url']['url']); ?>" class="link-angle" <?php echo esc_attr($settings['btn_url']['is_external'] ? 'target="_blank"' : ''); ?>><?php echo esc_html($settings['btn_label']); ?></a>
                        </p>
                    <?php endif; ?>
                    <div class="sph-info-logos sph-info-logos-01">
                        <?php if (!empty($settings['featured_title'])): ?>
                            <p class="sub-header font-header"><?php echo esc_html($settings['featured_title']); ?></p>
                        <?php endif; ?>
                        <div class="sph-info-logos-wrap row align-items-center no-gutters">

                            <?php foreach ($settings['featured_list'] as $key => $list): ?>
                                <div class="col-auto">
                                    <img src="<?php echo esc_url($list['featured_image']['url']); ?>" alt="featured">
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
