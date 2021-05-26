<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProductsDatatable extends LivewireDatatable
{
    public function builder()
    {
        return Product::query();
    }

    public function columns()
    {
        return [
            Column::name('name')
                ->label(__('Product Name'))
                ->searchable(),

//            Column::name('description')
//                ->label(__('Description')),

            Column::name('sku')
                ->label(__('SKU')),

            DateColumn::name('created_at'),
                //->filterable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('products.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
