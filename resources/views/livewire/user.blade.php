<div class="card shadow-sm">
    <div class="px-2 my-4" wire:offline>
        <div class="alert alert-warning alert-dismissible fade show">
            <strong>Warning!</strong> There was a problem with your network connection.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
    <div class="d-flex justify-content-around">
        @livewire('user-list')

        <div class="px-2 my-4 " wire:keydown.shift.window="create">
            <h2>User Registration Form</h2>
            @if (session('success'))
                <span class="text-success text-xs mt-5">{{ session('success') }}</span>
            @endif
            <form wire:offline.remove>
                <select class="form-select" aria-label="Default select example" id="test-element">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" wire:model.lazy="name" class="form-control" id="exampleInputname" name="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phoneno">Phone Number</label>
                    <input type="text" wire:model="phone_no" class="form-control" id="exampleInputphoneno"
                        name="">
                    @error('phone_no')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <input type="email" class="form-control" wire:model="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp" name="email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" wire:model="password" class="form-control" id="exampleInputPassword"
                        name="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Password">Profile Picture</label>
                    <input type="file" class="form-control" wire:model="photo" id="exampleInputPassword"
                        name="password">
                </div>
                <button wire:loading.remove type="" class="btn btn-primary mt-2"wire:click.prevent="create">Sign
                    up</button>
                <div wire:loading.delay>
                    <span class="text-success">Sending....</span>
                </div>
            </form>
        </div>
    </div>
</div>
