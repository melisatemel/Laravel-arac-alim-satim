<div class="slide-one-item home-slider owl-carousel">
@foreach($slider as $rs)
      <div class="site-blocks-cover overlay" style="background-image: url('{{Storage::url($rs->image)}}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">{{$rs->city}}</span>
              <h1 class="mb-2">{{$rs->title}}</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">{{$rs->price}} TL</strong></p>
              <p><a href="{{route('arac',['id'=>$rs->id])}}" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Detay Gör</a></p>
            </div>
          </div>
        </div>
      </div>  
      @endforeach
</div>


<!-- Slider henüz çalışmıyor-->