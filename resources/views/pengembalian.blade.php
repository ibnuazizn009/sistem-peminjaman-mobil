<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pengembalian Mobil</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link id="bs-css" href="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/tambah-mobil.css">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Pengembalian Mobil</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/pengembalian-mobil/add">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="name">Nomor Plat</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="no_plat" placeholder="Z 8762 SK">
                            </div>
                        </div>
                        <button class="btn btn--radius-2 btn--blue-2 button-tambah" type="submit">Kembalikan Mobil</button>
                    </form>
                </div>
                <!-- <div class="card-footer">
                    <input type="submit" name="submit" class="btn btn--radius-2 btn--blue-2" value="Tambah Data"/>
                    
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

</body>

</html>