<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <h4>Ubah Data</h4>
    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('put')
        <div>
            <label for="title">Judul</label>
            <input id="title" name="title" value="{{ $task->title }}">
        </div>
        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <button type="submit">Kirim</button>
        </div>
    </form>
</body>
</html>
