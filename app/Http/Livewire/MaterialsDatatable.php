<?php

namespace App\Http\Livewire;

use App\Models\Material;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class MaterialsDatatable extends LivewireDatatable
{
    public function builder()
    {
        return Material::query();
    }

    public function columns()
    {
        return [
            Column::name('name')
                ->label(__('Product Name'))
                ->searchable(),

//            Column::name('description')
//                ->label(__('Description')),

            DateColumn::name('created_at'),
                //->filterable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('materials.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
