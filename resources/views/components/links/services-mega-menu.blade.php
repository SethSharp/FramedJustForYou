<div
    x-data="{open: false}"
>
    <div x-on:click="open = !open" x-transition class="cursor-pointer text-white">
        <div class="flex text-2xl md:text-xl mt-1.5">
            Services

            <div x-bind:class="{ 'rotate-180': open }" class=" ml-0.5 transform duration-300">
                <x-icons.chevron-down/>
            </div>
        </div>
    </div>

    <div class="inset-0 absolute z-50 sm:flex" x-show="open" x-on:click="open = false">
        <div class="mt-16 w-4/5 mx-auto shadow-2xl">
            <div
                class="bg-secondary-200 rounded-xl shadow-xl px-4 mx-auto mt-2 py-6 md:flex hidden flex-col sm:flex-row max-w-7xl w-full shadow-lg"
            >
                <div class="flex w-full">
                    <div class="grid grid-cols-4 gap-y-4 w-full border-gray-200">
                        Columns here
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
