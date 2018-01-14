<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Settings
    |--------------------------------------------------------------------------
    |
    | In here you can define all the settings used in your app, it will be
    | available as a settings page where user can update it if needed
    | create sections of settings with a type of input.
    */

    'app' => [

        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_name',
                'label' => 'App Name',
                'rules' => 'required|min:2|max:50'
            ]
        ]
    ],

    'training' => [

        'title' => 'Training',
        'desc' => 'Training settings',
        'icon' => 'glyphicon glyphicon-education',

        'elements' => [
            [
                'type' => 'select', // input fields type
                'data' => 'boolean', // data type, string, int, boolean
                'name' => 'remove_pending_training', // unique name for field
                'label' => 'Remove pending training upon training item revision?',
                'rules' => 'required|boolean', // validation rule of laravel
                'class' => 'w-auto px-2', // class for input
                'options' => [
                   '1' => 'Yes',
                    '0' => 'No'
                ]
            ],
            [
                'type' => 'number',
                'data' => 'int',
                'name' => 'pending_item_overdue_in_days',
                'label' => 'Days before pending training is overdue',
                'rules' => 'required|numeric|min:1',
                'class' => 'px-2 w-auto',
                'value' => 14
            ],
            [
                'type' => 'select',
                'data' => 'boolean',
                'name' => 'send_email_on_pending_training',
                'label' => 'Send email notification when training assign to a user?',
                'rules' => 'boolean',
                'class' => 'w-auto px-2',
                'options' => [
                    '1' => 'Yes',
                    '0' => 'No'
                ]
            ],
        ]
    ],

    'Locale' => [

        'title' => 'Localization',
        'desc' => 'Set your localization settings like format of Date and number etc.',
        'icon' => 'glyphicon glyphicon-globe',

        'elements' => [
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'date_format',
                'label' => 'Date format',
                'rules' => 'required',
                'class' => 'w-auto px-2',
                'options' => [
                    'm/d/Y' => date('m/d/Y'),
                    'm.d.y' => date("m.d.y"),
                    'j, n, Y' => date("j, n, Y"),
                    'M j, Y' => date("M j, Y"),
                    'D, M j, Y' => date('D, M j, Y')
                ],
                'value' => 'm/d/Y'
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'time_format',
                'label' => 'Time format',
                'rules' => 'string',
                'class' => 'w-auto px-2',
                'options' => [
                    'g:i a' => date('g:i a') . ' (12-hour format)',
                    'g:i:s A' => date('g:i A') . ' (12-hour format)',
                    'G:i' => date("G:i"). ' (24-hour format)',
                    'h:i:s a' => date("h:i:s a") . ' (12-hour with leading zero)',
                    'h:i:s A' => date("h:i:s A")
                ],
                'value' => 'g:i a'
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'timezone',
                'label' => 'Timezone',
                'class' => 'w-auto px-2',
                'rules' => 'string',
                'options' => array_combine(
                    DateTimeZone::listIdentifiers(DateTimeZone::ALL),
                    DateTimeZone::listIdentifiers(DateTimeZone::ALL)
                ),
                'value' => config('app.timezone', 'UTC')
            ]
        ]
    ],

    'email' => [

        'title' => 'Email',
        'desc' => 'Email settings for app',
        'icon' => 'glyphicon glyphicon-envelope',

        'elements' => [
            [
                'type' => 'email',
                'name' => 'from_email',
                'label' => 'From Email',
                'rules' => 'required|email'
            ],
            [
                'type' => 'text',
                'name' => 'from_name',
                'label' => 'From Name',
                'rules' => 'required|min:2|max:50'
            ],
            [
                'type' => 'text',
                'name' => 'email_subject',
                'label' => 'Email Subject',
                'rules' => 'required|min:2|max:50'
            ]
        ]
    ],
];