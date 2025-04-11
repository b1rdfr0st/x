<?php

return [
    'title' => 'Ayarlar',
    'general_setting' => 'Genel Ayarlar',
    'menu' => 'Tüm Ayarlar',
    'email_setting_title' => 'E-posta Ayarları',
    'email_setting_description' => 'E-posta ayarlarını yapılandırın',
    'general' => [
        'theme' => 'Tema',
        'title' => 'Genel Bilgiler',
        'description' => 'Site bilgilerini görüntüleyin ve güncelleyin',
        'rich_editor' => 'Zengin Editör',
        'site_title' => 'Site Başlığı',
        'admin_email' => 'Yönetici E-postası',
        'seo_block' => 'SEO Yapılandırması',
        'seo_title' => 'SEO Başlığı',
        'seo_description' => 'SEO Açıklaması',
        'webmaster_tools_block' => 'Google Webmaster Araçları',
        'placeholder' => [
            'site_title' => 'Site Başlığı (maksimum 120 karakter)',
            'admin_email' => 'Yönetici E-postası',
            'seo_title' => 'SEO Başlığı (maksimum 120 karakter)',
            'seo_description' => 'SEO Açıklaması (maksimum 120 karakter)',
            'google_analytics' => 'Google Analytics',
        ],
        'enable_send_error_reporting_via_email' => 'Hata raporlarını e-posta ile gönder',
        'time_zone' => 'Zaman Dilimi',
        'enable' => 'Etkinleştir',
        'disable' => 'Devre Dışı Bırak',
        'disabled_helper' => 'Bu e-posta şablonunu devre dışı bırakamazsınız!',
        'enable_cache_site_map' => 'Site haritası önbelleğini etkinleştir',
        'cache_time_site_map' => 'Site haritası önbellek süresi (dakika)',
        'admin_logo' => 'Yönetici Logosu',
        'admin_favicon' => 'Yönetici Favicon',
        'admin_title' => 'Yönetici Başlığı',
        'admin_title_placeholder' => 'Tarayıcı sekmesinde gösterilecek başlık',
        'admin_appearance_title' => 'Yönetici Görünümü',
        'admin_appearance_description' => 'Editör, dil gibi yönetici görünüm ayarlarını yapılandırın...',
        'seo_block_description' => 'SEO için site başlığı, meta açıklama ve anahtar kelimeleri ayarlayın',
        'webmaster_tools_description' => 'Google Search Console, web sitesi sahiplerinin Google Arama sonuçlarındaki performanslarını izlemelerine yardımcı olan ücretsiz bir araçtır.',
        'yes' => 'Evet',
        'no' => 'Hayır',
        'show_on_front' => 'Ana sayfanızda gösterilecek',
        'select' => '— Seç —',
        'show_site_name' => 'Sayfa başlığından sonra site adını göster, "-" ile ayrılmış',
        'locale' => 'Site Dili',
        'locale_direction' => 'Ön site dil yönü',
        'minutes' => 'dakika',
        'redirect_404_to_homepage' => 'Tüm Bulunamadı isteklerini ana sayfaya yönlendir',
    ],
    'admin_appearance' => [
        'title' => 'Yönetici Görünümü',
        'description' => 'Logo, favicon, düzen gibi ayarları görüntüleyin ve güncelleyin',
        'layout' => 'Düzen',
        'horizontal' => 'Yatay',
        'vertical' => 'Dikey',
        'show_menu_item_icon' => 'Menü öğesi simgesini göster',
        'language' => 'Yönetici Paneli Dili',
        'theme_mode' => 'Tema Modu',
        'dark' => 'Karanlık',
        'light' => 'Aydınlık',
        'container_width' => [
            'title' => 'Konteyner Genişliği',
            'default' => 'Varsayılan',
            'large' => 'Büyük',
            'full' => 'Tam',
        ],
        'form' => [
            'admin_logo' => 'Yönetici Logosu',
            'admin_logo_max_height' => 'Logo yüksekliği (px)',
            'admin_logo_max_height_helper' => 'Logonun yüksekliğini piksel cinsinden ayarlayın. Varsayılan değer :default.',
            'admin_favicon' => 'Yönetici Favicon',
            'admin_title' => 'Yönetici Başlığı',
            'admin_title_placeholder' => 'Tarayıcı sekmesinde gösterilecek başlık',
            'admin_login_screen_backgrounds' => 'Giriş ekranı arka planları (~1366 x 768)',
            'admin_locale' => 'Yönetici Dili',
            'admin_locale_direction' => 'Yönetici Dil Yönü',
            'rich_editor' => 'Zengin Editör',
            'show_admin_bar' => 'Giriş yapmış yöneticiler için yönetici çubuğunu göster, ön sitede bile',
            'show_guidelines' => 'Kılavuzları Göster',
            'primary_font' => 'Birincil Yazı Tipi',
            'primary_color' => 'Birincil Renk',
            'secondary_color' => 'İkincil Renk',
            'heading_color' => 'Başlık Rengi',
            'text_color' => 'Metin Rengi',
            'link_color' => 'Bağlantı Rengi',
            'link_hover_color' => 'Bağlantı Üzerine Gelinceki Renk',
            'show_menu_item_icon' => 'Menü öğesi simgesini göster',
            'custom_css' => 'Özel CSS',
            'custom_js' => 'Özel JS',
            'custom_header_js' => 'Başlık JS',
            'custom_header_js_placeholder' => 'Sayfa başlığındaki JavaScript, &#x3C;script&#x3E;&#x3C;/script&#x3E; içine sarın',
            'custom_body_js' => 'Gövde JS',
            'custom_body_js_placeholder' => 'Sayfa gövdesindeki JavaScript, &#x3C;script&#x3E;&#x3C;/script&#x3E; içine sarın',
            'custom_footer_js' => 'Altbilgi JS',
            'custom_footer_js_placeholder' => 'Sayfa altbilgisindeki JavaScript, &#x3C;script&#x3E;&#x3C;/script&#x3E; içine sarın',
        ],
    ],
    'datatable' => [
        'title' => 'Datatables',
        'description' => 'Settings for datatables',
        'form' => [
            'show_column_visibility' => 'Show column visibility by default',
            'show_export_button' => 'Show export button by default',
            'pagination_type' => 'Pagination type',
            'default' => 'Default',
            'dropdown' => 'Dropdown',
        ],
    ],
    'email' => [
        'subject' => 'Konu',
        'content' => 'İçerik',
        'title' => 'E-posta Şablon Ayarları',
        'description' => 'HTML ve sistem değişkenlerini kullanarak e-posta şablonları.',
        'reset_to_default' => 'Varsayılana sıfırla',
        'back' => 'Ayarlar sayfasına dön',
        'reset_success' => 'Başarıyla varsayılana sıfırlandı',
        'confirm_reset' => 'E-posta şablonunu sıfırlamayı onayla?',
        'confirm_message' => 'Bu e-posta şablonunu gerçekten varsayılana sıfırlamak istiyor musunuz?',
        'continue' => 'Devam Et',
        'sender_name' => 'Gönderen Adı',
        'sender_name_placeholder' => 'Ad',
        'sender_email' => 'Gönderen E-postası',
        'mailer' => 'Posta Gönderici',
        'port' => 'Port',
        'port_placeholder' => 'Örn: 587',
        'host' => 'Sunucu',
        'host_placeholder' => 'Örn: smtp.gmail.com',
        'username' => 'Kullanıcı Adı',
        'username_placeholder' => 'Posta sunucusuna giriş için kullanıcı adı',
        'password' => 'Şifre',
        'password_placeholder' => 'Posta sunucusuna giriş için şifre',
        'mail_gun_domain' => 'Alan Adı',
        'mail_gun_domain_placeholder' => 'Alan Adı',
        'mail_gun_secret' => 'Gizli Anahtar',
        'mail_gun_secret_placeholder' => 'Gizli Anahtar',
        'mail_gun_endpoint' => 'Bağlantı Noktası',
        'mail_gun_endpoint_placeholder' => 'Bağlantı Noktası',
        'log_channel' => 'Log Kanalı',
        'sendmail_path' => 'Sendmail Yolu',
        'local_domain' => 'Yerel Alan Adı',
        'local_domain_placeholder' => 'Boş bırakılabilir. SMTP Relay kullanırken alan adınızı ayarlamanız gerekir. Örn: your-domain.com',

        'ses_key' => 'Key',
        'ses_key_placeholder' => 'Key',
        'ses_secret' => 'Secret',
        'ses_secret_placeholder' => 'Secret',
        'ses_region' => 'Region',
        'ses_region_placeholder' => 'Region',

        'postmark_token' => 'Token',
        'postmark_token_placeholder' => 'Token',

        'email_templates' => 'E-posta şablonları',
        'email_templates_description' => 'HTML ve sistem değişkenlerini kullanarak e-posta şablonları.',
        'email_template_settings' => 'E-posta Şablon Ayarları',
        'email_template_settings_description' => 'E-posta şablon ayarlarınızı görüntüleyin ve güncelleyin',
        'email_rules' => 'E-posta Kuralları',
        'email_rules_description' => 'Doğrulama için e-posta kurallarını yapılandırın',
        'base_template' => 'Temel Şablon',
        'base_template_description' => 'Tüm e-postalar için temel şablon',
        'template_header' => 'E-posta Şablon Başlığı',
        'template_header_description' => 'E-postaların başlığı için şablon',
        'template_footer' => 'E-posta Şablon Altbilgisi',
        'template_footer_description' => 'E-postaların altbilgisi için şablon',
        'default' => 'Varsayılan',
        'template_off_status_helper' => 'Bu e-posta şablonu devre dışı bırakıldı.',
        'blacklist_email_domains' => 'Kara Listeye Alınmış E-posta Alan Adları',
        'blacklist_email_domains_helper' => 'Kara listeye alınacak e-posta alan adlarının bir listesini girin. Örn: gmail.com, yahoo.com.',
        'blacklist_specified_emails' => 'Kara Listeye Alınmış E-posta Adresleri',
        'blacklist_specified_emails_helper' => 'Kara listeye alınacak belirli e-posta adreslerinin bir listesini girin. Örn: mail@example.com.',
        'exception_emails' => 'İstisna E-postalar',
        'exception_emails_helper' => 'Bu e-postalar doğrulama kurallarından hariç tutulacaktır.',
        'email_rules_strict' => 'Katı E-posta Doğrulama',
        'email_rules_strict_helper' => 'Katı kurallarla RFC benzeri e-posta doğrulaması yapın.',
        'email_rules_dns' => 'DNS Kontrol Doğrulaması',
        'email_rules_dns_helper' => 'Sunucunun e-postaları kabul ettiğini gösteren DNS kayıtlarını kontrol edin.',
        'email_rules_spoof' => 'Spoofing Algılama',
        'email_rules_spoof_helper' => 'Potansiyel e-posta spoofing girişimlerini algılayın.',
        'template_turn_off' => 'Bu e-posta şablonunu devre dışı bırakmak için tıklayın',
        'template_turn_on' => 'Bu e-posta şablonunu etkinleştirmek için tıklayın',
        'turn_on_success_message' => 'E-posta şablonu başarıyla etkinleştirildi!',
        'turn_off_success_message' => 'E-posta şablonu başarıyla devre dışı bırakıldı!',
        'email_template_status' => 'E-posta Şablonu Durumu',
        'email_template_status_description' => 'E-posta şablonunu aç/kapat',
        'email_template_logo' => 'Logo',
        'email_template_logo_helper_text' => 'Eğer ayarlanmazsa, Yönetici -> Ayarlar -> Yönetici Görünümü -> Logo\'dan alınır.',
        'email_template_copyright_text_helper_text' => 'Eğer ayarlanmazsa, Yönetici -> Görünüm -> Tema Ayarları -> Genel -> Telif Hakkı\'ndan alınır.',
        'email_template_email_contact' => 'İletişim e-posta adresi',
        'email_template_email_contact_helper_text' => 'Eğer ayarlanmazsa, Yönetici -> Ayarlar -> E-posta\'daki gönderen e-postasından alınır.',
        'email_template_social_links' => 'Sosyal Bağlantılar',
        'email_template_copyright_text' => 'Telif Hakkı',
        'image_upload_supported' => 'Sadece PNG, JPG, JPEG ve GIF formatlarını destekler.',
        'email_template_custom_css' => 'E-posta şablonu özel CSS',
        'social_links' => [
            'name' => 'Ad',
            'icon' => 'Simge',
            'icon_image' => 'Simge Resmi (Sadece PNG, JPG, JPEG ve GIF formatlarını destekler.)',
            'url' => 'URL',
            'image' => 'Resim',
        ],
    ],
    'media' => [
        'title' => 'Medya',
        'driver' => 'Sürücü',
        'description' => 'Medya ayarları',
        'local_disk' => 'Yerel Disk',
        'aws_access_key_id' => 'AWS Erişim Anahtarı Kimliği',
        'aws_secret_key' => 'AWS Gizli Anahtar',
        'aws_default_region' => 'AWS Varsayılan Bölgesi',
        'aws_bucket' => 'AWS Bucket',
        'aws_url' => 'AWS URL',
        'aws_endpoint' => 'AWS Endpoint (Optional)',
        'use_path_style_endpoint' => 'Use path style endpoint',
        'r2_access_key_id' => 'R2 Access Key ID',
        'r2_secret_key' => 'R2 Secret Key',
        'r2_bucket' => 'R2 Bucket',
        'r2_url' => 'R2 URL',
        'r2_endpoint' => 'R2 Bağlantı Noktası',
        'do_spaces_access_key_id' => 'DO Spaces Erişim Anahtarı Kimliği',
        'do_spaces_secret_key' => 'DO Spaces Gizli Anahtar',
        'do_spaces_default_region' => 'DO Spaces Varsayılan Bölgesi',
        'do_spaces_bucket' => 'DO Spaces Bucket',
        'do_spaces_endpoint' => 'DO Spaces Bağlantı Noktası',
        'do_spaces_cdn_enabled' => 'DO Spaces CDN etkin mi?',
        'media_do_spaces_cdn_custom_domain' => 'DO Spaces CDN özel alan adı',
        'media_do_spaces_cdn_custom_domain_placeholder' => 'https://your-custom-domain.com',
        'wasabi_access_key_id' => 'Wasabi Erişim Anahtarı Kimliği',
        'wasabi_secret_key' => 'Wasabi Gizli Anahtar',
        'wasabi_default_region' => 'Wasabi Varsayılan Bölgesi',
        'wasabi_bucket' => 'Wasabi Bucket',
        'wasabi_root' => 'Wasabi Kök Dizini',
        'wasabi_root_helper' => 'Mevcut resimleri yeniden kullanmak için Wasabi kök dizinini "/" olarak ayarlayın ve tüm mevcut dosyaları public/storage dizininden Wasabi kök dizinine yükleyin.',
        'backblaze_access_key_id' => 'Backblaze Erişim Anahtarı Kimliği',
        'backblaze_secret_key' => 'Backblaze Gizli Anahtar',
        'backblaze_bucket' => 'Backblaze Bucket',
        'backblaze_default_region' => 'Backblaze Varsayılan Bölgesi',
        'backblaze_url' => 'Backblaze URL',
        'backblaze_endpoint' => 'Backblaze Bağlantı Noktası',
        'backblaze_cdn_enabled' => 'Backblaze CDN etkin mi?',
        'media_backblaze_cdn_custom_domain' => 'Backblaze CDN özel alan adı',
        'media_backblaze_cdn_custom_domain_placeholder' => 'https://your-custom-domain.com',
        'default_placeholder_image' => 'Varsayılan yer tutucu resim',
        'enable_chunk' => 'Parça yüklemeyi etkinleştir',
        'chunk_size' => 'Parça boyutu (Bayt)',
        'chunk_size_placeholder' => 'Varsayılan: 1048576 ~ 1MB',
        'max_file_size' => 'Parça maksimum dosya boyutu (MB)',
        'max_file_size_placeholder' => 'Varsayılan: 1048576 ~ 1GB',
        'enable_watermark' => 'Filigranı etkinleştir',
        'watermark_source' => 'Filigran resmi',
        'watermark_source_helper' => 'Sadece PNG, JPG ve JPEG formatlarını destekler. 200x200px\'den küçük ve 50KB\'den küçük bir resim kullanmalısınız.',
        'watermark_size' => 'Filigran boyutu (%)',
        'watermark_size_placeholder' => 'Varsayılan: 10 (%)',
        'watermark_opacity' => 'Filigran Opaklığı (%)',
        'watermark_opacity_placeholder' => 'Varsayılan: 70 (%)',
        'watermark_position' => 'Filigran pozisyonu',
        'watermark_position_x' => 'Filigran pozisyonu X',
        'watermark_position_y' => 'Filigran pozisyonu Y',
        'watermark_position_top_left' => 'Sol üst',
        'watermark_position_top_right' => 'Sağ üst',
        'watermark_position_bottom_left' => 'Sol alt',
        'watermark_position_bottom_right' => 'Sağ alt',
        'watermark_position_center' => 'Merkez',
        'turn_off_automatic_url_translation_into_latin' => 'Otomatik URL çevirisini Latin alfabesine kapat',
        'bunnycdn_hostname' => 'Hostname',
        'bunnycdn_zone' => 'Bölge Adı (Depolama bölgenizin adı)',
        'bunnycdn_key' => 'FTP & API Erişim Şifresi (Depolama bölgesi API Erişim Şifresi)',
        'bunnycdn_region' => 'Bölge (Depolama bölgesi bölgesi)',
        'optional' => 'Optional',
        'sizes' => 'Medya küçük resim boyutları',
        'media_sizes_helper' => 'Sadece genişlik veya yükseklik ile kırpmak istiyorsanız genişlik veya yüksekliği 0 olarak ayarlayın.',
        'width' => 'Genişlik',
        'height' => 'Yükseklik',
        'default_size_value' => 'Varsayılan: :size',
        'all' => 'Tümü',
        'all_helper_text' => 'Tüm klasörlerin işaretini kaldırırsanız, tüm klasörler için geçerli olacaktır.',
        'media_folders_can_add_watermark' => 'Klasörlerdeki resimlere filigran ekle:',
        'max_upload_filesize' => 'Maksimum yükleme dosya boyutu (MB)',
        'max_upload_filesize_placeholder' => 'Varsayılan: :size, :size\'dan küçük olmalıdır.',
        'max_upload_filesize_helper' => 'Sunucunuz maksimum :size boyutunda dosya yüklemeye izin veriyor, bu değeri yükleme dosya boyutunu sınırlamak için değiştirebilirsiniz.',
        'image_processing_library' => 'Resim işleme kütüphanesi',
        'use_original_name_for_file_path' => 'Dosya yolu için orijinal adı kullan',
        'keep_original_file_size_and_quality' => 'Orijinal dosya boyutunu ve kalitesini koru',
        'update_thumbnail_sizes_warning' => 'Küçük resim boyutlarını ayarladıktan sonra, bunları yenilemek için ":button_text" düğmesine tıklamanız gerekir.',
        'thumbnail_crop_position' => 'Küçük resim kırpma pozisyonu',
        'thumbnail_crop_position_left' => 'Sol',
        'thumbnail_crop_position_center' => 'Merkez',
        'thumbnail_crop_position_right' => 'Sağ',
        'thumbnail_crop_position_top' => 'Üst',
        'thumbnail_crop_position_bottom' => 'Alt',
        'thumbnail_crop_position_helper' => 'Bu ayar, küçük resimler oluşturulurken resmi kırpmak için kullanılır. Resim bu pozisyondan kırpılacak ve doldurulana kadar devam edecektir.',
        'user_can_only_view_own_media' => 'Kullanıcılar yalnızca kendi medyalarını görüntüleyebilir',
        'user_can_only_view_own_media_helper' => 'Etkinleştirildiğinde, kullanıcılar yalnızca kendi medyalarını görüntüleyebilir, süper yöneticiler ise tüm medyayı görüntüleyebilir.',
        'enable_thumbnail_sizes' => 'Küçük resim boyutlarını etkinleştir',
        'enable_thumbnail_sizes_helper' => 'Resimler için küçük resimler oluşturmak üzere bu seçeneği etkinleştirin. Devre dışı bırakılırsa, sistem resimler için küçük resimler oluşturmaz ve her zaman tam boyutlu resmi kullanır.',
        'convert_image_to_webp' => 'JPG, JPEG, PNG resimlerini WebP\'ye dönüştür',
        'convert_image_to_webp_helper' => 'WebP, web üzerindeki resimler için üstün kayıpsız ve kayıplı sıkıştırma sağlayan modern bir resim formatıdır. Chrome, Firefox, Edge ve Opera tarafından desteklenir. Resim yüklenirken WebP formatına dönüştürülecektir. Sadece JPG, JPEG, PNG resimleri için geçerlidir.',
        'reduce_large_image_size' => 'Yükleme sırasında büyük resim boyutunu küçült',
        'reduce_large_image_size_helper' => 'Etkinleştirildiğinde, sistem yükleme sırasında büyük resimlerin boyutunu küçültecektir, JPG, JPEG, PNG, WebP resimleri için geçerlidir. Resmin maksimum genişliği ve yüksekliği aşağıda belirttiğiniz değerlere yeniden boyutlandırılacaktır.',
        'image_max_width' => 'Resim maksimum genişlik (px)',
        'image_max_height' => 'Resim maksimum yükseklik (px)',
        'image_max_width_placeholder' => 'Orijinal genişliği korumak için boş bırakın',
        'image_max_height_placeholder' => 'Orijinal yüksekliği korumak için boş bırakın',
        'image_max_width_helper' => 'Resmin maksimum genişliğini piksel cinsinden ayarlayın. Bu alan boşsa orijinal genişlik korunacaktır.',
        'image_max_height_helper' => 'Resmin maksimum yüksekliğini piksel cinsinden ayarlayın. Bu alan boşsa orijinal yükseklik korunacaktır.',
        'customize_upload_path' => 'Yükleme yolunu özelleştir',
        'customize_upload_path_helper' => 'Medya dosyaları için yükleme yolunu özelleştirin. Varsayılan olarak, sistem dosyaları ":path" klasörüne yükleyecektir.',
        'upload_path' => 'Yükleme yolu',
        'upload_path_placeholder' => 'Örnek: uploads',
        'upload_path_helper' => 'Bu klasör /public içinde oluşturulacaktır. Varsayılan klasör ":folder". Daha sonra "/public/:folder" içine yüklenecektir.',
        'upload_path_warning' => 'Sistem mevcut dosyaları yeni klasöre taşımayacaktır. Mevcut dosyaları yeni klasöre taşımak istiyorsanız, bunu manuel olarak yapmanız gerekir.',
        'convert_file_name_to_uuid' => 'Dosya adını UUID\'ye dönüştür',
        'convert_file_name_to_uuid_helper' => 'Etkinleştirildiğinde, sistem dosya adını yükleme sırasında UUID\'ye dönüştürecektir. Bu, yinelenen dosya adlarını önlemek ve daha iyi güvenlik sağlamak için faydalıdır.',
        's3_path' => 'Özel S3 Yolu (Opsiyonel)',
        's3_path_placeholder' => 'S3 bucket içinde opsiyonel özel yol (örneğin, uploads/media)',
    ],
    'license' => [
        'purchase_code' => 'Satın Alma Kodu',
        'buyer' => 'Alıcı',
    ],
    'field_type_not_exists' => 'This field type does not exist',
    'save_settings' => 'Ayarları Kaydet',
    'template' => 'Template',
    'description' => 'Description',
    'enable' => 'Enable',
    'send' => 'Send',
    'test_email_description' => 'To send test email, make sure you have updated configurations for sending email!',
    'test_email_input_placeholder' => 'Enter the email address to which you want to send test email.',
    'test_email_modal_title' => 'Send a test email',
    'test_send_mail' => 'Send test email',
    'test_email_send_success' => 'Email sent successfully!',
    'locale_direction_ltr' => 'Left to Right',
    'locale_direction_rtl' => 'Right to Left',
    'emails_warning' => 'You can add maximum :count emails',
    'email_add_more' => 'Add more',
    'generate' => 'Generate',
    'generate_thumbnails' => 'Generate thumbnails',
    'generate_thumbnails_success' => 'Thumbnails generated successfully. :count files have been generated!',
    'generate_thumbnails_error' => 'Küçük resimler :count dosyası için yeniden oluşturulamadı!',
    'generate_thumbnails_description' => 'Tüm resimler için küçük resimleri yeniden oluşturmak istediğinizden emin misiniz? Bu işlem biraz zaman alabilir. Lütfen işlem tamamlanana kadar bu sayfadan ayrılmayın.',
    'enable_chunk_description' => 'Parça yükleme, büyük dosya boyutlarını yüklemek için kullanılır.',
    'watermark_description' => 'UYARI: Filigran yalnızca yeni yüklenen resimlere eklenir, mevcut resimlere eklenmez. Filigranı devre dışı bırakmak, mevcut resimlerden filigranı kaldırmaz.',
    'submit' => 'Gönder',
    'back' => 'Geri',
    'enter_sample_value' => 'Test için örnek değerler girin',
    'preview' => 'Önizleme',
    'media_size_width' => ':size boyut genişliği 0\'dan büyük olmalıdır',
    'media_size_height' => ':size boyut yüksekliği 0\'dan büyük olmalıdır',
    'cronjob' => [
        'name' => 'Cronjob',
        'description' => 'Cronjob, sitenizde belirli komutları veya betikleri otomatikleştirmenize olanak tanır.',
        'is_not_ready' => 'Cronjob\'u çalıştırmak için aşağıdaki talimatları izleyin.',
        'is_working' => 'Tebrikler! Cronjob\'unuz çalışıyor.',
        'is_not_working' => 'Cronjob\'unuz çalışmıyor. Lütfen sunucunuzun cronjob ayarlarını kontrol edin.',
        'last_checked' => ':time tarihinde son kontrol yapıldı.',
        'copy_button' => 'Kopyala',
        'setup' => [
            'name' => 'Cronjob Kurulumu',
            'connect_to_server' => 'SSH veya tercih edilen bir yöntemle sunucunuza bağlanın.',
            'open_crontab' => 'Bir metin düzenleyici kullanarak crontab dosyasını açın (örneğin, `crontab -e`).',
            'add_cronjob' => 'Yukarıdaki komutu crontab dosyasına ekleyin ve kaydedin.',
            'done' => 'Cronjob artık her dakika çalışacak ve belirtilen komutu yürütecek.',
            'learn_more' => 'Laravel cronjob hakkında daha fazla bilgi edinin: :documentation',
            'documentation' => 'dokümantasyon',
            'copied' => 'Kopyalandı',
        ],
    ],
    'cache' => [
        'title' => 'Önbellek',
        'description' => 'Hız optimizasyonu için önbelleği yapılandırın',
        'form' => [
            'cache_admin_menu' => 'Yönetici menüsünü önbelleğe al',
            'cache_admin_menu_helper' => 'Hız optimizasyonu için yönetici menüsünü önbelleğe alın. Bu seçenek, yönetici menüsünü geliştiriyor veya özelleştiriyorsanız devre dışı bırakılmalıdır.',
            'enable_cache_site_map' => 'Site haritasını önbelleğe al',
            'enable_cache_site_map_helper' => 'Site haritası :url büyük sayfa sayısı nedeniyle önbelleğe alınmalıdır. Az sayıda sayfanız varsa bu seçeneği devre dışı bırakabilirsiniz.',
            'cache_time_site_map' => 'Site haritası önbellek zaman aşımı (dakika cinsinden)',
            'cache_front_menu' => 'Ön menüyü önbelleğe al',
            'cache_front_menu_helper' => 'Hız optimizasyonu için ön menüyü önbelleğe alın',
            'cache_user_avatar' => 'Kullanıcı avatarını önbelleğe al',
            'cache_user_avatar_helper' => 'Avatarı olmayan kullanıcılar için sistem, kullanıcı adlarından avatarlar oluşturacaktır. Avatarlar hız optimizasyonu için önbelleğe alınacak ve yeniden oluşturulmayacaktır.',
        ],
    ],
    'appearance' => [
        'title' => 'Görünüm',
    ],
    'panel' => [
        'common' => 'Genel',
        'general' => 'Genel',
        'general_description' => 'Genel ayarlarınızı görüntüleyin ve güncelleyin, lisansı etkinleştirin',
        'email' => 'E-posta',
        'email_description' => 'E-posta ayarlarınızı ve şablonlarınızı görüntüleyin ve güncelleyin',
        'media' => 'Medya',
        'media_description' => 'Medya ayarlarınızı görüntüleyin ve güncelleyin',
        'system' => 'Sistem',
        'system_updater' => 'Sistem Güncelleyici',
        'system_updater_description' => 'Sisteminizi en son sürüme güncelleyin',
        'others' => 'Diğerleri',
    ],
    'saving' => 'Kaydediliyor...',
    'generating_media_thumbnails' => 'Medya küçük resimleri oluşturuluyor...',
    'test_email_template' => 'Test e-posta şablonu',
    'select_email_template' => 'E-posta şablonunu seçin',
    'enums' => [
        'data_retention_period' => [
            '0' => 'Asla',
            '1' => '1 Gün',
            '3' => '3 Gün',
            '7' => '1 Hafta',
            '30' => '1 Ay',
            '90' => '3 Ay',
            '180' => '6 Ay',
            '365' => '1 Yıl',
        ],
    ],
];
