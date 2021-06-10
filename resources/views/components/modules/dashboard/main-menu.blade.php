{{-- TODO make it responsive --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <x-modules.dashboard.menu-item :title="__('front.roles.roles')" link="{{ route('front.dashboard.roles') }}" color="bg-indogo-100" />
    <x-modules.dashboard.menu-item :title="__('front.users')" link="#" color="bg-yellow-100" />
    <x-modules.dashboard.menu-item :title="__('front.users')" link="#" color="bg-pink-100" />
    <x-modules.dashboard.menu-item :title="__('front.users')" link="#" color="bg-red-100" />
</div>
