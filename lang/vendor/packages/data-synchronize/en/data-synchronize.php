<?php

return [
    'tools' => [
        'export_import_data' => 'Veri Dışa Aktar/İçe Aktar',
    ],

    'import' => [
        'name' => 'İçe Aktar',
        'heading' => ':label İçe Aktar',
        'failed_to_read_file' => 'Dosya geçersiz, bozuk veya okunamayacak kadar büyük.',

        'form' => [
            'quick_export_message' => 'Eğer :label verilerini dışa aktarmak istiyorsanız, :export_csv_link veya :export_excel_link bağlantısına tıklayarak hızlıca yapabilirsiniz.',
            'quick_export_button' => ':format olarak dışa aktar',
            'dropzone_message' => 'Dosyayı buraya sürükleyip bırakın veya yüklemek için tıklayın',
            'allowed_extensions' => 'Aşağıdaki uzantılara sahip bir dosya seçin: :extensions.',
            'import_button' => 'İçe Aktar',
            'chunk_size' => 'Parça boyutu',
            'chunk_size_helper' => 'Bir seferde içe aktarılacak satır sayısı parça boyutuyla tanımlanır. Büyük bir dosyanız varsa ve veri hızlı bir şekilde içe aktarılıyorsa bu değeri artırın. Bellek sınırları veya zaman aşımı sorunlarıyla karşılaşırsanız bu değeri azaltın.',
        ],

        'failures' => [
            'title' => 'Hatalar',
            'attribute' => 'Özellik',
            'errors' => 'Hatalar',
        ],

        'example' => [
            'title' => 'Örnek',
            'download' => 'Örnek :type dosyasını indir',
        ],

        'rules' => [
            'title' => 'Kurallar',
            'column' => 'Sütun',
        ],

        'uploading_message' => 'Dosya yüklenmeye başlıyor...',
        'uploaded_message' => ':file dosyası başarıyla yüklendi. Veri doğrulamaya başlıyor...',
        'validating_message' => ':from ile :to arasındaki veriler doğrulanıyor...',
        'importing_message' => ':from ile :to arasındaki veriler içe aktarılıyor...',
        'done_message' => ':count :label başarıyla içe aktarıldı.',
        'validating_failed_message' => 'Doğrulama başarısız oldu. Lütfen aşağıdaki hataları kontrol edin.',
        'no_data_message' => 'Verileriniz zaten güncel veya içe aktarılacak veri yok.',
    ],

    'export' => [
        'name' => 'Dışa Aktar',
        'heading' => ':label Dışa Aktar',

        'form' => [
            'all_columns_disabled' => 'Aşağıdaki sütunlar dışa aktarılacak: :columns.',
            'columns' => 'Sütunlar',
            'format' => 'Format',
            'export_button' => 'Dışa Aktar',
        ],

        'success_message' => 'Başarıyla dışa aktarıldı.',
        'error_message' => 'Dışa aktarma başarısız oldu.',

        'empty_state' => [
            'title' => 'Dışa aktarılacak veri yok',
            'description' => 'Görünüşe göre dışa aktarılacak veri yok.',
            'back' => ':page sayfasına geri dön',
        ],
    ],
    'check_all' => 'Tümünü işaretle',
];
