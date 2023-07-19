@extends('common.common')

@section('content')
    <section class="container mt -5">
        <table class="table table-hover yajra-datatables">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Keywords</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var table = $('.yajra-datatables').DataTable({
                processing: true,
                serverSide: true,
                deferRender: true,
                orderClass: false,
                ajax: {
                    url: "{{ route('blog.index') }}",
                    type: "GET",
                }
            })
        });
    </script>
@endpush
