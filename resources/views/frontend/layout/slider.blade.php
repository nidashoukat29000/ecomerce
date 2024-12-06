<section class="slider-area slider-style-2">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">	
            <img src="{{asset('assets/img/slider/slider-2/1.jpg')}}" alt="" title="#slider-direction-1"  />
            <img src="{{asset('assets/img/slider/slider-2/2.jpg')}}" alt="" title="#slider-direction-2"  />
            <img src="{{asset('assets/img/slider/slider-2/3.jpg')}}" alt="" title="#slider-direction-3"  />
        </div>
        @foreach ($collection as $item)     
        
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-lfl s-tb slider-1">
                <div class="title-container s-tb-c title-compress">
                    <div class="layer-1">
                        <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h3 class="slider-title3 text-uppercase mb-0" >welcome to our</h3>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                            <h2 class="slider-title1 text-uppercase mb-0"><span class="d-none d-md-block">elegent </span>  furniture</h2>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
                            <h2 class="slider-title2 text-uppercase" >gallery 2021</h2>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-duration="3.5s" data-wow-delay="0.5s">
                            <a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        @endforeach

    </div>
</section>