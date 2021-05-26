<x-app-layout>
    <x-slot name="header">
        <h2 class="flex pt-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h2>Create New Product</h2>




            <div class="md:grid md:grid-cols-3 md:gap-6">

{{--                <div class="md:col-span-1 flex justify-between">--}}
{{--                    <div class="px-4 sm:px-0">--}}
{{--                        <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>--}}

{{--                        <p class="mt-1 text-sm text-gray-600">--}}
{{--                            Update your account's profile information and email address.--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <div class="px-4 sm:px-0">--}}

{{--                    </div>--}}
{{--                </div>--}}

                <div class="mt-5 md:mt-0 md:col-span-10">
                    <form>
                        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Profile Photo -->

                                <!-- Name -->
                                <div class="col-span-6">
                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                        Name
                                    </label>
                                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text">
                                </div>

                                <!-- Email -->
                                <div class="col-span-6">
                                    <label class="block font-medium text-sm text-gray-700" for="description">
                                        Description
                                    </label>
                                    <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="description"></textarea>
                                </div>

                                <!-- Category -->
                                <div class="col-span-6">
                                    <label class="block font-medium text-sm text-gray-700" for="category">
                                        Category
                                    </label>
                                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="category" type="text">
                                </div>

                                <!-- Materials -->
                                <div class="col-span-6">
                                    <label class="block font-medium text-sm text-gray-700" for="materials">
                                        Materials
                                    </label>
                                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="materials" type="text">
                                </div>

                            </div>
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('kpTVrvg5dacRe7PFFLsA').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class="text-sm text-gray-600 mr-3">
                                Saved.
                            </div>

                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>








        </div>
    </div>

</x-app-layout>
