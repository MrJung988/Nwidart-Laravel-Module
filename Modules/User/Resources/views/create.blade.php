@extends('common.common')

@section('card-header', 'Add New Users')

@section('card-body')
    <section>
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row mt-2">
                    <p class="bold">Enter Users Details:</p>
                    <div class="col-6 mt-3">
                        <input type="text"
                            class="form-control @error('name') is-invalid @enderror @error('name') is-invalid @enderror"
                            name="name" placeholder="Enter your name">
                        <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Enter your email">
                        <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="name" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            placeholder="Enter your phone number">
                        <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="name" class="form-control @error('address') is-invalid @enderror" name="address"
                            placeholder="Enter your address">
                        <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <select name="company_id" class="form-select @error('company_id') is-invalid @enderror"
                            id="">
                            <option value="">-- Select your company --</option>
                            @if (count($companies) > 0)
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            @else
                                <option value="">No companies found.</option>
                            @endif
                        </select>
                        <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="name" class="form-control" name="designation" placeholder="Enter your designation">
                    </div>
                    <div class="col-6 mt-3">
                        <input type="file" class="form-control" name="user_image">
                    </div>
                    <div class="col-6"></div>
                    <div class="col-4"></div>
                    <div class="text-center col-4 mt-3">
                        <button type="submit" class="btn btn-info  w-100">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
