<!doctype html>
<html lang="en">

<head>
    <title>Halaman Edit</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('Admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('Admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('Admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('Admin/assets/img/favicon.png')}}">
</head>

<body>
    <div class="main">
        <div class="main-content"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Pembinaan</h3>
                        </div>
                        <div class="panel-body">

                            <form action="/pembinaan/update/{{$pembinaan->id}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputId">Id Pembinaan</label>
                                    <input name="id" type="id" class="form-control" id="exampleInputId" value="{{$pembinaan -> id}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Nama Daerah/Organisasi</label>
                                    <input name="Nama_daerah" type="name" class="form-control" id="exampleInputName" value="{{$pembinaan -> Nama_daerah}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDate">Tanggal</label>
                                    <input name="Tanggal" type="date" class="form-control" id="exampleInputDate">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Kegiatan</label>
                                    <input name="Kegiatan" type="name" class="form-control" id="exampleInputName" value="{{$pembinaan -> Kegiatan}}">
                                </div>
                                <div>
                                    Pilih Gambar : <input type="file" name="Gambar">
                                </div>

                                <button type="submit" class="btn btn-warning float-right">Simpan</button>
                            </form>
                        </div>
                    </div>
                    <script src="{{asset('Admin/assets/vendor/jquery/jquery.min.js')}}"></script>
                    <script src="{{asset('Admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
                    <script src="{{asset('Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
                    <script src="{{asset('Admin/assets/scripts/klorofil-common.js')}}"></script>
</body>