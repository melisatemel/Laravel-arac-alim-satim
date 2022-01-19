@php
$setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="mb-5">
          <h3 class="footer-heading mb-4">CarLand Hakkında</h3>
           <p> <b>Şirket : </b>{{$setting->company}} <br>
           <b>Telefon : </b>{{$setting->phone}} <br>
           <b>Fax : </b>{{$setting->fax}} <br>
           <b>E-mail : </b>{{$setting->email}} <br>
           <b>Adres : </b>{{$setting->address}} <br>
        </div>



      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="row mb-5">
          <div class="col-md-12">
            <h3 class="footer-heading mb-4">Kurumsal</h3>
          </div>
          <div class="col-md-6 col-lg-6">
            <ul class="list-unstyled">
              <li class="active">
                <a href="{{route('aboutus')}}">Hakkımızda</a>
              </li>
              <li class="active">
                <a href="{{route('references')}}">Referans</a>
              </li>
              <li class="active">
                <a href="{{route('faq')}}">SSS</a>
              </li>
              <li class="active">
                <a href="{{route('contact')}}">Contact</a>
              </li>
              <li class="active">
                <a href="#">İlan Ver</a>
              </li>
            </ul>
          </div>

        </div>


      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
      <h3 class="footer-heading mb-4">Müşteri Hizmetleri</h3>
        <div>
          <p>Her türlü şikayet, görüş veya diğer talepleriniz için müşteri hizmetlerimizden yardım alabilirsiniz.</p>
          <p>{{$setting->phone}}</p>
        </div>
        <h3 class="footer-heading mb-4" style="margin-top: 30px;">Bizi Takip Edin</h3>

        <div>
          @if ($setting->facebook != null)<a href="{{$setting->facebook}}" target="_blank" class="pl-0 pr-3"><span class="icon-facebook"></span></a> @endif
          @if ($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank" class="pl-3 pr-3"><span class="icon-twitter"></span></a> @endif
          @if ($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a> @endif
          @if ($setting->pinterest != null)<a href="{{$setting->pinterest}}" target="_blank" class="pl-3 pr-3"><span class="icon-pinterest"></span></a> @endif

        </div>
        
      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        

      </div
      ><div class="col-lg-4 mb-5 mb-lg-0">
        
      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        
      </div>

    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
          <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | {{$setting->company}} <i class="icon-heart text-danger" aria-hidden="true"></i></a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </div>
</footer>

</div>

<script src="{{ asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery-ui.js"></script>
<script src="{{ asset('assets')}}/js/popper.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/js/mediaelement-and-player.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.stellar.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.countdown.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('assets')}}/js/aos.js"></script>

<script src="{{ asset('assets')}}/js/main.js"></script>