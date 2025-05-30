<?php

return [
    'name' => 'Ürün Envanteri',
    'storehouse_management' => 'Depo Yönetimi',

    'import' => [
        'name' => 'Ürün Envanterini Güncelle',
        'description' => 'Bir CSV/Excel dosyası yükleyerek toplu olarak ürün envanterini güncelleyin.',
        'done_message' => ':count ürün başarıyla güncellendi.',
        'rules' => [
            'id' => 'ID alanı zorunludur ve ürünler tablosunda mevcut olmalıdır.',
            'name' => 'Ad alanı zorunludur ve bir metin olmalıdır.',
            'sku' => 'SKU alanı bir metin olmalıdır.',
            'with_storehouse_management' => 'Depo yönetimi alanı "Evet" veya "Hayır" olmalıdır.',
            'quantity' => 'Depo yönetimi "Evet" olduğunda miktar alanı zorunludur.',
            'stock_status' => 'Depo yönetimi "Hayır" olduğunda stok durumu alanı zorunludur ve şu değerlerden biri olmalıdır: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Ürün envanterini bir CSV/Excel dosyasına aktarın.',
    ],
];
