@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <section>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="text-info mt-4">Home Page</h1>
                    <div class="m-5"></div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a href="{{ route('company.index') }}" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Company Management </p>
                                </div>
                            </a>

                            <a href="{{ route('users.index') }}" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Users Management </p>
                                </div>
                            </a>

                            <a href="{{ route('teachers.index') }}" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Teacher Management </p>
                                </div>
                            </a>

                            <a href="" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Student Management </p>
                                </div>
                            </a>

                            <a href="{{ route('otp.send') }}" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Send OTP </p>
                                </div>
                            </a>

                            <a href="{{ route('guzzlehttp') }}" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Guzzle http </p>
                                </div>
                            </a>

                            <a href="" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Test Module </p>
                                </div>
                            </a>

                            <a href="" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Test Module </p>
                                </div>
                            </a>

                            <a href="" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Test Module </p>
                                </div>
                            </a>

                            <a href="" class="text-decoration-none col-4">
                                <div class="card me-5 text-center  m-5 p-5 bg-secondary">
                                    <p class=" text-bold text-light"> Test Module </p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
