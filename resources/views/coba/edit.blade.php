@extends('layouts.main')
@section('content')
<div class="row">
              <div class="col-12 col-lg-12">
                <div class="card">
                  @foreach ($data as $key) 
                  <form action="/update/{{$key->id_santri }}" method="POST">
                    @csrf
                    <div class="card-header">
                      <h4> Form Edit Santri </h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Santri</label>
                        <input type="text" class="form-control"   name="nama_santri" value="{{$key -> nama_santri}}">
                      </div>
                      <div class="form-group">
                      <label>Jenis Kelamin</label>
                        <div>
                          <select class="form-control selectric"  name="jenis_kelamin" >
                            <option value="">Silahkan Pilih Jenis Kelamin</option>
                            <option value="l" <?php if ($key->jenis_kelamin=='l') {
                              echo 'selected';
                            } ?>>Laki-Laki</option>
                            <option value="p" <?php if ($key->jenis_kelamin=='p') {
                              echo 'selected';
                            } ?>>Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tanggal_lahir" value="{{$key->tanggal_lahir}}">
                      </div>
                      <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" class="form-control"  name="nomor" value="{{$key->nomor}}">
                      </div>
                      <div class="form-group">
                        <label>Daerah Asal</label>
                        <input type="text" class="form-control"  name="daerah_asal" value="{{$key->daerah_asal}}">
                      </div>
                      <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea style="min-height: 100px;" class="form-control"  name="alamat" >{{$key->alamat}}</textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  @endforeach
                </div>
@endsection
