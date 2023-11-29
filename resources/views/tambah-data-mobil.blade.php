<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Tambah Data Mobil</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="../css/tambah-mobil.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Tambah Data Mobil</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/list-mobil/add">
                    {{ csrf_field() }}
                        <div class="form-row">
                            <div class="name">Merek</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="merek" placeholder="Toyota">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Model</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="model" placeholder="CRV">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor Plat</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="no_plat" placeholder="B 90283 S">
                            </div>
                        </div>
                        <<div class="form-row">
                            <div class="name">Harga Sewa /hari</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="harga_sewa_per_hari" placeholder="500000">
                            </div>
                        </div>

                        <button class="btn btn--radius-2 btn--blue-2 button-tambah" type="submit">Tambah Data</button>
                    </form>
                </div>
                <!-- <div class="card-footer">
                    <input type="submit" name="submit" class="btn btn--radius-2 btn--blue-2" value="Tambah Data"/>
                    
                </div> -->
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="../js/tambah-mobil.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->