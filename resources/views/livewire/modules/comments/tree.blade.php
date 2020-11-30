<div>
    <div class="flex items-center px-3 py-2">
        <span class="text-lg font-semibold text-gray-700">
            500 комментариев
        </span>
    </div>

    <div class="flex items-center px-3 pt-2 border-b">
        <ul class="flex text-sm font-semibold">
            <li class="pb-2 mr-3 border-b-2 border-indigo-600">
                {{ __('front.comments.by_popularity') }}
            </li>
            <li class="border-b-2 border-transparent cursor-pointer hover:border-b-2 hover:border-indigo-600">
                {{ __('front.comments.by_order') }}
            </li>
        </ul>
    </div>

    <div class="flex items-center px-3 py-2">
        @if (!count($items))
            <div class="text-sm font-semibold text-gray-600">{{ __('front.comments.no_comments') }}</div>
        @else
            <x-modules.comments.level :level="$items" />
        @endif
    </div>
</div>
