@extends('layouts.app')

@section('content')
    <div class="mt-5">
        {{ Breadcrumbs::render('dashboard') }}

        <x-modules.dashboard.main-menu />
    </div>
@endsection
