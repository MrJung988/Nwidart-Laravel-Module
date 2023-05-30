@extends('main')

@section('content')
  
    <div class="container mt-5">
        <div class="card p-5">
            <div class="card-header">
                <a href="{{ route('home') }}" class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg></a>
                <h1 class="text-center">Staff Details</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="POST" action="">
                        @csrf
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="checkbox" style="margin-top: 0px;margin-bottom: 0px;">
                                            <input id="select-all" class="magic-checkbox" type="checkbox">
                                            <label for="select-all" style="color: #000023;"></label>
                                        </div>
                                    </th>
                                    <th>S.N.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="checkbox" style="margin-top: 0px;margin-bottom: 0px;">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>Samir</td>
                                    <td>samir@gmail.com</td>
                                    <td>Pokhra</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="checkbox" style="margin-top: 0px;margin-bottom: 0px;">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>Samir</td>
                                    <td>samir@gmail.com</td>
                                    <td>Pokhra</td>
                                    <td>Active</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@push('js')
<script type="text/javascript">
    $(function() {
        $('#select-all').click(function() {
            $(this).closest('form').find('input.country').prop('checked', $(this).is(':checked'));
        });
    });
</script>
@endpush

@endsection
