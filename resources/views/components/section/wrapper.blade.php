<div
    class="transition-all duration-500 px-2 ease-in mx-2 md:mx-10 py-6"
    x-data="{ inView: false }"
    x-intersect.threshold.05="inView = true"
    :class="{'translate-y-0 opacity-1 md:delay-75' : inView, 'translate-y-[2rem] opacity-0' : ! inView }"
>
    {{ $slot }}
</div>
