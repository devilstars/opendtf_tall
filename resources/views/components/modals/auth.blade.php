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
                        <template x-if="$store.modalAuth.mode === 1">
                            <span>
                                {{ __('front.form.login') }}
                            </span>
                        </template>
                        <template x-if="$store.modalAuth.mode === 2">
                            <span>
                                {{ __('front.form.create_account') }}
                            </span>
                        </template>
                    </h5>
                    <button class="mt-2 ml-auto text-gray-500 hover:text-indigo-500"
                            @click="closeModal">
                        <x-icons.close/>
                    </button>
                </div>
                <div class="flex w-full max-h-inherit">
                    <div class="hidden bg-center bg-no-repeat bg-cover border-r-2 sm:block sm:w-1/3"
                         style="background-image: url('/img/auth-bg.jpg')">
                    </div>

                    <!-- login -->
                    <div x-show="$store.modalAuth.mode === 1"
                         class="w-full p-5 overflow-y-auto sm:w-2/3 scroll-thin modal-body-height-fix">
                        <livewire:auth.modals.login/>
                    </div>
                    <!-- end of login -->

                    <!-- register -->
                    <div x-show="$store.modalAuth.mode === 2"
                         class="w-full p-5 overflow-y-auto sm:w-2/3 scroll-thin modal-body-height-fix">
                        <livewire:auth.modals.register/>
                    </div>
                    <!-- end of register -->

                </div>
            </div>
        </div>
    </main>
</div>
