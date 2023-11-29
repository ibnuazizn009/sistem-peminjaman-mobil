<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Peminjaman Mobil</title>
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
                    <h2 class="title">Pinjam Mobil</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/peminjaman-mobil/add">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="name">Tanggal Mulai</div>
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" name="tgl_mulai"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Selesai</div>
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" name="tgl_selesai"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Mobil</div>
                            <div class="value">
                                <select class="form-control" id="exampleFormControlSelect1" name="nama_mobil">
                                    <option selected>Select Mobil</option>
                                    @foreach($data_mobil as $dm)
                                    <option value="{{$dm->model}}">{{$dm->model}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="btn btn--radius-2 btn--blue-2 button-tambah" type="submit">Pinjam Sekarang</button>
                    </form>
                </div>
                <!-- <div class="card-footer">
                    <input type="submit" name="submit" class="btn btn--radius-2 btn--blue-2" value="Tambah Data"/>
                    
                </div> -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datepicker({
                format: "yyyy-mm-dd",
                weekStart: 0,
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
                orientation: "auto"
            });

            $('#datetimepicker2').datepicker({
                format: "yyyy-mm-dd",
                weekStart: 0,
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
                orientation: "auto"
            });
        });
    </script>
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

</body>

</html>