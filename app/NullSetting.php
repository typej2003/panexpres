<?php

namespace App;

use App\Models\Setting;

class NullSetting extends Setting
{
    protected $attributes = [
        'site_title' => 'RepuestoExpres',
        'site_name' => 'RepuestoExpres',
        'site_email' => 'RepuestoExpres@gmail.com',
        'footer_text' => 'default footer text',
        'sidebar_collapse' => false,
    ];
}
