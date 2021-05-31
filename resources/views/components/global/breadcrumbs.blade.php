@unless ($breadcrumbs->isEmpty())
    <div class="px-5 py-3 mb-4 text-sm text-indigo-900 bg-indigo-100 border border-indigo-200 rounded-md">
        <ul class="flex">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="overflow-hidden whitespace-nowrap overflow-ellipsis"><a href="{{ $breadcrumb->url }}" class="font-semibold underline">{{ $breadcrumb->title }}</a></li>
                @else
                    <li class="overflow-hidden whitespace-nowrap overflow-ellipsis">{{ $breadcrumb->title }}</li>
                @endif
                @if (!$loop->last)
                    <li><span class="mx-2">/</span></li>
                @endif
            @endforeach
        </ul>
    </div>
@endunless
