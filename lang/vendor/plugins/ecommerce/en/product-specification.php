<?php

return [
    'product_specification' => 'Ürün Özellikleri',
    'specification_groups' => [
        'title' => 'Özellik Grupları',

        'create' => [
            'title' => 'Özellik Grubu Oluştur',
        ],

        'edit' => [
            'title' => 'Özellik Grubunu Düzenle ":name"',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Özellik Nitelikleri',

        'group' => 'İlişkili Grup',
        'group_placeholder' => 'Herhangi bir Grup Seçin',
        'type' => 'Alan Türü',
        'default_value' => 'Varsayılan Değer',
        'options' => [
            'heading' => 'Seçenekler',

            'add' => [
                'label' => 'Yeni seçenek ekle',
            ],
        ],

        'create' => [
            'title' => 'Özellik Niteliği Oluştur',
        ],

        'edit' => [
            'title' => 'Özellik Niteliğini Düzenle ":name"',
        ],
    ],

    'specification_tables' => [
        'title' => 'Özellik Tabloları',

        'create' => [
            'title' => 'Özellik Tablosu Oluştur',
        ],

        'edit' => [
            'title' => 'Özellik Tablosunu Düzenle ":name"',
        ],

        'fields' => [
            'groups' => 'Bu tabloda görüntülenecek grupları seçin',
            'name' => 'Grup adı',
            'assigned_groups' => 'Atanmış Gruplar',
            'sorting' => 'Sıralama',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Seçenekler',
            'title' => 'Özellik Tablosu',
            'select_none' => 'Hiçbiri',
            'description' => 'Bu üründe görüntülenecek özellik tablosunu seçin',
            'group' => 'Grup',
            'attribute' => 'Nitelik',
            'value' => 'Nitelik değeri',
            'hide' => 'Gizle',
            'sorting' => 'Sıralama',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Metin',
            'textarea' => 'Metin Alanı',
            'select' => 'Seçim',
            'checkbox' => 'Onay Kutusu',
            'radio' => 'Radyo Düğmesi',
        ],
    ],
];
