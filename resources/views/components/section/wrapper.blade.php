<div
    class="flex flex-col gap-5 transition-all duration-500 ease-in"
    x-data="{
        inView: false,
        inMe() {
            console.log('in me')
        }
    }"
    x-intersect.threshold.10="inMe()"
>
    <div x-show="inView" x-transition>
        {{ $slot }}
    </div>
</div>
