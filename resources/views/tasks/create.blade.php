<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Baru</title>
</head>
<body>
    <h4>Data Baru</h4>
    <form method="POST" action="/tasks">
        @csrf
        <div>
            <label for="title">Judul</label>
            <input id="title" name="title">
        </div>
        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <button type="submit">Kirim</button>
        </div>
    </form>
</body>
</html>
