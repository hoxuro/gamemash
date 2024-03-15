<table class="mb-5">
    <thead>
        <th>Title</th>
        <th>Likes</th>
        <th>Company</th>
    </thead>
    <tbody>
    @foreach ($games as $game)
    <tr>
        <td>{{$game->title}}</td>
        <td>{{$game->likes}}</td>
        <td>{{$game->company}}</td>
    </tr>
    @endforeach
    </tbody>
</table>