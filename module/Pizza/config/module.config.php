<?php
/**
 * ZF2 Buch Kapitel 9
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * Application module configuration
 * 
 * @package    Pizza
 */
return array(
    'router' => array(
        'routes' => array(
            'pizza-json' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/pizza-json',
                    'defaults' => array(
                        'controller' => 'pizza-json',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes'  => array(
                    'action' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route' => '/:action[/:id]',
                            'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]+',
                                'id'     => '[0-9]+',
                            ),
                            'defaults' => array(
                                'action'     => 'index',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
