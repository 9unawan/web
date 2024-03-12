@extends('helpdesk.components.app')
@section('content')
{{-- <style>
    .container{
        margin-left: 5%;
        margin-right: 50%
    }
    .helpdesk{
        margin-left: 1%
    }
</style> --}}
<div class="pc-content">
    <div class="helpdesk">
        <h1 style="font-size: 45px">Helpdesk Kota Praya</h1>
        <p style="font-size: 18px">Layanan aduan kendala terhadap layanan Kota Praya</p>
        <a href="/login" class="btn btn-primary btn-lg">Buat Tiket</a>
        <hr>
    </div>
    <!-- [ Main Content ] start -->
    <div class="row">
    <form action="" method="post">
        <input type="hidden" name="_token" value="">     
        <div class="form-group">
            <div class="col-sm-7">
                <div class="input-group m-b"><span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-play"></i> Go!</button> </span>
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
<hr>
        <!-- [ Main Content ] start -->
        <div class="container">
            <div class="row">
                @foreach ($id as $dt)
                <div class="col-md-3 col-xxl-3 mb-4"> <!-- Menambahkan class mb-4 untuk memberikan margin bawah pada setiap card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-s bg-light-primary">
                                        <img width="24" height="24" viewBox="0 0 24 24" fill="none" src="{{ Storage::url('public/dinas/'.$dt->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="media-body ml-2"> <!-- Menambahkan class ml-2 untuk memberikan margin kiri -->
                                    <a href="#">
                                        <h3>{{ $dt->title }}</h3>
                                    </a>
                                    <small class="text-muted">{{ $dt->sub_title }}</small>
                                </div>
                            </div>
                            <div class="social-avatar mt-3"> <!-- Menambahkan class mt-3 untuk memberikan margin atas pada bagian sosial -->
                                <div class="social-body">
                                    <p>{{ $dt->content }}</p>
                                    <div class="btn-group">
                                        <a href="" class="pull-right"><strong><i class="fa fa-phone-square text-primary"></i>Lapor</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>    
<!-- [ Main Content ] end -->
</div>
@endsection