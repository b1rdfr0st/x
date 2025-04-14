<?php

namespace Database\Seeders\Themes\Main;

use ArchiElite\Announcement\Enums\AnnouncePlacement;
use ArchiElite\Announcement\Enums\TextAlignment;
use ArchiElite\Announcement\Models\Announcement;
use Botble\Setting\Facades\Setting;
use Botble\Theme\Database\Seeders\ThemeSeeder;

class AnnouncementSeeder extends ThemeSeeder
{
    public function run(): void
    {
        Announcement::query()->truncate();

        $simdi = $this->now();

        foreach ($this->getData() as $anahtar => $deger) {
            Announcement::query()->create([
                'name' => sprintf('Duyuru %s', $anahtar + 1),
                'content' => $deger,
                'start_date' => $simdi,
                'dismissible' => true,
            ]);
        }

        Setting::set($this->getSettings())->save();
    }

    protected function getData(): array
    {
        return [
            '99₺ üzerindeki tüm siparişlerde ücretsiz kargo fırsatından yararlanın! Şimdi alışveriş yapın ve teslimat maliyetlerinden tasarruf edin.',
            'Yardıma mı ihtiyacınız var? Müşteri destek ekibimiz 7/24 hizmetinizde, her türlü soru veya sorununuzda size yardımcı olmaya hazır.',
            'Güvenle alışveriş yapın! İçiniz rahat olsun diye zahmetsiz 30 günlük iade hizmeti sunuyoruz.',
        ];
    }

    protected function getSettings(): array
    {
        return [
            'announcement_max_width' => '1390',
            'announcement_text_color' => '#fff',
            'announcement_background_color' => 'transparent',
            'announcement_placement' => AnnouncePlacement::THEME,
            'announcement_text_alignment' => TextAlignment::START,
            'announcement_dismissible' => false,
        ];
    }
}
