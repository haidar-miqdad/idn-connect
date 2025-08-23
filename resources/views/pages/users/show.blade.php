

@extends('layouts.app')

@section('title', 'Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $user->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile User</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Profil User</h2>
                <p class="section-lead">
                    Informasi tentang perusahaan Anda.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <p>{{ $user->name }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>User Address</label>
                                        <p>{{ $user->address }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Phone</label>
                                        <p>{{ $user->phone }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                    <label>Status</label><br>
                                    @if($user->status == 'student')
                                        <span class="badge badge-primary">Student</span>
                                    @elseif($user->status == 'teacher')
                                        <span class="badge badge-success">Teacher</span>
                                    @elseif($user->status == 'other')
                                        <span class="badge badge-info">Other</span>
                                    @else
                                        <span class="badge badge-secondary">Unknown</span>
                                    @endif
                                    </div>

                                <div class="form-group col-md-6 col-12">
                                    <label>Image</label><br>
                                    @if($user->image)
                                        <img src="{{ asset('storage/profile/'.$user->image) }}"
                                            alt="Profile {{ $user->name }}"
                                            class="img-thumbnail"
                                            style="max-width: 120px;">
                                    @else
                                        <span class="badge badge-warning">No Image</span>
                                    @endif
                                </div>

                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('user.edit', $user->code) }}" class="btn btn-primary">Edit Profil
                                    User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
