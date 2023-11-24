@extends('multiform::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('multiform.name') !!}
    </p>
@endsection
