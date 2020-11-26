<div class="mt-4">
    <div class="mb-5 bg-white border">
        <div class="flex px-3 py-2">
            <div class="flex flex-wrap items-center w-5/6">
                <a href="#" class="inline-flex mr-4 font-semibold text-gray-700 hover:text-indigo-600">
                    <img src="https://placehold.it/40" width="40" height="40" alt="Название #1" class="h-6 mr-2">
                    Название #1
                </a>
                <a href="#" class="inline-flex text-sm text-gray-700 hover:text-indigo-600">
                    Имя Автора
                </a>
                <a href="#"
                   class="inline-flex w-full mt-2 ml-0 text-sm text-gray-500 tm-w-initial lg:mt-0 lg:ml-5 hover:text-indigo-600"
                   title="17 декабря 2019 15:25">
                    @{{ formatDate(data.created_at) }}
                </a>
            </div>
            <div class="flex w-1/6">
                <a href="#" class="ml-auto">
                    <x-icons.post-options/>
                </a>
            </div>
        </div>
        <div class="px-3 py-2 pt-0">
            <h3 class="text-2xl font-semibold">
                <a href="#">
                    @{{ data.title }}
                </a>
            </h3>
        </div>
        <div class="mt-4">
            <a href="#">
                <img src="https://placehold.it/700x400" width="700" height="400" alt="">
            </a>
        </div>
        <div class="px-3 py-2 mt-2">
            <p>
                @{{ data.body }}
            </p>
        </div>
        <div class="flex px-3 py-2 mt-2">
            <a href="#" class="inline-flex mr-4 text-gray-500 align-middle hover:text-indigo-600">
                <x-icons.post-comments/>
                <span class="ml-1">
                    111
                </span>
            </a>
            <a href="#" class="inline-flex mr-4 text-gray-500 align-middle hover:text-indigo-600">
                <x-icons.post-favorites/>
                <span class="ml-1">
                    33
                </span>
            </a>
            <div class="inline-flex ml-auto align-middle">
                <a href="#" class="flex items-center text-gray-500 hover:text-red-600">
                    <x-icons.post-downvote/>
                </a>
                <span class="mx-3 font-semibold text-gray-500">
                    99
                </span>
                <a href="#" class="flex items-center text-gray-500 hover:text-green-600">
                    <x-icons.post-upvote/>
                </a>
            </div>
        </div>
    </div>
</div>
