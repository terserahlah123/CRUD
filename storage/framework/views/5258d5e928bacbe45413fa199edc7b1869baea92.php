
<?php $__env->startSection('content'); ?>
<div class="row">
              <div class="col-12 col-lg-12">
                <div class="card">
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                  <form action="/update/<?php echo e($key->id_santri); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                      <h4> Form Edit Santri </h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Santri</label>
                        <input type="text" class="form-control"   name="nama_santri" value="<?php echo e($key -> nama_santri); ?>">
                      </div>
                      <div class="form-group">
                      <label>Jenis Kelamin</label>
                        <div>
                          <select class="form-control selectric"  name="jenis_kelamin" >
                            <option value=''>silahkan pilih jenis kelamin</option>
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
                        <input type="date" class="form-control"  name="tanggal_lahir" value="<?php echo e($key->tanggal_lahir); ?>">
                      </div>
                      <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" class="form-control"  name="nomor" value="<?php echo e($key->nomor); ?>">
                      </div>
                      <div class="form-group">
                        <label>Daerah Asal</label>
                        <input type="text" class="form-control"  name="daerah_asal" value="<?php echo e($key->daerah_asal); ?>">
                      </div>
                      <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea style="min-height: 100px;" class="form-control"  name="alamat" ><?php echo e($key->alamat); ?></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8-crud coba\resources\views/coba/edit.blade.php ENDPATH**/ ?>