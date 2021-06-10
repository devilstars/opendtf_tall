<div class="overflow-x-auto">
    <div class="my-6 bg-white rounded-md">
        <table class="w-full border border-indigo-200 table-auto">
            <thead>
            <tr class="text-sm leading-normal text-indigo-900 uppercase bg-indigo-100">
                <th class="px-6 py-3 text-left">ID</th>
                <th class="w-full px-6 py-3 text-left">Название</th>
                <th class="px-6 py-3 text-center">{{ __('front.table.actions') }}</th>
            </tr>
            </thead>
            <tbody class="text-sm font-light text-gray-600">
            <tr class="border-b border-indigo-200 hover:bg-gray-100">
                <td class="px-6 py-3 text-left whitespace-nowrap">
                    <span class="font-semibold">2</span>
                </td>
                <td class="px-6 py-3 text-left">
                    <span>Eshal Rosas</span>
                </td>
                <td class="px-6 py-3 text-center">
                    <div class="flex justify-center item-center">
                        <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110" title="{{ __('front.table.view') }}">
                            <x-icons.table-view />
                        </a>
                        <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110" title="{{ __('front.table.edit') }}">
                            <x-icons.table-edit />
                        </a>
                        <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110" title="{{ __('front.table.delete') }}">
                            <x-icons.table-delete />
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                <td class="px-6 py-3 text-left whitespace-nowrap">
                    <span class="font-semibold">1</span>
                </td>
                <td class="px-6 py-3 text-left">
                    <span>Some test</span>
                </td>
                <td class="px-6 py-3 text-center">
                    <div class="flex justify-center item-center">
                        <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110" title="{{ __('front.table.view') }}">
                            <x-icons.table-view />
                        </a>
                        <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110" title="{{ __('front.table.edit') }}">
                            <x-icons.table-edit />
                        </a>
                        <a href="#" class="w-4 mr-2 transform hover:text-indigo-500 hover:scale-110" title="{{ __('front.table.delete') }}">
                            <x-icons.table-delete />
                        </a>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- TODO implement with pagination --}}
pagination here
