<?php
return array(
    'router' => array(
        'routes' => array(
            'jzarticle' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/jzarticle[/][:action]',
                    'defaults' => array(
                        'controller' => 'Article',
                        'action' => 'index'
                    )
                )
            )
        )
    ),

    'controllers' => array(
        'invokables' => array(
            'Article' => 'JzArticle\Controller\Admin\ArticleController'
        )
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
        'template_map' => include __DIR__ . '/../template_map.php'
    ),
    'navigation' => [
        'jz-cms-admin' => [
            [
                'label' => 'Article',
                'uri' => '',
                'class' => 'heading',
                'pages' => [
                    [
                        'label' => 'Article List',
                        'route' => 'jzarticle',
                        'controller' => 'Article',
                        'action' => 'index',
                    ],
                    [
                        'label' => 'Add Article',
                        'route' => 'jzarticle',
                        'controller' => 'Article',
                        'action' => 'add',
                    ],
                    [
                        'label' => 'Edit Article',
                        'route' => 'jzarticle',
                        'controller' => 'Article',
                        'action' => 'edit',
                    ]
                ]
            ],
        ]
    ]
);