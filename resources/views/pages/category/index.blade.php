@extends('layouts.app')

@section('title', 'Card')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/chocolat/dist/css/chocolat.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>

                <div class="section-header-button">
                    <a href="{{ route('category.create') }}"
                        class="btn btn-primary">Add New</a>
                </div>
            </div>

            <div class="section-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="section-title">News Category</h2>
                <p class="section-lead">
                    Basically, the Bootstrap card can be given a color variant.
                </p>
                    </div>

                    <!-- Search -->
                     <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                name="search"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                </div>


                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card card-light">
                                <div class="card-header">
                                    <h4>{{ $category->name }}</h4>
                                </div>
                                <div class="card-body">
                                    <p>{{ $category->description }} <code>.</code></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.css') }}"></script>

    <!-- Page Specific JS File -->
@endpush
