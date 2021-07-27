{{-- <div class="h-64 m-6 swiper-container mySwiper">
    <div class="swiper-wrapper">
        @foreach($products as $product)
        <div class="swiper-slide">
            <div class="flex flex-col justify-center my-2 mr-0 transition-all duration-1000 ease-in-out md:mr-2">
                <img class="object-cover h-full max-w-xl rounded-md"
                    src="{{asset('storage/images/'.$product->image)}}"
                    alt="{{ $product->name }}" />
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
    @push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 20,
            slidesPerGroup: 5,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    @endpush --}}
<div class="bg-pink-200">
    <div class="bg-pink-200 swiper-container mySwiper">
        <div class="bg-pink-200 swiper-wrapper">
            @foreach($products as $product)
            <div class="bg-pink-200 swiper-slide">
                <div class="flex flex-col justify-center my-2 mr-0 transition-all duration-1000 ease-in-out bg-pink-200 md:mr-2" >
                    <img class="object-cover h-full max-w-xl bg-pink-200 rounded-md"
                        src="{{ asset('storage/images/'.$product->image )}}"
                        alt="{{ $product->name }}" />
                </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
      @push('scripts')
      <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
      });
      </script>

      @endpush

</div>
