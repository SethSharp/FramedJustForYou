<div
    class="flex flex-col gap-5 my-12 transition-all duration-500 ease-in"
    x-data="{ inView: false }"
    x-intersect.threshold.10="inView = true"
    :class="{'translate-y-0 opacity-1 md:delay-75' : inView, 'translate-y-[4rem] opacity-0' : ! inView }"
>
    {{ $slot }}
</div>
