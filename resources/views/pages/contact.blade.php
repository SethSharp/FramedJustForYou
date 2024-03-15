<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
{{--            {{ \Carbon\Carbon::now()->dayOfWeek  }}--}}

            <div class="bg-gradient-to-br from-white to-gray-200 rounded p-4">
                <div class="flex gap-4 mt-6">
                    <div class="w-1/2">
                        <div class="p-8 h-full">
                            <div>
                                <x-headings.title> Get in touch </x-headings.title>

                                <p class="text-secondary-400 font-medium text-md mt-6">
                                    We would love to know about your enquiries
                                </p>

                                <ul class="mt-6 text-secondary-600 space-y-6">
                                    <li class="flex gap-4">
                                        <x-icons.store-front/>
                                        <span class="my-auto"> {{ config('framed.address')  }} </span>
                                    </li>
                                    <li class="flex gap-4">
                                        <div class="flex my-auto">
                                            <x-icons.telephone />
                                        </div>
                                        <span class="my-auto">
                                            {{ config('framed.contact.telephone')  }}
                                        </span>
                                    </li>
                                    <li class="flex gap-4">
                                        <div class="flex my-auto">
                                            <x-icons.mobile />
                                        </div>
                                        <span class="my-auto">
                                            {{ config('framed.contact.mobile')  }}
                                        </span>
                                    </li>
                                    <li class="flex gap-4">
                                        <div class="flex my-auto">
                                            <x-icons.envelope />
                                        </div>
                                        <span class="my-auto">
                                            {{ config('framed.contact.email')  }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 shadow">
                        <x-contact.map/>
                    </div>
                </div>
            </div>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
