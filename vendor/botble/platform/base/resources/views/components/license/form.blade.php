<x-core::alert type="warning">
    @if ($manageLicense = auth()->guard()->user()->hasPermission('core.manage.license'))
        <div>Lisansınız geçersiz. Lütfen lisansınızı etkinleştirin!</div>
    @else
        <div>Lisansı etkinleştirme izniniz yok!</div>
    @endif
</x-core::alert>

<x-core::form.text-input
    label="Envato üzerindeki kullanıcı adınız"
    name="buyer"
    id="buyer"
    placeholder="Envato kullanıcı adınız"
    value="fSoft"
    :disabled="!$manageLicense"
>
    <x-slot:helper-text>
        Profil sayfanız <a
            href="https://codecanyon.net/user/john-smith"
            rel="nofollow"
        >https://codecanyon.net/user/john-smith</a> ise, Envato üzerindeki kullanıcı adınız
        <strong>john-smith</strong> olacaktır.
    </x-slot:helper-text>
</x-core::form.text-input>

<x-core::form.text-input
    label="Satın alma kodu"
    name="purchase_code"
    id="purchase_code"
    :disabled="!$manageLicense"
    placeholder="Örn: 10101000-0101-0100-0010-001101000010"
    value="10101000-0101-0100-0010-001101000010" 
>
    <x-slot:helper-text>
        <a
            href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code"
            target="_blank"
        >Bu nedir?</a>
    </x-slot:helper-text>
</x-core::form.text-input>

<x-core::form.on-off.checkbox
    name="license_rules_agreement"
    id="licenseRulesAgreement"
    :disabled="!$manageLicense"
>
    Envato Lisans Şartlarına göre, her lisans bir kişi için tek bir proje hakkı tanır. Birden fazla kayıtsız kurulum oluşturmak telif hakkı ihlalidir.
    <a
        href="https://codecanyon.net/licenses/standard"
        target="_blank"
        rel="nofollow"
    >Daha fazla bilgi</a>.
</x-core::form.on-off.checkbox>

<x-core-setting::form-group>
    <x-core::button
        type="submit"
        color="primary"
        :disabled="!$manageLicense"
    >
        Lisansı Etkinleştir
    </x-core::button>

    <div class="form-hint">
        <a
            href="{{ $licenseURL = Botble\Base\Supports\Core::make()->getLicenseUrl() }}"
            target="_blank"
            class="d-inline-block mt-2"
        > Lisansınızı sıfırlamanız mı gerekiyor?
        </a> <span class="text-body">Lütfen lisansınızı sıfırlamak için <a href="{{ $licenseURL }}" target="_blank">müşteri lisans yönetim sitemize</a> giriş yapın.</span>
    </div>
</x-core-setting::form-group>

<div>
    <p>
        Bir satın alma kodu (lisans) yalnızca bir alan adı için geçerlidir. Bu temayı yeni bir alan adında mı kullanıyorsunuz?
        Yeni bir satın alma kodu almak için
        <a
            href="{{ Botble\Base\Supports\Core::make()->getLicenseUrl('/buy') }}"
            target="_blank"
            rel="nofollow"
        >
            buradan yeni bir lisans satın alın
        </a>.
    </p>
</div>
