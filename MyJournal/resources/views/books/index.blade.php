<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        body { background-color: #121212; color: #e0e0e0; font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background-color: #1e1e1e; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background-color: #333; }
        tr:nth-child(even) { background-color: #2a2a2a; }
        h1 { text-align: center; margin-bottom: 20px; }
        select, button { padding: 8px; margin-top: 10px; background-color: #333; color: #fff; border: none; }
        button { cursor: pointer; }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>

    <!-- Dropdown filter status -->
    <!-- Form Pencarian Judul -->
    <form action="/books" method="GET" style="margin-bottom: 15px;">
        <input type="text" name="keyword" placeholder="Cari judul buku..."
            value="{{ $keyword ?? '' }}"
            style="padding: 8px; width: 250px;">
        <button type="submit" style="padding: 8px; background:#333; color:#fff; border:none; cursor:pointer;">Cari</button>

        <!-- Tetap bawa nilai filter status -->
        <select name="status" onchange="this.form.submit()" style="padding:8px; background:#333; color:#fff; border:none;">
            <option value="all" {{ ($status ?? '') == 'all' ? 'selected' : '' }}>Semua status baca</option>
            <option value="wishlist" {{ ($status ?? '') == 'wishlist' ? 'selected' : '' }}>Wishlist</option>
            <option value="reading" {{ ($status ?? '') == 'reading' ? 'selected' : '' }}>Reading</option>
            <option value="finished" {{ ($status ?? '') == 'finished' ? 'selected' : '' }}>Finished</option>
        </select>
    </form>

    <!-- Tabel daftar buku -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Status</th>
                <th>Kesan</th>
                <th>Rating</th>
                <th>Dibuat</th>
                <th>Diperbarui</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->status }}</td>
                <td>{{ $book->impression }}</td>
                <td>{{ $book->rating }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 30px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background:#1e1e1e; padding:20px; border-radius:8px; text-align:center;">
            <h3>Total Buku</h3>
            <p>{{ $totalBooks }}</p>
        </div>
        <div style="background:#1e1e1e; padding:20px; border-radius:8px; text-align:center;">
            <h3>Status Wishlist</h3>
            <p>{{ $totalWishlist }}</p>
        </div>
        <div style="background:#1e1e1e; padding:20px; border-radius:8px; text-align:center;">
            <h3>Status Reading</h3>
            <p>{{ $totalReading }}</p>
        </div>
        <div style="background:#1e1e1e; padding:20px; border-radius:8px; text-align:center;">
            <h3>Status Finished</h3>
            <p>{{ $totalFinished }}</p>
        </div>
        <div style="background:#1e1e1e; padding:20px; border-radius:8px; text-align:center;">
            <h3>Rating Tertinggi</h3>
            <p>{{ $maxRating }}</p>
        </div>
        <div style="background:#1e1e1e; padding:20px; border-radius:8px; text-align:center;">
            <h3>Rating Terendah</h3>
            <p>{{ $minRating }}</p>
        </div>
        <div style="background:#1e1e1e; padding:20px; border-radius:8px; text-align:center;">
            <h3>Rata-rata Rating</h3>
            <p>{{ number_format($avgRating, 2) }}</p>
        </div>
    </div>

</body>
</html>
