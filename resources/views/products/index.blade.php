<x-app-layout>
    <x-slot name="header">
        <h2 class="flex pt-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>

        <button x-on:click="show = !show" class="flex right-0 px-3 py-2 border border-blue-400 rounded-md
        bg-white text-blue-500 text-xs leading-4 font-medium uppercase tracking-wider
        hover:bg-blue-200 focus:outline-none">
            <a href="/products/create" class="flex items-center h-5">
                Add Product
            </a>
        </button>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <livewire:products-datatable />

        </div>
    </div>

    <!-- Delete Product Confirmation Modal -->
    {{--
    <x-jet-dialog-modal wire:model="confirmingProductDeletion">
        <x-slot name="title">
            {{ __('Delete Product') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this product?') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingProductDeletion')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteProduct" wire:loading.attr="disabled">
                {{ __('Delete Product') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
    --}}

</x-app-layout>
