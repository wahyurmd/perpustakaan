<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <table border="1">
        <thead>
            <tr>
                <td>Name</td>
                <td>Category</td>
                <td>Pages</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->category }}</td>
                <td>{{ $data->pages }}</td>
                <td>{{ $data->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
