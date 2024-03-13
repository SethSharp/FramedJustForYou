<span class="link link-underline link-underline-black"> {{ $slot }}</span>

<style>
    .link-underline {
        border-bottom-width: 0;
        background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
        background-size: 0 3px;
        background-position: 0 100%;
        background-repeat: no-repeat;
        transition: background-size .5s ease-in-out;
    }

    .link-underline-black {
        background-image: linear-gradient(transparent, transparent), linear-gradient(#ffffff, #ffffff)
    }

    .link-underline:hover {
        background-size: 100% 3px;
        background-position: 0 100%
    }
</style>
