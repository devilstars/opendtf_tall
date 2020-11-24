<div class="leading-none ml-3" x-data="modalAuth()">
    <button class="text-gray-800 inline-flex items-center h-10 font-semibold hover:text-indigo-500 group"
            @click.prevent="openModal">
        <x-icons.auth />
        <span class="hidden sm:inline-block">
            {{ __('front.login') }}
        </span>
    </button>

    <x-modals.auth/>
</div>
