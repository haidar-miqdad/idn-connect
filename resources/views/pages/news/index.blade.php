@extends('layouts.app')

@section('title', 'News')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product</h1>
                <div class="section-header-button">
                    <a href="{{ route('news.create') }}"
                        class="btn btn-primary">Add New</a>
                </div>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">News</a></div>
                    <div class="breadcrumb-item">All News</div>
                </div>
            </div>
            @include('layouts.alert')
            <div class="section-body">
                <h2 class="section-title">News</h2>
                <p class="section-lead">
                    You can manage all News, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All News</h4>
                            </div>
                            <div class="card-body">
                                {{-- <div class="float-left">
                                    <select class="form-control selectric">
                                        <option>Action For Selected</option>
                                        <option>Move to Draft</option>
                                        <option>Move to Pending</option>
                                        <option>Delete Pemanently</option>
                                    </select>
                                </div> --}}
                                <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Title</th>
                                            <th>image</th>
                                            <th>Content</th>
                                            <th>Status</th>


                                        </tr>

                                        @foreach ($news as $item)
                                        <tr>
                                            <td>{{ $item->title }}
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="{{ route('news.edit', $item->code) }}">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="{{ route('news.show', $item->code) }}">show</a>
                                                    <div class="bullet"></div>
                                                    <a href="#"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->code }}').submit();"
                                                        class="text-danger">Trash
                                                    </a>
                                                    <form
                                                    action="{{ route('news.destroy', $item->code) }}"
                                                     method="POST"
                                                     id="delete-form-{{ $item->code }}">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                @if($item->image)
                                                    <img src="{{ $item->image_url }}"
                                                        alt="image"
                                                        width="160"
                                                        height="90"
                                                        class="rounded"
                                                        style="object-fit: cover;">

                                                @else
                                                    <span class="badge badge-warning">No Image</span>
                                                @endif
                                            </td>

                                            {{-- <td>
                                                @if($item->image)
                                                    <img src="{{ asset('storage/news/'.$item->image) }}"
                                                     class="w-100 h-100">
                                                     @else
                                                       <span class="badge badge-warning">No Image</span>
                                                @endif
                                            </td> --}}

                                            <td>{{ $item->excerpt }}
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="#">{{ $item->created_at }}</a>
                                                </div>
                                            </td>

                                             <td>
                                                @if ($item->status === 'pending')
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @elseif ($item->status === 'approved')
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif ($item->status === 'not_approved')
                                                    <span class="badge bg-secondary">Not Approved</span>
                                                @else
                                                    <span class="badge bg-light text-dark">{{ ucfirst($item->status) }}</span>
                                                @endif

                                                <div class="table-links d-flex align-items-center mt-1">
                                                    <div class="bullet text-info me-2"></div>
                                                    <p class="text-info mb-0">{{ $item->created_at->diffForHumans() }}</p>
                                                </div>
                                            </td>





                                        </tr>
                                        @endforeach

                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        {{ $news->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
