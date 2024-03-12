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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Artikel</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Artikel</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        {{-- @forelse ($artikel as $dt)
            <div class="card-header">
            </div>
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body ">
                        <h5># Data Artikel</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <form action="{{ route('beranda.index') }} " method="POST" enctype="multipart/form-data"> --}}
                                {{-- <div class="form-group">
                                    <label class="form-label" for="title">Image</label>
                                    <input type="text" class="form-control" value="{{ $dt->image }}"
                                        id="exampleInputEmail1" aria-describedby="TitlelHelp" placeholder="Title"> --}}
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                            anyone else.</small> --}}
                                {{-- </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Title</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $dt->title }}</textarea>
                                </div>
                                <div class="form-group form-check"> --}}
                                    {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                                    {{-- <label for="exampleCheck1">Check me out</label> --}}
                                {{-- </div> --}}
                                {{-- <button type="submit" class="btn btn-primary mb-4">Save</button> --}}
                                {{-- </form>
                            </div>
                            <div class="col-md-6"> --}}
                                {{-- <form action="{{ route('beranda.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                {{-- <div class="form-group">
                                    <label class="form-label">Heading</label>
                                    <input type="text" class="form-control" value="{{ $dt->heading }}"
                                        placeholder="Text">
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $dt->content }}</textarea>
                                </div>
                                </form>
                            </div>
                        </div>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('beranda.destroy', $dt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('beranda.edit', $dt->id) }}" class="btn btn-info"><i
                                    class="material-icons-two-tone text-white">edit_road</i> Edit</a>
                            <button type="submit" class="btn btn-danger"><i
                                    class="material-icons-two-tone text-white">delete_outline</i> Delete</button>
                        </form>

                    </div>
                </div> --}}
            {{-- </div>  --}}
        {{-- @empty --}}
            <a href="/admin/category/create" class="btn btn-success">Tambah</a>

            {{-- @include('admin.components.404')
        @endforelse --}}

        <hr class="pt-3">


        {{-- <h2>Beranda Profile</h2> --}}
        {{-- ================================= beranda profile ======================================== --}}
        {{-- <div class="container">
            <div class="row">
                <div class="card">
                    <div class="table-responsive">
                        <h3 class="py-3"># Data Profile</h3>
                        <table class="table">
                            <thead>
                                <thead>
                                    <th>no</th>
                                    <th>Image</th>
                                    {{-- <th>Heading</th> --}}
                                    {{-- <th>Title</th>
                                    <th>Content</th>
                                    </th>
                                </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($profile as $dt)
                                    <tr>
                                        <td scope="row">{{ $no++ }}</td>
                                        <td>
                                            <img src="{{ Storage::url('public/profile/' . $dt->image) }}" width="100px"
                                                class="rounded" alt="">
                                        </td>
                                        <td>{{ $dt->image }}</td>
                                        <td>{{ $dt->title }}</td>
                                        <td>{{ $dt->content }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}} 

        {{-- ========================= Post ======================== --}}
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="table-responsive">
                        <h3 class="py-3">Data Artikel</h3>
                        <table class="table">
                            <thead>
                                <thead>
                                    <th>no</th>
                                    <th>Category</th>
                                    <th>action</th>
                                    </th>
                                </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($category as $dt)
                                    <tr>
                                        <td scope="row">{{ $no++ }}</td>
                                        <td>{{ $dt->category }}</td>
                                        <td>
                                            <a href=" {{route('artikel.edit', $dt->id)}} " class="btn btn-success btn-sm">Edit</a>
                                            <form method="POST" onsubmit="return confirm('Yakin Akan Menghapus Artikel?')" action="{{ route('artikel.destroy', $dt->id) }}" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $artikel->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
