@extends('main')

@section('content')

    <section>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Users Management</a>
                </div>
            </div>
        </div>
    </section>

@endsection