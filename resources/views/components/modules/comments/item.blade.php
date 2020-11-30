<div class="pt-2 mb-2">
    <div class="flex items-center">
        <a class="d-block" href="#">
            <img src="https://placehold.it/40" width="40" height="40" class="h-6 w-6 mr-3" alt="">
        </a>
        <div class="flex flex-col">
            <div class="flex items-center">
                <a href="#" class="text-xs font-semibold text-gray-700 hover:text-indigo-700">
                    {{ $comment['author'] }}
                </a>
                <a href="#" class="ml-4">
                    <x-icons.comment-replied-to />
                </a>
            </div>
            <span class="text-xs text-gray-400">
                {{ $comment['date'] }}
            </span>
        </div>
    </div>
    <div class="text-sm mt-1">
        <p>{{ $comment['text'] }}</p>
    </div>
    <div class="flex items-center">
        <a href="#" class="text-xs font-semibold text-gray-500 hover:text-indigo-700">{{ __('front.comments.reply') }}</a>
        <a href="#" class="ml-3 text-xs font-semibold text-gray-300 hover:text-indigo-700" title="{{ __('front.comments.report') }}">...</a>
    </div>
</div>
