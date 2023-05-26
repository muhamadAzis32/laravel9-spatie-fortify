@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Cards</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted" href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Cards</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="../../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-4 col-xl-2">
            <a href="page-user-profile.html" class="p-4 text-center bg-light-primary card shadow-none rounded-2">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-user-male.svg"
                    width="50" height="50" class="mb-6 mx-auto" alt="">
                <p class="fw-semibold text-primary mb-1">Profile</p>
                <h4 class="fw-semibold text-primary mb-0">3,685</h4>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-2">
            <a href="javascript:void(0)" class="p-4 text-center bg-light-warning card shadow-none rounded-2">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg"
                    width="50" height="50" class="mb-6 mx-auto" alt="">
                <p class="fw-semibold text-warning mb-1">Blog</p>
                <h4 class="fw-semibold text-warning mb-0">256</h4>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-2">
            <a href="app-calendar.html" class="p-4 text-center bg-light-info card shadow-none rounded-2">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg"
                    width="50" height="50" class="mb-6 mx-auto" alt="">
                <p class="fw-semibold text-info mb-1">Calendar</p>
                <h4 class="fw-semibold text-info mb-0">932</h4>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-2">
            <a href="app-email.html" class="p-4 text-center bg-light-danger card shadow-none rounded-2">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-favorites.svg"
                    width="50" height="50" class="mb-6 mx-auto" alt="">
                <p class="fw-semibold text-danger mb-1">Email</p>
                <h4 class="fw-semibold text-danger mb-0">$348K</h4>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-2">
            <a href="app-chat.html" class="p-4 text-center bg-light-success card shadow-none rounded-2">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-speech-bubble.svg"
                    width="50" height="50" class="mb-6 mx-auto" alt="">
                <p class="fw-semibold text-success mb-1">Chats</p>
                <h4 class="fw-semibold text-success mb-0">96</h4>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-2">
            <a href="app-contact.html" class="p-4 text-center bg-light-info card shadow-none rounded-2">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg"
                    width="50" height="50" class="mb-6 mx-auto" alt="">
                <p class="fw-semibold text-info mb-1">Contacts</p>
                <h4 class="fw-semibold text-info mb-0">48</h4>
            </a>
        </div>
    </div>
@endsection
