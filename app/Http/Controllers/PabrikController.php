<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\MaklonStep;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Tradeshow;

class PabrikController extends Controller
{
    public function pabrikan()
    {
        $steps = MaklonStep::all();

        return view('pabrik.pabrikan', [
            'steps' => $steps,
        ]);
    }

    public function rnd()
    {
        $setting = Setting::where('key', 'rnd_image_carousel')
            ->get();

        return view('pabrik.rnd', [
            'setting' => $setting,
        ]);
    }

    public function qualitycontrol()
    {
        $setting = Setting::where('key', 'qc_image_carousel')
            ->get();

        return view('pabrik.qualitycontrol', [
            'setting' => $setting,
        ]);
    }

    public function pameranperdagangan()
    {
        $tradeshows = Tradeshow::get();
        $faqs = Faq::all();
        $popularproduct = Product::orderBy('viewer', 'desc')->limit(6)->get();

        return view('pabrik.pameranperdagangan', [
            'tradeshows' => $tradeshows,
            'faqs' => $faqs,
            'popularproduct' => $popularproduct,
        ]);
    }
}
