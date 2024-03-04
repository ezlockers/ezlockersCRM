<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Class Boilerplate.
 */
class Boilerplate extends BaseConfig
{
    //--------------------------------------------------------------------------
    // App name
    //--------------------------------------------------------------------------

    public $appName = 'EZLockers';

    //--------------------------------------------------------------------------
    // Dashboard controller
    //--------------------------------------------------------------------------

    public $dashboard = [
        'namespace'  => 'agungsugiarto\boilerplate\Controllers',
        'controller' => 'DashboardController::index',
        'filter'     => 'permission:back-office',
    ];

    //--------------------------------------------------------------------------
    // Config cdn for language datatables
    // pelase see https://cdn.datatables.net/plug-ins/1.10.20/i18n/
    //--------------------------------------------------------------------------

    public $i18n = 'English';

    //--------------------------------------------------------------------------
    // Theme boilerplate
    //
    // BG: blue, indigo, purple, pink, red, orange, yellow, green, teal, cyan,
    //     gray, gray-dark, black
    // Type: dark, light
    // Shadow: 0-4
    //
    //--------------------------------------------------------------------------

    public $theme = [
        'body-sm' => false,
        'navbar'  => [
            'bg'     => 'white',
            'type'   => 'light',
            'border' => true,
            'user'   => [
                'visible' => true,
                'shadow'  => 2,
            ],
        ],
        'sidebar' => [
            'type'    => 'dark',
            'shadow'  => 4,
            'border'  => true,
            'compact' => true,
            'links'   => [
                'bg'     => 'blue',
                'shadow' => 1,
            ],
            'brand' => [
                'bg'   => 'black',
                'logo' => [
                    'icon'   => '/assets/img/ezlockers-logo.png', // path to image | this example icon on public root folder.
                    'text'   => '<strong>EZ</strong>lockers',
                    'shadow' => 0,
                ],
            ],
            'user' => [
                'visible' => true,
                'shadow'  => 2,
            ],
        ],
        'footer' => [
            'fixed'      => true,
            'vendorname' => 'EzLockers @2024',
            'vendorlink' => 'https://ezlockers.co.uk',
        ],
    ];
}
