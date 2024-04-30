<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
</head>
<body>
    <h4>Daftar Tugas</h4>
    <div>
        <a href="/logout">Logout</a>
    </div>

    <div>
        <a href="/tasks/create">Data Baru</a>
    </div>

    <table>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Selesai</th>
            <th>Aksi</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->completed }}</td>
            <td>
                <a href="/tasks/{{$task->id}}/edit">Edit</a>
                <a href="/tasks/{{$task->id}}/delete">Hapus</a>
                <a href="/tasks/{{$task->id}}/swap">Swap</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
