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
        <span class="m-auto border border-5 border-light">
            {{ QrCode::size(100)->generate('Your message') }}
        </span>
    </div>

@endsection
