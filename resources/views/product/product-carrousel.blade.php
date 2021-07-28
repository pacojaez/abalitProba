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
        <div class="bg-pink-200 swiper-pagination"></div>
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
