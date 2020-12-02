<div>
    <form class="w-full">
        <div class="mb-4">
            <x-forms.elements.input :type="'email'"
                                    :id="'email-reg'"
                                    :model="'email'"
                                    :label="'E-mail'"
                                    :placeholder="'E-mail'"
                                    :required="'required'"/>
        </div>
        <div class="mb-6">
            <x-forms.elements.input :type="'text'"
                                    :id="'name-reg'"
                                    :model="'name'"
                                    :label="'Имя'"
                                    :placeholder="'Имя'"
                                    :required="'required'"/>
{{--            <div class="mb-4">--}}
{{--                <app-form-input type="text"--}}
{{--                                :data="request"--}}
{{--                                :errors="errors"--}}
{{--                                id="name"--}}
{{--                                label="Ник" placeholder="Ник"/>--}}
{{--            </div>--}}
{{--            <app-form-input type="password"--}}
{{--                            :data="request"--}}
{{--                            :errors="errors"--}}
{{--                            id="password"--}}
{{--                            label="Пароль" placeholder="******************"/>--}}
        </div>
        <div class="mb-6">
            <x-forms.elements.input :type="'password'"
                                    :id="'password_reg'"
                                    :model="'password'"
                                    :label="__('front.form.password')"
                                    :placeholder="'******************'"
                                    :required="'required'"/>
        </div>
        <div class="mb-6">
            <x-forms.elements.input :type="'password'"
                                    :id="'password_confirmation_reg'"
                                    :model="'password_confirmation'"
                                    :label="__('front.form.password_confirmation')"
                                    :placeholder="'******************'"
                                    :required="'required'"/>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="h-10 px-4 font-semibold text-gray-800 whitespace-no-wrap bg-white border-2 border-gray-300 rounded-lg hover:border-indigo-300 focus:border-indigo-500 focus:outline-none hover:text-indigo-500 focus:shadow-outline"
                type="button">
                Зарегистрироваться
            </button>
        </div>
        <div class="flex items-center justify-center pt-3 mt-3 border-t">
            <a class="inline-block text-sm font-bold text-gray-500 align-baseline hover:text-indigo-800"
               href="#">
                Войти
            </a>
        </div>
    </form>
</div>
