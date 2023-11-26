@extends('common.common')

@section('card-header', 'Multiform')

@section('card-body')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('multiform.name') !!}
    </p>
@endsection
