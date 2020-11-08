@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <title>Halaman Admin</title>
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
    <div id="wrapper">
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="/admin" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="/pembinaan" class=""><i class="lnr lnr-chart-bars"></i> <span>Data Pembinaan</span></a></li>
                    <li><a href="/forum" class=""><i class="lnr lnr-chart-bars"></i> <span>Forum Diskusi</span></a></li>
                    <li>
            </nav>
        </div>
    </div>
</body>
<div class="main">
    <div class="main-content"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Pembinaan</h3>
                        <div class="right">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">Tambah Data Pembinaan</button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id Pembinaan</th>
                                    <th>Nama Daerah</th>
                                    <th>Tanggal</th>
                                    <th>Kegiatan</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_pembinaan as $pembinaan)
                                <tr>
                                    <td>{{$pembinaan-> id}}</td>
                                    <td>{{$pembinaan-> Nama_daerah}}</td>
                                    <td>{{$pembinaan-> Tanggal}}</td>
                                    <td>{{$pembinaan-> Kegiatan}}</td>
                                    <td>{{$pembinaan-> Gambar}}</td>
                                    <td><a href="/pembinaan/edit/{{$pembinaan->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                                    <td>
                                        <form action="/pembinaan/delete/{{$pembinaan->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Pembinaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/pembinaan/create" methods="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputId">Id Pembinaan</label>
                        <input name="id" type="id" class="form-control" id="exampleInputId">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Daerah/Organisasi</label>
                        <input name="Nama_daerah" type="name" class="form-control" id="exampleInputName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal</label>
                        <input name="Tanggal" type="date" class="form-control" id="exampleInputDate">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Kegiatan</label>
                        <input name="Kegiatan" type="name" class="form-control" id="exampleInputName">
                    </div>
                    <div>
                        Pilih Gambar : <input type="file" name="Gambar">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm float-right">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="{{asset('Admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('Admin/assets/scripts/klorofil-common.js')}}"></script>
</body>
@endsection