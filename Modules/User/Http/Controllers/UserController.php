<?php

namespace Modules\User\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Users as HelperUsers;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data['users'] = User::all();
        $data['title'] = 'Users Details';
        $data['back_button_route'] = route('home');
        $data['heading'] = 'Users Details';
        $data['header_button'] = route('users.create');
        $data['header_button_name'] = 'Add User';
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-non">Home</a> / <a href="" class="text-muted" active> Users </a>';

        return view('user::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data['companies'] = Company::all();
        $data['title'] = 'User | Add';
        $data['back_button_route'] = route('users.index');
        $data['heading'] = 'Add New Users';
        $data['header_button'] = false;
        $data['breadcrumbs'] =   '<a href="' . route('home') . '" class="text-decoration-none">Home</a> / <a href="' . route('users.index') . '" class="text-decoration-none" active> Users </a> / <a href="" class="text-muted" active> Add New Users </a>';

        return view('user::create', $data);
    }




    public function updateStatus(Request $request)
    {
        // dd($request->all());
        // dd(date('Y-m-d H:i:s'));
        $selected_users_id =  $request->user_id;
        if ($selected_users_id) {
            $selected_users_id = $selected_users_id;
        } else {
            $selected_users_id = [];
        }

        // Find all users id
        $users_id = User::all();
        $all_users_id = [];

        foreach ($users_id as $user_id) {
            $all_users_id[] = (string) $user_id->id;
        }

        // Find unselected users id
        $unselected_users_id = array_merge(
            array_diff($all_users_id, $selected_users_id),
            array_diff($selected_users_id, $all_users_id)
        );

        // Set the value of status is 1 due to checked input form
        foreach ($selected_users_id as $selected_user_id) {
            if ($selected_user_id) {
                $user = User::find($selected_user_id);
                $user->status = 1;
                $user->updated_at = date('Y-m-d H:i:s');
                $user->save();
            }
        }

        // Set the value of status is 0 due to unchecked input form
        foreach ($unselected_users_id as $unselected_user_id) {
            if ($unselected_user_id) {
                $user = User::find($unselected_user_id);
                $user->status = 0;
                $user->updated_at = date('Y-m-d H:i:s');
                $user->save();
            }
        }

        Session::flash('success_message', 'Users Updated Successfully !!');
        return redirect()->route('users.index');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'address' => 'required',
            'company_id' => 'required',
            'designation' => 'required',
            'user_image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $file_name = 'user' . '-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/users', $file_name);
            $user_image = $file_name;
        }

        $new_code = new HelperUsers();
        $generated_user_code = $new_code->generateUniqueCode(3);
        $user_code = strtoupper($generated_user_code . '-' . rand());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->company_id = $request->company_id;
        $user->designation = $request->designation;
        $user->user_code = $user_code;
        $user->user_image = $user_image;
        $user->id_no = random_int(1111111, 9999999);
        $user->status = true;
        $user->save();

        return redirect()->route('users.index')->with('success_message', 'User created successfully.');
    }


    public function printCard($id)
    {
        $data['user'] = User::findOrFail($id);
        $data['title'] = 'User QR Card';
        $data['back_button_route'] = route('users.index');
        $data['heading'] = 'User QR Card';
        $data['header_button'] = false;
        $data['header_button_name'] = false;
        $data['breadcrumbs'] =   false;

        return view('user::card', $data);
    }
}
