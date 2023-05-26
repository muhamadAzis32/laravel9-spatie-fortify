@extends('layouts.app')

@section('title')
    Users
@endsection


@section('content')
    <div class="widget-content searchable-container list">
        <!-- --------------------- start header ---------------- -->
        <div class="card card-body">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <h4 class="fw-semibold mb-8">Users</h4>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="/admin/users/create" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                        <i class="ti ti-users text-white me-1 fs-5"></i> Add Contact
                    </a>
                </div>
            </div>
        </div>
        <!-- --------------------- end header ---------------- -->

        <!-- --------------------- start Zero Configuration  ---------------- -->
        <div class="card ">
            <div class="card-body">
                <div class="mb-2">
                    <h5 class="mb-3">Data Users</h5>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->getRoleNames()->count() > 0)
                                            @foreach ($user->getRoleNames() as $role)
                                                {{ $role }}
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('admin.users.destroy', $user->id) }}" method="POST">

                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="text-info edit">
                                                <i class="ti ti-pencil fs-5"></i>
                                            </a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" href="javascript:void(0)"
                                                class="btn text-dark delete ms-2">
                                                <i class="ti ti-trash fs-5"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- --------------------- end Zero Configuration ---------------- -->
    </div>
@endsection
