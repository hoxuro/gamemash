@include('shared.header')


<body>
    <header class="text-center p-1 bg-danger">
        <h1 class="text-light">Gamemash</h1>
        @include('shared.navigation')
    </header>
<main>
    <div class="container">
        <h3 class="text-center mt-3 my-5">Which is better? Click to choose.</h3>
        <div class="row">
            <div class="col-md-5">
                <p class="text-center fw-bold mb-1 fs-4">Title:<span class="ms-1 fw-normal">{{ $games[0]->title }}</span></p>
                <p class="text-center fw-bold">Likes:<span class="ms-1 fw-normal">{{ $games[0]->likes }}</span></p>
                <form action="{{ route('games.update.like', ['game' => $games[0]->id_game]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" style="width: 100%; height: 500px;">
                        <img class="object-fit-contain mx-auto d-block" style="width: 90%; height: 90%" src="{{ asset('assets/images/'.$games[0]->image.'')}}" alt="{{$games[0]->image}}">
                    </button>
                </form>
            </div>
            <div class="col-md-2"><p class="text-center fw-bold fs-3 m-4">OR</p></div>
            <div class="col-md-5">
                <p class="text-center fw-bold mb-1 fs-4">Title:<span class="ms-1 fw-normal">{{ $games[1]->title }}</span></p>
                <p class="text-center fw-bold">Likes:<span class="ms-1 fw-normal">{{ $games[1]->likes }}</span></p>
                <form action="{{ route('games.update.like', ['game' => $games[1]->id_game]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" style="width: 100%; height: 500px;">
                        <img class="object-fit-contain mx-auto d-block" style="width: 90%; height: 90%" src="{{ asset('assets/images/'. $games[1]->image .'')}}" alt="{{$games[1]->image}}">
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>