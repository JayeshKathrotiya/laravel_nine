<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg">Add steps for task</h2>
        <span class="fas fa-plus px-2 py-2 cursor-pointer" wire:click='increment'/>
    </div>
    @foreach($steps as $step)
    <div class="flex justify-center py-2" wire:key="{{ $step }}">
        <input type="text" name="step[]" class="py-1 px-2 border rounded" placeholder="{{ 'Describe Step '.$step }}" />
        <span class="fa fa-times text-red-400 p-2" wire:click='remove({{ $step }})'/>
    </div>
    @endforeach
</div>
