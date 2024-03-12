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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Kontak</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- [ breadcrumb ] end -->
        @forelse ($kontak as $dt)
            <div class="card-header">
            </div>
            <div class="col-md-12">
                <div class="card shadow">

                    <div class="card-body ">
                        <h5># Data Kontak</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <form action="{{ route('beranda.index') }} " method="POST" enctype="multipart/form-data"> --}}
                                <div class="form-group">
                                    <label class="form-label" for="title">Heading</label>
                                    <input type="text" class="form-control" value="{{ $dt->heading }}"
                                        id="exampleInputEmail1" aria-describedby="TitlelHelp" placeholder="Heading">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                            anyone else.</small> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Kontak</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $dt->kontak }}</textarea>
                                </div>
                                <div class="form-group form-check">
                                    {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                                    {{-- <label for="exampleCheck1">Check me out</label> --}}
                                </div>
                                {{-- <button type="submit" class="btn btn-primary mb-4">Save</button> --}}
                                </form>
                            </div>
                            <div class="col-md-6">
                                {{-- <form action="{{ route('beranda.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" value="{{ $dt->alamat }}"
                                        placeholder="Text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Map</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $dt->map }}</textarea>
                                </div>
                                </form>
                            </div>
                        </div>
                        {{-- <form type="submit" class="btn btn-info" class="material-icons-two-tone text-white">save</form> --}}
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('beranda.destroy', $dt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('beranda.edit', $dt->id) }}" class="btn btn-info"><i
                                    class="material-icons-two-tone text-white">edit_road</i> Edit</a>
                                    {{-- <a href=" {{route('beranda.update', $dt)}} " class="btn btn-success btn-sm">update</a> --}}
                            <button type="submit" class="btn btn-danger"><i
                                    class="material-icons-two-tone text-white">delete_outline</i> Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        @empty
            <a href="/admin/kontak/create" class="btn btn-success">Tambah</a>

            @include('admin.components.404')
        @endforelse

        <hr class="pt-5">
        <!-- [ Main Content ] end -->
    </div>
@endsection