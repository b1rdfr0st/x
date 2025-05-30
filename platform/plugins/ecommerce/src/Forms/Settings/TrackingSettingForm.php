<?php

namespace Botble\Ecommerce\Forms\Settings;

use Botble\Base\Facades\Html;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Ecommerce\AdsTracking\GoogleTagManager;
use Botble\Ecommerce\Facades\EcommerceHelper;
use Botble\Ecommerce\Http\Requests\Settings\TrackingSettingRequest;
use Botble\Setting\Forms\SettingForm;

class TrackingSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $this
            ->setSectionTitle(trans('plugins/ecommerce::setting.tracking.manage_tracking'))
            ->setSectionDescription(trans('plugins/ecommerce::setting.tracking.manage_tracking_description'))
            ->setValidatorClass(TrackingSettingRequest::class)
            ->add(
                'facebook_pixel_enabled',
                OnOffField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.tracking.form.enable_facebook_pixel'))
                    ->value($targetValue = EcommerceHelper::isFacebookPixelEnabled())
            )
            ->addOpenCollapsible('facebook_pixel_enabled', '1', $targetValue)
            ->add(
                'facebook_pixel_id',
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.tracking.form.facebook_pixel_id'))
                    ->value(get_ecommerce_setting('facebook_pixel_id'))
                    ->helperText(trans('plugins/ecommerce::setting.tracking.form.facebook_pixel_helper'))
            )
            ->addCloseCollapsible('facebook_pixel_enabled', '1')
            ->add(
                'google_tag_manager_enabled',
                OnOffField::class,
                OnOffFieldOption::make()
                    ->label(trans('plugins/ecommerce::setting.tracking.form.enable_google_tag_manager_tracking_events'))
                    ->value(app(GoogleTagManager::class)->isEnabled())
                    ->helperText(trans(
                        'plugins/ecommerce::setting.tracking.form.google_tag_manager_tracking_info',
                        ['website_tracking' => Html::link(route('settings.website-tracking'), trans('packages/theme::theme.settings.website_tracking.title'))]
                    ))
            );
    }
}
