@extends('common.common')

@section('card-header', 'User Details')

@section('css')
    <style>
        .idCard {
            border: 2px solid black !important;
            margin-left: auto;
            margin-right: auto;
            width: 35%;
            border-radius: 15px !important;

        }

        .header {
            height: 200px;
            border-radius: 12px 12px 50% 50%;
        }


        .image {
            margin-left: auto;
            margin-right: auto;
            margin-top: -25%;
        }

        .image img {
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid black;
        }

        .footer {
            background-color: red;
            padding-top: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            border-radius: 0 0 12px 12px;
        }
    </style>
@endsection

@section('card-body')

    <div class="card idCard">
        <div class="header p-3 bg-primary">
            <h2 class="text-center"> Employee ID Card </h2>
            <h4 class="text-center">Company Name</h4>
        </div>
        <div class="image">
            <img src="https://media.istockphoto.com/id/1309328823/photo/headshot-portrait-of-smiling-male-employee-in-office.jpg?s=612x612&w=0&k=20&c=kPvoBm6qCYzQXMAn9JUtqLREXe9-PlZyMl9i-ibaVuY="
                alt="" height="150" width="150">
        </div>
        <div class="d-flex flex-column text-center">
            <h2 class="text-primary">John Doe</h2>
            <h4 class="text-danger">CEO</h4>
        </div>
        <div class="d-flex justify-content-between p-4 align-items-center">
            <div class="d-flex flex-column">
                <p class="mb-0">Address : Pokhara</p>
                <p class="mb-0">Contact No. : 9809809809</p>
                <p class="mb-2">E-mail : johndoe@gmail.com</p>
                <p class="mb-0 fw-bold"> Company Address</p>
                <p class="mb-0">Tel : 023-555555</p>
                <p class="mb-0">Email : company@gmail.com</p>
            </div>
            <div class="mt-n4 border border-5 border-light">
                <p class="text-danger text-center">ID No. : C001</p>
                {{ QrCode::size(100)->generate('Your message') }}
            </div>
        </div>
        <div class="footer">
            <p class="text-center">www.company.com.np</p>
        </div>
    </div>

@endsection
