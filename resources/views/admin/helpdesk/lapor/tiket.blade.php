@extends('helpdesk.components.app')
@section('content')

<div class="pc-content">
    <div class="helpdesk">
        <h1>Helpdesk Kota Praya</h1>
        <p>Layanan aduan kendala terhadap layanan Kota Praya</p>
        <a href="{{ route('lapor.create') }}" class="btn btn-primary btn-lg">Buat Tiket</a>
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
    @foreach ($dinas as $dt)
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-primary">
                                    <img width="40" height="40" viewBox="0 0 24 24" fill="none" src="{{ Storage::url('public/dinas/'.$dt->image) }}" alt="">
                                </div>
                            </div>
                            <div class="media-body ml-3">
                                <a href="">
                                    <h3>{{ $dt->title }}</h3>
                                </a>
                                <small class="text-muted">{{ $dt->sub_title }}</small>
                            </div>
                        </div>
                        <div class="social-avatar">
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
        </div>
    </div>
    
    @endforeach
<!-- [ Main Content ] end -->
</div>
@endsection