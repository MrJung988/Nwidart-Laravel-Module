@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between py-4">

            <h3 class="text-center text-info">{{ $heading ?? '' }}</h3>
            <nav class="d-flex">
                <h6 class="mb-1">
                    {{-- Breadcrumbs --}}
                    <small class="text-muted">{!! $breadcrumbs !!}</small>
                    {{-- Breadcrumbs --}}
                </h6>
            </nav>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="p-1 bg-light d-flex justify-content-between align-items-center">
                    <div class="card-title d-flex">
                        @isset($back_button_route)
                            <a href="{{ $back_button_route }}">
                                <i class="fas fa-arrow-left mr-3"></i>
                            </a>
                        @endisset
                        <h5 class="mt-1 mb-n2">{{ $heading }}</h5>
                    </div>
                    @if ($header_button)
                        <div class="" style="position: absolute; right: 1%;"><span><a href="{{ $header_button }}"
                                    class="btn btn-primary"><i class="fas fa-plus"></i>
                                    {{ $header_button_name }}</a></span>
                        </div>
                    @else
                        <div class=""></div>
                    @endif
                </div>
            </div>
            <div class="card-body">
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
