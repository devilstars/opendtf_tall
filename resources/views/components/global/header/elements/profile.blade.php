<div class="ml-3">
    <div class="h-10 w-10 relative"
         v-click-outside="handleFocusOut">
        <div class="border-2 border-indigo-200 rounded cursor-pointer hover:border-indigo-300" @click.prevent="toggleDropdown">
            <img src="https://placehold.it/40" alt="">
        </div>
        <template v-if="showDropdown">
            <div class="bg-white border w-40 absolute mt-1 right-0">
                <ul>
                    <li>
                        <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">Элемент #01</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100 bg-gray-200">Элемент #02</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">Элемент #03</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">Элемент #04</a>
                    </li>
                    <li v-if="checkAbilities(['user:list'])">
                        <nuxt-link :to="{ name: 'admin-users' }" class="text-sm px-2 py-1 block hover:bg-gray-100">
                            Пользователи
                        </nuxt-link>
                    </li>
                    <li>
                        <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100 bg-red-100" @click.prevent="logout">Выход</a>
                    </li>
                </ul>
            </div>
        </template>
    </div>
</div>
