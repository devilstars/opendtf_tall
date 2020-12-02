<div class="fixed inset-0 z-30"
     x-show="$store.modalAuth.open"
     style="display: none" {{-- x-if can't be used here as livewire will loose connection with backend --}}
     x-transition:enter="transition ease-out duration-100"
     x-transition:enter-start="opacity-0 transform"
     x-transition:enter-end="opacity-100 transform"
     x-transition:leave="transition ease-in duration-100"
     x-transition:leave-start="opacity-100 transform"
     x-transition:leave-end="opacity-0 transform">
    <!--       background -->
    <div class="fixed inset-0 z-20 w-full h-full bg-black bg-opacity-25"/>

    <main class="flex flex-col items-center justify-center w-full h-full">
        <div class="z-30 items-center w-full max-w-2xl p-3 modal-wrapper" @click.away="closeModal">
            <div
                class="relative flex-row max-w-2xl max-h-screen min-w-full overflow-hidden bg-white rounded shadow-lg modal">

                <div class="flex items-start px-5 py-3 bg-gray-200 border-b-2 rounded-t modal-header">
                    <h5 class="text-xl uppercase text-black-500">
                        {{ __('front.login') }}
                    </h5>
                    <button class="mt-2 ml-auto text-gray-500 hover:text-indigo-500"
                            @click="closeModal">
                        <x-icons.close/>
                    </button>
                </div>
                <div class="flex w-full h-full modal-body">
                    <div class="hidden bg-center bg-no-repeat bg-cover border-r-2 sm:block sm:w-1/3"
                         style="background-image: url('/img/auth-bg.jpg')">
                    </div>

                    <!-- login -->
                    <div x-show="$store.modalAuth.mode === 1"
                         class="w-full p-5 overflow-y-auto sm:w-2/3 max-h-screen scroll-thin">
                        <livewire:auth.modals.login/>
                    </div>
                    <!-- end of login -->

                    <!-- register -->
                    <div x-show="$store.modalAuth.mode === 2"
                         class="w-full p-5 overflow-y-auto sm:w-2/3 max-h-screen scroll-thin">
                        <livewire:auth.modals.register/>
                    </div>
                    {{-- end of register --}}
                {{--                            <div class="w-full p-5 overflow-y-auto sm:w-2/3 tm-max-h-screen scroll-thin">--}}
                {{--                                <form class="w-full" @keyup.enter="doRegister(request)">--}}
                {{--                                    <div class="mb-4">--}}
                {{--                                        <app-form-input type="email"--}}
                {{--                                                        :data="request"--}}
                {{--                                                        :errors="errors"--}}
                {{--                                                        id="email"--}}
                {{--                                                        label="E-mail" placeholder="E-mail"/>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-6">--}}
                {{--                                        <div class="mb-4">--}}
                {{--                                            <app-form-input type="text"--}}
                {{--                                                            :data="request"--}}
                {{--                                                            :errors="errors"--}}
                {{--                                                            id="name"--}}
                {{--                                                            label="Ник" placeholder="Ник"/>--}}
                {{--                                        </div>--}}
                {{--                                        <app-form-input type="password"--}}
                {{--                                                        :data="request"--}}
                {{--                                                        :errors="errors"--}}
                {{--                                                        id="password"--}}
                {{--                                                        label="Пароль" placeholder="******************"/>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mb-6">--}}
                {{--                                        <app-form-input type="password"--}}
                {{--                                                        :data="request"--}}
                {{--                                                        :errors="errors"--}}
                {{--                                                        id="password_confirmation"--}}
                {{--                                                        label="Пароль ещё раз" placeholder="******************"/>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="flex items-center justify-between">--}}
                {{--                                        <button--}}
                {{--                                            class="h-10 px-4 font-semibold text-gray-800 whitespace-no-wrap bg-white border-2 border-gray-300 rounded-lg hover:border-indigo-300 focus:border-indigo-500 focus:outline-none hover:text-indigo-500 focus:shadow-outline"--}}
                {{--                                            type="button"--}}
                {{--                                            @click="doRegister(request)">--}}
                {{--                                            Зарегистрироваться--}}
                {{--                                        </button>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="flex items-center justify-center pt-3 mt-3 border-t">--}}
                {{--                                        <a class="inline-block text-sm font-bold text-gray-500 align-baseline hover:text-indigo-800"--}}
                {{--                                           href="#" @click.prevent="mode = 0">--}}
                {{--                                            Войти--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                </form>--}}
                {{--                            </div>--}}
                <!-- end of register -->

                </div>
            </div>
        </div>
    </main>
</div>
