<header class="header">
    {{-- <a href="#home" class="logo"> <img src="{{ asset('img/bg/logo/logo-white.png') }}" width="380"
        alt=""></span></a> --}}
<i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
        <a href="{{ route('home') }}" class="active">Home</a>
        <a href="{{ route('profile') }}" >Profile</a>
        <a href="{{ route('artikel') }}">Artikel</a>
        <a href="{{ route('rfc') }}">RFC2350</a>
        <a href="{{ route('layanan') }}">Layanan</a>
        <a href="{{ route('panduan') }}">Panduan</a>
        <a href="{{ route('kontak') }}">Kontak</a>
    </nav>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    } else {
    document.getElementById("navbar").style.top = "-50px"; 
    }
    prevScrollpos = currentScrollPos;
}
</script>
</header>