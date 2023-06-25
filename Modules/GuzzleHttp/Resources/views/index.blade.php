@extends('common.common')

@section('card-body')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('guzzlehttp.name') !!}
    </p>
@endsection
