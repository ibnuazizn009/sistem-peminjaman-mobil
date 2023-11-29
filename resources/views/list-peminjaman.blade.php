<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/table-style.css">
</head>

<body>
    <div class="container-table">
        <a href="/peminjaman-mobil" class="btn btn-primary" style="margin-bottom: 30px; padding: 10px 20px;">Pinjam Mobil</a>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Tanggal Mulai
                    </th>
                    <th class="th-sm">Tanggal Selesai
                    </th>
                    <th class="th-sm">Nama Mobil
                    </th>
                    <th class="th-sm">Status Pengembalian
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_peminjaman as $dp)
                <tr>
                    <td>{{$dp->tgl_mulai}}</td>
                    <td>{{$dp->tgl_selesai}}</td>
                    <td>{{$dp->nama_mobil}}</td>
                    <td>{{$dp->status_pengembalian}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Tanggal Mulai
                    </th>
                    <th>Tanggal Selesai
                    </th>
                    <th>Nama Mobil
                    </th>
                    <th>Status Pengembalian
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/table-style.js"></script>


</body>

</html>