<?php

return [
    "nav" => [
        'home' => [
            'page' => 'Home',
            'route' => 'home',
        ],
        'bestSeller' => [
            'page' => 'I migliori film',
            'route' => 'bestSeller',
        ],
        'price' => [
            'page' => 'Price',
            'route' => 'price',
        ],
        'category' => [
            'page' => 'Categorie',
            'subcategories' => [
                [
                    'genres' => 'Azione',
                ],
                [
                    'genres' => 'Comedy',
                ],
                [
                    'genres' => 'Tragico',
                ],
                [
                    'genres' => 'Triller',
                ],
            ],
        ],
    ],
];
