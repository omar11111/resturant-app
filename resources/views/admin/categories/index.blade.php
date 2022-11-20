<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2 ">
                <a href="{{ route('admin.categories.create') }}"
                    class="py-2 px-3 text-white  bg-indigo-500 hover:bg-indigo-700 rounded-lg font-semibold">@lang('New Category')</a>

            </div>

            <div class="flex justify-start">
                @if (session('success'))
                <div class="bg-indigo-900 text-center py-4 lg:px-4">
                    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                        role="alert">
                        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">@lang('success')</span>
                        <span class="font-semibold  mr-2 text-white flex-auto">{{ session('success') }}</span>
                        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                        </svg>
                    </div>
                </div>
            @endif
            </div>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                @lang('Name')
                            </th>
                            <th scope="col" class="py-3 px-6">
                                @lang('Description')
                            </th>
                            <th scope="col" class="py-3 px-6">
                                @lang('Image')
                            </th>
                            <th scope="col" class="py-3 px-6">
                                @lang('Actions')
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($categories) --}}
                        @foreach ($categories as $category)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $category->name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $category->description }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $category->image }}
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
