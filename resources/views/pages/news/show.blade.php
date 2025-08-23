@extends('layouts.app')

@section('title', 'News Detail')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>News Detail</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></div>
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>

        <div class="section-body">




            <!-- Thumbnail -->
            @if($news->image)
                <div class="mb-5">
                    <img src="{{ $news->image}}"
                         alt="Thumbnail"
                         class="img-fluid rounded shadow"
                         style="max-height: 500px; object-fit: cover; width:100%;">
                </div>
            @else
                <div class="alert alert-warning mb-5">No Thumbnail Available</div>
            @endif

            <!-- Meta Info -->
            <div class="row">
                <!-- Author -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Author</h4>
                            </div>
                            <div class="card-body">
                                {{ $news->user->name ?? 'Unknown' }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-info">
                            <i class="fas fa-tag"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Category</h4>
                            </div>
                            <div class="card-body">
                                {{ $news->category->name ?? '-' }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Published At -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-success">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Published At</h4>
                            </div>
                            <div class="card-body">
                                {{ $news->created_at->format('d M Y H:i') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    <!-- Title -->
            <div class="section-body">
               <h1 class="section-title display-1 font-weight-bold text-dark mb-4">
                    {{ $news->title }}
                </h1>


                <div class="card">
                    <div class="card-header">
                        <h4>Content</h4>
                    </div>

                        <div class="card-body" style="line-height: 1.8; font-size: 1.05rem;">
                    {!! $news->content !!}
                </div>

                    <div class="card-footer bg-whitesmoke">
                        Created by {{ $news->user->name ?? 'Unknown' }}
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
