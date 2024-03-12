
<footer class="footer" style="background-image: url(../assets/images/landing/img-headerbg.jpg)">
    <div class="container title mb-0">
      <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
        <div class="col-md-8">
          <h2 class="mb-3">Hubungi kami</h2>
          <p class="mb-4 mb-md-0">Lokai PrayaKota-CSIRT</p>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col"><input type="email" class="form-control" placeholder="Enter your email" /></div>
            <div class="col-auto"><button class="btn btn-primary">Subscribe</button></div>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top border-bottom footer-center">
      <div class="container">
        <div class="row">
          <div class="row mb-5 ">
            {{-- <iframe class="shadow " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0042931525518!2d116.24837894062777!3d-8.690732206165388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1708703009723!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
          </div>
          {{-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            
            <img src="{{ asset('img/logo/logo-black.png') }}" alt="image" width="300" class="img-fluid mb-3" />
            <p class="mb-4"
              >Phoenixcoded has gained the trust of over 5.5K customers since 2015, thanks to our commitment to delivering high-quality
              products. Our experienced team players are responsible for managing Able Pro.</p
            >
          </div> --}}
          @foreach ($page as $item)  
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                <h5 class="mb-4">{{ $item->article_category }}</h5>
                <ul class="list-unstyled footer-link">
                  <li><a href="https://themeforest.net/user/phoenixcoded" target="_blank">Profile</a></li>
                  <li><a href="https://themeforest.net/user/phoenixcoded/portfolio" target="_blank">Portfolio</a></li>
                  <li><a href="https://themeforest.net/user/phoenixcoded/followers" target="_blank">Follow Us</a></li>
                  <li><a href="https://phoenixcoded.net/" target="_blank">Website</a></li>
                </ul>
              </div>
              <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.8s">
                <h5 class="mb-4">{{ $item->latest_article }}</h5>
                <ul class="list-unstyled footer-link">
                  {{-- <td> <a href="{{ Storage::url('public/panduan/'.$item->file) }}"
                    target="_blank">{{ $item->name }}</a> </td> --}}
                    {{-- @foreach ($artikel as $item) --}}
                  {{-- <li><a href="" target="_blank">{{ $item->title }}</a></li> --}}
                  {{-- @endforeach --}}
                  {{-- <li><a href="https://codedthemes.gitbook.io/able-pro-bootstrap/" target="_blank">Documentation</a></li>
                  <li><a href="https://codedthemes.gitbook.io/able-pro-bootstrap/roadmap/" target="_blank">Feature Request</a></li>
                  Explore Com<li><a href="https://codedthemes.gitbook.io/able-pro-bootstrap/roadmap/" target="_blank">RoadMap</a></li
                  >ponents
                  <li><a href="https://phoenixcoded.authordesk.app/" target="_blank">Support</a></li>
                  <li><a href="https://themeforest.net/user/phoenixcoded#contact" target="_blank">Email Us</a></li> --}}
                </ul>
              </div>
              @endforeach

              @foreach ($kontak as $item)
              <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.8s">
                <h5 class="mb-4">{{ $item->heading }}</h5>  
                    <ul class="list-unstyled">
                      <li>{{ $item->alamat }}</li>
                      <li>{{ $item->kontak }}</li>
                    </ul>
              </div>
              <div class="col-md-3 map">{!! $item->map !!}</div>
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col my-1 wow fadeInUp" data-wow-delay="0.4s">
          <p class="mb-0">© Handcrafted by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank">Phoenixcoded</a></p>
        </div>
        <div class="col-auto my-1">
          <ul class="list-inline footer-sos-link mb-0">
            <li class="list-inline-item wow fadeInUp" data-wow-delay="0.4s"
              ><a href="https://fb.com/phoenixcoded">
                <svg class="pc-icon">
                  <use xlink:href="#custom-facebook"></use>
                </svg> </a
            ></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
