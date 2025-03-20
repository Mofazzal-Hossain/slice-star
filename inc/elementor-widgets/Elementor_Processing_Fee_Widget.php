<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Processing_Fee_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'processing_fee';
    }

    public function get_title()
    {
        return __('Processing Fee', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-flip';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'processing_fee_content_section',
            [
                'label' => __('Processing Fee Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Stop paying high processing fees', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label'       => __('Subtitle', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Start using Zero cost processing to the merchant solution today!', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );


        $process_fee_list = new \Elementor\Repeater();

        $process_fee_list->add_control(
            'process_fee_text',
            [
                'label'       => __('Text', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'process_fee_list',
            [
                'label'   => __('Processing Fee List', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $process_fee_list->get_controls(),
                'default' => [
                    [
                        'process_fee_text' => __('Easy to start', 'hello-elementor-child'),
                    ],
                    [
                        'process_fee_text' => __('No hidden fees', 'hello-elementor-child'),
                    ],
                    [
                        'process_fee_text' => __('Save from day one', 'hello-elementor-child'),
                    ],
                ],
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
            'expert_btn_label',
            [
                'label'       => __('Expert Button Label', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __('Talk To Our Expert Now', 'hello-elementor-child'),
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'expert_btn_url',
            [
                'label'       => __('Expert Button URL', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default'     => ['url' => '#'],
                'dynamic'     => ['active' => true],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

?>

        <section class="section-cta block-pb-footer">
            <div class="container">
                <div class="row">
                    <div class="cta-wrap">
                        <?php if (!empty($settings['section_title'])): ?>
                            <h3 class="text-color-darkblue"><?php echo esc_html($settings['section_title']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($settings['section_subtitle'])): ?>
                            <p class="sub-header font-header"><?php echo esc_html($settings['section_subtitle']); ?></p>
                        <?php endif; ?>
                        <ul class="list-checked block-mb-xs">
                            <?php foreach ($settings['process_fee_list'] as $list): ?>
                                <?php if (!empty($list['process_fee_text'])): ?>
                                    <li><?php echo esc_html($list['process_fee_text']); ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                        <div class="btn-group">
                            <!-- get started -->
                            <?php if (!empty($settings['started_btn_label'])): ?>
                                <a href="<?php echo esc_url($settings['started_btn_url']['url']); ?>" class="btn" <?php echo $settings['started_btn_url']['is_external'] ? 'target="_blank"' : ''; ?>>
                                    <?php echo esc_html($settings['started_btn_label']); ?>
                                </a>
                            <?php endif; ?>
                            <!-- learn more -->
                            <?php if (!empty($settings['expert_btn_label'])): ?>
                                <a href="<?php echo esc_url($settings['expert_btn_url']['url']); ?>" class="link-angle" <?php echo $settings['expert_btn_url']['is_external'] ? 'target="_blank"' : ''; ?>>
                                    <?php echo esc_html($settings['expert_btn_label']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
