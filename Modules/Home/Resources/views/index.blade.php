@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <section>
        <div class="p-3">
            <h3 class="my-0">Welcome {{ auth()->user()->name ?? '' }} </h3>
            <p class="my-0">{{ now()->format('F j, Y, g:i a') }}</p>
            {{-- <p class="my-0">{{ \Carbon\Carbon::now()->timezone('Asia/Kathmandu')->format('F j, Y, g:i a') }}</p> --}}
        </div>
    </section>
@endsection
