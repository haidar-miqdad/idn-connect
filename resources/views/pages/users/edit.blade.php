@extends('layouts.app')

@section('title', 'Edit Profil User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Profil {{ $user->name }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Profil User</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Edit Profil User</h2>
                <p class="section-lead">
                    Perbarui informasi profil Anda di halaman ini.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <form action="{{ route('user.update', $user->code) }}" method="POST" enctype="multipart/form-data" >@method('PUT')
                            @csrf
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Nama User</label>
                                            <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                                                >
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="" placeholder="Kosongkan jika password tidak ingin diubah">
                                    </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Email User</label>
                                            <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                                >
                                        </div>
                                        {{-- <div class="form-group col-md-6 col-12">
                                            <label>Telepon User</label>
                                            <input type="tel" name="phone" class="form-control" value="{{ $user->phone }}">
                                        </div> --}}
                                    <div class="form-group col-md-6 col-12">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                                    </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Status</label>
                                             <select name="status" id="" class="form-control" style="height: 40px">
                                            <option value="student" {{ $user->status == 'student'? 'selected' : '' }}>Student</option>
                                            <option value="teacher" {{ $user->status ==  'teacher'? 'selected' : '' }}>Teacher</option>
                                            <option value="other" {{ $user->status == 'other'? 'selected' : '' }}>Other</option>
                                        </select>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Upload New Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                            <label>Alamat User</label>
                                            <input type="text" name="address" class="form-control" value="{{ $user->address }}"
                                                >
                                        </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>

                        </div>
                        </form>
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
