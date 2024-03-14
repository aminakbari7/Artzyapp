<div class="bg-light rounded h-100 p-4">
    <form class=" flex">
        <input class="form-control border-0" type="search" placeholder="Search">
    </form>
    <h6 class="mb-4">user list</h6>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">birthday</th>
                    <th scope="col">Status</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                <tr>
                    <th scope="row">3</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->birthday }}</td>
                    <td>{{ $user->active }}</td>
                    <td> action</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-felx justify-content-center">
            {{ $users->links('livewire.admin.pagination') }}
          </div>
    </div>
</div>
