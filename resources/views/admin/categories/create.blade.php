<x-admin-layout>




    <div class="py-12">
        <div class="block  p-6 rounded-lg shadow-lg bg-slate-50 max-w-3xl mx-auto">
            <h2 class="font-semibold py-2 text-xl text-gray-800 ">
                {{ __('Create Category') }}
            </h2>
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
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
                        name="name_ar" id="exampleInput7" placeholder="@lang('Name Ar')">
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error )
                        <h5>{{ $error }}</h5>
                    @endforeach
                @endif

                <div class="form-group mb-6">
                    <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="name_en" id="exampleInput7" placeholder="@lang('Name En')">
                </div>
                <div class="form-group mb-6">


                    <input
                        class="form-control block w-full
                        px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded  transition   ease-in-out dark:placeholder-gray-400 m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        type="file" name="image">

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
                        id="exampleFormControlTextarea13" rows="3" name="description_ar" placeholder="@lang('Description Ar')"></textarea>
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
                        id="exampleFormControlTextarea13" rows="3" name="description_en" placeholder="@lang('Description En')"></textarea>
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
