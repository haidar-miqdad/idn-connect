@extends('layouts.app')

@section('title', 'Edit News')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit News</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form action="{{ route('news.update', $news->code) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-header">
                        <h4>Edit News Data</h4>
                    </div>

                    <div class="card-body">
                        <!-- Title -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text"
                                   name="title"
                                   id="title"
                                   value="{{ old('title', $news->title) }}"
                                   class="form-control @error('title') is-invalid @enderror"
                                   required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id"
                                    id="category"
                                    class="form-control @error('category_id') is-invalid @enderror"
                                    required>
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $news->category_id) == $category->id ? 'selected' : '' }}>
                                        -- {{ $category->name }} --
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status"
                                    id="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                    required>
                                <option value="pending" {{ old('status', $news->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="approved" {{ old('status', $news->status) == 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="not_approved" {{ old('status', $news->status) == 'not_approved' ? 'selected' : '' }}>Not Approved</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content"
                                      id="content"
                                      rows="10"
                                      class="form-control @error('content') is-invalid @enderror"
                                      required>{{ old('content', $news->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection
