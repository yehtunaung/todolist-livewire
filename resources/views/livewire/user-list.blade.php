<div class="col-md-6 px-2 py-4">

    <table class="table table-striped">
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
          {{-- <div class="d-flex justify-content-between flex-column mt-3"> --}}
            {{ $userLists->links() }}
    {{-- </div> --}}
        </tbody>
      </table>
   </div>