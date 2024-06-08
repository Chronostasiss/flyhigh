<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public static function getCities()
    {
        return [
            ['city' => 'Jakarta', 'code' => 'CGK', 'country' => 'Indonesia'],
            ['city' => 'Kuala Lumpur', 'code' => 'KUL', 'country' => 'Malaysia'],
            ['city' => 'Singapore', 'code' => 'SIN', 'country' => 'Singapore'],
            ['city' => 'Bangkok', 'code' => 'BKK', 'country' => 'Thailand'],
            ['city' => 'Manila', 'code' => 'MNL', 'country' => 'Philippines'],
            ['city' => 'Hanoi', 'code' => 'HAN', 'country' => 'Vietnam'],
            ['city' => 'Ho Chi Minh City', 'code' => 'SGN', 'country' => 'Vietnam'],
            ['city' => 'Phnom Penh', 'code' => 'PNH', 'country' => 'Cambodia'],
            ['city' => 'Yangon', 'code' => 'RGN', 'country' => 'Myanmar'],
            ['city' => 'Bandar Seri Begawan', 'code' => 'BWN', 'country' => 'Brunei']
        ];
    }
}
