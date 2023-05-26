@extends('layouts.app')

@section('title')
    Users
@endsection


@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Input Data Users</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted" href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Input Data Users</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('assets/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section>
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Input Data Users</h5>
                        <form action="{{ route('admin.users.store') }}" method="POST" class="form-horizontal">
                            @csrf

                            <div class=" mb-3">
                                <label for="tb-fname">Name</label>
                                <input type="text" name="name" class="form-control" id="tb-fname"
                                    placeholder="Enter Name here">
                            </div>

                            <div class=" mb-3">
                                <label for="tb-email">Email address</label>
                                <input type="email" name="email" class="form-control" id="tb-email"
                                    placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label>Role:</label>
                                <select class="form-control form-select" name="roles[]" aria-label="Default select example">
                                    @foreach ($roles as $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tb-pwd">Password</label>
                                <input type="password" name="password" class="form-control" id="tb-pwd"
                                    placeholder="Password">
                            </div>

                            <div class="mb-3">
                                <label for="tb-cpwd">Confirm Password</label>
                                <input type="password" name="confirm-password" class="form-control" id="tb-cpwd"
                                    placeholder="Password">
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-success rounded-pill px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-device-floppy me-1 fs-4"></i>
                                        Save
                                    </div>
                                </button>
                                <button href="/admin/users" class="btn btn-danger rounded-pill px-4 ms-2 text-white">
                                    Kembali
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
