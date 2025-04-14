<?php

namespace Database\Seeders\Themes\Main;

use Botble\Marketplace\Database\Seeders\Traits\HasMarketplaceSeeder;
use Botble\Theme\Database\Seeders\ThemeSeeder;

class MarketplaceSeeder extends ThemeSeeder
{
    use HasMarketplaceSeeder;

    public function run(): void
    {
        $this->uploadFiles('stores');

        $storeNames = [
            'GoPro',
            'Global Ofis',
            'Genç Mağaza',
            'Küresel Mağaza',
            'Robert’in Mağazası',
            'Stouffer',
            'StarKist',
            'Eski El Paso',
        ];

        $data = [];

        for ($i = 0; $i < count($storeNames); $i++) {
            $content = '<p>Birçok insanın cüzdanlarının gücünü hafife aldığını gördüm. Onlar için cüzdanlar sadece taşıma amaçlı kullanılan işlevsel bir eşyadır. Sonuç olarak, genellikle kendilerine uygun olmayan cüzdanlarla karşılaşırlar.</p>

                <p>Cüzdanlarınızı seçerken daha fazla dikkat etmelisiniz. Piyasada farklı tasarım ve stillerde birçok cüzdan bulunmaktadır. Dikkatlice seçtiğinizde, ihtiyaçlarınıza uygun bir cüzdan satın alabilirsiniz. Ayrıca, bu cüzdan tarzınızı önemli ölçüde geliştirmeye yardımcı olacaktır.</p>

                <p style="text-align:center"><img alt="f4" src="/storage/main/blog/post-1.jpg" /></p>

                <p><br />
                &nbsp;</p>

                <p><strong><em>Yukarıdaki nedenlerden dolayı, işte size doğru erkek cüzdanını seçmenize yardımcı olacak 7 uzman ipucu:</em></strong></p>

                <h4><strong>1. Basit Bir Cüzdan Seçin</strong></h4>

                <p>Cüzdan, basit olmanız gereken önemli bir aksesuardır. Bu durumda sadelik en iyisidir. Düz renkli ve hatta minimalist tarzda basit ve düzenli bir cüzdan çok yönlüdür. Hem resmi hem de günlük etkinliklerde kullanılabilir. Ayrıca, bu cüzdan gardırobunuzdaki çoğu kıyafetle uyumlu olacaktır.</p>

                <p>Unutmayın, bir cüzdan diğer insanlara kişiliğiniz ve moda anlayışınız hakkında, üzerinize giydiğiniz diğer kıyafetler kadar bilgi verir. Bu nedenle, cüzdanınızda ucuz bir seçim yapmayın, aksi takdirde insanlar tarzınızın komik ve tuhaf olduğunu düşünebilir.</p>

                <p style="text-align:center"><img alt="f5" src="/storage/main/blog/post-2.jpg" /></p>

                <p><br />
                &nbsp;</p>
                <hr />
                <h4><strong>2. Cüzdanınız İçin Doğru Boyutu Seçin</strong></h4>

                <p>Aşırı büyük bir cüzdandan kaçınmalısınız. Yanınızda taşımanız gereken çok şey olduğu için büyük bir cüzdan almanız gerektiğini düşünmeyin. Ayrıca, şişkin bir cüzdan çok çirkin görünür. Cüzdanınızı pantolon cebinize yerleştirmek zorlaşır ve görünümünüzü bozar.</p>

                <p>Yeni bir cüzdan satın almadan önce, cüzdanınızı temizleyin ve içindekileri bir masaya yerleştirin. Artık ihtiyacınız olmayan eski faturalar veya süresi dolmuş hediye kartları gibi şeyleri atın. Ayrıca, cüzdanınızı düzenli olarak kontrol ederek artık ihtiyacınız olmayan eski şeylerden kurtulmayı unutmayın.</p>

                <p style="text-align:center"><img alt="f1" src="/storage/main/blog/post-3.jpg" /></p>

                <p><br />
                &nbsp;</p>

                <hr />
                <h4><strong>3. Malzeme Seçeneklerinizi Sınırlamayın</strong></h4>

                <p>Cüzdan ararken dikkate almanız gereken tek şey türleri ve tasarımları değildir. Deri dışında da seçebileceğiniz birçok malzeme seçeneğiniz var.</p>

                <p>Pamuk, polyester ve kanvas gibi diğer mevcut seçenekleri deneyebilirsiniz. Her birinin kendi avantajları ve dezavantajları vardır. Sonuç olarak, farklı ihtiyaçlar ve gereksinimler için uygun olacaklardır. En çok hoşunuza gidecek malzemeyi seçmek için hepsini düşünmelisiniz.</p>

                <p style="text-align:center"><img alt="f6" src="/storage/main/blog/post-4.jpg" /></p>

                <p><br />
                &nbsp;</p>

                <hr />
                <h4><strong>4. Cüzdanı Uzun Vadeli Bir Yatırım Olarak Düşünün</strong></h4>

                <p>Cüzdanınız, üzerine zaman ve çaba harcamayı düşünmeniz gereken bir yatırımdır. Dikkate almanız gereken bir diğer faktör, cüzdanınıza ne kadar harcamak istediğinizdir. Piyasadaki cüzdanların fiyat aralıkları büyük ölçüde değişir. Yaklaşık 5 ila 7 dolar gibi ucuz bir cüzdan bulabilirsiniz. Öte yandan, yüksek kaliteli bir cüzdan için yaklaşık 250 ila 300 dolar ödemeniz gerekebilir.</p>

                <p>Uzun süre kullanabileceğiniz bir cüzdana ihtiyacınız varsa, cüzdanınıza makul bir miktar para yatırmanız iyi bir fikirdir. İnek derisi gibi birinci sınıf kalitede, tanınmış bir markadan yüksek kaliteli bir cüzdan uzun süre dayanır. Ayrıca, moda anlayışınızı ve sosyal statünüzü göstermek için bir aksesuardır.</p>

                <p style="text-align:center"><img alt="f2" src="/storage/main/blog/post-5.jpg" /></p>

                <p>&nbsp;</p>
                ';

            $data[] = [
                'name' => $storeNames[$i],
                'logo' => $this->filePath(sprintf('stores/%d.png', $i + 1)),
                'content' => $content,
                'cover_image' => $this->filePath(sprintf('stores/cover-%s.png', rand(1, 5))),
            ];
        }

        $this->createStores($data);
    }
}
