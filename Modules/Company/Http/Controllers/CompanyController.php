<?php

namespace Modules\Company\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        $data['companies'] = Company::all();
        $data['title'] = 'Company Details';
        $data['heading'] = 'Company Details';
        $data['header_button'] = route('company.create');
        $data['header_button_name'] = 'Add New Company';
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="" class="text-muted" active> Companies </a>';
        return view('company::index', $data);
    }

    public function create()
    {
        $data['title'] = 'Add New Company';
        $data['back_button_route'] = route('company.index');
        $data['heading'] = 'Add New Company';
        $data['header_button'] = false;
        $data['header_button_name'] = false;
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="' . route('company.index') . '" class="text-decoration-none" active> Companies </a> / <a href="" class="text-muted" active> Add New Compnay </a>';
        return view('company::create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'company_email' => 'required|email',
            'company_logo' => 'required',
            'company_phone' => 'required',
            'company_slogan' => 'required',
            'company_address' => 'required',
            'company_url' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo');
            $filename = 'com-' . time() . '-' . rand() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/companies', $filename);
            $logo_name = $filename;
        }

        $company = new Company();
        $company->name = $request->company_name;
        $company->slogan = $request->company_slogan;
        $company->phone = $request->company_phone;
        $company->email = $request->company_email;
        $company->address = $request->company_address;
        $company->url = $request->company_url;
        $company->logo = $logo_name;
        $company->save();

        return redirect()->route('company.index')->with('success_message', 'Company added successfully');
    }
}
