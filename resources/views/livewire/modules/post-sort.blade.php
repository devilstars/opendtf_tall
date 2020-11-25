<div class="flex flex-wrap flex-col-reverse md:flex-row bg-white px-3 py-2 border"
     x-data="postSort()"
     @click.away="hideAway">
    <div class="w-full md:w-1/3 relative">
        <a href="#"
           class="inline-flex items-center text-sm outline-none capitalize"
           @click.prevent="toggle"
           tabindex="0">
            {{ __('front.post_sort.popular') }}
            <x-icons.caret-down />
        </a>
        <div class="bg-white border w-40 absolute mt-1 hidden" :class="{'hidden': !open}">
            <ul>
                <li>
                    <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">{{ __('front.post_sort.new') }}</a>
                </li>
                <li>
                    <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100 bg-gray-200">{{ __('front.post_sort.popular') }}</a>
                </li>
                <li>
                    <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">{{ __('front.post_sort.day') }}</a>
                </li>
                <li>
                    <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">{{ __('front.post_sort.week') }}</a>
                </li>
                <li>
                    <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">{{ __('front.post_sort.month') }}</a>
                </li>
                <li>
                    <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">{{ __('front.post_sort.all_time') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full md:w-2/3">
        <x-modules.tag-cloud />
    </div>
</div>
