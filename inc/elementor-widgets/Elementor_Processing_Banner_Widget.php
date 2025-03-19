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
            'hero_background',
            [
                'label'       => __('Hero Background', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );

        // slider repeater
        $slider_repeater = new \Elementor\Repeater();


        $slider_repeater->add_control(
            'slider_subtitle',
            [
                'label'       => __('Slider Subtitle', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Experience Central Park via Air Trips', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );

        $slider_repeater->add_control(
            'slider_title',
            [
                'label'       => __('Slider Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Discover The World', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );

        $slider_repeater->add_control(
            'slider_btn_label',
            [
                'label'       => __('Slider Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => __('Explore Destination', 'hello-elementor-child'),
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $slider_repeater->add_control(
            'slider_btn_url',
            [
                'label'       => __('Slider Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'dynamic'     => ['active' => true],
                'default'     => [
                    'url' => '#',
                ],
            ]
        );


        $this->add_control(
            'banner_slider',
            [
                'label'   => __('Banner Slider', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $slider_repeater->get_controls(),
                'default' => [
                    [
                        'slider_title'       => __('Discover The World', 'hello-elementor-child'),
                    ],
                    [
                        'slider_title'       => __('Discover The World', 'hello-elementor-child'),
                    ],
                ],
                'title_field' => '{{{ slider_title }}}',
            ]
        );

        $this->end_controls_section();

        // social content section
        $this->start_controls_section(
            'social_content_section',
            [
                'label' => __('Hero Social Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // social media repeater
        $social_repeater = new \Elementor\Repeater();
        $social_repeater->add_control(
            'social_media_label',
            [
                'label'       => __('Social Media Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'options'     => [
                    'facebook' => __('Facebook', 'hello-elementor-child'),
                    'twitter'  => __('Twitter', 'hello-elementor-child'),
                    'linkedin'  => __('Linkedin', 'hello-elementor-child'),
                    'instagram'  => __('Instagram', 'hello-elementor-child'),
                ],
                'default'     => 'facebook',
                'label_block' => true,
            ]
        );
        $social_repeater->add_control(
            'social_media_url',
            [
                'label'       => __('Social Media URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'dynamic'     => ['active' => true],
                'default'     => [
                    'url' => '#',
                ],
            ]
        );
        $this->add_control(
            'social_media_list',
            [
                'label'   => __('Social Media List', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $social_repeater->get_controls(),
                'default' => [
                    [
                        'social_media_label' => 'facebook',
                    ],
                ],
                'title_field' => '{{{ social_media_label }}}',
            ]
        );
        $this->add_control(
            'social_share_label',
            [
                'label'       => __('Social Share Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
                'default'     => __('Share', 'hello-elementor-child'),
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
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/bg-free-processing.jpg'); ?>" alt="" onload="sectionAppear()">
                </div>
            </div>
            <div class="container">
                <div class="sph-info">
                    <h1>Zero Cost <br>Processing <br>to the Merchant</h1>
                    <p class="block-mb-lg"><a href="zero-fee/processing/quick-start7673.html?us=05" class="link-angle">Learn More</a></p>
                    <div class="sph-info-logos sph-info-logos-01">
                        <p class="sub-header font-header">As featured in</p>
                        <div class="sph-info-logos-wrap row align-items-center no-gutters">
                            <div class="col-auto">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/f-01.png'); ?>" alt="featured">
                            </div>
                            <div class="col-auto">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/f-02.png'); ?>" alt="featured">
                            </div>
                            <div class="col-auto">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/f-03.png'); ?>" alt="featured">
                            </div>
                            <div class="col-auto">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/f-04.png'); ?>" alt="featured">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
