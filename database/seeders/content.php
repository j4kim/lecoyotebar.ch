<?php

namespace Database\Seeders;

const WELCOME_BLOCK_RICH_CONTENT = [
    "type" => "doc",
    "content" => [
        [
            "type" => "heading",
            "attrs" => [
                "textAlign" => "start",
                "level" => 2,
            ],
            "content" => [
                [
                    "type" => "text",
                    "text" => "Bienvenue au Coyote Bar",
                ],
            ],
        ],
        [
            "type" => "blockquote",
            "content" => [
                [
                    "type" => "paragraph",
                    "attrs" => [
                        "textAlign" => "start",
                    ],
                    "content" => [
                        [
                            "type" => "text",
                            "text" => "Le bar de merde pour les gros cons, ici t’es chez toi",
                        ],
                    ],
                ],
            ],
        ],
        [
            "type" => "paragraph",
            "attrs" => [
                "textAlign" => "start",
            ],
            "content" => [
                [
                    "type" => "text",
                    "text" => "Le Coyote c'est:",
                ],
            ],
        ],
        [
            "type" => "bulletList",
            "content" => [
                [
                    "type" => "listItem",
                    "content" => [
                        [
                            "type" => "paragraph",
                            "attrs" => [
                                "textAlign" => "start",
                            ],
                            "content" => [
                                [
                                    "type" => "text",
                                    "text" => "un bar à fléchettes, avec 4 cibles professionnelles à l'étage",
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "listItem",
                    "content" => [
                        [
                            "type" => "paragraph",
                            "attrs" => [
                                "textAlign" => "start",
                            ],
                            "content" => [
                                [
                                    "type" => "text",
                                    "text" => "un pub à l'irlandaise, avec des trèfles dessinés dans la mousse de ta Guinness",
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "listItem",
                    "content" => [
                        [
                            "type" => "paragraph",
                            "attrs" => [
                                "textAlign" => "start",
                            ],
                            "content" => [
                                [
                                    "type" => "text",
                                    "text" => "une terrasse pour fumer ta clope, avoir trop chaud ou trop froid, et parler pas trop fort parce que y a les voisins quand même",
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "listItem",
                    "content" => [
                        [
                            "type" => "paragraph",
                            "attrs" => [
                                "textAlign" => "start",
                            ],
                            "content" => [
                                [
                                    "type" => "text",
                                    "text" => "un endroit sympa ou passer ta soirée avec tes copains-copines, p'tite partie de baby-foot, de flipper ou de chibre si les fléchettes c'est pas ton truc",
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "listItem",
                    "content" => [
                        [
                            "type" => "paragraph",
                            "attrs" => [
                                "textAlign" => "start",
                            ],
                            "content" => [
                                [
                                    "type" => "text",
                                    "text" => "le Mojito Festival chaque fin août, pour l'anniversaire du bar",
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "listItem",
                    "content" => [
                        [
                            "type" => "paragraph",
                            "attrs" => [
                                "textAlign" => "start",
                            ],
                            "content" => [
                                [
                                    "type" => "text",
                                    "text" => "à La Chaux-de-Fonds",
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            "type" => "paragraph",
            "attrs" => [
                "textAlign" => "start",
            ],
            "content" => [
                [
                    "type" => "text",
                    "text" => "Vois plutôt par toi-même dans la galerie photo qui vient.",
                ],
            ],
        ],
    ],
];
