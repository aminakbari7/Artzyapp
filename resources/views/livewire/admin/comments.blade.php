<div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Responsive Table</h6>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">comment_id</th>
                    <th scope="col">user_id</th>
                    <th scope="col">post_id</th>
                    <th scope="col">body</th>
                    <th scope="col">create_at</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($comments as $comment)

                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->user_id }}</td>
                    <td>{{ $comment->post_id }}</td>
                    <td> {{ $comment->body}}
                    </td>
                    <td>{{ $comment->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
