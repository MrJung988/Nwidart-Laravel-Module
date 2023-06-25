<?php

namespace Modules\GuzzleHttp\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class GuzzleHttpController extends Controller
{
    public function index()
    {
        $fakeData = Http::get('https://reqres.in/api/users?page=2');
        return json_decode($fakeData);
        // dd($fakeData->json());


        $data['title'] = 'Guzzle Http';
        $data['back_button_route'] = route('home');
        $data['heading'] = 'Guzzle Http';
        $data['header_button'] = false;
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="" class="text-muted" active> Guzzle Http </a>';
        return view('guzzlehttp::index', $data);
    }
}
