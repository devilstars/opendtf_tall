<div class="mt-4">
    @foreach($items as $item)
        <livewire:modules.post.teaser
            :item="$item"
            :key="'post-feed-'.$item->id">
    @endforeach

    @if ($end)
        <div class="text-center">
            <span class="block my-5 text-gray-500">
                {{ __('front.no_data') }} :/
            </span>
        </div>
    @endif

    @section('scripts-bottom')
        <script type="text/javascript">
            window.onscroll = function (ev) {
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                    Livewire.emit('loadMore');
                }
            };
        </script>
    @endsection
</div>
