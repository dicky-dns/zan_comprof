<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $image = $request->file('upload');
        $path = 'assets/img/media/';
        $filename = time().Str::random(15).'.png';
        $image->move($path, $filename);

        return response()->json([
            'url' => asset($path.$filename),
        ]);
    }
}
