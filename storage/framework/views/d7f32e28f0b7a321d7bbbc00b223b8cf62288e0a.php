
<?php $__env->startSection('content'); ?>
<section class="section">
	<div class="section-header">
		<h1>baru</h1>
	 </div>
	 <div class="card">
        <div class="card-header">
            <h4>Data Santri</h4>
        </div>
        <div class="card-body">
        <table class="table table-borderless-sm">
            <thead>
                <tr>
                	<th scope="col"></th>
                    <th scope="col">Nama Santri</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nomor Telephone</th>
                    <th scope="col">Daerah asal</th>
                    <th scope="col">Alamat Lengkap</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    	</div>
	</div>

	<div class="section-body">
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel8-crud coba\resources\views/datasantri.blade.php ENDPATH**/ ?>