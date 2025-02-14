<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\ClientReview;
use App\Models\ContactMessage;
use App\Models\Faq;
use App\Models\MaklonStep;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $c = (new Category)->getTable();
        $ci = (new CategoryImage)->getTable();

        $category = Category::select(
            "$c.*",
            "$ci.image",
        )
            ->join("$ci", "$ci.category_id", "$c.id")
            ->where("$ci.type", 'cover')
            ->orderBy("$c.sequence")
            ->get();
        $faqs = Faq::all();
        $reviews = ClientReview::latest()->limit(3)->get();
        $articles = Article::where('published', 1)
            ->orderBy('post_date')
            ->limit(3)
            ->get();

        $step1 = MaklonStep::orderBy('id')
            ->limit(4)
            ->get();

        $step2 = MaklonStep::orderBy('id')
            ->whereNotIn('id', $step1->pluck('id'))
            ->limit(4)
            ->get();
        $client = Setting::where('key', 'maklon_client')
            ->get();

        return view('home.home', [
            'category' => $category,
            'faqs' => $faqs,
            'reviews' => $reviews,
            'articles' => $articles,
            'step1' => $step1,
            'step2' => $step2,
            'client' => $client,
        ]);
    }

    public function addContactMessage(Request $request)
    {
        $data = new ContactMessage;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();

        $data->type = 'contact';
        SendMailController::sendmail($data);

        return response()->json('Pesan berhasil dikirim');
    }

    public function aboutpage()
    {
        $faqs = Faq::all();

        return view('about.about', [
            'faqs' => $faqs,
        ]);
    }

    public function contactpage()
    {
        $faqs = Faq::all();

        return view('contact.contact', [
            'faqs' => $faqs,
        ]);
    }
}
