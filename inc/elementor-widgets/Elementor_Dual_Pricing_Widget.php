<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Dual_Pricing_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'dual_pricing';
    }

    public function get_title()
    {
        return __('Dual Pricing', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-price-table';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'dual_pricing_content_section',
            [
                'label' => __('Dual Pricing Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Dual Pricing', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label'       => __('Subtitle', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('The Slice Dual Pricing Program is a way for you the merchant to offset your merchant service fees without increasing your sale price.', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );


        $pricing_features = new \Elementor\Repeater();

        $pricing_features->add_control(
            'pricing_features_text',
            [
                'label'       => __('Text', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'pricing_features_list',
            [
                'label'   => __('Pricing Features List', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $pricing_features->get_controls(),
                'default' => [
                    [
                        'pricing_features_text' => __('100% legal', 'hello-elementor-child'),
                    ],
                    [
                        'pricing_features_text' => __('Available in all 50 states', 'hello-elementor-child'),
                    ],
                    [
                        'pricing_features_text' => __('Collect 100% of your processing sales', 'hello-elementor-child'),
                    ],
                    [
                        'pricing_features_text' => __('Easy to order, set up and manage', 'hello-elementor-child'),
                    ],
                    [
                        'pricing_features_text' => __('Next day funding', 'hello-elementor-child'),
                    ],
                ],
                'title_field' => '{{{ pricing_features_text }}}',
            ]
        );

        $this->add_control(
            'started_btn_label',
            [
                'label'       => __('Started Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Get Started', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'started_btn_url',
            [
                'label'       => __('Started Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default'     => ['url' => '#'],
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'read_btn_label',
            [
                'label'       => __('Read More', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Read FAQs', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'read_btn_url',
            [
                'label'       => __('Read More URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default'     => ['url' => '#'],
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'card_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Slice', 'hello-elementor-child') . ' <br>' . __('Dual Pricing', 'hello-elementor-child') . ' <br>' . __('Program', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'card_desc',
            [
                'label'       => __('Description', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Any business that accepts credit cards can benefit from Slice', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'card_image',
            [
                'label'       => __('Dual Pricing Image', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => ['url' => get_stylesheet_directory_uri() . '/assets/images/tile-dual-pricing.png'],
                'dynamic'     => ['active' => true],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'how_it_works_section',
            [
                'label' => __('How It Works', 'hello-elementor-child'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'works_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('How', 'hello-elementor-child') . '<br>' . __('It works?', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'works_btn_label',
            [
                'label'       => __('Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Learn More', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'works_btn_url',
            [
                'label'       => __('Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default'     => ['url' => '#'],
                'dynamic'     => ['active' => true],
            ]
        );

        $work_process_features = new \Elementor\Repeater();

        $work_process_features->add_control(
            'title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $work_process_features->add_control(
            'description',
            [
                'label'       => __('Description', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'work_process_features',
            [
                'label'   => __('Work Process Features', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $work_process_features->get_controls(),
                'default' => [
                    [
                        'title' => __('Cash is King', 'hello-elementor-child'),
                        'description' => __('Even better, your customers are rewarded for paying in cash with a 3.99% discount!', 'hello-elementor-child'),
                    ],
                    [
                        'title' => __('A Bigger Slice', 'hello-elementor-child'),
                        'description' => __('You, the business owner, get 100% of the sale!', 'hello-elementor-child'),
                    ],
                    [
                        'title' => __('Signs of the Times!', 'hello-elementor-child'),
                        'description' => __('Point-of-purchase pricing and discount signage clearly spell out the process to customers', 'hello-elementor-child'),
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

        <section class="section-info-tile-decor block-pb-zero">
            <div class="sitd-item anchor-wrap">
                <div class="anchor-block anchor-block-lg" id="dual-pricing"></div>
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div class="col-md-7 block-zi-2 order-2 order-md-1 block-indent-right-lg">
                            <?php if (!empty($settings['section_title'])): ?>
                                <h2 class="h1"><?php echo esc_html($settings['section_title']); ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($settings['section_subtitle'])): ?>
                                <p class="sub-header sub-header-sm">
                                    <?php echo esc_html($settings['section_subtitle']); ?>
                                </p>
                            <?php endif; ?>
                            <ul class="list-circle block-mb-sm">
                                <?php foreach ($settings['pricing_features_list'] as $list): ?>
                                    <?php if (!empty($list['pricing_features_text'])): ?>
                                        <li><?php echo esc_html($list['pricing_features_text']); ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                            <div class="btn-group">
                                 <?php if (!empty($settings['started_btn_label'])): ?>
                                    <a href="<?php echo esc_url($settings['started_btn_url']['url']); ?>" class="btn btn-img" <?php echo $settings['started_btn_url']['is_external'] ? 'target="_blank"' : ''; ?>>
                                        <?php echo esc_html($settings['started_btn_label']); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($settings['read_btn_label'])): ?>
                                    <a href="<?php echo esc_url($settings['read_btn_url']['url']); ?>" class="link-angle link-grey" <?php echo $settings['read_btn_url']['is_external'] ? 'target="_blank"' : ''; ?>>
                                        <?php echo esc_html($settings['read_btn_label']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 order-1 order-md-2">
                            <div class="tile-decor-wrap tile-decor-wrap-right">
                                <div class="tile-decor-substrate-wrap tdsw-01 tile-decor-substrate-anim">
                                    <div style="background-image: url(<?php echo esc_url($settings['card_image']['url']) ;?>"></div>
                                </div>
                                <div class="tile-decor bg-v-gradient-violet">
                                    <div class="tile-decor-content">
                                        <div class="tile-decor-icon">
                                            <svg class="icon icon-cash">
                                                <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/icons.svg#cash"></use>
                                            </svg>
                                        </div>
                                        <p class="tile-decor-header"><?php echo wp_kses_post($settings['card_title']); ?></p>
                                        <p class="tile-decor-desc"><?php echo wp_kses_post($settings['card_desc']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tile-icon-info block-zi-2">
                        <div class="row">
                            <div class="col-12 col-lg-auto tii-cta">
                                <p class="tii-cta-header"><?php echo wp_kses_post($settings['works_title']); ?></p>
                                <?php if(!empty($settings['works_btn_label'])): ?>
                                    <a href="<?php echo esc_url($settings['works_btn_url']['url']); ?>" class="link-angle">
                                        <?php echo esc_html($settings['works_btn_label']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <?php foreach ($settings['work_process_features'] as $key => $item): 
                                            switch($key){
                                                case 0:
                                                    $iconClass = 'money';
                                                    break;
                                                case 1:
                                                    $iconClass = 'chart';
                                                    break;
                                                case 2:
                                                    $iconClass = 'presentation';
                                                    break;
                                                default:
                                                    $iconClass = 'money';
                                                    break;
                                            }
                                        ?> 
                                        <div class="col-sm-4 tii-item">
                                            <div class="tii-item-icon"><svg class="icon icon-colored-<?php echo esc_attr($iconClass); ?>">
                                                    <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/icons.svg#colored-<?php echo esc_attr($iconClass); ?>"></use>
                                                </svg></div>
                                            <p class="tii-item-header"><?php echo esc_html($item['title']); ?></p>
                                            <p><?php echo esc_html($item['description']); ?></p>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
