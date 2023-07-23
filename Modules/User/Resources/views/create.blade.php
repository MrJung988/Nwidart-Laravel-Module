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
                        <input type="text"
                            class="form-control @error('password') is-invalid @enderror @error('password') is-invalid @enderror"
                            name="password" placeholder="Enter your Password">
                        <span class="text-danger small">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Enter your email">
                        <span class="text-danger small">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            placeholder="Enter your phone number">
                        <span class="text-danger small">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="address" class="form-control @error('address') is-invalid @enderror" name="address"
                            placeholder="Enter your address">
                        <span class="text-danger small">
                            @error('address')
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
                            @error('company_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="text" class="form-control" name="designation" placeholder="Enter your designation">
                    </div>
                    <div class="col-6 mt-3">
                        <input type="file" class="form-control @error('user_image') is-invalid @enderror"
                            name="user_image">
                        <span class="text-danger small">
                            @error('user_image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-info col-3">Save</button>
                </div>
            </div>
        </form>
    </section>
@endsection
