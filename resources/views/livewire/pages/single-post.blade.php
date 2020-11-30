<div>
    <div class="bg-white border mb-5 mt-5">

        <div class="flex px-3 py-2">
            <div class="w-5/6 flex-wrap flex items-center">
                <a href="#" class="inline-flex mr-5 text-gray-700 font-semibold hover:text-purple-600">
                    <img src="https://placehold.it/40" width="40" height="40" alt="Название #1" class="h-6 w-6 mr-2">
                    Название #1
                </a>
                <a href="#" class="inline-flex mr-5 text-sm text-gray-700 hover:text-purple-600">
                    Имя Автора
                </a>
                <span class="inline-flex mr-5 text-sm text-gray-500" title="{{ $item->created_at->format('d.m.Y h:i') }}">
                    {{ $item->created_at->diffForHumans() }}
                </span>
                <span class="inline-flex text-sm text-gray-500 items-center" title="Просмотров">
                    <x-icons.post-views />
                    <span class="ml-1">
                        74511
                    </span>
                </span>
            </div>
            <div class="w-1/6 flex">
                <a href="#" class="ml-auto">
                    <x-icons.post-options />
                </a>
            </div>
        </div>

        <div class="flex items-center px-3 py-2">
            <h1 class="font-semibold text-2xl text-gray-800">{{ $item->title }}</h1>
        </div>

        <div class="flex items-center px-3 py-2 text-gray-700">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim eos id impedit iste mollitia
                necessitatibus quibusdam? Debitis ipsum itaque magnam nisi porro praesentium rem repellat tempore!
                Nulla,
                officiis, similique.
            </p>
        </div>

        <div class="flex items-center px-3 py-2 text-gray-700">
            <img class="w-full h-auto" src="https://placehold.it/800x400" width="800" height="400" alt="">
        </div>

        <div class="px-3 py-2 text-gray-700">
            <p class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid architecto deleniti dolores
                esse
                fuga, illum iste maiores molestias nemo nesciunt nisi nobis odio quae reprehenderit saepe sunt unde,
                voluptatem?
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid architecto deleniti dolores
                esse
                fuga, illum iste maiores molestias nemo nesciunt nisi nobis odio quae reprehenderit saepe sunt unde,
                voluptatem?
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid architecto deleniti dolores
                esse
                fuga, illum iste maiores molestias nemo nesciunt nisi nobis odio quae reprehenderit saepe sunt unde,
                voluptatem?
            </p>
            <ul class="list-disc pl-5 mb-3">
                <li><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            </ul>
            <ol class="list-decimal pl-5 mb-3">
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            </ol>
        </div>

        <div class="px-3 py-2 text-gray-700">
            <tag-cloud/>
        </div>

        <div class="mt-2 px-3 py-2 flex">
            <a href="#" class="inline-flex align-middle text-gray-500 hover:text-purple-600 mr-4">
                <x-icons.post-favorites />
                <span class="ml-1">
                    33
                </span>
            </a>
            <div class="inline-flex align-middle ml-auto">
                <a href="#" class="flex items-center text-gray-500 hover:text-red-600">
                    <x-icons.post-downvote />
                </a>
                <span class="mx-3 font-semibold text-gray-500">
                    99
                </span>
                <a href="#" class="flex items-center text-gray-500 hover:text-green-600">
                    <x-icons.post-upvote />
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white border mb-5 mt-5">
        {{--        <post-comments/>--}}
    </div>
</div>
