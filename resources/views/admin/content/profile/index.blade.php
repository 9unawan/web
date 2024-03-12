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
                        <div class="page-header-title">
                            <h2 class="mb-0">Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- [ breadcrumb ] end -->
        @forelse ($profile as $dt)
            <div class="card-header">
            </div>
            <div class="col-md-12">
                <div class="card shadow">

                    <div class="card-body ">
                        <h5># Data Profile</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <form action="{{ route('beranda.index') }} " method="POST" enctype="multipart/form-data"> --}}
                                <div class="form-group">
                                    <label class="form-label" for="title">Heading</label>
                                    <input type="text" class="form-control" value="{{ $dt->heading }}"
                                        id="exampleInputEmail1" aria-describedby="TitlelHelp" placeholder="heading">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                            anyone else.</small> --}}
                                </div>
                                {{-- <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Selogan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $dt->sub_title }}</textarea>
                                </div> --}}
                                <div class="form-group form-check">
                                    {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                                    {{-- <label for="exampleCheck1">Check me out</label> --}}
                                </div>
                                {{-- <button type="submit" class="btn btn-primary mb-4">Save</button> --}}
                                </form>
                            </div>
                            <div class="col-md-6">
                                {{-- <form action="{{ route('beranda.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                {{-- <div class="form-group">
                                    <label class="form-label">Heading</label>
                                    <input type="text" class="form-control" value="{{ $dt->heading }}"
                                        placeholder="Text">
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{!! $dt->content !!}</textarea>
                                </div>
                                <img src="{{ Storage::url('public/artikel/' . $dt->image) }}" width="100px"
                                                class="rounded" alt="">
                                                file
                                </form>
                            </div>
                        </div>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('profile.destroy', $dt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('profile.edit', $dt->id) }}" class="btn btn-info"><i
                                    class="material-icons-two-tone text-white">edit_road</i> Edit</a>
                            <button type="submit" class="btn btn-danger"><i
                                    class="material-icons-two-tone text-white">delete_outline</i> Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        @empty
            <a href="/admin/profile/create" class="btn btn-success">Tambah</a>

            @include('admin.components.404')
        @endforelse

        <hr class="pt-5">
        <!-- [ Main Content ] end -->
    </div>
@endsection