@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Pendaftaran BEM</div>

                <div class="card-body">
                    <form action="{{ route('pendaftaran.kirim') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap"  placeholder="Contoh : Begus Ibrahim">
                            </div>
                            <div class="col-md-6">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim"  placeholder="Contoh : 1220282">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                  <option value="laki-laki">Laki-laki</option>
                                  <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan"  placeholder="Contoh : Teknik Informatika">
                            </div>
                        </div>
                        <div class="row">
                              <div class="col-md-12">
                                <label for="nomor_hp">Nomor HP</label>
                                <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" placeholder="Contoh : 085722081528">
                              </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mt-2">Daftar BEM</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
