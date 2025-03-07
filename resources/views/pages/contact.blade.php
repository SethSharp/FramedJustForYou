@section('title', 'Contact - ' . config('app.name'))
@section('description', 'Here is where you can find the contact details & opening times of Framed Just For You as well as where to locate us.')

<x-layouts.app>
    <x-section.wrapper>
        <div class="bg-gradient-to-br from-white to-gray-200 rounded p-1 sm:p-2">
            <div class="md:flex gap-4 space-y-2 sm:space-y-0 sm:p-8">
                <div class="md:w-1/2">
                    <div class="h-full">
                        <x-headings.title> Get in touch</x-headings.title>

                        <ul class="mt-6 text-sm sm:text-base text-secondary-600 space-y-6">
                            <li class="flex gap-1 sm:gap-2">
                                <x-icons.store-front/>
                                <span class="my-auto"> {{ config('framed.address')  }} </span>
                            </li>
                            <li class="flex gap-1 sm:gap-2">
                                <div class="flex my-auto">
                                    <x-icons.telephone/>
                                </div>
                                <span class="my-auto">
                                    {{ config('framed.contact.telephone')  }}
                                </span>
                            </li>
                            <li class="flex gap-1 sm:gap-2">
                                <div class="flex my-auto">
                                    <x-icons.mobile/>
                                </div>
                                <span class="my-auto">
                                    {{ config('framed.contact.mobile')  }}
                                </span>
                            </li>
                            <li class="flex gap-1 sm:gap-2">
                                <div class="flex my-auto">
                                    <x-icons.envelope/>
                                </div>
                                <span
                                    class="my-auto text-sm sm:text-base"> {{ config('framed.contact.email')  }} </span>
                            </li>
                            <li>
                                <div class="flex gap-1">
                                    <a
                                        href="https://www.facebook.com/framedjustforyou/"
                                        aria-label="Framed Just For You Facebook"
                                        class="text-white cursor-pointer"
                                    >
                                        <span class="sr-only"> Facebook </span>
                                        <x-icons.socials.facebook class="!fill-primary-600"/>
                                    </a>

                                    <a
                                        href="https://www.instagram.com/framedjust4u/"
                                        aria-label="Framed Just For You Instagram"
                                        class="text-white cursor-pointer"
                                    >
                                        <span class="sr-only"> Instagram </span>
                                        <x-icons.socials.instagram class="!fill-primary-600"/>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <x-headings.title> Opening Hours</x-headings.title>

                    <div class="mt-5 space-y-3 text-sm sm:text-base">
                        @foreach(config('framed.times') as $time)
                            @php
                                $day = \Carbon\Carbon::now()->dayOfWeek;
                            @endphp

                            <div class="flex">
                                <span
                                    class="my-auto {{ $day === $time['value'] ? 'font-semibold text-lg' : ''  }}"> {{ $time['name'] }}</span>
                                <div
                                    class="text-secondary-700 bg-secondary-200 ml-2 text-sm my-auto p-1.5 rounded-lg {{ $day === $time['value'] ? 'font-semibold text-lg' : ''  }}">
                                    <p> {{ $time['time'] }} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-4 sm:mt-0 sm:m-6">
                <x-contact.map/>
            </div>
        </div>
    </x-section.wrapper>
</x-layouts.app>
