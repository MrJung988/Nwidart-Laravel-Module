@extends('common.common')

@section('card-header', 'Company Details')

@section('card-body')

    <div class="table-responsive">
        <form action="">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Slogan</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($companies) > 0)
                        @foreach ($companies as $key => $company)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $company->name }}</td>
                                <td>
                                    <div class="p-2">
                                        <img src="{{ asset('storage/companies/' . $company->logo) }}" alt="company_logo"
                                            width="80">
                                    </div>
                                </td>
                                <td>{{ $company->slogan }}</td>
                                <td>{{ $company->phone }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->address }}</td>
                                <td>
                                    <div class="btn-grp">

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="8" class="text-center">No company found.</td>
                    @endif
                </tbody>
            </table>
        </form>
    </div>
@endsection
