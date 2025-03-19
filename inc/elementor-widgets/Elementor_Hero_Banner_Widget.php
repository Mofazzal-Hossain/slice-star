<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Hero_Banner_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'hero_banner';
    }

    public function get_title()
    {
        return __('Hero Banner', 'hello-elementor-child');
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
            'slider_content_section',
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
    
        <section class="section-hero section-hero-01 section-appear" id="section-appear">
            <div class="hero-bg hero-bg-01">
                <div class="presentation-wrap-01">
                    <div class="pw-terminal-wrap">
                        <div class="pw-terminal-stuff">
                            <div class="pw-terminal-device">
                                <div class="pw-terminal-device-screen"></div>
                                <div class="pw-terminal-device-btns-wrap">
                                    <div class="d-flex justify-content-between pw-terminal-device-btns-circle">
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between pw-terminal-device-btns-circle">
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between pw-terminal-device-btns-rectangle">
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between pw-terminal-device-btns-rectangle-lg">
                                        <div>
                                            <div class="pw-terminal-device-btn pw-terminal-device-btn-color-01"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn pw-terminal-device-btn-color-02"></div>
                                        </div>
                                        <div>
                                            <div class="pw-terminal-device-btn pw-terminal-device-btn-color-02"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pw-terminal-card"></div>
                        </div>
                    </div>
                </div>
                <div class="spheres-wrap">
                    <div class="sphere-item sphere-01"></div>
                    <div class="sphere-item sphere-02"></div>
                    <div class="sphere-item sphere-03"></div>
                </div>
            </div>
            <div class="container">
                <div class="hero-wrap d-flex align-items-center">
                    <div class="hero-wrap-content">
                        <div class="hwc-bg-figure hwc-bg-figure-01"></div>
                        <div class="hwc-info">
                            <p class="header-sup">Introducing</p>
                            <h2>Zero Cost Processing <span class="header-modification">to the Merchant</span></h2>
                            <p class="sub-header block-mb-md">Slice 100% of Processing Fees by <span class="white-space-nw">Rewarding Cash Payers</span></p>
                            <div class="btn-group">
                                <a href="zero-fee/processing/quick-start7673.html?us=05" class="btn">Get Started</a>
                                <a href="processing.html" class="link-angle">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>setTimeout(function () { document.getElementById('section-appear').classList.remove('section-appear'); }, 50);</script>
    <?php
    }
}
