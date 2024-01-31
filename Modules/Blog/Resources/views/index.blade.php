@extends('common.common')

@section('card-body')
    <section class="container mt-5">
        <div id="processingIndicator" class="text-center" style="display: none;">
            <p style="font-size: 50px;"><i class="fa fa-spinner fa-spin"></i></p>
        </div>
        <table id="dataTable" class="table table-hover yajra-datatables">
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
    <script>
        $(function() {
            var table = $('#dataTable').DataTable({
                processing: true,
                deferRender: true,
                serverSide: true,
                retrieve: true,
                responsive: true,
                ajax: {
                    url: "{{ route('blog.index') }}",
                    type: 'GET',
                    data: function(d) {
                        d._token = "{{ csrf_token() }}";
                    },
                    beforeSend: function() {
                        $('#processingIndicator').show();
                    },
                    complete: function() {
                        $('#processingIndicator').hide();
                    },
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'title',
                        name: 'title',
                    },
                    {
                        data: 'slug',
                        name: 'slug',
                    },
                    {
                        data: 'keywords',
                        name: 'keywords',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ]
            });
        });
    </script>
@endpush
