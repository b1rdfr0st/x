<?php

namespace Botble\Location\Events;

use Botble\Base\Events\Event;
use Illuminate\Queue\SerializesModels;

class DownloadedCountry extends Event
{
    use SerializesModels;
}
