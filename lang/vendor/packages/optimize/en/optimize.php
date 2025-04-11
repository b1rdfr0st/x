<?php

return [
    'settings' => [
        'title' => 'Optimize Et',
        'description' => 'HTML çıktısını küçült, CSS\'yi satır içi yap, yorumları kaldır...',
        'enable' => 'Sayfa hızını optimize etmeyi etkinleştir?',
    ],
    'collapse_white_space' => 'Boşlukları daralt',
    'collapse_white_space_description' => 'Bu filtre, gereksiz boşlukları kaldırarak bir HTML dosyasındaki iletilen baytları azaltır.',
    'elide_attributes' => 'Öznitelikleri gizle',
    'elide_attributes_description' => 'Bu filtre, belirtilen değer bir öznitelik için varsayılan değere eşit olduğunda, etiketlerden öznitelikleri kaldırarak HTML dosyalarının aktarım boyutunu azaltır. Bu, az sayıda bayt tasarrufu sağlayabilir ve etkilenen etiketleri standartlaştırarak belgeyi daha sıkıştırılabilir hale getirebilir.',
    'inline_css' => 'CSS\'yi satır içi yap',
    'inline_css_description' => 'Bu filtre, etiketlerin satır içi "style" özniteliğini sınıflara dönüştürerek CSS\'yi başlığa taşır.',
    'insert_dns_prefetch' => 'DNS ön getirme ekle',
    'insert_dns_prefetch_description' => 'Bu filtre, tarayıcının DNS ön getirme yapmasını sağlamak için HEAD bölümüne etiketler ekler.',
    'remove_comments' => 'Yorumları kaldır',
    'remove_comments_description' => 'Bu filtre, HTML, JS ve CSS yorumlarını ortadan kaldırır. Filtre, yorumları kaldırarak HTML dosyalarının aktarım boyutunu azaltır. HTML dosyasına bağlı olarak, bu filtre ağ üzerinden iletilen bayt sayısını önemli ölçüde azaltabilir.',
    'remove_quotes' => 'Tırnak işaretlerini kaldır',
    'remove_quotes_description' => 'Bu filtre, HTML özniteliklerinden gereksiz tırnak işaretlerini kaldırır. Çeşitli HTML spesifikasyonları tarafından gerekli olmasına rağmen, tarayıcılar, bir özniteliğin değeri belirli bir karakter alt kümesinden (alfanümerik ve bazı noktalama işaretleri) oluştuğunda bunların çıkarılmasına izin verir.',
    'defer_javascript' => 'Javascript\'i ertele',
    'defer_javascript_description' => 'HTML\'deki javascript\'in yürütülmesini erteler. Bazı scriptlerde ertelemeyi iptal etmek gerekirse, ertelemeyi iptal etmek için script özniteliği olarak data-pagespeed-no-defer kullanın.',
];
