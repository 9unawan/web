<nav class="navbar navbar-expand-md navbar-light default">
    <div class="container">
        @foreach ($page as $item)
        <a class="navbar-brand" href="/">
            {{-- <link rel="logo" src="{{ Storage::url('public/page/logo'.$item->favicon) }}"alt="" width="120
            "/> --}}
            <img src="{{ Storage::url('public/page/logo/'.$item->logo) }}" width="300" type="image/x-icon"/>
        </a>
        @endforeach
        <button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item px-1">
                    <a class="nav-link" href="{{ route('home') }}" >Home</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="{{ route('profile') }}" >Profile</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="{{ route('artikel') }}" >Artikel</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="{{ route('rfc') }}" >Rfc235</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="{{ route('layanan') }}" >Layanan</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="{{ route('panduan') }}" >Panduan</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="{{ route('kontak') }}" >Kontak</a>
                </li>
                <li class="nav-item px-1 me-2 mb-2 mb-md-0">
                    <a class="btn btn-icon btn-light-dark" target="_blank" href="https://www.lapor.go.id/account/register"><i class="ti ti-logout"></i></a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
