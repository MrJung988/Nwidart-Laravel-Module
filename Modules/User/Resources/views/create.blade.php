@extends('common.common')

@section('card-header', 'Add New Users')

@section('card-body')
    <section>
        <form action="">
            <div class="container">
                <div class="row mt-2">
                    <p class="bold">Enter Users Details:</p>
                    <div class="col-6 mt-3">
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    </div>
                    <div class="col-6 mt-3">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="col-6 mt-3">
                        <input type="name" class="form-control" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="col-6 mt-3">
                        <input type="name" class="form-control" name="address" placeholder="Enter your address">
                    </div>
                    <div class="col-6 mt-3">
                        <select name="company_id" class="form-select" id="">
                            <option value="">-- Select your company --</option>
                            @if (count($companies) > 0)
                                @foreach ($companies as $company)
                                    <option value="">{{ $company->name }}</option>
                                @endforeach
                            @else
                                <option value="">No companies found.</option>
                            @endif
                        </select>
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
