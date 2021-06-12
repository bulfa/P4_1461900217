<head>
    <title>Home</title>
    <style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    t
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>

<body>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kelamin</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($hewan as $hwn)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $hwn->kelamin }}</td>
            <td>{{ $hwn->nama_hwn }}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>