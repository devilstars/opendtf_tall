@extends('layouts.dashboard')

@section('content')
    <form class="my-5">
        @csrf
        {{ Breadcrumbs::render('dashboard.role', $page) }}

        <div class="flex items-center justify-between mt-6">
            <h1 class="text-2xl font-semibold text-gray-900">
                {{ __('front.nav.role') }}: {{ $page->name }}
            </h1>
            <button type="submit" class="inline-block px-4 py-2 text-xs font-semibold text-center text-white uppercase transition bg-indigo-700 rounded hover:shadow-lg hover:bg-indigo-800 focus:outline-none">
                {{ __('front.form.save') }}
            </button>
        </div>


        <div class="flex flex-col">
            @foreach($permissions as $permission)
                @php
                    dump($page->permissions->where('name', $permission->name)->first())
                @endphp
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" class="w-5 h-5 text-gray-600 form-checkbox" @if($page->permissions->where('name', $permission->name)->first()) checked @endif>
                    <span class="ml-2 text-gray-700">
                        {{ __('front.permissions.' . $permission->name) }}
                    </span>
                </label>
            @endforeach
        </div>
    </form>
@endsection
