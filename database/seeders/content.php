<?php

namespace Database\Seeders;

const MENU_ITEMS = [
    [
        "text" => "Accueil",
        "to" => "#heading",
    ],
    [
        "text" => "Bienvenue",
        "to" => "#bienvenue",
    ],
    [
        "text" => "Galerie",
        "to" => "#galerie",
    ],
    [
        "text" => "Horaires",
        "to" => "#horaires",
    ],
];

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

const HORAIRES_RICH_CONTENT = [
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
                    "text" => "Horaires",
                ],
            ],
        ],
        [
            "type" => "table",
            "content" => [
                [
                    "type" => "tableRow",
                    "content" => [
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "lundi",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "Fermé",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "tableRow",
                    "content" => [
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "mardi",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "Fermé",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "tableRow",
                    "content" => [
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "mercredi",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "17:00-00:00",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "tableRow",
                    "content" => [
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "jeudi",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "17:00-01:00",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "tableRow",
                    "content" => [
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "vendredi",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "16:00-02:00",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "tableRow",
                    "content" => [
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "samedi",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "17:00-02:00",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "type" => "tableRow",
                    "content" => [
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "dimanche",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            "type" => "tableCell",
                            "attrs" => [
                                "colspan" => 1,
                                "rowspan" => 1,
                                "colwidth" => null,
                                "align" => null,
                            ],
                            "content" => [
                                [
                                    "type" => "paragraph",
                                    "attrs" => [
                                        "textAlign" => "start",
                                    ],
                                    "content" => [
                                        [
                                            "type" => "text",
                                            "text" => "Fermé",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
