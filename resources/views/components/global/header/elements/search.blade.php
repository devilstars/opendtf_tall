<div class="relative h-full mr-3 ml-auto sm:ml-0"
     @click.away="close"
     x-data="search()">

    <button class="visible sm:hidden h-full flex items-center"
            @click="toggle">
        <x-icons.toggle-search />
    </button>

    <div class="hidden sm:block fixed sm:static w-full left-0 top-header" :class="{'block-important': $store.search.open}">
        <div class="relative text-gray-600">
            <input
                class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 sm:rounded-lg text-sm focus:outline-none hover:border-indigo-200 focus:border-indigo-500"
                type="search" name="search" placeholder="{{ __('front.search') }}"
                v-model="searchString">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <x-icons.search />
            </button>
        </div>
    </div>
</div>
