<div
    class="transition-all duration-500 px-2 ease-in lg:w-4/5 mx-auto py-6"
    x-data="{ inView: false }"
    x-intersect.threshold.05="inView = true"
    :class="{'translate-y-0 opacity-1 md:delay-75' : inView, 'translate-y-[2rem] opacity-0' : ! inView }"
>
    {{ $slot }}
</div>
