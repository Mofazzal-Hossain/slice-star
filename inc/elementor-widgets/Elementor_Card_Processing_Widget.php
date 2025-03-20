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
            'credit_content_section',
            [
                'label' => __('Credit Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('See how much', 'hello-elementor-child') . ' <br>' . __('you can save', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'section_para',
            [
                'label'       => __('Paragraph', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Use the calculator below to determine your potential', 'hello-elementor-child') . ' <br>' . __('savings on an annual basis', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'credit_title',
            [
                'label'       => __('Credit Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Annual Credit Card Processing Volume', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'credit_desc',
            [
                'label'       => __('Credit Description', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('*Calculation is based on annual credit card processing volume multiplied by 3%', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'card_content_section',
            [
                'label' => __('Card Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'card_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Potential Annual Savings with Slice', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'card_para',
            [
                'label'       => __('Paragraph', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Use the calculator below to determine your potential savings on an annual basis', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'btn_label',
            [
                'label'       => __('Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Get Started', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label'       => __('Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'dynamic'     => ['active' => true],
                'default'     => ['url' => '#',],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>

        <card class="block-shadow-bottom">
            <div class="container">
                <div class="row align-items-center calculator-wrap">
                    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-6 cw-control" id="animation-tile-card-info">
                        <?php if (!empty($settings['section_title'])): ?>
                            <h2><?php echo wp_kses_post($settings['section_title']); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($settings['section_para'])): ?>
                            <p class="sub-header sub-header-sm block-mb-sm">
                                <?php echo wp_kses_post($settings['section_para']); ?>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($settings['credit_title'])): ?>
                            <p class="cw-info-highlight"><?php echo esc_html($settings['credit_title']); ?></p>
                        <?php endif; ?>
                        <div class="slider-input-field">
                            <input id="amount-value" type="tel" class="interactive-val">
                        </div>
                        <div class="money-slider-wrap">
                            <div id="money-slider" class="slider"></div>
                        </div>
                        <?php if (!empty($settings['credit_desc'])): ?>
                            <p class="cw-info-desc"><?php echo esc_html($settings['credit_desc']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-6">
                        <div class="tile-card-info-wrap">
                            <div class="tile-card-info">
                                <div class="tile-card-info-bg"></div>
                                <div class="row tci-container align-items-center">
                                    <div class="col-12">
                                        <p class="tci-header">
                                            <span class="tci-money-currency">$</span>
                                            <span class="tci-money-value" id="calculator-result">7500</span>
                                            <span class="tci-money-desc">/yr.</span>
                                        </p>
                                        <div class="tci-body">
                                            <?php if (!empty($settings['card_title'])): ?>
                                                <p class="tci-sub-header"><?php echo wp_kses_post($settings['card_title']); ?></p>
                                            <?php endif; ?>

                                            <?php if (!empty($settings['card_para'])): ?>
                                                <p><?php echo wp_kses_post($settings['card_para']); ?></p>
                                            <?php endif; ?>

                                        </div>
                                        <div class="tci-cta text-center">
                                            <?php if (!empty($settings['btn_label'])): ?>
                                                <a href="<?php echo esc_url($settings['btn_url']['url']); ?>" class="btn btn-lg" <?php echo $settings['btn_url']['is_external'] ? 'target="_blank"' : ''; ?>>
                                                    <?php echo esc_html($settings['btn_label']); ?>
                                                </a>
                                            <?php endif; ?>
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
        </card>

<?php
    }
}
