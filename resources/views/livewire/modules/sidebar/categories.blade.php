<div class="border-t-2" v-if="!loading">
        <span class="block p-3 pl-2 text-gray-600 text-sm">
            {{ __('front.categories') }}
        </span>
    <ul>
        @foreach($items as $item)
        <li>
            <a href="#" class="flex p-2 text-gray-700 font-semibold hover:bg-gray-200">
                <img src="/img/category-image-not-found.png" alt="{{ $item->title }}" class="h-6 mr-3">
                {{ $item->title }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
