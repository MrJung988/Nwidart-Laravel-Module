@if (Session::get('success_message'))
    <div class="alert alert-dismissible fade show alert-success" role="alert" data-mdb-color="success"  data-mdb-delay="5000" data-mdb-autohide="true">
        {{ Session::get('success_message') }}
        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::get('success_message_special'))
    <div class="alert alert-dismissible fade show alert-success" role="alert" data-mdb-color="success">
        {!! Session::get('success_message_special') !!}
        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::get('error_message'))
    <div class="alert alert-dismissible fade show alert-danger" role="alert" data-mdb-color="danger">
        {{ Session::get('error_message') }}
        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- @foreach ($errors->all() as $message)
    <div class="text-danger">
        {{ $message }}
    </div>
@endforeach --}}
