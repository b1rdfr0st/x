<?php

return [
    'login' => [
        'username' => 'E-posta/Kullanıcı Adı',
        'email' => 'E-posta',
        'password' => 'Şifre',
        'title' => 'Kullanıcı Girişi',
        'remember' => 'Beni hatırla?',
        'login' => 'Giriş yap',
        'placeholder' => [
            'username' => 'Kullanıcı adınızı veya e-posta adresinizi girin',
            'email' => 'E-posta adresinizi girin',
            'password' => 'Şifrenizi girin',
        ],
        'success' => 'Başarıyla giriş yapıldı!',
        'fail' => 'Yanlış kullanıcı adı veya şifre.',
        'not_active' => 'Hesabınız henüz aktif edilmedi!',
        'banned' => 'Bu hesap yasaklanmıştır.',
        'logout_success' => 'Başarıyla çıkış yapıldı!',
        'dont_have_account' => 'Bu sistemde bir hesabınız yok, daha fazla bilgi için lütfen yöneticiyle iletişime geçin!',
    ],
    'forgot_password' => [
        'title' => 'Şifremi Unuttum',
        'message' => '<p>Şifrenizi mi unuttunuz?</p><p>Lütfen e-posta hesabınızı girin. Sistem, şifrenizi sıfırlamak için bir bağlantı içeren bir e-posta gönderecektir.</p>',
        'submit' => 'Gönder',
    ],
    'reset' => [
        'new_password' => 'Yeni şifre',
        'password_confirmation' => 'Yeni şifreyi onayla',
        'email' => 'E-posta',
        'title' => 'Şifrenizi sıfırlayın',
        'update' => 'Güncelle',
        'wrong_token' => 'Bu bağlantı geçersiz veya süresi dolmuş. Lütfen sıfırlama formunu tekrar kullanmayı deneyin.',
        'user_not_found' => 'Bu kullanıcı adı mevcut değil.',
        'success' => 'Şifre başarıyla sıfırlandı!',
        'fail' => 'Token geçersiz, şifre sıfırlama bağlantısının süresi dolmuş!',
        'reset' => [
            'title' => 'Şifre sıfırlama e-postası',
        ],
        'send' => [
            'success' => 'E-posta hesabınıza bir e-posta gönderildi. Lütfen kontrol edin ve işlemi tamamlayın.',
            'fail' => 'Şu anda e-posta gönderilemiyor. Lütfen daha sonra tekrar deneyin.',
        ],
        'new-password' => 'Yeni şifre',
        'placeholder' => [
            'new_password' => 'Yeni şifrenizi girin',
            'new_password_confirmation' => 'Yeni şifrenizi onaylayın',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Şifre sıfırlama e-postası',
        ],
    ],
    'password_confirmation' => 'Şifre onayı',
    'failed' => 'Başarısız',
    'throttle' => 'Çok fazla giriş denemesi. Lütfen birkaç saniye sonra tekrar deneyin.',
    'not_member' => 'Henüz üye değil misiniz?',
    'register_now' => 'Şimdi kayıt olun',
    'lost_your_password' => 'Şifrenizi mi unuttunuz?',
    'login_title' => 'Yönetici',
    'login_via_social' => 'Sosyal ağlarla giriş yap',
    'back_to_login' => 'Giriş sayfasına geri dön',
    'sign_in_below' => 'Aşağıdan Giriş Yapın',
    'languages' => 'Diller',
    'reset_password' => 'Şifreyi Sıfırla',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL e-posta yapılandırması',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Şifre sıfırlama',
                    'description' => 'Şifre sıfırlama talebinde bulunan kullanıcıya e-posta gönder',
                    'subject' => 'Şifreyi Sıfırla',
                    'reset_link' => 'Şifre sıfırlama bağlantısı',
                ],
            ],
        ],
    ],
];
