<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="block  p-6 rounded-lg shadow-lg bg-slate-50 max-w-3xl mx-auto">
            <form>
                <div class="form-group mb-6">
                    <input type="text"
                        class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleInput7" placeholder="@lang('Name')">
                </div>
                <div class="form-group mb-6 ">


                    <input
                        class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base

                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        dark:placeholder-gray-400
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="file_input" type="file">

                </div>
                <div class="form-group mb-6">
                    <textarea
                        class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
                        id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                </div>

                <button type="submit"
                    class="
              w-full
              px-6
              py-2.5
              bg-blue-600
              text-white

              text-xs
              leading-tight
              uppercase
              rounded
              shadow-md
              hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg
              transition
              duration-150
              ease-in-out font-semibold">@lang('Create Category')</button>
            </form>
        </div>

    </div>
</x-admin-layout>
