<div class="container content py-6  mb-3">
    <div class="mx-auto row">
        <div id="create-form" class="shadow-sm p-6 bg-white border-top border-primary">
            <div class="d-flex">
                <h2 class="font-weight-semibold text-lg text-dark">Create New Todo</h2>
            </div>
            <div>
                <form class="mb-4">
                    <div class="mb-6">
                        <label for="name" class="form-label text-dark">* Todo</label>
                        <input type="text" id="name" name="name" wire:model="name" placeholder="Todo.."
                            class="form-control bg-light text-dark">
                        @error('name')
                            <span class="text-danger text-xs mt-2 mb-4 d-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" wire:click.prevent="create"
                        class="btn btn-primary font-weight-semibold mt-3">Create +</button>
                    @if (session('success'))
                        <span class="text-success text-xs mt-5">{{ session('success')}}</span>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
