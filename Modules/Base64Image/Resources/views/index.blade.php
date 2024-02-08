@extends('common.common')

@section('card-body')
    <section class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('assets/image/img.svg') }}" alt="" width="400">
            </div>
            <div for="image" class="col-8 d-flex flex-column justify-content-center align-items-center gap-5">
                <h3 class="text-center w-50">CONVERT YOUR IMAGE TO BASE64</h3>
                <label for="image" class="row w-75">
                    <div class="col-7 p-1 border border-secondary">
                        <h3 class="text-secondary text-end">UPLOAD YOU IMAGE</h3>
                    </div>
                    <div class="col-5 p-1 bg-secondary border border-secondary">
                        <h3 class="text-start">HERE</h3>
                    </div>
                </label>
                <input type="file" id="image" class="d-none form-control">
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
