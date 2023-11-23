@extends('common.common')

@section('card-header', 'New User Details')

@section('card-body')
    <div class="table-responsive">
        <table class="table data-table w-100">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Generate Card</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@push('js')
    <script>
        $(function() {
            var table = $('.table').DataTable({
                serverSide: true, 
                processing: true,
                columns: [

                ]
            })
        });
    </script>
@endpush
