<?php

return [
    'name' => 'Ürün Fiyatları',
    'warning_prices' => 'Bu fiyatlar ürünün orijinal maliyetlerini temsil eder ve hızlı satışlar, promosyonlar gibi faktörlerden dolayı nihai fiyatları yansıtmayabilir.',

    'import' => [
        'name' => 'Ürün Fiyatlarını Güncelle',
        'description' => 'Bir CSV/Excel dosyası yükleyerek toplu olarak ürün fiyatlarını güncelleyin.',
        'done_message' => ':count ürün başarıyla güncellendi.',
        'rules' => [
            'id' => 'ID alanı zorunludur ve ürünler tablosunda mevcut olmalıdır.',
            'name' => 'Ad alanı zorunludur ve bir metin olmalıdır.',
            'sku' => 'SKU alanı bir metin olmalıdır.',
            'cost_per_item' => 'Birim başına maliyet alanı sayısal bir değer olmalıdır.',
            'price' => 'Fiyat alanı zorunludur ve sayısal bir değer olmalıdır.',
            'sale_price' => 'İndirimli fiyat alanı sayısal bir değer olmalıdır.',
        ],
    ],

    'export' => [
        'description' => 'Ürün fiyatlarını bir CSV/Excel dosyasına aktarın.',
    ],
];
