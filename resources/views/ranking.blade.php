@include('shared.header')
<body>
    <header class="text-center p-1 bg-danger">
        <h1 class="text-light">Gamemash</h1>
        @include('shared.navigation')
    </header>
<main>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <h3 class="mb-4">List of games</h3>
                @include('components/table')
            </div>
        </div>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>