<div class="hover:border-indigo-500 {{ $level[0]['depth'] > 0 ? 'pl-3 border-dotted border-l' : '' }}">
    @foreach ($level as $levelItem)
        <x-modules.comments.item :comment="$levelItem" />

        @if (count($levelItem['children']))
            <x-modules.comments.level :level="$levelItem['children']" />
        @endif
    @endforeach
</div>
