<?php

return [
    'name' => 'Konumlar',
    'all_states' => 'Tüm eyaletler',
    'abbreviation' => 'Kısaltma',
    'abbreviation_placeholder' => 'Örn: CA',
    'enums' => [
        'import_type' => [
            'country' => 'Ülke',
            'state' => 'Eyalet',
            'city' => 'Şehir',
        ],
    ],
    'export' => [
        'total' => 'Toplam Konumlar',
        'total_countries' => 'Toplam Ülkeler',
        'total_states' => 'Toplam Eyaletler',
        'total_cities' => 'Toplam Şehirler',
        'description' => 'Ülke, eyalet ve şehir gibi konum verilerinizi dışa aktarın.',
    ],
    'import' => [
        'description' => 'Mevcut verilerden veya bir CSV/Excel dosyası yükleyerek konum verilerini kolayca içe aktarın.',
        'rules' => [
            'name' => 'Konum adı zorunludur ve 120 karakteri aşmamalıdır.',
            'slug' => 'Konum slug\'ı, sağlanmışsa, 120 karakteri aşmamalıdır.',
            'import_type' => 'İçe aktarma türü zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır.',
            'order' => 'Konum sırası, sağlanmışsa, 0 ile 127 arasında pozitif bir tam sayı olmalıdır.',
            'abbreviation' => 'Konumun kısaltması, sağlanmışsa, 10 karakteri aşmamalıdır.',
            'status' => 'Konum durumu zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır.',
            'country' => 'İçe aktarma türü eyalet veya şehir ise ülke alanı zorunludur.',
            'state' => 'İçe aktarma türü şehir ise eyalet alanı zorunludur.',
            'nationality' => 'Konumun milliyeti, sağlanmışsa, 120 karakteri aşmamalıdır.',
        ],
    ],
];
