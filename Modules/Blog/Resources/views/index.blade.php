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
        </table>
    </section>
@endsection

@push('js')
    <script type="text/javascript">
        $(function() {
            var table = $('.yajra-datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blog.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'keywords',
                        name: 'keywords'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            })
        });
    </script>
@endpush
