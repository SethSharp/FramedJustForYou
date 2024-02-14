<div id="image-carousel" class="splide h-[400px]" aria-label="Store Image Carousel">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <x-image src="store/front.png" additionalClass="object-none w-full h-[400px] w-full" alt="" />
            </li>
            <li class="splide__slide">
                <x-image src="store/gallery-side.png" additionalClass="object-none w-full h-[400px] w-full" alt="" />
            </li>
            <li class="splide__slide">
                <x-image src="store/framing-bench.png" additionalClass="object-none w-full h-[400px] w-full" alt="" />
            </li>
        </ul>
    </div>
</div>

<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-carousel', {
            heightRatio: 0.5,
            autoplay: true,
            interval: 5000,
            pauseOnHover: false,
            arrows: false,
            pagination: false,
            drag: false,
            type: 'loop',
        }).mount();
    } );
</script>
