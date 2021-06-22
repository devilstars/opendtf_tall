@extends('layouts.dashboard')

@section('content')
    <div class="mt-5">
        {{ Breadcrumbs::render('dashboard.roles') }}

        <div class="flex items-center justify-between mt-6">
            <h1 class="text-2xl font-semibold text-gray-900">
                {{ __('front.nav.roles') }}
            </h1>
{{--            <a href="#" class="inline-block px-4 py-2 text-xs font-semibold text-center text-white uppercase transition bg-indigo-700 rounded hover:shadow-lg hover:bg-indigo-800 focus:outline-none">--}}
{{--                {{ __('front.form.add') }}--}}
{{--            </a>--}}
        </div>

        <x-modules.dashboard.datatables.roles-datatable :items="$items" />
    </div>
@endsection
