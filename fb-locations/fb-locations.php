<?php

class FBLocations extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'          => __( 'Locations', 'fl-builder' ),
            'description'   => __( 'ChurchThemes Locations', 'fl-builder' ),
            'category'      => __( FB_MODULES_SECTION, 'fl-builder' ),
            'dir'           => FB_MODULES_DIR . 'fb-locations/',
            'url'           => FB_MODULES_URL . 'fb-locations/',
            'editor_export' => true,
            'enabled'       => true,
        ));

        $this->add_css('fb-locations', $this->url . 'includes/style.css');
    }
}

FLBuilder::register_module( 'FBLocations', array(
    'general'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'fb-locations'  => array(
                'fields'        => array(
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                        'default'       => __( 'Locations', 'fl-builder' ),
                    ),
                    'layout' => array(
                        'type'          => 'select',
                        'label'         => __( 'Layout', 'fl-builder' ),
                        'default'       => 'list',
                        'options'       => array(
                            'list'      => __( 'List', 'fl-builder' ),
                            'grid'      => __( 'Grid', 'fl-builder' )
                        )
                    ),
                    'orderby' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order By', 'fl-builder' ),
                        'default'       => 'custom-order',
                        'options'       => array(
                            'custom-order' => __( 'Custom Order', 'fl-builder' ),
                            'name'         => __( 'Name', 'fl-builder' )
                        )
                    ),
                    'order' => array(
                        'type'          => 'select',
                        'label'         => __( 'Sort', 'fl-builder' ),
                        'default'       => 'high-to-low',
                        'options'       => array(
                            'low-to-high'  => __( 'Low to High', 'fl-builder' ),
                            'high-to-low'  => __( 'High to Low', 'fl-builder' )
                        )
                    ),
                    'limit' => array(
                        'type'          => 'select',
                        'label'         => __( 'Limit', 'fl-builder' ),
                        'default'       => '5',
                        'options'       => array(
                            '1'      => __( '1', 'fl-builder' ),
                            '2'      => __( '2', 'fl-builder' ),
                            '3'      => __( '3', 'fl-builder' ),
                            '4'      => __( '4', 'fl-builder' ),
                            '5'      => __( '5', 'fl-builder' ),
                            '6'      => __( '6', 'fl-builder' ),
                            '7'      => __( '7', 'fl-builder' ),
                            '8'      => __( '8', 'fl-builder' ),
                            '9'      => __( '9', 'fl-builder' ),
                            '10'      => __( '10', 'fl-builder' )
                        )
                    ),
                    'show_image' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show image', 'fl-builder' ),
                        'default'       => '1',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_address' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show address', 'fl-builder' ),
                        'default'       => '1',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_phone' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show phone', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_times' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show times', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_map' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show map', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_excerpt' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show excerpt', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    )
                )
            )
        )
    )
));
