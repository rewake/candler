<x-app-layout>
    <x-slot name="header">
        <h2 class="flex pt-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Materials') }}
        </h2>

        <button x-on:click="show = !show" class="flex right-0 px-3 py-2 border border-blue-400 rounded-md
        bg-white text-blue-500 text-xs leading-4 font-medium uppercase tracking-wider
        hover:bg-blue-200 focus:outline-none">
            <div class="flex items-center h-5">
                Add Material
            </div>
        </button>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <livewire:materials-datatable />

        </div>
    </div>
</x-app-layout>
