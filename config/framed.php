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
    | Meta
    |--------------------------------------------------------------------------
    |
    | Default/Standard meta data
    |
    */

    'description' => 'Framed Just For You is Gold Coasts best picture framing business. We have been locally owned and operated for over 20 years and with 60+ years of experience we produce amazing results for our customers all over the Gold Coast and the country!',
    'keywords' => 'Gold Coast Picture Framing, Framed Just For you, custom picture framing, Gold Coast, Framing Services, Queensland Framing',

    /*
    |--------------------------------------------------------------------------
    | Contact
    |--------------------------------------------------------------------------
    |
    | Defines the current contact information of the business.
    |
    */

    'contact' => [
        'mobile' => '0412 068 330',
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
            'time' => '8:30-5:00',
        ],
        [
            'value' => 2,
            'name' => 'Tuesday',
            'time' => '8:30-5:00',
        ],
        [
            'value' => 3,
            'name' => 'Wednesday',
            'time' => '8:30-5:00',
        ],
        [
            'value' => 4,
            'name' => 'Thursday',
            'time' => '8:30-5:00',
        ],
        [
            'value' => 5,
            'name' => 'Friday',
            'time' => '8:30-5:00',
        ],
        [
            'value' => 6,
            'name' => 'Saturday',
            'time' => '9:00-4:00',
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
            'src' => '/team/diane.webp',
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
            'src' => '/team/bethany.webp',
            'alt' => 'Bethany Team Photo',
        ],
        [
            'name' => 'Danielle',
            'position' => 'Framer',
            'description' => 'Danielle, our newest team member..',
            'alt' => 'Danielle Team Photo',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Pricing
    |--------------------------------------------------------------------------
    |
    | Defines the pricing of things
    |
    */

    'pricing' => [
        'squareCanvas' => [
            'title' => 'Squares Canvas',
            'headings' => ['Sizes', '', 'Pricing'],
            'data' => [
                ['12"x12"', '30cmx30cm', '$100'],
                ['16"x16"', '40cmx40cm', '$140'],
                ['20"x20"', '50cmx50cm', '$191'],
                ['24"x24"', '60cmx60cm', '$229'],
                ['30"x30"', '76cmx76cm', '$304'],
                ['36"x36"', '91cmx91cm', '$374'],
                ['40"x40"', '102cmx102cm', '$408'],
            ],
        ],
        'canvasPanaromic' => [
            'title' => 'Panoramic Canvas',
            'headings' => ['Sizes', '', 'Pricing'],
            'data' => [
                ['12"x12"', '30cmx30cm', '$100'],
                ['12"x12"', '30cmx30cm', '$100'],
                ['12"x36"', '30cmx30cm', '$100'],
                ['18"x36"', '30cmx30cm', '$100'],
                ['20"x40"', '30cmx30cm', '$100'],
                ['16"x48"', '30cmx30cm', '$100'],
                ['24"x48"', '30cmx30cm', '$100'],
            ],
        ],
        'canvasRectangle' => [
            'title' => 'Rectangles Canvas',
            'headings' => ['Sizes', '', 'Pricing'],
            'data' => [
                ['12"x16"', '30cmx40cm', '$100'],
                ['14"x20"', '35cmx50cm', '$135'],
                ['16"x20"', '40cmx50cm', '$145'],
                ['16"x24"', '40cmx60cm', '$168'],
                ['20"x24"', '50cmx60cm', '$198'],
                ['20"x30"', '50cmx75cm', '$190'],
                ['24"x30"', '61cmx76cm', '$270'],
                ['24"x36"', '60cmx91cm', '$280'],
                ['28"x40"', '70cmx100cm', '$345'],
                ['30"x40"', '76cmx102cm', '$355'],
                ['32"x48"', '80cmx120cm', '$415'],
                ['36"x48"', '91cmx120cm', '$405'],
            ],
        ],
        'printingPaper' => [
            'title' => 'Printing',
            'headings' => ['Sizes', '', 'Photo Paper', 'Art Paper', 'Canvas'],
            'data' => [
                ['6"x4"', '15x10cm', '$8', '$10', '$15'],
                ['5"x7"', '12x17cm', '$12', '$15', '$20'],
                ['8"x10"', '20x25cm', '$24', '$29', '$36'],
                ['10"x12"', '25x30cm', '$29', '$32', '$40'],
                ['12"x12"', '30x30cm', '$32', '$34', '$42'],
                ['11"x14"', '27x35cm', '$34', '$36', '$45'],
                ['12"x16"', '30x40cm', '$39', '$44', '$52'],
                ['16"x16"', '40x40cm', '$50', '$58', '$70'],
                ['16"x20"', '40x50cm', '$58', '$64', '$76'],
                ['20"x20"', '50x50cm', '$68', '$72', '$90'],
                ['20"x30"', '50x76cm', '$88', '$99', '$110'],
                ['24"x24"', '61x61cm', '$85', '$96', '$120'],
                ['20"x40"', '50x101cm', '$130', '$160', '$180'],
                ['24"x36"', '61x91cm', '$130', '$160', '$180'],
            ]
        ]
    ]
];
