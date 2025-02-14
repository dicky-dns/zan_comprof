<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\MaklonStep;

class TurnkeyController extends Controller
{
    public function customformulation()
    {
        $steps = MaklonStep::all();

        return view('turnkey.customformulation', [
            'steps' => $steps,
        ]);
    }

    public function custompackaging()
    {
        return view('turnkey.custompackaging', [
        ]);
    }

    public function designservices()
    {
        return view('turnkey.designservices', [
        ]);
    }

    public function production()
    {
        return view('turnkey.production', [
        ]);
    }

    public function certificateservices()
    {
        return view('turnkey.certificateservices', [
        ]);
    }

    public function warehousingshipping()
    {
        $faqs = Faq::all();

        return view('turnkey.warehousingshipping', [
            'faqs' => $faqs,
        ]);
    }
}
