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
    @include('layouts.header-css')

    @yield('css')
@endsection


@section('js')
    @include('layouts.footer-js')

    @stack('js')
@endsection
