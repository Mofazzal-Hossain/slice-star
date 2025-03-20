<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Law_Features_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'law_features';
    }

    public function get_title()
    {
        return __('Law Features', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-posts-ticker';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'law_features_content_section',
            [
                'label' => __('Law Features Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Are you Still Paying to Get Paid?', 'hello-elementor-child'),
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


        $this->add_control(
            'features_list',
            [
                'label'   => __('Law Features', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $law_features_repeater->get_controls(),
                'default' => [
                    [
                        'title'       => __('It’s 100% legal', 'hello-elementor-child'),
                        'desc'        => __('Chosen solution for over 50,000 restaurants and bars across the country', 'hello-elementor-child'),
                    ],
                    [
                        'title'       => __('Easy to start', 'hello-elementor-child'),
                        'desc'        => __('All it takes a brief conversation with one of our professionals who will guide through the rest of the set up process.', 'hello-elementor-child'),
                    ],
                    [
                        'title'       => __('One Slice fits all', 'hello-elementor-child'),
                        'desc'        => __('Slice accommodates all credit card types and mobile wallet systems such as ApplePay® and Android®', 'hello-elementor-child'),
                    ],
                    [
                        'title'       => __('No hidden fees', 'hello-elementor-child'),
                        'desc'        => __('We believe everything has to be transparent and fair', 'hello-elementor-child'),
                    ],
                    [
                        'title'       => __('Save from day one', 'hello-elementor-child'),
                        'desc'        => __('With Slice, the days of hefty credit card fees and interchange charges are over. It’s like giving yourself a big raise', 'hello-elementor-child'),
                    ],
                    [
                        'title'       => __('Supersmart technology', 'hello-elementor-child'),
                        'desc'        => __('Terminals with EMV Chip Reader. Cloud-based receipt system. Easy integration with any POS.', 'hello-elementor-child'),
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

    <section class="block-pb-md law-features-block">
        <div class="container">
            <div class="text-center block-mb-md">

                <?php if (!empty($settings['section_title'])): ?>
                    <h2 class="wrap-br-01"><?php echo esc_html($settings['section_title']); ?></h2>
                <?php endif; ?>
                <?php if (!empty($settings['section_para'])): ?>
                    <p class="sub-header sub-header-sm">
                        <?php echo esc_html($settings['section_para']); ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="row align-items-xl-center block-mb-lg justify-content-center">
                <div class="col-12 col-lg-10 col-xl-7 col-md-12">
                    <div class="row wrap-div-01 justify-content-between">
                        <?php foreach (array_chunk($settings['features_list'], 6) as $chunk): ?>
                            <div class="col-6">
                                <ul class="list-checked-circle lcc-01">
                                    <?php foreach (array_slice($chunk, 0, 3) as $item): ?>
                                        <li>
                                            <h5><?php echo esc_html($item['title']); ?></h5>
                                            <p><?php echo esc_html($item['desc']); ?></p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-checked-circle lcc-01">
                                    <?php foreach (array_slice($chunk, 3, 3) as $item): ?>
                                        <li>
                                            <h5><?php echo esc_html($item['title']); ?></h5>
                                            <p><?php echo esc_html($item['desc']); ?></p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
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
