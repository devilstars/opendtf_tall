@unless ($breadcrumbs->isEmpty())
    <div class="py-3 px-5 mb-4 bg-indigo-100 text-indigo-900 text-sm rounded-md border border-indigo-200">
        <ul class="flex">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="whitespace-nowrap overflow-hidden overflow-ellipsis"><a href="{{ $breadcrumb->url }}" class="underline font-semibold">{{ $breadcrumb->title }}</a></li>
                @else
                    <li class="whitespace-nowrap overflow-hidden overflow-ellipsis">{{ $breadcrumb->title }}</li>
                @endif
                @if (!$loop->last)
                    <li><span class="mx-2">/</span></li>
                @endif
            @endforeach
        </ul>
    </div>
@endunless
