<?php

class FBSermons extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'          => __( 'Sermons', 'fl-builder' ),
            'description'   => __( 'ChurchThemes Sermons', 'fl-builder' ),
            'category'      => __( FB_MODULES_SECTION, 'fl-builder' ),
            'dir'           => FB_MODULES_DIR . 'fb-sermons/',
            'url'           => FB_MODULES_URL . 'fb-sermons/',
            'editor_export' => true,
            'enabled'       => true,
        ));

        $this->add_css('fb-sermons', $this->url . 'includes/style.css');
    }
}

FLBuilder::register_module( 'FBSermons', array(
    'general'      => array(
        'title'         => __( 'General', 'fl-builder' ),
        'sections'      => array(
            'fb-sermons'  => array(
                'fields'        => array(
                    'title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Title', 'fl-builder' ),
                        'default'       => __( 'Sermons', 'fl-builder' ),
                    ),
                    'topic' => array(
                        'type'          => 'select',
                        'label'         => __( 'Topic', 'fl-builder' ),
                        'default'       => 'all-topics',
                        'options'       => array(
                            'all-topics'      => __( 'All Topics', 'fl-builder' )
                        )
                    ),
                    'book' => array(
                        'type'          => 'select',
                        'label'         => __( 'Book', 'fl-builder' ),
                        'default'       => 'all-books',
                        'options'       => array(
                            'all-books'      => __( 'All Books', 'fl-builder' )
                        )
                    ),
                    'series' => array(
                        'type'          => 'select',
                        'label'         => __( 'Series', 'fl-builder' ),
                        'default'       => 'all-series',
                        'options'       => array(
                            'all-series'      => __( 'All Series', 'fl-builder' )
                        )
                    ),
                    'speaker' => array(
                        'type'          => 'select',
                        'label'         => __( 'Speaker', 'fl-builder' ),
                        'default'       => 'all-speaker',
                        'options'       => array(
                            'all-speaker'      => __( 'All Speakers', 'fl-builder' )
                        )
                    ),
                    'orderby' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order By', 'fl-builder' ),
                        'default'       => 'date',
                        'options'       => array(
                            'date'          => __( 'Date', 'fl-builder' ),
                            'title'         => __( 'Title', 'fl-builder' ),
                            'comment-count' => __( 'Comment Count', 'fl-builder' )
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
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_date' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show date', 'fl-builder' ),
                        'default'       => '1',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_topic' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show topic', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_book' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show book', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_series' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show series', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_speaker' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show speaker', 'fl-builder' ),
                        'default'       => '0',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_media_types' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show media types', 'fl-builder' ),
                        'default'       => '1',
                        'options'       => array(
                            '1'      => __( 'Yes', 'fl-builder' ),
                            '0'      => __( 'No', 'fl-builder' )
                        )
                    ),
                    'show_excerpt' => array(
                        'type'          => 'select',
                        'label'         => __( 'Show excerpt', 'fl-builder' ),
                        'default'       => '1',
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
