<?php

class FBEvents extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'          => __( 'Events', 'fl-builder' ),
            'description'   => __( 'A totally awesome module!', 'fl-builder' ),
            'category'      => __( FB_MODULES_SECTION, 'fl-builder' ),
            'dir'           => FB_MODULES_DIR . 'fb-events/',
            'url'           => FB_MODULES_URL . 'fb-events/',
            'editor_export' => true,
            'enabled'       => true,
        ));

        $this->add_css('fb-events', $this->url . 'includes/style.css');
    }
}

FLBuilder::register_module( 'FBEvents', array(
    'my-tab-1'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'fb-events'  => array(
                'fields'        => array(
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                        'default'       => __( 'Events', 'fl-builder' ),
                    ),
                    'which_events' => array(
                        'type'          => 'select',
                        'label'         => __( 'Which Events?', 'fl-builder' ),
                        'default'       => 'option-upcoming',
                        'options'       => array(
                            'upcoming'      => __( 'Upcoming', 'fl-builder' ),
                            'past'      => __( 'Past', 'fl-builder' )
                        )
                    ),
                    'number_of_events' => array(
                        'type'          => 'select',
                        'label'         => __( 'Number of Events', 'fl-builder' ),
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
                        'label'         => __( 'Show Image', 'fl-builder' ),
                        'default'       => 'option-yes',
                        'options'       => array(
                            'yes'      => __( 'Yes', 'fl-builder' ),
                            'no'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_date' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show Date', 'fl-builder' ),
                        'default'       => 'option-yes',
                        'options'       => array(
                            'yes'      => __( 'Yes', 'fl-builder' ),
                            'no'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_time' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show Time', 'fl-builder' ),
                        'default'       => 'option-yes',
                        'options'       => array(
                            'yes'      => __( 'Yes', 'fl-builder' ),
                            'no'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_excerpt' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show Excerpt', 'fl-builder' ),
                        'default'       => 'option-yes',
                        'options'       => array(
                            'yes'      => __( 'Yes', 'fl-builder' ),
                            'no'      => __( 'No', 'fl-builder' )
                        )
                    )
                )
            )
        )
    )
) );
