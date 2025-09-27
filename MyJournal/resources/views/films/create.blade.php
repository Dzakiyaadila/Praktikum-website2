<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyJournal - Add New Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { background-color: #F0F8FF; font-family: 'Poppins', sans-serif; }
        .navbar { background-color: #003366; margin-bottom: 2rem; }
        .navbar-brand { color: #FFD700 !important; font-weight: 600; }
        .nav-link { color: #F0F8FF !important; }
        .nav-link.active { color: #FFD700 !important; font-weight: 600; }
        .card { border: 1px solid #003366; border-radius: 15px; }
        .card-header { background-color: #003366; color: #FFD700; font-weight: 600; }
        .btn-custom { background-color: #003366; color: #FFD700; }
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Film to Journal</div>
                    <div class="card-body">
                        <form action="/films" method="POST">
                            @csrf <div class="mb-3">
                                <label for="title" class="form-label">Film Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="director" class="form-label">Director</label>
                                <input type="text" class="form-control" id="director" name="director">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="wishlist">Wishlist</option>
                                    <option value="watched">Watched</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating (1-5)</label>
                                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5">
                            </div>
                            <div class="mb-3">
                                <label for="impression" class="form-label">My Impression</label>
                                <textarea class="form-control" id="impression" name="impression" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-custom">Save to Journal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>