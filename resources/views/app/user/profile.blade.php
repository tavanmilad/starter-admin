@extends('layouts.app')

@section('content')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{ __('Profil') }}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ __('Profil') }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="grid"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="app-todo.html">
                                <i class="me-1" data-feather="check-square"></i>
                                <span class="align-middle">Todo</span>
                            </a>
                            <a class="dropdown-item" href="app-chat.html">
                                <i class="me-1" data-feather="message-square"></i>
                                <span class="align-middle">Chat</span>
                            </a>
                            <a class="dropdown-item" href="app-email.html">
                                <i class="me-1" data-feather="mail"></i>
                                <span class="align-middle">Email</span>
                            </a>
                            <a class="dropdown-item" href="app-calendar.html">
                                <i class="me-1" data-feather="calendar"></i>
                                <span class="align-middle">Calendar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="content-body">
            <section id="page-account-settings">
                <div class="row">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column nav-left">
                            <li class="nav-item">
                                <a class="nav-link active" id="information_pill" data-bs-toggle="pill"
                                    href="#update_information" aria-expanded="true">
                                    <i data-feather="user" class="font-medium-3 me-1"></i>
                                    <span class="fw-bold">{{ __('Informasi') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="password_pill" data-bs-toggle="pill" href="#update_password"
                                    aria-expanded="false">
                                    <i data-feather="lock" class="font-medium-3 me-1"></i>
                                    <span class="fw-bold">{{ __('Ubah Password') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two_factor_authentication_pill" data-bs-toggle="pill"
                                    href="#two_factor_authentication" aria-expanded="false">
                                    <i data-feather="link" class="font-medium-3 me-1"></i>
                                    <span class="fw-bold">{{ __('Otentikasi Dua Arah') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="delete_account_pill" data-bs-toggle="pill"
                                    href="#delete_account" aria-expanded="false">
                                    <i data-feather="user-x" class="font-medium-3 me-1"></i>
                                    <span class="fw-bold">{{ __('Hapus Akun') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    {{-- Update Profile Information --}}
                                    <div role="tabpanel" class="tab-pane active" id="update_information"
                                        aria-labelledby="information_pill" aria-expanded="true">
                                        <form class="form_update_information"
                                            action="{{ url('user/profile-information') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="d-flex">
                                                <a href="#" class="me-25">
                                                    <img src="{{ asset('') }}assets/images/profile_photo/{{ auth()->user()->profile_photo }}"
                                                        id="img_profile_photo" class="rounded me-50" alt="profile image"
                                                        height="80" width="80" />
                                                </a>
                                                <div class="mt-75 ms-1">
                                                    <label for="profile_photo"
                                                        class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                    <input name="profile_photo" type="file" class="btn_upload_profile_photo"
                                                        id="profile_photo" hidden accept="image/*" />
                                                    {{-- <button type="reset"
                                                        class="btn btn-sm btn-outline-secondary mb-75 btn_reset_profile_photo">Reset</button> --}}
                                                    <p>
                                                        Allowed JPG, JPEG & PNG. Max size of 1024kB
                                                        @error('profile_photo')
                                                            <br>
                                                            <small id="profile_photo_error"
                                                                class="text-danger text_error">{{ $message }}</small>
                                                        @enderror
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-12 col-sm-12">
                                                    <div class="mb-1">
                                                        <label class="form-label"
                                                            for="name">{{ __('Nama') }}</label>
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="name" name="name" placeholder="{{ __('Nama') }}"
                                                            value="{{ auth()->user()->name }}" />
                                                        <small id="name_error" class="text-danger text_error"></small>
                                                        @error('name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label"
                                                            for="username">{{ __('Username') }}</label>
                                                        <input type="text"
                                                            class="form-control @error('username') is-invalid @enderror"
                                                            id="username" name="username"
                                                            placeholder="{{ __('Username') }}"
                                                            value="{{ auth()->user()->username }}" />
                                                        <small id="username_error" class="text-danger text_error"></small>
                                                        @error('username')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label"
                                                            for="email">{{ __('Email') }}</label>
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            id="email" name="email" placeholder="{{ __('Email') }}"
                                                            value="{{ auth()->user()->email }}" />
                                                        <small id="email_error" class="text-danger text_error"></small>
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-primary mt-1 me-1 btn_information">{{ __('Simpan') }}</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-secondary mt-1">{{ __('Reset') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- Update Password --}}
                                    <div class="tab-pane fade" id="update_password" role="tabpanel"
                                        aria-labelledby="password_pill" aria-expanded="false">
                                        <form class="form_update_password" action="{{ url('user/password') }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-12 col-sm-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="current_password">
                                                            {{ __('Password Saat Ini') }}
                                                        </label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password"
                                                                class="form-control @error('current_password') is-invalid @enderror"
                                                                id="current_password" name="current_password"
                                                                placeholder="{{ __('Password Saat Ini') }}" />
                                                            <div class="input-group-text cursor-pointer">
                                                                <i data-feather="eye"></i>
                                                            </div>
                                                        </div>
                                                        <small id="current_password_error"
                                                            class="text-danger text_error"></small>
                                                        @error('current_password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="password">
                                                            {{ __('Password Baru') }}
                                                        </label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" id="password" name="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                placeholder="{{ __('Password Baru') }}" />
                                                            <div class="input-group-text cursor-pointer">
                                                                <i data-feather="eye"></i>
                                                            </div>
                                                        </div>
                                                        <small id="password_error" class="text-danger text_error"></small>
                                                        @error('password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="password_confirmation">
                                                            {{ __('Ketik Ulang Password Baru') }}
                                                        </label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control"
                                                                id="password_confirmation" name="password_confirmation"
                                                                placeholder="{{ __('Ketik Ulang Password Baru') }}" />
                                                            <div class="input-group-text cursor-pointer"><i
                                                                    data-feather="eye"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mt-1 btn_password">Simpan</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-secondary mt-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- Two Factor Authentication --}}
                                    <div class="tab-pane fade" id="two_factor_authentication" role="tabpanel"
                                        aria-labelledby="two_factor_authentication_pill" aria-expanded="false">
                                        <form class="form_two_factor_authentication" action="{{ url('') }}"
                                            method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                        <h4 class="mb-0 ms-75">{{ __('Otentikasi Dua Arah') }}</h4>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                    <div class="mb-1">
                                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                            Aperiam, animi nesciunt! Nobis, laborum tenetur. Aperiam illo
                                                            possimus laudantium incidunt sint porro, earum sapiente eum iure
                                                            ullam perferendis impedit nesciunt fugit!</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-info me-1 mt-1 btn_two_factor_authentication">Aktifkan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- Delete Account --}}
                                    <div class="tab-pane fade" id="delete_account" role="tabpanel"
                                        aria-labelledby="delete_account_pill" aria-expanded="false">
                                        <form class="form_delete_account" action="{{ url('') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-sm-12">
                                                    <div class="mb-1">
                                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                            Aperiam, animi nesciunt! Nobis, laborum tenetur. Aperiam illo
                                                            possimus laudantium incidunt sint porro, earum sapiente eum iure
                                                            ullam perferendis impedit nesciunt fugit!</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-danger me-1 mt-1 btn_delete_account">{{ __('Hapus Akun') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('') }}assets/js/app/profile.js"></script>
@endpush
