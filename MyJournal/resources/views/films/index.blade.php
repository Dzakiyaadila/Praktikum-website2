<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyJournal - Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #F0F8FF; /* Light Blue */
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #003366; /* Dark Blue */
            margin-bottom: 2rem;
        }
        .navbar-brand {
            color: #FFD700 !important; /* Yellow */
            font-weight: 600;
        }
        .nav-link {
            color: #F0F8FF !important;
        }
        .nav-link.active {
            color: #FFD700 !important;
            font-weight: 600;
        }
        .card {
            border: 1px solid #003366;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #003366;
            color: #FFD700;
            font-weight: 600;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .badge {
            background-color: #FFD700 !important;
            color: #003366 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">MyJournal</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/books">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/films">Films</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0" style="color: #003366;">My Film Journal</h1>
            <a href="/films/create" class="btn" style="background-color: #FFD700; color: #003366; font-weight: 600;">+ Add New Film</a>
        </div>

        <div class="row">
            @forelse ($films as $film)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            {{ $film->title }}
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">by {{ $film->director }}</h6>
                            <p class="card-text">
                                <strong>Status:</strong> <span class="badge rounded-pill">{{ $film->status }}</span><br>
                                <strong>Rating:</strong> {{ $film->rating ?? 'N/A' }}/5
                            </p>
                            <p class="card-text fst-italic">"{{ $film->impression ?? 'No impression yet.' }}"</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p class="text-center">You haven't added any films to your journal yet.</p>
                </div>
            @endforelse
        </div>
    </div>

</body>
</html>