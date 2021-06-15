<div class="ml-3" x-data="profileMenu()" @click.away="close">
    <div class="relative w-10 h-10"
         v-click-outside="handleFocusOut">
        <div class="border-2 border-indigo-200 rounded cursor-pointer hover:border-indigo-300" @click.prevent="open">
            <img src="http://placehold.it/40" alt="">
        </div>

        <div class="absolute right-0 w-40 mt-1 bg-white border"
             x-show="$store.profileMenu.open"
             style="display: none"
        >
            <ul>
                <li>
                    <a href="#" class="block px-2 py-1 text-sm hover:bg-gray-100">Элемент #01</a>
                </li>
                <li>
                    <a href="#" class="block px-2 py-1 text-sm bg-gray-200 hover:bg-gray-100">Элемент #02</a>
                </li>
                <li>
                    <a href="#" class="block px-2 py-1 text-sm hover:bg-gray-100">Элемент #03</a>
                </li>
                <li>
                    <a href="#" class="block px-2 py-1 text-sm hover:bg-gray-100">Элемент #04</a>
                </li>
                @can('dashboard_view')
                    <li>
                        <a href="{{ route('front.dashboard') }}" class="block px-2 py-1 text-sm hover:bg-gray-100">{{ __('front.nav.dashboard') }}</a>
                    </li>
                @endcan
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="block w-full px-2 py-1 text-sm text-left bg-red-100 rounded-none hover:bg-gray-100">
                            {{ __('front.nav.logout') }}
                        </button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</div>
