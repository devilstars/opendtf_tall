<div class="overflow-x-auto">
    <div class="my-6 bg-white rounded-md">
        <table class="w-full border border-indigo-200 table-auto">
            <thead>
            <tr class="text-sm leading-normal text-indigo-900 uppercase bg-indigo-100">
                <th class="px-6 py-3 text-left">{{ __('front.table.id') }}</th>
                <th class="w-full px-6 py-3 text-left">{{ __('front.table.title') }}</th>
                <th class="px-6 py-3 text-center">{{ __('front.table.actions') }}</th>
            </tr>
            </thead>
            <tbody class="text-sm font-light text-gray-600">
            @foreach($items as $item)
                <tr class="border-b border-indigo-200 hover:bg-gray-100 {{ $loop->even ? 'bg-gray-50' : '' }}">
                    <td class="px-6 py-3 text-left whitespace-nowrap">
                        <span class="font-semibold">{{ $item->id }}</span>
                    </td>
                    <td class="px-6 py-3 text-left">
                        <span>{{ $item->name }}</span>
                    </td>
                    <td class="px-6 py-3 text-center">
                        <div class="flex justify-center item-center">
{{--                            <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110"--}}
{{--                               title="{{ __('front.table.view') }}">--}}
{{--                                <x-icons.table-view/>--}}
{{--                            </a>--}}
                            <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110"
                               title="{{ __('front.table.edit') }}">
                                <x-icons.table-edit/>
                            </a>
{{--                            <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110"--}}
{{--                               title="{{ __('front.table.delete') }}">--}}
{{--                                <x-icons.table-delete/>--}}
{{--                            </a>--}}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- TODO implement with pagination --}}
{{ $items->links() }}
