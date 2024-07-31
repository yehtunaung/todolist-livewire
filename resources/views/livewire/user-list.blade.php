<div class="col-md-6 px-2 py-4" wire:poll.visible.10s>
  <input type="search" wire:model.live.debounce.100ms="search" placeholder="Search..." class="form-control bg-light ml-2 rounded px-4 py-2">
    <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($userLists as $userlist)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $userlist->name ?? '-' }}</td>
            <td>{{ $userlist->email ?? '-'  }}</td>
            <td>{{ $userlist->phone_no ?? '-'}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
        {{ $userLists->links() }}
   </div>