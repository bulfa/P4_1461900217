<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Perpustakaan</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        } 
        thead {
        background-color: #f2f2f2;
        } 
        th, td {
        text-align: left;
        padding: 8px;
        } 
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        } 
    </style>
</head>

<body>
    <div style="overflow-x:auto;">
    <a class="tambah" href="{{ url('/users/export') }}">Export Excel</a>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>id buku</th>
            <th>id jenis buku</th>
            <th>judul</th>
            <th>tahun terbit</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; ?>
        @foreach ($data as $mhs)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$mhs->id_buku}}</td>
            <td>{{$mhs->id_jenis_buku}}</td>
            <td>{{$mhs->judul}}</td>
            <td>{{$mhs->tahun_terbit}}</td>
            <td></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</body>