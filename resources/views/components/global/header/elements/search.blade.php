<div class="relative h-full mr-3 ml-auto sm:ml-0"
     v-click-outside="setShowSearchOutside">

    <button class="visible sm:hidden h-full flex items-center"
            @click="toggleShowSearch">
        <x-icons.toggle-search />
    </button>

    <div class="hidden sm:block fixed sm:static w-full left-0 top-header" :class="{'tm-block-important': getShowSearch}">
        <div class="relative text-gray-600">
            <input
                class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 sm:rounded-lg text-sm focus:outline-none hover:border-indigo-200 focus:border-indigo-500"
                type="search" name="search" placeholder="Поиск"
                v-model="searchString">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <x-icons.search />
            </button>
        </div>
    </div>
</div>
