<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg">Add steps for task</h2>
        <span class="fas fa-plus px-2 py-2 cursor-pointer" wire:click='increment'/>
    </div>
    @foreach($steps as $key => $step) 
    <div class="flex justify-center py-2" wire:key="{{ $key }}" >
        <input type="text" name="stepName[]" class="py-1 px-2 border rounded" placeholder="{{ 'Describe Step '.$loop->index +1 }}" value="{{ $step['name'] }}"/>
        <input type="hidden" name="stepId[]" value="{{ $step['id'] }}"/>
        <span class="fa fa-times text-red-400 p-2" wire:click='remove({{ $key }})'/>
    </div>
    @endforeach
</div>
