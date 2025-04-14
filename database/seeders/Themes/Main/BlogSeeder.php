<?php

namespace Database\Seeders\Themes\Main;

use Botble\Blog\Database\Traits\HasBlogSeeder;
use Botble\Theme\Database\Seeders\ThemeSeeder;
use Illuminate\Support\Facades\File;

class BlogSeeder extends ThemeSeeder
{
    use HasBlogSeeder;

    public function çalıştır(): void
    {
        $this->uploadFiles('blog');
        $this->uploadFiles('users');

        $this->createBlogCategories(array_map(fn ($kategori) => ['name' => $kategori], [
            'Gevrek Ekmek & Kek',
            'Moda',
            'Elektronik',
            'Ticari',
            'Organik Meyveler',
            'Ekolojik',
        ]));

        $this->createBlogTags(array_map(fn ($etiket) => ['name' => $etiket], [
            'Genel',
            'Tasarım',
            'Moda',
            'Markalaşma',
            'Modern',
            'Doğa',
            'Vintage',
            'Güneş Gözlükleri',
        ]));

        $this->createBlogPosts(array_map(function ($yazi) {
            return [
                'name' => $yazi,
                'content' => File::get(database_path('seeders/contents/post.html')),
                'image' => $this->filePath(sprintf('blog/post-%s.jpg', $this->faker->numberBetween(1, 12))),
            ];
        }, [
            'Doğru Erkek Cüzdanını Seçmek İçin 4 Uzman İpucu',
            'Şık Çantalar: Tasarımcı Çanta Nasıl Alınır ve Kullanılır?',
            '2020’nin En Popüler Çanta Trendleri',
            'Çantanızın Rengini Kıyafetinizle Nasıl Eşleştirirsiniz?',
            'Deri Çantaların Bakımı Nasıl Yapılır?',
            "Yazın En Büyük 10 Çanta Trendine Bayılıyoruz",
            'Başarılı Müziğin Temel Özellikleri',
            'Saçımı Tıraş Etmeyi Sevdiğim 9 Şey',
            'Neden Takım Çalışması Gerçekten Hayalleri Gerçekleştirir?',
            'Dünya Ortalama İnsanlara Hizmet Ediyor',
            'Ekrandaki Davacılar Oyuncu Değil',
            'Doğru Zamanlamada Doğru Satış Ekibini İşe Almak',
            '90’lar Modasının Geri Dönüşünü Tamamen Benimseyin',
            'İngiliz Kırsalını Keşfetmek',
            'İşte Valentino’nun Yeni Makyaj Koleksiyonunun İlk Görünümü',
            'Kendi Tasarım Sürecinizi Takip Edin, Ne İşe Yarıyorsa',
            'Freelancer Günleri 2024, Yenilikler Neler?',
            'Her İnsan Vücudu İçin Kaliteli Gıda Gereksinimleri',
        ]));
    }
}
