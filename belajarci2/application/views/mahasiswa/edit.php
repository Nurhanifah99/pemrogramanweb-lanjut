<div class="container">
	<div class="card">
		<div class="card-header">
			Form Merubah Data Mahasiswa
		</div>
		<div class="card-body">
		<?php if (validation_errors()) :?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
		<?php endif ?>
			<form action="" method="POST">
				<input type="hidden" name="id" value="<?=$mahasiswa['id'];?>">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'];?>">
				</div>
				<div class="form-group">
					<label for="nim">Nim</label>
					<input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'];?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'];?>">
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select class="form-control" name="jurusan" id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan'];?>">
						<?php foreach($jurusan as $key): ?>
							<?php if($key == $mahasiswa['jurusan']):?>
								<option value="<?= $key ?>"selected><?= $key ?></option>
							<?php else: ?>
								<option value="<?= $key ?>"><?= $key ?></option>
							<?php endif; ?>
						<?php endforeach?>
						<!-- <option selected>----</option>
						<option value="1">Kimia</option>
						<option value="2">Informatika</option>
						<option value="3">Mesin</option> -->
					</select>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
			</form>
		</div>
	</div>
</div>