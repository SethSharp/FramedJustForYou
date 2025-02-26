<a href="{{route('home')}}">
    @if (now()->month === 12)
        <img
            src="{{ asset('images/christmas-logo.png') }}"
            alt="FramedJustForYou logo"
            aria-label="Application logo"
            class="object-cover w-full"
        />
    @else
        <img
            src="{{ asset('images/logo.png') }}"
            alt="FramedJustForYou logo"
            aria-label="Application logo"
            class="object-cover w-full"
        />
    @endif

</a>
