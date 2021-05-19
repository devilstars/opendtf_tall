<nav class="bg-gray-200 border-b-2 fixed w-full z-10">
    <div class="flex max-w-screen-xl py-3 px-1 md:px-6 w-full mx-auto">
        <div class="md:w-1/4 lg:w-1/5">
            <div class="pl-2 flex items-center flex-shrink-0 text-black mr-6 h-full">
                <a href="{{ route('front.home') }}">
                    <span class="font-bold text-xl tracking-tight">dev3l</span>
                </a>
            </div>
        </div>
        <div class="pl-2 md:pl-6 w-4/5 md:w-3/4 lg:w-4/5">
            <div class="flex h-full">
                <x-global.header.elements.sidebar-toggle />
                <x-global.header.elements.search />
                <x-global.header.elements.add-post />

                @auth
                    <x-global.header.elements.profile />
                @else
                    <x-global.header.elements.auth />
                @endauth
            </div>
        </div>
    </div>
</nav>

{{-- it's here because Turbolinks caches modal windows after redirects --}}
@if (session('closeAuthModal'))
    <script>
        setTimeout(() => {
            Turbolinks.clearCache();
        }, 1)
    </script>
@endif
