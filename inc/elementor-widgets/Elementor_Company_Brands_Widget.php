<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Company_Brands_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'company_brands';
    }

    public function get_title()
    {
        return __('Company Brands', 'hello-elementor-child');
    }

    public function get_icon()
    {
        return 'eicon-posts-masonry';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'company_brands_content_section',
            [
                'label' => __('Company Brands Content', 'hello-elementor-child'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => __('Title', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __('Companies that already', 'hello-elementor-child') . ' <br>' . __('use Slice', 'hello-elementor-child'),
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

        $brands_repeater = new \Elementor\Repeater();

        $brands_repeater->add_control(
            'brand_logo',
            [
                'label'       => __('Brand Logo', 'hello-elementor-child'),
                'type'        => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'dynamic'     => ['active' => true],
            ]
        );
        $this->add_control(
            'brand_list',
            [
                'label'   => __('Companies Brands', 'hello-elementor-child'),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $brands_repeater->get_controls(),
                'default' => [
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-01.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-02.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-03.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-04.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-05.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-06.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-07.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-08.png'),
                        ],
                    ],
                    [
                        'brand_logo'=> [
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/p-09.png'),
                        ],
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

        <section class="section-img-presentation">
            <div class="container">
                <div class="text-center block-mb-md">
                    <?php if (!empty($settings['section_title'])): ?>
                        <h2><?php echo wp_kses_post($settings['section_title']); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($settings['section_para'])): ?>
                        <p class="sub-header sub-header-sm">
                            <?php echo esc_html($settings['section_para']); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="img-presentation-info-wrap">
                    <div class="row justify-content-center align-items-center">
                        <?php foreach ($settings['brand_list'] as $key => $list): ?> 
                            <?php if(!empty($list['brand_logo']['url'])): ?>
                                <div class="ipi-item">
                                    <img src="<?php echo esc_url($list['brand_logo']['url']); ?>" alt="Brand Logo">
                                </div>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>


<?php
    }
}
