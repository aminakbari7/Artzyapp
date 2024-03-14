<div class="bg-light rounded h-100 p-4">
    <form class=" flex">
        <input class="form-control border-0" type="search" placeholder="Search">
    </form>

    <h6 class="mb-4">posts list</h6>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">post_id</th>
                    <th scope="col">user_id</th>
                    <th scope="col">body</th>
                    <th scope="col">image</th>
                    <th scope="col">create_at</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)

                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->user_id }}</td>
                    <td> {{ $post->body}}

                    </td>
                    <td>{{ $post->image }}</td>
                    <td>{{ $post->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
