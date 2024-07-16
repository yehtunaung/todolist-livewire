<div class="card shadow-sm">
    <div class="row">
        <div class="d-flex  flex-column align-items-center px-2 my-4 justify-content-center">
            <h2>User Registration Form</h2>
            <form wire:submit="create">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" wire:model="name" class="form-control" id="exampleInputname" name="name">
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
                    <input type="email" class="form-control" wire:model="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email">
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
                <button type="submit" class="btn btn-primary mt-2">Sign up</button>
            </form>
        </div>
    </div>
</div>
