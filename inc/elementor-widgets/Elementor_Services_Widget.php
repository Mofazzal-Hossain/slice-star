<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Services_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'services';
    }

    public function get_title()
    {
        return __('Services', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-cogs';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'services_content_section',
            [
                'label' => __('Services Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Advanced Services', 'hello-elementor-child') . ' <br>' . __('for your business', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'section_para',
            [
                'label'       => __('Paragraph', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Take advantage of a variety of services to navigate in today’s diverse business environment. Slice offers the widest selection of merchant services and solutions in the industry. Everything you need to run your business more smoothly no matter your size or industry.', 'hello-elementor-child') . ' <br>' . __('Our trained team of business experts has the right solution to help you grow your business.', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'btn_label',
            [
                'label'       => __('Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Get started', 'hello-elementor-child'),
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

        $services_repeater = new \Elementor\Repeater();

        $services_repeater->add_control(
            'title',
            [
                'label'       => __('title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );

        $services_repeater->add_control(
            'desc',
            [
                'label'       => __('Description', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );


        $this->add_control(
            'services_items',
            [
                'label'   => __('Services Items', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $services_repeater->get_controls(),
                'default' => [
                    [
                        'title'       => __('Traditional Processing', 'hello-elementor-child'),
                        'desc'        => __('Slice offers the most competitive rates for Conventional method of processing in the industry.', 'hello-elementor-child'),
                    ],
                    [
                        'title'       => __('Online Restaurant Ordering', 'hello-elementor-child'),
                        'desc'        => __('Slice can provide your restaurant with an array of services and solutions for your specific needs.', 'hello-elementor-child'),
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

        <section class="bg-grey block-pt-content-01 block-pb-footer anchor-wrap">
            <div class="anchor-block anchor-block-01" id="traditional-processing"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 block-info-decor block-info-decor-left">
                        <?php if (!empty($settings['section_title'])): ?>
                            <h2 class="h1"><?php echo wp_kses_post($settings['section_title']); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($settings['section_para'])): ?>
                            <p class="sub-header sub-header-sm block-mb-sm">
                                <?php echo wp_kses_post($settings['section_para']); ?>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($settings['btn_label'])): ?>
                            <a href="<?php echo esc_url($settings['btn_url']['url']); ?>" class="btn btn-img" <?php echo $settings['btn_url']['is_external'] ? 'target="_blank"' : ''; ?>>
                                <?php echo esc_html($settings['btn_label']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="tiles-cascade-wrap" id="tiles-cascade-init">
                            <div class="row">
                                <?php foreach ($settings['services_items'] as $key => $item):
                                    switch ($key) {
                                        case 0:
                                            $colorclass = 'yellow';
                                            $iconClass = 'tax';
                                            break;
                                        case 1:
                                            $colorclass = 'violet';
                                            $iconClass = 'food';
                                            break;
                                        default:
                                            $colorclass = 'tiis-icon-yellow';
                                            $iconClass = 'tax';
                                            break;
                                    }
                                ?>
                                    <div class="col-6">
                                        <div class="tile-icon-info-single">
                                            <div class="tiis-icon tiis-icon-<?php echo esc_attr($colorclass); ?>"><svg class="icon icon-<?php echo esc_attr($iconClass); ?>">
                                                    <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/icons.svg#<?php echo esc_attr($iconClass); ?>"></use>
                                                </svg></div>
                                            <p class="tiis-header"><?php echo esc_html($item['title']); ?></p>
                                            <p><?php echo esc_html($item['desc']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
