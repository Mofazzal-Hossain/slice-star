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
            'hero_subtitle',
            [
                'label'       => __('Subtitle', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Introducing', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'hero_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Zero Cost Processing', 'hello-elementor-child') . '<span>' . __('to the Merchant', 'hello-elementor-child') . '</span>',
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'hero_para',
            [
                'label'       => __('Paragraph', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Slice 100% of Processing Fees by Rewarding Cash Payers', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'hero_started_btn_label',
            [
                'label'       => __('Started Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Get Started', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'hero_started_btn_url',
            [
                'label'       => __('Started Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default'     => ['url' => '#'],
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'hero_learn_btn_label',
            [
                'label'       => __('Learn Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Learn More', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'hero_learn_btn_url',
            [
                'label'       => __('Learn Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default'     => ['url' => '#'],
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'hero_card_image',
            [
                'label'       => __('Card Image', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     =>
                [
                    'url' => get_stylesheet_directory_uri() . '/assets/images/credit-card-vertical.jpg',
                ],
                'dynamic'     => ['active' => true],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $hero_subtitle = !empty($settings['hero_subtitle']) ? $settings['hero_subtitle'] : '';
        $hero_title = !empty($settings['hero_title']) ? $settings['hero_title'] : '';
        $hero_para = !empty($settings['hero_para']) ? $settings['hero_para'] : '';
        $hero_started_btn_label = !empty($settings['hero_started_btn_label']) ? $settings['hero_started_btn_label'] : '';
        $hero_started_btn_url = !empty($settings['hero_started_btn_url']['url']) ? $settings['hero_started_btn_url']['url'] : '';
        $hero_started_btn_target = !empty($settings['hero_started_btn_url']['is_external']) ? $settings['hero_started_btn_url']['is_external'] : '';
        $hero_learn_btn_label = !empty($settings['hero_learn_btn_label']) ? $settings['hero_learn_btn_label'] : '';
        $hero_learn_btn_url = !empty($settings['hero_learn_btn_url']['url']) ? $settings['hero_learn_btn_url']['url'] : '';
        $hero_learn_btn_target = !empty($settings['hero_learn_btn_url']['is_external']) ? $settings['hero_learn_btn_url']['is_external'] : '';
        $hero_card_image = !empty($settings['hero_card_image']['url']) ? $settings['hero_card_image']['url'] : '';

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
                            <div class="pw-terminal-card" style="background-image: url(<?php echo esc_attr($hero_card_image); ?>);"></div>
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
                            <!-- subtitle -->
                            <?php if (!empty($hero_subtitle)): ?>
                                <p class="header-sup"><?php echo esc_html($hero_subtitle); ?></p>
                            <?php endif;?>
                            <!-- title -->
                           <?php if (!empty($hero_title)): ?>
                                <h2><?php echo wp_kses_post($hero_title); ?></h2>
                            <?php endif; ?>
                            <!-- paragraph -->
                            <?php if (!empty($hero_para)): ?>
                                <p class="sub-header block-mb-md"><?php echo wp_kses_post($hero_para); ?></p>
                            <?php endif; ?>
                            <!-- buttons -->
                            <div class="btn-group">
                                <!-- get started -->
                                <?php if (!empty($hero_started_btn_label)): ?>
                                    <a href="<?php echo esc_url($hero_started_btn_url); ?>" class="btn" <?php echo $hero_started_btn_target ? 'target="_blank"' : ''; ?>>
                                        <?php echo esc_html($hero_started_btn_label); ?>
                                    </a>
                                <?php endif; ?>
                                <!-- learn more -->
                                <?php if (!empty($hero_learn_btn_label)): ?>
                                    <a href="<?php echo esc_url($hero_learn_btn_url); ?>" class="link-angle" <?php echo $hero_learn_btn_target ? 'target="_blank"' : ''; ?>>
                                        <?php echo esc_html($hero_learn_btn_label); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            setTimeout(function() {
                document.getElementById('section-appear').classList.remove('section-appear');
            }, 50);
        </script>
<?php
    }
}
