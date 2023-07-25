@extends('common.common')

@section('card-body')
    <section class="container mt-5">
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
    <script>
        $(function() {
            var table = $('.table').DataTable({
                processing: true,
                serverSide: false,
                ajax: "{{ route('blog.index') }}",
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
