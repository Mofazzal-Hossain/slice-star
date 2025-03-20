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
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('We change the way you get paid', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'section_para',
            [
                'label'       => __('Paragraph', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('With recent law changes and the advancement of our proprietary software, your business can accept credit cards at No Processing cost to the merchant. Slice Introduces zero cost processing solution today!', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'card_image',
            [
                'label'       => __('Card Image', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     =>
                [
                    'url' => get_stylesheet_directory_uri() . '/assets/images/credit-card.jpg',
                ],
                'dynamic'     => ['active' => true],
            ]
        );

        $law_features_repeater = new \Elementor\Repeater();

        $law_features_repeater->add_control(
            'title',
            [
                'label'       => __('title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );

        $law_features_repeater->add_control(
            'desc',
            [
                'label'       => __('Description', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $law_features_repeater->add_control(
            'additional_value',
            [
                'label'       => __('Additional Value', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $law_features_repeater->add_control(
            'additional_info',
            [
                'label'       => __('Additional Info', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $law_features_repeater->add_control(
            'btn_label',
            [
                'label'       => __('Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $law_features_repeater->add_control(
            'btn_url',
            [
                'label'       => __('Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'dynamic'     => ['active' => true],
                'default'     => ['url' => '#',],
            ]
        );

        $this->add_control(
            'features_list',
            [
                'label'   => __('Law Features', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $law_features_repeater->get_controls(),
                'default' => [
                    [
                        'title'       => __('Dual Pricing', 'hello-elementor-child'),
                        'desc'        => __('The Slice Dual Pricing Program is a way for you the merchant to offset your merchant service fees without increasing your sale price.', 'hello-elementor-child'),
                        'btn_label'   => __('Learn More', 'hello-elementor-child'),
                        'additional_value' => 0,
                        'additional_info' => __('Cost Processing', 'hello-elementor-child') . '<br> ' . __('to to the Merchant', 'hello-elementor-child'),
                    ],
                    [
                        'title'       => __('Traditional Processing', 'hello-elementor-child'),
                        'desc'        => __('Slice offers the most competitive rates for Conventional method of processing in the industry.', 'hello-elementor-child'),
                        'btn_label'   => __('Learn More', 'hello-elementor-child'),
                        'additional_value' => '1.29%',
                        'additional_info' => __('Start from', 'hello-elementor-child'),
                    ],
                ],
                'title_field' => '{{{ title }}}',
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
                    <?php if (!empty($settings['section_title'])): ?>
                        <h2 class="block-mt-0"><?php echo esc_html($settings['section_title']); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($settings['section_para'])): ?>
                        <p class="sub-header sub-header-sm">
                            <?php echo esc_html($settings['section_para']); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-auto svp-card-wrap">
                        <div class="card-element-wrap">
                            <div class="card-element">
                                <?php if (!empty($settings['card_image']['url'])): ?>
                                    <img src="<?php echo esc_url($settings['card_image']['url']); ?>" alt="credit card">
                                <?php endif; ?>
                            </div>
                            <div class="card-element-decor ced-first"></div>
                            <div class="card-element-decor ced-second"></div>
                        </div>
                    </div>
                    <div class="col-auto svp-list-wrap">
                        <ul class="list-icon-header lih-01">
                            <?php foreach ($settings['features_list'] as $key => $list): ?>
                                <li>
                                    <div class="additional-info">
                                        <div class="<?php echo $key === 0 ? 'additional-info-xl' : 'additional-info-lg'; ?>"><?php echo esc_html($list['additional_value']); ?></div>
                                        <?php if (!empty($list['additional_info'])): ?>
                                            <div class="<?php echo $key === 0 ? 'additional-info-sm' : 'additional-info-md'; ?>"><?php echo wp_kses_post($list['additional_info']); ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="lih-icon"><svg class="icon icon-cash">
                                            <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/icons.svg#<?php echo $key === 0 ? 'cash' : 'tax'; ?>"></use>
                                        </svg></div>
                                    <?php if (!empty($list['title'])): ?>
                                        <p class="lih-header"><?php echo esc_html($list['title']); ?></p>
                                    <?php endif; ?>
                                    <?php if (!empty($list['desc'])): ?>
                                       <p class="lih-desc"> <?php echo esc_html($list['desc']); ?></p>
                                    <?php endif; ?>
                                    <?php if (!empty($list['btn_label'])): ?>
                                        <a href="<?php echo esc_url($list['btn_url']['url']); ?>" class="link-angle" <?php echo $list['btn_url']['is_external'] ? 'target="_blank"' : ''; ?>><?php echo esc_html($list['btn_label']); ?></a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<?php
    }
}
