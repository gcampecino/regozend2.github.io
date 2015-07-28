<?php
/**
 * Created by PhpStorm.
 * User: Rego
 * Date: 7/28/2015
 * Time: 1:24 AM
 */

return array(
    'controllers' => array(
        'invokables' => array(
            'Blog\Controller\Blog' => 'Blog\Controller\BlogController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'home' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/blog[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Blog\Controller\Blog',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(

        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',

        'template_map'             => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'error/404'           => __DIR__ . '/../views/error/404.phtml',
            'error/index'         => __DIR__ . '/../views/error/index.phtml',
            'blog/blog/index' => __DIR__ . '/../view/blog/blog/index.phtml',
        ),
        'template_path_stack' => array(
            'blog' => __DIR__ . '/../view',
        ),
    ),
);
