@extends('common.common')

@section('card-header', 'Task Management')

@section('card-body')
    <section>
        <div class="container">
            <div class="table-responsive">
                <table id="taskTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">S.No.</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            var table = $('#taskTable').DataTable({
                processing: true,
                serverSide: true,
                deferRender: true,
                retrieve: true,
                columns: [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                columnDefs: [{
                    "className": "text-center",
                    "targets": "_all"
                }]
            })

            $('#taskTable tbody').on('click', '.complete-task', function() {
                var taskId = $(this).data('id');
                var status = $(this).data('status');
                var confirmed = confirm('Are you sure you want to complete this task?');

                if (confirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/task/complete/' + taskId + '/' + status,
                        method: 'POST',
                        success: function(response) {
                            location.reload();
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    })
                }
            })
        });
    </script>
@endpush
