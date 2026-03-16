<?php

return [
    // Page 1
    [
        'title' => 'DOCUMENT TEST PAGE 1',
        'value_a' => '&é"(§è!çà',
        'value_b' => '-)àç!è§(',
        'multiple_data' => [
            ['name' => 'foo', 'test_data' => false],
            ['name' => 'bar', 'test_data' => true],
        ],
        'url' => 'https://kevindubuc.fr',
        'image_url' => __DIR__.'/placeholder_150.png',
        'test_date' => '1988-08-14',
        'markdown_content' => trim(<<<MD
            # Hello World!
            ![alt text](https://metarisc-bucket.s3.fr-par.scw.cloud/sdis62.png "Title")
            BOOM

            <img src="https://metarisc-bucket.s3.fr-par.scw.cloud/bmpm.png" alt="Placeholder Image" title="Title" width="50px" height="50px" />
            MD),
        'test_table' => [
            ['foo' => 'foo1', 'bar' => 'bar1'],
            ['foo' => 'foo2', 'bar' => 'bar2'],
        ],
        'ast' => '{
    "root": {
        "children": [
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "",
                        "text": "Titre du dossier pour Loup",
                        "type": "text",
                        "version": 1
                    }
                ],
                "direction": null,
                "format": "center",
                "indent": 0,
                "type": "heading",
                "version": 1,
                "tag": "h1"
            },
            {
                "children": [
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "",
                        "text": "sous titre",
                        "type": "text",
                        "version": 1
                    }
                ],
                "direction": null,
                "format": "center",
                "indent": 0,
                "type": "heading",
                "version": 1,
                "tag": "h2"
            },
            {
                "children": [
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "",
                        "text": "sous-sous titre",
                        "type": "text",
                        "version": 1
                    }
                ],
                "direction": null,
                "format": "center",
                "indent": 0,
                "type": "heading",
                "version": 1,
                "tag": "h3"
            },
            {
                "children": [
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "",
                        "text": "sous-sous-sous titre",
                        "type": "text",
                        "version": 1
                    }
                ],
                "direction": null,
                "format": "center",
                "indent": 0,
                "type": "heading",
                "version": 1,
                "tag": "h4"
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [
                    {
                        "children": [
                            {
                                "children": [
                                    {
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 1,
                                                "mode": "normal",
                                                "style": "",
                                                "text": "Rédacteur",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ],
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "paragraph",
                                        "version": 1,
                                        "textFormat": 1,
                                        "textStyle": ""
                                    }
                                ],
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "tablecell",
                                "version": 1,
                                "textFormat": 1,
                                "backgroundColor": "#CCCCCC",
                                "colSpan": 1,
                                "headerState": 0,
                                "rowSpan": 1,
                                "width": 342
                            },
                            {
                                "children": [
                                    {
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 1,
                                                "mode": "normal",
                                                "style": "",
                                                "text": "Structure",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ],
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "paragraph",
                                        "version": 1,
                                        "textFormat": 1,
                                        "textStyle": ""
                                    }
                                ],
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "tablecell",
                                "version": 1,
                                "textFormat": 1,
                                "backgroundColor": "#CCCCCC",
                                "colSpan": 1,
                                "headerState": 0,
                                "rowSpan": 1
                            },
                            {
                                "children": [
                                    {
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 1,
                                                "mode": "normal",
                                                "style": "",
                                                "text": "Date",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ],
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "paragraph",
                                        "version": 1,
                                        "textFormat": 1,
                                        "textStyle": ""
                                    }
                                ],
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "tablecell",
                                "version": 1,
                                "textFormat": 1,
                                "backgroundColor": "#CCCCCC",
                                "colSpan": 2,
                                "headerState": 0,
                                "rowSpan": 1
                            }
                        ],
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "tablerow",
                        "version": 1,
                        "textFormat": 1
                    },
                    {
                        "children": [
                            {
                                "children": [
                                    {
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 2,
                                                "mode": "normal",
                                                "style": "",
                                                "text": "Gauthier Legrand",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ],
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "paragraph",
                                        "version": 1,
                                        "textFormat": 2,
                                        "textStyle": ""
                                    }
                                ],
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "tablecell",
                                "version": 1,
                                "textFormat": 2,
                                "backgroundColor": null,
                                "colSpan": 1,
                                "headerState": 0,
                                "rowSpan": 1,
                                "width": 342
                            },
                            {
                                "children": [
                                    {
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 8,
                                                "mode": "normal",
                                                "style": "",
                                                "text": "SDIS62",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ],
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "paragraph",
                                        "version": 1,
                                        "textFormat": 8,
                                        "textStyle": ""
                                    }
                                ],
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "tablecell",
                                "version": 1,
                                "textFormat": 8,
                                "backgroundColor": null,
                                "colSpan": 1,
                                "headerState": 0,
                                "rowSpan": 1
                            },
                            {
                                "children": [
                                    {
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 0,
                                                "mode": "normal",
                                                "style": "color: #ed1f0f;",
                                                "text": "13/01/2025",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ],
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "paragraph",
                                        "version": 1,
                                        "textStyle": "color: #ed1f0f;",
                                        "textFormat": 0
                                    }
                                ],
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "tablecell",
                                "version": 1,
                                "textStyle": "color: #ed1f0f;",
                                "backgroundColor": null,
                                "colSpan": 1,
                                "headerState": 0,
                                "rowSpan": 1
                            },
                            {
                                "children": [
                                    {
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 0,
                                                "mode": "normal",
                                                "style": "",
                                                "text": "09:00",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ],
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "paragraph",
                                        "version": 1,
                                        "textFormat": 0,
                                        "textStyle": ""
                                    }
                                ],
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "tablecell",
                                "version": 1,
                                "backgroundColor": null,
                                "colSpan": 1,
                                "headerState": 0,
                                "rowSpan": 1
                            }
                        ],
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "tablerow",
                        "version": 1,
                        "textStyle": "color: #ed1f0f;"
                    }
                ],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "table",
                "version": 1,
                "textStyle": "color: #ed1f0f;"
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "type": "page-break",
                "version": 1
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [
                    {
                        "detail": 0,
                        "format": 11,
                        "mode": "normal",
                        "style": "",
                        "text": "Première page",
                        "type": "text",
                        "version": 1
                    },
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "",
                        "text": " ",
                        "type": "text",
                        "version": 1
                    },
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "color: #2196F3;",
                        "text": "du",
                        "type": "text",
                        "version": 1
                    },
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "",
                        "text": " ",
                        "type": "text",
                        "version": 1
                    },
                    {
                        "detail": 0,
                        "format": 0,
                        "mode": "normal",
                        "style": "background-color: #EF9A9A;",
                        "text": "document",
                        "type": "text",
                        "version": 1
                    }
                ],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 11,
                "textStyle": "color: #2196F3;"
            },
            {
                "children": [],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "children": [
                    {
                        "src": "https://www.dlsu.edu.ph/wp-content/uploads/2018/11/300x300-placeholder.jpg",
                        "alt": "https://www.dlsu.edu.ph/wp-content/uploads/2018/11/300x300-placeholder.jpg",
                        "title": "miniature-films-anneu0301es-90.jpg",
                        "width": 534,
                        "height": 326,
                        "caption": "Miniature Youtube gu00e9nu00e9ru00e9e par IA",
                        "type": "image",
                        "version": 1
                    }
                ],
                "direction": null,
                "format": "center",
                "indent": 0,
                "type": "paragraph",
                "version": 1,
                "textFormat": 0,
                "textStyle": ""
            },
            {
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "list",
                "version": 1,
                "listType": "bullet",
                "start": 1,
                "tag": "ul",
                "children": [
                    {
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "listitem",
                        "version": 1,
                        "value": 1,
                        "children": [
                            {
                                "detail": 0,
                                "format": 0,
                                "mode": "normal",
                                "style": "",
                                "text": "Point 1",
                                "type": "text",
                                "version": 1
                            }
                        ]
                    },
                    {
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "listitem",
                        "version": 1,
                        "value": 2,
                        "children": [
                            {
                                "detail": 0,
                                "format": 0,
                                "mode": "normal",
                                "style": "",
                                "text": "Point 2",
                                "type": "text",
                                "version": 1
                            }
                        ]
                    },
                    {
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "listitem",
                        "version": 1,
                        "value": 3,
                        "children": [
                            {
                                
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "list",
                                "version": 1,
                                "listType": "bullet",
                                "start": 1,
                                "tag": "ul",
                                "children": [
                                    {
                                        "direction": null,
                                        "format": "",
                                        "indent": 1,
                                        "type": "listitem",
                                        "version": 1,
                                        "value": 1,
                                        "children": [
                                            {
                                                "detail": 0,
                                                "format": 0,
                                                "mode": "normal",
                                                "style": "",
                                                "text": "Point 2.1",
                                                "type": "text",
                                                "version": 1
                                            }
                                        ]
                                    },
                                    {
                                        "direction": null,
                                        "format": "",
                                        "indent": 1,
                                        "type": "listitem",
                                        "version": 1,
                                        "value": 2,
                                        "children": [
                                            {
                                                "direction": null,
                                                "format": "",
                                                "indent": 0,
                                                "type": "list",
                                                "version": 1,
                                                "listType": "bullet",
                                                "start": 1,
                                                "tag": "ul",
                                                "children": [
                                                    {
                                                        "direction": null,
                                                        "format": "",
                                                        "indent": 2,
                                                        "type": "listitem",
                                                        "version": 1,
                                                        "value": 1,
                                                        "children": [
                                                            {
                                                                "detail": 0,
                                                                "format": 0,
                                                                "mode": "normal",
                                                                "style": "",
                                                                "text": "Point 2.1.1",
                                                                "type": "text",
                                                                "version": 1
                                                            }
                                                        ]
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]
                    }
                ]
            },
            {
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "layout-item",
                "version": 1,
                "children": [
                    {
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "paragraph",
                        "version": 1,
                        "textFormat": 0,
                        "textStyle": "",
                        "children": [
                            {
                                "detail": 0,
                                "format": 0,
                                "mode": "normal",
                                "style": "",
                                "text": "droite",
                                "type": "text",
                                "version": 1
                            }
                        ]
                    },
                    {
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "list",
                        "version": 1,
                        "listType": "number",
                        "start": 1,
                        "tag": "ol",
                        "children": [
                            {
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "listitem",
                                "version": 1,
                                "value": 1,
                                "children": [
                                    {
                                        "detail": 0,
                                        "format": 0,
                                        "mode": "normal",
                                        "style": "",
                                        "text": "point 1",
                                        "type": "text",
                                        "version": 1
                                    }
                                ]
                            },
                            {
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "listitem",
                                "version": 1,
                                "value": 2,
                                "children": [
                                    {
                                        "detail": 0,
                                        "format": 0,
                                        "mode": "normal",
                                        "style": "",
                                        "text": "Point 2",
                                        "type": "text",
                                        "version": 1
                                    }
                                ]
                            },
                            {
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "listitem",
                                "version": 1,
                                "value": 3,
                                "children": [
                                    {
                                        "direction": null,
                                        "format": "",
                                        "indent": 0,
                                        "type": "list",
                                        "version": 1,
                                        "listType": "number",
                                        "start": 1,
                                        "tag": "ol",
                                        "children": [
                                            {
                                                "direction": null,
                                                "format": "",
                                                "indent": 1,
                                                "type": "listitem",
                                                "version": 1,
                                                "value": 1,
                                                "children": [
                                                    {
                                                        "detail": 0,
                                                        "format": 0,
                                                        "mode": "normal",
                                                        "style": "",
                                                        "text": "Point 2.1",
                                                        "type": "text",
                                                        "version": 1
                                                    }
                                                ]
                                            },
                                            {
                                                "direction": null,
                                                "format": "",
                                                "indent": 1,
                                                "type": "listitem",
                                                "version": 1,
                                                "value": 2,
                                                "children": [
                                                    {
                                                        "direction": null,
                                                        "format": "",
                                                        "indent": 0,
                                                        "type": "list",
                                                        "version": 1,
                                                        "listType": "number",
                                                        "start": 1,
                                                        "tag": "ol",
                                                        "children": [
                                                            {
                                                                "direction": null,
                                                                "format": "",
                                                                "indent": 2,
                                                                "type": "listitem",
                                                                "version": 1,
                                                                "value": 1,
                                                                "children": [
                                                                    {
                                                                        "detail": 0,
                                                                        "format": 0,
                                                                        "mode": "normal",
                                                                        "style": "",
                                                                        "text": "Point 2.1.1",
                                                                        "type": "text",
                                                                        "version": 1
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            },
                            {
                                "direction": null,
                                "format": "",
                                "indent": 0,
                                "type": "listitem",
                                "version": 1,
                                "value": 3,
                                "children": [
                                    {
                                        "detail": 0,
                                        "format": 0,
                                        "mode": "normal",
                                        "style": "",
                                        "text": "Point 3",
                                        "type": "text",
                                        "version": 1
                                    }
                                ]
                            }
                        ]
                    }
                ]
            },
            {
                "children": [
                    {
                        "children": [
                            {
                                "detail": 0,
                                "format": 0,
                                "mode": "normal",
                                "style": "",
                                "text": "Citation",
                                "type": "text",
                                "version": 1
                            }
                        ],
                        "direction": null,
                        "format": "",
                        "indent": 0,
                        "type": "paragraph",
                        "version": 1,
                        "textFormat": 0,
                        "textStyle": ""
                    }
                ],
                "direction": null,
                "format": "",
                "indent": 0,
                "type": "quote",
                "version": 1
            }
        ],
        "direction": null,
        "format": "",
        "indent": 0,
        "type": "root",
        "version": 1,
        "textStyle": "color: #ed1f0f;"
    }
}',
    ],

    // Page 2
    [
        'title' => 'DOCUMENT TEST PAGE 2',
        'value_a' => '-)àç!è§(',
        'value_b' => '&é"(§è!çà',
        'multiple_data' => [
            ['name' => 'baz', 'test_data' => true],
            ['name' => 'foo', 'test_data' => false],
        ],
        'url' => 'https://google.fr',
        'image_url' => __DIR__.'/placeholder_300.png',
        'test_date' => '2020-01-01',
        'markdown_content' => trim(<<<MD
            #### CLASSEMENT
            L'établissement est classé en type R de 3ème catégorie.
            Avec une activité de Jardins d'enfant
            L'effectif total est de 70 personnes: 50 au titre du public et 20 au titre du personnel.

            #### IMPLANTATION
            - Le bâtiment se compose de 2 niveaux en superstructure
            - Le bâtiment est de plain-pied.
            - Le plancher bas du dernier niveau accessible au public est =>8m.
            Il est desservi par **1** voie(s) engin.

            #### CONSTRUCTION
            La stabilité au feu de la structure de l'établissement est de degré 2h.
            La stabilité au feu des planchers de l'établissement est de degré 3h.

            #### VENTILATION / DESENFUMAGE
            L'établissement est désenfumé mécaniquement.
            L'établissement est désenfumé naturellement.

            #### ELECTRICITE / ECLAIRAGE
            Présence de batteries accumulateurs et matériels associés, ayant pour fonction:
            - Présence de parafoudre
            MD),
    ],
];
