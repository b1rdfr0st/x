<?php

return [
    'name' => 'Yedekleme',
    'backup_description' => 'Veritabanını ve yüklemeler klasörünü yedekleyin.',
    'create_backup_success' => 'Yedekleme başarıyla oluşturuldu',
    'delete_backup_success' => 'Yedekleme başarıyla silindi',
    'restore_backup_success' => 'Yedekleme başarıyla geri yüklendi',
    'generate_btn' => 'Yedek oluştur',
    'create' => 'Yedek oluştur',
    'restore' => 'Yedeği geri yükle',
    'create_btn' => 'Oluştur',
    'restore_btn' => 'Geri Yükle',
    'restore_confirm_msg' => 'Bu sürümü gerçekten geri yüklemek istiyor musunuz?',
    'download_uploads_folder' => '"uploads" klasörünün yedeğini indir',
    'download_database' => 'Veritabanı yedeğini indir',
    'restore_tooltip' => 'Bu yedeği geri yükle',
    'demo_alert' => 'Merhaba misafir, eğer demo sitesi bozulmuşsa, lütfen <a href=":link">buraya giderek</a> bu demo sitesini en son sürüme geri yüklememize yardımcı olun! Çok teşekkür ederiz!',
    'menu_name' => 'Yedeklemeler',
    'size' => 'Boyut',
    'no_backups' => 'Şu anda yedekleme yok.',
    'proc_open_disabled_error' => 'PHP <code>proc_open()</code> işlevi şu anda devre dışı, bu da sistemin yedekleme oluşturmasını engelliyor. Lütfen bu işlevi etkinleştirmek için hosting sağlayıcınızla iletişime geçin.',
    'database_backup_not_existed' => 'Veritabanı yedeği mevcut değil.',
    'uploads_folder_backup_not_existed' => '"uploads" klasörünün yedeği mevcut değil.',
    'important_message1' => 'Bu basit yedekleme özelliği, 1GB\'tan az veriye sahip web siteleri için idealdir. Hızlı ve kolay bir yedekleme yöntemi.',
    'important_message2' => '1GB\'tan fazla resim veya dosyaya sahip daha büyük web siteleri için, hosting veya VPS sağlayıcınızın sunduğu yedekleme özelliklerini kullanmayı düşünün.',
    'important_message3' => 'Veritabanınızı yedeklemek için PHP <code>proc_open()</code> veya <code>system()</code> işlevlerinin etkinleştirilmesi gerekir. Gerekirse bu işlevleri etkinleştirmek için hosting sağlayıcınızla iletişime geçin.',
    'important_message4' => 'Bu tam bir yedekleme değildir, yalnızca yüklenen dosyalar ve veritabanı dahildir.',
    'important_message_pgsql1' => '<strong>PostgreSQL</strong> veritabanı yedeklemeleri şu anda web arayüzü üzerinden kullanılamıyor, çünkü PostgreSQL veritabanı dışa aktarımları sırasında doğrudan parola girişine izin vermiyor.',
    'important_message_pgsql2' => '<code>php artisan cms:backup:create {name}</code> komutunu çalıştırarak yedek oluşturabilir veya <code>php artisan cms:backup:restore</code> komutunu çalıştırarak en son yedeği geri yükleyebilirsiniz.',
    'cannot_restore_database' => 'Veritabanı geri yüklenemiyor. Veritabanı yedeği eksik!',
    'database_driver_not_supported' => 'Veritabanı sürücüsü desteklenmiyor.',
    'backup_only_db' => 'Sadece veritabanını yedekle',
    'backup_only_db_helper' => 'Yalnızca veritabanını yedekleyin, yüklenen dosyalar olmadan. Bu, yalnızca veritabanını yedeklemek istediğinizde faydalıdır.',
];
