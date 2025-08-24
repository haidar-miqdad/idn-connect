@extends('layouts.app')

@section('title', 'Users')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-button">
                    <a href="{{ route('user.create') }}"
                        class="btn btn-primary">Add New</a>
                </div>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">All Users</div>
                </div>
            </div>
            @include('layouts.alert')
            <div class="section-body">
                <h2 class="section-title">Users</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Users</h4>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Phone</th>
                                        </tr>

                                        @foreach ($users as $user)
                                        <tr>
                                            <td>
    <div class="d-flex align-items-center">
        @if ($user->image)
            <img src="{{ asset('storage/profile/' . $user->image) }}"
                 alt="Profile"

                 style="width: 40px; height: 40px; object-fit: cover; border-radius:50%; margin-right:10px;">
        @else
            <img src="{{ asset('img/avatar/avatar-3.png') }}"
                 alt="Default"

                 style="width: 40px; height: 40px; object-fit: cover; border-radius:50%; margin-right:10px;">
        @endif
        <div>
            {{ $user->name }}
            <div class="table-links">
                <div class="bullet"></div>
                <a href="{{ route('user.edit', $user->code) }}">Edit</a>

                <div class="bullet"></div>
                <a href="{{ route('user.show', $user->code) }}">Detail</a>

                <div class="bullet"></div>
                <a href="#" class="text-danger"
                   onclick="deleteUser('{{ $user->code }}')">
                   Trash
                </a>

                <form id="delete-form-{{ $user->code }}"
                      action="{{ route('user.destroy', $user->code) }}"
                      method="POST"
                      style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</td>

                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                role user nanti
                                            </td>
                                            <td>
                                                {{ $user->phone }}
                                            </td>
                                        </tr>
                                        @endforeach

                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        {{ $users->links() }}
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

    <script>
function deleteUser(userId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + userId).submit();
        }
    });
}
</script>

@endpush
