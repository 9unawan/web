@extends('admin.app')
@section('content')
    <div class="pc-content">

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb mb-3">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Data Master</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                            <h2 class="">Profile</h2>
                        </div>
                    </div>
                </div>
                <a href="{{ route('post.create') }}" class="btn btn-success mb-1">Tambah</a>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table caption-top">
                                    <caption>List of users</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($posts as $dt)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ Storage::url('public/posts/' . $dt->image) }}"
                                                        class="rounded" alt="" style="width: 150px;">
                                                </td>
                                                <td>{{ $dt->title }}</td>
                                                <td>{!! nl2br($dt->content) !!}</td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('profile.destroy', $dt->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="btn-group-vertical" role="group"
                                                            aria-label="Button group with nested dropdown">
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop3" type="button"
                                                                    class="btn m-0 btn-secondary dropdown-toggle"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"><i
                                                                        class="material-icons-two-tone text-white">list</i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="material-icons-two-tone text-white">visibility</i>
                                                                        Show</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('profile.edit', $dt->id) }}"><i
                                                                            class="material-icons-two-tone text-white">edit_road</i>
                                                                        Edit</a>
                                                                    <button type="submit" class="dropdown-item"><i
                                                                            class="material-icons-two-tone text-danger">delete_outline</i>
                                                                        Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                            </div>
                            <div class="col-8">
                                                    </td>
                                </tr>
                                {{ $posts->links() }}
                            @empty

                                @include('admin.components.404')
                                @endforelse
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- [ Main Content ] end -->
    </div>
@endsection
