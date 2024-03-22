@section('title', 'Contact - ' . config('app.name'))
@section('description', 'Here is where you can find the contact details & opening times of Framed Just For You as well as where to locate us.')

<x-layouts.app>
    <x-section.wrapper>
        <div class="bg-gradient-to-br from-white to-gray-200 rounded p-2">
            <div class="md:flex gap-4 space-y-4 sm:p-8">
                <div class="md:w-1/2">
                    <div class="h-full">
                        <x-headings.title> Get in touch</x-headings.title>

                        <p class="text-secondary-400 font-medium text-sm sm:text-md mt-6">
                            We would love to know about your enquiries
                        </p>

                        <ul class="mt-6 text-secondary-600 space-y-6">
                            <li class="flex gap-1 sm:gap-4">
                                <x-icons.store-front/>
                                <span class="my-auto"> {{ config('framed.address')  }} </span>
                            </li>
                            <li class="flex gap-1 sm:gap-4">
                                <div class="flex my-auto">
                                    <x-icons.telephone/>
                                </div>
                                <span class="my-auto">
                                    {{ config('framed.contact.telephone')  }}
                                </span>
                            </li>
                            <li class="flex gap-1 sm:gap-4">
                                <div class="flex my-auto">
                                    <x-icons.mobile/>
                                </div>
                                <span class="my-auto">
                                    {{ config('framed.contact.mobile')  }}
                                </span>
                            </li>
                            <li class="flex gap-1 sm:gap-4">
                                <div class="flex my-auto">
                                    <x-icons.envelope/>
                                </div>
                                <span
                                    class="my-auto text-sm sm:text-base"> {{ config('framed.contact.email')  }} </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="md:w-1.2">
                    <x-headings.title> Opening Hours</x-headings.title>

                    <div class="mt-5 space-y-3">
                        @foreach(config('framed.times') as $time)
                            @php
                                $day = \Carbon\Carbon::now()->dayOfWeek;
                            @endphp

                            <div class="flex">
                                <span
                                    class="my-auto {{ $day === $time['value'] ? 'font-semibold text-lg' : ''  }}"> {{ $time['name'] }}</span>
                                <div
                                    class="text-secondary-700 bg-secondary-200 ml-2 p-1 rounded-lg {{ $day === $time['value'] ? 'font-semibold text-lg' : ''  }}">
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
