<div v-if="showModal" class="fixed inset-0 z-30">
    <!--       background -->
    <div class="bg-black opacity-25 fixed inset-0 w-full h-full z-20" @click="setShowModalOutside"/>
    <!--          -->
    <main class="flex flex-col items-center justify-center h-full w-full">
        <transition name="fade-up-down">
            <div v-if="showModal" class="modal-wrapper w-full max-w-2xl items-center z-30 p-3">
                <div
                    class="modal min-w-full max-w-2xl bg-white max-h-screen shadow-lg flex-row rounded relative overflow-hidden">

                    <div class="modal-header px-5 py-3 bg-gray-200 border-b-2 rounded-t flex items-start">
                        <h5 class="text-black-500 text-xl uppercase">
                            {{ __('front.login') }}
                        </h5>
                        <button class="ml-auto mt-2 text-gray-500 hover:text-indigo-500"
                                @click="setShowModalOutside">
                            <svg class="h-4 w-4 fill-current" viewBox="0 0 329.26933 329"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body w-full h-full flex">
                        <div class="hidden sm:block sm:w-1/3 bg-no-repeat bg-cover bg-center border-r-2"
                             style="background-image: url('/img/auth-bg.jpg')">
                        </div>

                        <!-- login -->
                        <template v-if="mode === 0">
                            <div class="w-full sm:w-2/3 p-5 tm-max-h-screen overflow-y-auto scroll-thin">
                                <form class="w-full" @keyup.enter="doAuth(request)">
                                    <div class="mb-4">
                                        <app-form-input type="email"
                                                        :data="request"
                                                        :errors="errors"
                                                        id="email"
                                                        label="E-mail" placeholder="E-mail"/>
                                    </div>
                                    <div class="mb-6">
                                        <app-form-input type="password"
                                                        :data="request"
                                                        :errors="errors"
                                                        id="password"
                                                        label="Пароль" placeholder="******************"/>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button
                                            class="border-2 rounded-lg border-gray-300 bg-white hover:border-indigo-300 focus:border-indigo-500 focus:outline-none text-gray-800 font-semibold h-10 px-4  hover:text-indigo-500 whitespace-no-wrap focus:outline-none focus:shadow-outline"
                                            type="button">
                                            Войти
                                        </button>
                                        <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-indigo-800"
                                           href="#">
                                            Забыли пароль?
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-center border-t pt-3 mt-3">
                                        <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-indigo-800"
                                           href="#" @click.prevent="mode = 1">
                                            Создать аккаунт
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </template>
                        <!-- end of login -->

                        <!-- register -->
                        <template v-if="mode === 1">
                            <div class="w-full sm:w-2/3 p-5 tm-max-h-screen overflow-y-auto scroll-thin">
                                <form class="w-full" @keyup.enter="doRegister(request)">
                                    <div class="mb-4">
                                        <app-form-input type="email"
                                                        :data="request"
                                                        :errors="errors"
                                                        id="email"
                                                        label="E-mail" placeholder="E-mail"/>
                                    </div>
                                    <div class="mb-6">
                                        <div class="mb-4">
                                            <app-form-input type="text"
                                                            :data="request"
                                                            :errors="errors"
                                                            id="name"
                                                            label="Ник" placeholder="Ник"/>
                                        </div>
                                        <app-form-input type="password"
                                                        :data="request"
                                                        :errors="errors"
                                                        id="password"
                                                        label="Пароль" placeholder="******************"/>
                                    </div>
                                    <div class="mb-6">
                                        <app-form-input type="password"
                                                        :data="request"
                                                        :errors="errors"
                                                        id="password_confirmation"
                                                        label="Пароль ещё раз" placeholder="******************"/>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button
                                            class="border-2 rounded-lg border-gray-300 bg-white hover:border-indigo-300 focus:border-indigo-500 focus:outline-none text-gray-800 font-semibold h-10 px-4  hover:text-indigo-500 whitespace-no-wrap focus:outline-none focus:shadow-outline"
                                            type="button"
                                            @click="doRegister(request)">
                                            Зарегистрироваться
                                        </button>
                                    </div>
                                    <div class="flex items-center justify-center border-t pt-3 mt-3">
                                        <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-indigo-800"
                                           href="#" @click.prevent="mode = 0">
                                            Войти
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </template>
                        <!-- end of register -->

                    </div>
                </div>
            </div>
        </transition>


    </main>
</div>
