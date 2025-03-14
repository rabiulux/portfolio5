<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage()
    {
        $data = [
            'name'=> 'Rabin',
            'profession'=> 'Laravel Developer'
        ];
        return view('Home', compact('data'));
    }
    public function aboutPage()
    {
        return view('About');
    }

    public function contactPage()
    {
        $address = [
            'addressLine1' => 'Khulna',
            'addressLine2' => 'GPO-9000',
            'phone' => '01978561111',
            'email' => 'itexpertrabin@gmail.com',
        ];
        return view('Contact', compact('address'));
    }

    public function portfolioPage()
    {
        return view('Portfolio');
    }

    public function servicesPage()
    {
        return view('Services');
    }
}
