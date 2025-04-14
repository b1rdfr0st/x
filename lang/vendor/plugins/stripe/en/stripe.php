<?php

return [
    'webhook_secret' => 'Webhook Gizli Anahtarı',
    'webhook_setup_guide' => [
        'title' => 'Stripe Webhook Kurulum Rehberi',
        'description' => 'Stripe webhook kurulumunu yapmak için aşağıdaki adımları izleyin',
        'step_1_label' => 'Stripe Dashboard\'a Giriş Yapın',
        'step_1_description' => ':link adresine erişin ve "Geliştiriciler" sekmesindeki "Webhooks" bölümünde "Endpoint Ekle" düğmesine tıklayın.',
        'step_2_label' => 'Etkinlik Seçin ve Endpoint Yapılandırın',
        'step_2_description' => '"payment_intent.succeeded" etkinliğini seçin ve "Endpoint URL" alanına şu URL\'yi girin: :url',
        'step_3_label' => 'Endpoint Ekle',
        'step_3_description' => '"Endpoint Ekle" düğmesine tıklayarak webhook\'u kaydedin.',
        'step_4_label' => 'İmza Gizli Anahtarını Kopyalayın',
        'step_4_description' => '"Webhook Detayları" bölümünden "İmza Gizli Anahtarı" değerini kopyalayın ve "Ayarlar" sayfasındaki "Ödeme" sekmesindeki "Stripe" bölümünde "Stripe Webhook Gizli Anahtarı" alanına yapıştırın.',
    ],
];
