
<?php $__env->startSection('content'); ?>
<div class="row">
              <div class="col-12 col-lg-12">
                <div class="card">
                  <form action="/store" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                      <h4> Form Tambah Santri </h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Santri</label>
                        <input type="text" class="form-control"   name="nama_santri">
                      </div>
                      <div class="form-group">
                      <label>Jenis Kelamin</label>
                        <div>
                          <select class="form-control selectric"  name="jenis_kelamin" >
                             <option value="">Silahkan Pilih Jenis Kelamin</option>
                            <option value="l">Laki-Laki</option>
                            <option value="p">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" >
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tanggal_lahir">
                      </div>
                      <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" class="form-control"  name="nomor">
                      </div>
                      <div class="form-group">
                        <label>Daerah Asal</label>
                        <input type="text" class="form-control"  name="daerah_asal">
                      </div>
                      <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea style="min-height: 100px;" class="form-control"  name="alamat"></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8-crud coba\resources\views/coba/create.blade.php ENDPATH**/ ?>