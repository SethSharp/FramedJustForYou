<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Name
    |--------------------------------------------------------------------------
    |
    | Defines the name of the business
    |
    */

    'name' => 'Framed Just For You',

    /*
    |--------------------------------------------------------------------------
    | Established
    |--------------------------------------------------------------------------
    |
    | Defines the established year of the business.
    |
    */

    'established' => 1997,

    /*
    |--------------------------------------------------------------------------
    | Contact
    |--------------------------------------------------------------------------
    |
    | Defines the current contact information of the business.
    |
    */

    'contact' => [
        'phone' => '0412 068 330',
        'telephone' => '07 5563 9799',
        'email' => 'framedjust4u@bigpond.com'
    ],


    /*
    |--------------------------------------------------------------------------
    | Address
    |--------------------------------------------------------------------------
    |
    | Defines the current address of the business.
    |
    */

    'address' => 'Unit 1-2, 122 Brisbane Road, Labrador 4215',

    /*
    |--------------------------------------------------------------------------
    | Times
    |--------------------------------------------------------------------------
    |
    | Defines the open times of the business. Using day values to indicate which
    | day each sub array represents. Each subarray has the open and close times.
    |
    */

    'times' => [
        [
            'value' => 1,
            'name' => 'Monday',
            'open' => '8:30',
            'close' => '5:00'
        ],
        [
            'value' => 2,
            'name' => 'Tuesday',
            'open' => '8:30',
            'close' => '5:00'
        ],
        [
            'value' => 3,
            'name' => 'Wednesday',
            'open' => '8:30',
            'close' => '5:00'
        ],
        [
            'value' => 4,
            'name' => 'Thursday',
            'open' => '8:30',
            'close' => '5:00'
        ],
        [
            'value' => 5,
            'name' => 'Friday',
            'open' => '8:30',
            'close' => '5:00'
        ],
        [
            'value' => 6,
            'name' => 'Saturday',
            'open' => '9:00',
            'close' => '4:00'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Team
    |--------------------------------------------------------------------------
    |
    | Defines the team members information, name, position and description.
    |
    */

    'team' => [
        [
            'name' => 'Diane',
            'position' => 'Director',
            'description' => "Diane, our founder, embarked on her picture framing journey in 1993. In 1997, she realized her dream by opening her framing business on Oxley Drive. With her vision and dedication, the business thrived and has continued to this day. With over 30 years of experience in the industry, Diane's passion for framing continues to drive our business forward.",
            'src' => 'team/diane.webp',
            'alt' => 'Diane Team Photo',
        ],
        [
            'name' => 'Karen',
            'position' => 'Framer',
            'description' => 'With over three decades of framing experience, Karen has been an integral part of our team. Her exceptional artistic flair enables her to assist our customers in making challenging choices, delivering outstanding results.',
            'alt' => 'Karen Team Photo',
        ],
        [
            'name' => 'John',
            'position' => 'Framer',
            'description' => 'John has been a valuable addition to our team and making significant contributions. With approximately six years of prior experience running his own picture framing business and a background in engineering, he brings a wealth of expertise.',
            'alt' => 'John Team Photo',
        ],
        [
            'name' => 'Bethany',
            'position' => 'Framer',
            'description' => 'Bethany, one of our newest team member, successfully juggles her university studies with her passion for picture framing. Her enthusiasm shines through as she continues to make impressive strides in her framing skills, consistently delivering outstanding work.',
            'src' => 'team/bethany.webp',
            'alt' => 'Bethany Team Photo',
        ],
        [
            'name' => 'Danielle',
            'position' => 'Framer',
            'description' => 'Danielle, our newest team member..',
            'alt' => 'Danielle Team Photo',
        ]
    ]
];
