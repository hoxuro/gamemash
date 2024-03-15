@include('shared.header')


<body>
    <header class="text-center p-1 bg-danger">
        <h1 class="text-light">Gamemash</h1>
        @include('shared.navigation')
    </header>
<main>
    <div class="container">
        <h3 class="text-center mt-3 my-5">Add the image you want to participate in the ranking</h3>
        <p class="text-secondary text-center mt-3 my-5">Due to security reasons, upload has been <b>deactivated</b></p>
        <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control" name="company">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" />
                </div>
                <button type="submit" name="enviar" class="btn btn-primary">Upload</button>
        </form>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>