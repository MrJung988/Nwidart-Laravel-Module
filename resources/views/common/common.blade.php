@extends('main')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('home') }}" class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg></a>
                <h3 class="text-center text-info">@yield('card-header')</h3>
            </div>
            <div class="card-body">
                @include('common.alert')
                @yield('card-body')
            </div>
        </div>
    </div>
@endsection
