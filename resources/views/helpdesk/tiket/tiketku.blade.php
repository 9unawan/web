@extends('helpdesk.components.app')
@section('content')

<div class="pc-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb mb-3">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="helpdesk">
        <h1>Helpdesk Kota Praya</h1>
        <p>Layanan aduan kendala terhadap layanan Kota Praya</p>
        <a href="{{ route('tiket') }}" class="btn btn-primary btn-lg">Buat Tiket</a>
        <hr>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="row">
        <form action="https://helpdesk.mataramkota.go.id/user/tiketku/search" method="post">
            <input type="hidden" name="_token" value="2Yptl53wEpZkgjrqN7H32TQaMEnY70rT4Bc4oL3o">      
            <div class="form-group">
                <div class="col-sm-7">
                    <div class="input-group m-b"><span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-filter"></i> Go!</button> </span>
                    <input type="text" name="keyword" class="form-control" placeholder="Masukan Nama layanan / Nomor Tiket">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <select name="status" class="form-control" id="status">
                        <option value="" selected="">Semua</option>
                        <option value="0">Belum selesai</option>
                        <option value="1">Sudah selesai</option>
                        <option value="2">Dibatalkan</option>
                        
                    </select>
                </div>
                </div>
            </div>
        </form>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection