{{-- TODO make it responsive --}}
<div class="grid grid-cols-3 gap-4">
    @foreach (array_fill(0, 4, '') as $item)
        <x-modules.dashboard.menu-item :title="__('front.users')" link="#" />
    @endforeach
</div>
