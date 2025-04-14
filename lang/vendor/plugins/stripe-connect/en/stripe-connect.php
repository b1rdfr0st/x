<?php

return [
    'stripe_account_id' => 'Stripe Hesap ID',
    'go_to_dashboard' => 'Express Dashboard\'a Git',
    'connect' => [
        'label' => 'Stripe ile Bağlan',
        'description' => 'Ödemeleri toplamak için Stripe hesabınızı bağlayın.',
    ],
    'disconnect' => [
        'label' => 'Stripe Bağlantısını Kes',
        'confirm' => 'Stripe hesabınızın bağlantısını gerçekten kesmek istiyor musunuz?',
    ],
    'notifications' => [
        'connected' => 'Stripe hesabınız bağlandı.',
        'disconnected' => 'Stripe hesabınızın bağlantısı kesildi.',
        'now_active' => 'Stripe hesabınız artık aktif.',
    ],
    'withdrawal' => [
        'payout_info' => 'Ödemeniz, :stripe_account_id ID\'li Stripe hesabınıza otomatik olarak aktarılacaktır.',
    ],
];
