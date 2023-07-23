@extends('common.common')

@section('card-header', 'User Details')

@section('card-body')

    <div class="table-responsive">
        <form action="{{ route('update.status') }}" method="POST">
            @csrf
            <table class="table table-bordered" id="myTable"
                style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                aria-describedby="datatable_info">
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
                        <th class="text-center">Status</th>
                        <th class="text-center">Generate Card</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">
                                <div class="checkbox" style="margin-top: 0px;margin-bottom: 0px;">
                                    <input id="status-{{ $user->name }}" class="magic-checkbox users" type="checkbox"
                                        name="user_id[]" value="{{ $user->id }}" {{ $user->status  == 'active' ? 'checked' : '' }}>
                                    <label for="status-{{ $user->name }}" style="color: #000023;"></label>
                                </div>
                            </td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td class="text-center">
                                @if ($user->status == 'active')
                                    <span class="badge text-bg-success">Active</span>
                                @elseif ($user->status == 'inactive')
                                    <span class="badge text-bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('users.cards', $user->id) }}"><span class="badge text-bg-primary">Print Card</span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="button">
                <input type="submit" name="submit" class="btn btn-info" value="Update User">
            </div>
        </form>
    </div>

    @push('js')
        <script type="text/javascript">
            $(function() {
                $('#select-all').click(function() {
                    $(this).closest('form').find('input.users').prop('checked', $(this).is(':checked'));
                });
            });
        </script>

        {{-- Data tables --}}
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    @endpush

@endsection
