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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">######</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">####</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">#####</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <a href="/admin/dinas/create" class="btn btn-success">Tambah</a>
        <hr class="pt-3">
        {{-- ========================= Dinas ======================== --}}
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="table-responsive">
                        <h3 class="py-3">Data #####</h3>
                        <table class="table">
                            <thead>
                                <thead>
                                    <th>no</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Content</th>
                                    <th>action</th>
                                    </th>
                                </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($dinas as $dt)
                                    <tr>
                                        <td scope="row">{{ $no++ }}</td>
                                        <td>
                                            <img src="{{ Storage::url('public/dinas/' . $dt->image) }}" width="100px"
                                                class="rounded" alt="">
                                        </td>
                                        <td>{{ $dt->title }}</td>
                                        <td>{{ $dt->sub_title }}</td>
                                        <td>{{ Str::limit($dt->content, 50) }}</td>
                                        <td>
                                            {{-- <a href=" {{ url('show/'.$dt->id) }} " class="btn btn-success btn-sm">Show</a> --}}
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
                        {{ $dinas->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
