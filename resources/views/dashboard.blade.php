<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>
    <div class="container p-3">
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-7">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-4 text-gray-800">
                            {{ __("Это личный кабинет пользователя, при необходимости в нём вы можите изменить свою электронную почту или пароль") }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-7">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-4 text-gray-800">
                            {{ __("Функции профиля будут со временем дополняться :D") }}
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-4 lg:px-7">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-4 text-gray-800">
                                {{ __("Так же вы можите поддержать развитие проекта!") }}
                            </div>
                            <div class="button_container mb-3 m-2">
                                <a href="https://www.donationalerts.com/r/appletv_0" class="btn"><span>Поддержать проект!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
    
</x-app-layout>
