<div style="overflow: visible; position: relative; width: 125px;">
    <x-buttons.show data-toggle="modal" data-target="#showModal"
            wire:click="showModal({{ $model->id }})" />
    <x-buttons.edit data-toggle="modal" data-target="#editModal"
            wire:click="editModal({{ $model->id }})" />
    <x-buttons.delete wire:click="destroyConfirm({{ $model->id }})" />
</div>
