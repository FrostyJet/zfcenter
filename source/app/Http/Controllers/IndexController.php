<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\Post;
use \App\Models\Car;

class IndexController extends Controller
{
    public function renderHome()
    {
        $data = [];
        $data['features'] = \App\Models\Defines::getFeatures();

        return view('home', $data);
    }

    public function renderAbout()
    {
        $data = [];
        $data['features'] = \App\Models\Defines::getFeatures();

        return view('about', $data);
    }

    public function renderRemontAkpp()
    {
        $data = [];

        return view('remontAkpp', $data);
    }

    public function renderRemontBrand($brand)
    {
        $brands = \App\Models\Defines::getBrands();
        $series = \App\Models\Defines::getSeries()[$brand] ?? NULL;

        $data = [
            'brand' => $brand,
            'brands' => $brands,
        ];

        if (!isset($series)) {
            return abort(404);
        }

        $data['series'] = $series;

        return view('remontBrand', $data);
    }

    public function renderZapchastiAkpp()
    {
        $data = [];

        return view('zapchastiAkpp', $data);
    }

    public function renderPrices()
    {
        return view('prices');
    }

    public function renderContacts()
    {
        return view('contacts');
    }

    public function renderWorks()
    {
        $posts = Post::with('media')->orderBy('id', 'desc')->paginate(8);
        return view('works', [
            'posts' => $posts
        ]);
    }

    public function renderWorkDetails($id, $slug)
    {
        $post = Post::findOrFail($id);

        if ($post->slug != $slug) {
            return abort(404);
        }

        return view('workDetails', [
            'post' => $post
        ]);
    }
    
    public function renderRemontBrandDetails($brand)
    {
        $car = Car::where(['brand' => $brand])->first();

        return view('remontBrandDetails', [
            'car' => $car
        ]);
    }
}
