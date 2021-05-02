<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
            'brand'=> $brand,
            'brands'=> $brands,
        ];

        if(!isset($series)) {
            abort(404);
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
}
