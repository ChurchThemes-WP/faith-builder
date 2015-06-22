<?php

class FBGiving extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'          => __( 'Giving', 'fl-builder' ),
            'description'   => __( 'ChurchThemes Giving', 'fl-builder' ),
            'category'      => __( FB_MODULES_SECTION, 'fl-builder' ),
            'dir'           => FB_MODULES_DIR . 'fb-giving/',
            'url'           => FB_MODULES_URL . 'fb-giving/',
            'editor_export' => true,
            'enabled'       => true,
        ));

        $this->add_css('fb-giving', $this->url . 'includes/style.css');
    }
}

FLBuilder::register_module( 'FBGiving', array(
    'general'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'fb-giving'  => array(
                'fields'        => array(
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                        'default'       => __( 'Giving', 'fl-builder' ),
                    ),
                    'message'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Message', 'fl-builder' ),
                        'default'       => __( 'You may give online by clicking below.', 'fl-builder' ),
                    ),
                    'button_text'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Button Text', 'fl-builder' ),
                        'default'       => __( 'Give Now', 'fl-builder' ),
                    ),
                    'button_url'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Button URL', 'fl-builder' ),
                        'default'       => __( '', 'fl-builder' ),
                    )
                )
            )
        )
    )
));
