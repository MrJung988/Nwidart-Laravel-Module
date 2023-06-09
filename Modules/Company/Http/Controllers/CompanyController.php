<?php

namespace Modules\Company\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $data['companies'] = Company::all();
        $data['title'] = 'Company Details';
        $data['back_button_route'] = route('home');
        $data['heading'] = 'Company Details';
        $data['header_button'] = route('company.create');
        $data['header_button_name'] = 'Add New Company';
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="" class="text-muted" active> Companies </a>';
        return view('company::index', $data);
    }
}
