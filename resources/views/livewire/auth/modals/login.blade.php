<form class="w-full" wire:submit.prevent="authenticate">
    <div class="mb-4">
        <x-forms.elements.input :type="'email'"
                                :id="'email'"
                                :model="'email'"
                                :label="'E-mail'"
                                :placeholder="'E-mail'"
                                :required="'required'"/>
    </div>
    <div class="mb-6">
        <x-forms.elements.input :type="'password'"
                                :id="'password'"
                                :model="'password'"
                                :label="__('front.form.password')"
                                :placeholder="'******************'"
                                :required="'required'"/>
    </div>
    <div class="flex items-center justify-between">
        <button
            class="h-10 px-4 font-semibold text-gray-800 whitespace-no-wrap bg-white border-2 border-gray-300 rounded-lg hover:border-indigo-300 focus:border-indigo-500 focus:outline-none hover:text-indigo-500 focus:shadow-outline"
            type="submit">
            {{ __('front.form.login') }}
        </button>
        <a class="inline-block text-sm font-bold text-gray-500 align-baseline hover:text-indigo-800"
           href="#">
            {{ __('front.form.forgot_password') }}
        </a>
    </div>
    <div class="flex items-center justify-center pt-3 mt-3 border-t">
        <a href="javascript:void(0)"
           class="inline-block text-sm font-bold text-gray-500 align-baseline hover:text-indigo-800"
           @click.prevent="$store.modalAuth.mode = 2">
            {{ __('front.form.create_account') }}
        </a>
    </div>
</form>
