<?php

return [
    'create' => 'Yeni bir gönderi oluştur',
    'form' => [
        'name' => 'Ad',
        'name_placeholder' => 'Gönderi adı (Maksimum :c karakter)',
        'description' => 'Açıklama',
        'description_placeholder' => 'Gönderi için kısa açıklama (Maksimum :c karakter)',
        'categories' => 'Kategoriler',
        'tags' => 'Etiketler',
        'tags_placeholder' => 'Etiketler',
        'content' => 'İçerik',
        'is_featured' => 'Bu gönderiyi öne çıkar',
        'note' => 'Not içeriği',
        'format_type' => 'Format',
    ],
    'cannot_delete' => 'Gönderi silinemedi',
    'post_deleted' => 'Gönderi silindi',
    'posts' => 'Gönderiler',
    'post' => 'Gönderi',
    'edit_this_post' => 'Bu gönderiyi düzenle',
    'no_new_post_now' => 'Şu anda yeni bir gönderi yok!',
    'menu_name' => 'Gönderiler',
    'widget_posts_recent' => 'Son Gönderiler',
    'categories' => 'Kategoriler',
    'category' => 'Kategori',
    'author' => 'Yazar',
    'export' => [
        'description' => 'Gönderileri CSV/Excel dosyasına aktar.',
        'total' => 'Toplam Gönderi',
    ],
    'import' => [
        'description' => 'Gönderileri bir CSV/Excel dosyasından içe aktar.',
        'done_message' => ':created gönderi oluşturuldu ve :updated gönderi güncellendi.',
        'rules' => [
            'nullable_string_max' => ':attribute alanı en fazla :max karakter uzunluğunda bir metin değeri kabul eder veya boş bırakılabilir.',
            'sometimes_array' => ':attribute alanı bir dizi değeri kabul eder veya boş bırakılabilir.',
            'in' => ':attribute şu değerlerden biri olmalıdır: :values.',
            'nullable_string' => ':attribute alanı bir metin değeri kabul eder veya boş bırakılabilir.',
            'nullable_string_max_in' => ':attribute alanı boş bırakılabilir veya sağlanırsa en fazla :max karakter uzunluğunda bir metin olmalı ve şu değerlerden biri olmalıdır: :values.',
        ],
    ],
];
