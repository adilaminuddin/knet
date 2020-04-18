<section class="services blog sec-normal pt-5">
    <div class="container">
      <div class="service-wrap">
        <div class="row">

        @foreach($posts as $p)
          <div class="col-md-4">
            <img data-src="{{ asset('img/postpic/'.$p->featured) }}" class="img-responsive lazyload" alt="photo">
            <div class="service-section m-0">
              <div class="plans badge feat bg-pink">{{ $p->category->name }}</div>
              <div class="title mt-0">{{ $p->title }}</div>
              <p class="subtitle">@php echo substr($p->content,0,150); @endphp</p>
              <hr>
              <div class="small">
                <span class="icon-inverse text-dark"></span>
                @foreach($p->tags as $t)
                <a href="" class="badge badge-success">{{ $t->name }}</a>
                {{-- <span class="pl-2 pr-4">WHMCS RTL version available</span> --}}
                @endforeach
              </div>
              <a href="{{ route('artikel.detail',$p->slug) }}" target="_blank" class="btn btn-default-yellow-fill">See Now</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>