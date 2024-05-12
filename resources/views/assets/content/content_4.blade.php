<section id="reviews" class="bg-white py-16 px-4">
    <div class="container mx-auto max-w-screen-xl px-4 testimonials">
        <div class="text-center mb-12 lg:mb-20">
            <h2 class="text-5xl font-bold mb-4 text-white">What Our Clients Say</h2>
            <p class="text-lg text-primary font-semibold">Discover the experiences of our satisfied clients</p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex flex-col space-y-4">
                    <img class="w-20 h-20 rounded-full mx-auto object-cover"
                        src="{{asset('images/testimonials-1.jpg')}}" alt="User Image">
                    <h3 class="text-lg font-medium text-gray-700 text-primary">John Doe</h3>
                    <h6 class="text-base text-gray-500 max-w-[800px] text-white">
                        "The service provided by Github exceeded my expectations. I was impressed by their
                        professionalism and
                        attention to detail. I highly recommend their services."
                    </h6>
                </div>

                <div class="swiper-slide flex flex-col space-y-4">
                    <img class="w-20 h-20 rounded-full mx-auto object-cover"
                        src="{{asset('images/testimonials-2.jpg')}}" alt="User Image">
                    <h3 class="text-lg font-medium text-gray-700 text-primary">John Doe</h3>
                    <h6 class="text-base text-gray-500 max-w-[800px] text-white">
                        "Working with Blue star team was an absolute pleasure. They were responsive, reliable, and
                        delivered exceptional results. I look forward to collaborating with them again in the
                        future."
                    </h6>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>