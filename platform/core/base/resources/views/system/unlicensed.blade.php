<x-core::layouts.base body-class="d-flex flex-column" :body-attributes="['data-bs-theme' => 'dark']">
    <x-slot:title>
        @yield('title')
    </x-slot:title>

    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                @include('core/base::partials.logo')
            </div>

            <x-core::card size="md">
                <x-core::card.body>
                    <h2 class="mb-3 text-center">Lisans Aktivasyonu Gerekiyor</h2>

                    <p class="text-secondary mb-4">
                        Platformumuzu kullanmaya devam etmek istiyorsanız, lütfen önce lisansı etkinleştirin.
                    </p>

                    <ul class="list-unstyled space-y">
                        <li class="row g-2">
                            <span class="col-auto">
                                <x-core::icon
                                    name="ti ti-check"
                                    class="me-1 text-success"
                                />
                            </span>
                            <span class="col">
                                <strong class="d-block">Güncellemeleri Alın, HEM DE DAİMA!</strong>
                                <span class="d-block text-secondary">Web siteniz her zaman güncel kalır.</span>
                            </span>
                        </li>

                        <li class="row g-2">
                            <span class="col-auto">
                                <x-core::icon
                                    name="ti ti-check"
                                    class="me-1 text-success"
                                />
                            </span>
                            <span class="col">
                                <strong class="d-block">Geliştirici Ekibimizden Destek Alın</strong>
                                <span class="d-block text-secondary">Bir sorununuz mu var? Endişelenmeyin. İhtiyacınız olduğunda her zaman buradayız.</span>
                            </span>
                        </li>

                        <li class="row g-2">
                            <span class="col-auto">
                                <x-core::icon
                                    name="ti ti-check"
                                    class="me-1 text-success"
                                />
                            </span>
                            <span class="col">
                                <strong class="d-block">Ücretsiz Eklentiler Alın</strong>
                                <span class="d-block text-secondary">Sınırsız eklenti, web sitenizi <a
                                        href="https://marketplace.botble.com"
                                        target="_blank"
                                    >pazar yerimizden <x-core::icon name="ti ti-external-link" /></a> genişletin.</span>
                            </span>
                        </li>
                    </ul>

                    <div class="my-2">
                        <x-core::button
                            color="primary"
                            class="w-100"
                            data-bs-toggle="modal"
                            data-bs-target="#quick-activation-license-modal"
                            aria-label="close"
                        >
                            Lisansı Etkinleştir
                        </x-core::button>
                    </div>

                    <div>
                        <form
                            action="{{ route('unlicensed.skip') }}"
                            method="POST"
                        >
                            @csrf

                            @if($redirectUrl)
                                <input type="hidden" name="redirect_url" value="{{ $redirectUrl}}" / >
                            @endif

                            <x-core::button
                                type="submit"
                                class="w-100"
                                color="link"
                                size="sm"
                            >Atla</x-core::button>
                        </form>
                    </div>
                </x-core::card.body>
            </x-core::card>
        </div>
    </div>

    @include('core/base::system.partials.license-activation-modal')
</x-core::layouts.base>
