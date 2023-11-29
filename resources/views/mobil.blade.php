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
        <a href="/list-mobil/add" class="btn btn-primary" style="margin-bottom: 30px; padding: 10px 20px;">Tambah Data Mobil</a>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Merek
                    </th>
                    <th class="th-sm">Model
                    </th>
                    <th class="th-sm">Nomor Plat
                    </th>
                    <th class="th-sm">Harga Sewa /hari
                    </th>
                    <th class="th-sm">Ketersediaan
                    </th>
                    <th class="th-sm">Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dt)
                <tr>
                    <td>{{$dt->merek}}</td>
                    <td>{{$dt->model}}</td>
                    <td>{{$dt->no_plat}}</td>
                    <td>{{$dt->harga_sewa_per_hari}}</td>
                    <td>{{$dt->tersedia}}</td>
                    <td>
                        <form onsubmit="" method="POST">
                            <a href="" class="btn btn-sm btn-primary"><b>EDIT</b></a>

                            <a href="" class="btn btn-sm btn-danger"><b>HAPUS</b></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Merek
                    </th>
                    <th>Model
                    </th>
                    <th>Nomor Plat
                    </th>
                    <th>Harga Sewa /hari
                    </th>
                    <th>Ketersediaan
                    </th>
                    <th>Action
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