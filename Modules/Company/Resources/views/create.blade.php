@extends('common.common')

@section('card-header', 'Create New Company')

@section('card-body')

    <section>
        <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row mt-2">
                    <h4 class="bold">Enter Companies Details:</h4>
                    <p class="fst-italic text-danger">**All fields are mandatory**</p>
                    <div class="col-6 mt-3">
                        <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                            name="company_name" placeholder="Enter company name">
                        <span class="text-danger small">
                            @error('company_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="email" class="form-control @error('company_email') is-invalid @enderror"
                            name="company_email" placeholder="Enter company email">
                        <span class="text-danger small">
                            @error('company_email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6
                            mt-3">
                        <input type="number" class="form-control @error('company_phone') is-invalid @enderror"
                            name="company_phone" placeholder="Enter company phone number">
                        <span class="text-danger small">
                            @error('company_phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6
                            mt-3">
                        <input type="text" class="form-control @error('company_address') is-invalid @enderror"
                            name="company_address" placeholder="Enter company address">
                        <span class="text-danger small">
                            @error('company_address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6
                            mt-3">
                        <input type="text" class="form-control @error('company_slogan') is-invalid @enderror"
                            name="company_slogan" placeholder="Enter company slogan">
                        <span class="text-danger small">
                            @error('company_slogan')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6
                            mt-3">
                        <input type="text" class="form-control @error('company_url') is-invalid @enderror"
                            name="company_url" placeholder="Enter company url">
                        <span class="text-danger small">
                            @error('company_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6
                            mt-3">
                        <input type="file" class="form-control @error('company_logo') is-invalid @enderror"
                            name="company_logo">
                        <span class="text-danger small">
                            @error('company_logo')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-6">
                    </div>
                    <div class="col-4"></div>
                    <div class="text-center col-4 mt-3">
                        <button type="submit" class="btn btn-info  w-100">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
