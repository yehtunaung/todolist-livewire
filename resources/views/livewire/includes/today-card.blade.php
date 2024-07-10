{{-- @foreach ($todas as $todo) --}}
<div class="card mb-5 px-5 py-6 bg-white border-top border-primary shadow-sm">
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-contenet-between">
            @if ($todo->complete)
                <input type="checkbox" wire:click="toggle( {{ $todo->id }} )" name=""
                    class="form-check-input mt-2 mx-2" id="" checked>
            @else
                <input type="checkbo" wire:click="toggle( {{ $todo->id }} )" name=""
                    class="form-check-input mt-2 mx-2" id="">
            @endif
            @if ($editingId === $todo->id)
                <input type="text" class="form-control w-auto h-100 bg-light text-dark" wire:model="editingName" name=""  id="">
            @else
                <h3 class="mr-5">{{ $todo->name ?? '-' }}</h3>
            @endif
        </div>
        <div class="d-flex mr-3 align-items-center">
            <button wire:click="edit({{ $todo->id }})" class="btn btn-primary mx-2">
                Edit
            </button>
            <button wire:click="delete({{ $todo->id }})" onclick="return confirm('Sure?');" class="btn btn-danger ">
                delete
            </button>
        </div>
    </div>
    <span class="text-xs text-muted m-2">{{ $todo->created_at ?? '-' }}</span>
    @if ($editingId === $todo->id)
        <div class=" text-xs text-dark">
            <button class="btn btn-success" wire:click="update({{$todo->id}})">update</button>
            <button class="btn btn-secondary" wire:click="cancel()">Cancel</button>
        </div>
    @endif

</div>
{{-- @endforeach --}}
