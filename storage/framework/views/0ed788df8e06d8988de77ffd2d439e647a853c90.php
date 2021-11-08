
<?php $__env->startSection('content'); ?>
<section class="section">
	<div class="section-header">
		<h1>Data Santri</h1>
	 </div>
	 <div class="card">
        <div class="card-header">
            <div class="button">
            <a href="/create" class="btn btn-primary" title="Tambah Data Santri">Tambah Santri</a>
            </div>
        </div>
        <div class="card-body">
        <table class="table table-borderless">
            <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Nama Santri</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Nomor</th>
                  <th scope="col">Daerah Asal</th>
                  <th scope="col">Alamat lengkap</th>
                  <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr>
             <td><?=$no++ ?> </td>
             <td><?php echo e($key->nama_santri); ?></td>
             <td><?php if (strtolower($key->jenis_kelamin) == "p"){
                    echo "Perempuan";
                }else{
                    echo "Laki-Laki";
             }?>
     
             </td>
             <td> <?= date_format(date_create($key->tanggal_lahir), "d F Y")?></td>
             <td><?php echo e($key->nomor); ?></td>
             <td><?php echo e($key->daerah_asal); ?></td>
             <td><?php echo e($key->alamat); ?></td>
             <td> <a href="/edit/<?php echo e(($key->id_santri)); ?>">
                            <i class="fas fa-edit  fa-lg"></i>
                   </a>
             </td>
             <td> <a href="<?php echo e(url('/hapus')); ?>/<?php echo e($key->id_santri); ?>">
                            <i class="text-danger fas fa-trash  fa-lg"></i>
                   </a>
             </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
	</div>

	<div class="section-body">
	</div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8-crud coba\resources\views/coba/index.blade.php ENDPATH**/ ?>