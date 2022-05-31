@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">NIM</th>
                          <th scope="col">Jenis Kelamin</th>
                          <th scope="col">Jurusan</th>
                          <th scope="col">Nomor HP</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pendaftarans as $key => $item)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$item->nama_lengkap}}</td>
                          <td>{{$item->nim}}</td>
                          <td>{{$item->jenis_kelamin}}</td>
                          <td>{{$item->jurusan}}</td>
                          <td>{{$item->nomor_hp}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- {{$pendaftarans}} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection