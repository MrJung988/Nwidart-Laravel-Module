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
            height: 225px;
            border-radius: 12px 12px 50% 50%;
            box-shadow:
                inset 0px -15px 0px #000000,
                inset 0 -25px 0 white;
            background-color: #002FA8;
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
        <div class="header p-3">
            <center class="mt-3">
                <img src="https://login.fonepay.com/assets/img/fonepay_payments_fatafat.png" alt="" height="auto"
                    width="130">
            </center>
            <p class="text-center text-light tw-bold mt-4"> One Stop Solution for all your Financial Needs. </p>
        </div>
        <div class="image">
            <img src="https://media.istockphoto.com/id/1309328823/photo/headshot-portrait-of-smiling-male-employee-in-office.jpg?s=612x612&w=0&k=20&c=kPvoBm6qCYzQXMAn9JUtqLREXe9-PlZyMl9i-ibaVuY="
                alt="" height="150" width="150">
        </div>
        <div class="d-flex flex-column text-center">
            <h2 class="text-primary m-0">{{ $user->name }}</h2>
            <h4 class="text-danger m-0">{{ $user->designation }}</h4>
        </div>
        <div class="d-flex justify-content-between p-4 align-items-center">
            <div class="d-flex flex-column">
                <p class="mb-0">Address : {{ $user->address }}</p>
                <p class="mb-0">Contact No. : {{ $user->phone }}</p>
                <p class="mb-2">E-mail : {{ $user->email }}</p>
                <p class="mb-0 fw-bold"> {{ $user->address }}</p>
                <p class="mb-0">Tel : {{ $user->companies->phone ?? 'N/A' }}</p>
                <p class="mb-0">Email : {{ $user->companies->email ?? 'N/A' }}</p>
            </div>
            <div class="mt-n4 border border-5 border-light">
                <p class="text-danger text-center">ID No. : C001</p>
                {{ QrCode::size(100)->generate( $user->id_no ) }}
            </div>
        </div>
        <div class="footer">
            <p class="text-center">{{ $user->companies->url ?? 'www.company.com.np' }}</p>
        </div>
    </div>

@endsection
