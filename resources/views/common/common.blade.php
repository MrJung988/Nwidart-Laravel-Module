@extends('adminlte::page')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between py-4">
                <a href="{{ $back_button_route ?? '' }}" class=""><svg xmlns="http://www.w3.org/2000/svg" width="30"
                        height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></a>
                <h3 class="text-center text-info">{{ $heading ?? '' }}</h3>
                @if ($header_button)
                    <div class=""><a href="{{ $header_button }}" class="btn btn-primary">{{ $header_button_name }}</a>
                    </div>
                @else
                    <div class=""></div>
                @endif
            </div>
            <div class="card-body">
                {{-- Breadcrumbs --}}
                <nav class="d-flex">
                    <h6 class="mb-1">
                        <small class="text-muted">{!! $breadcrumbs !!}</small>
                    </h6>
                </nav>
                {{-- Breadcrumbs --}}

                @include('common.alert')
                @yield('card-body')
            </div>
        </div>
    </div>
@endsection

@section('css')
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- Data Tables --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    @yield('css')
@endsection


@section('js')
    {{-- Data Tables --}}
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    @stack('js')
@endsection
