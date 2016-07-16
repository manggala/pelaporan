@if(count($nearmiss) > 0 and count($konfirmasi_nearmiss) <=0)
	<?php
	$nearmiss = $nearmiss[0];
	?>
	<div class="row">
		<div class="col-md-12">
			<form method="post" action="{{ URL::to('/formhse')}}">
				<input type="hidden" name="id_nearmiss" value="{{ $nearmiss->id_nearmiss }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="likelihood">Likelihood (Kemungkinan Terjadi)</label>
					<select class="form-control" name="likelihood">
						<option value="1">1. Rare</option>
						<option value="2">2. Unlikely</option>
						<option value="3">3. Possible</option>
						<option value="4">4. Likely</option>
						<option value="5">5. Almost Certain</option>
					</select>
				</div>
				<div class="form-group">
					<label for="severity">Severity (Konsekuensi Lingkungan)</label>
					<select class="form-control" name="severity">
						<option value="1">1. Tidak timbul terhadap lingkungan</option>
						<option value="2">2. Dampak yang timbul minimum dan segera dapat dipulihkan</option>
						<option value="3">3. Dampak yang timbul terbatas dan dipulihkan dalam jangka waktu tertentu, sudah ada kendali untuk mengurangi potensi dan frekuensi terjadinya</option>
						<option value="4">4. Dampak yang timbul menyebabkan kerusakan lingkungan didalam lokasi perusahaan</option>
						<option value="5">5. Dampak yang timbul menyebabkan kerusakan lingkungan hingga keluar perusahaan</option>
					</select>
				</div>
				<div class="form-group">
					<label for="severityk3">Severity (Konsekuensi K3)</label> <span style="color: #999">*lihat Keterangan</span>
					<select class="form-control" name="severityk3">
						<option value="1">1 </option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				<div class="row">
					<button type="button" style="background-color: none; border: none" class="col-md-12" onclick="ShowHidden(this)">Tampilkan Tabel Keterangan</button>
					<div class="col-sm-12" style="display: none">
						<button type="button" style="background-color: none; border: none" class="col-md-12" onclick="HideShowen(this)">Sembunyikan Tabel Keterangan</button>
						<img src="{{URL::to('file/likelihood.jpg')}}" style="width: 100%">
						<br>
						<img src="{{URL::to('file/severitylingkungan.jpg')}}" style="width: 100%">
						<br>
						<img src="{{URL::to('file/severityk3.jpg')}}" style="width: 100%">
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4>Matriks Risk</h4>
						<img src="{{URL::to('file/penilaianrisiko.jpg')}}" style="width: 100%">
						<div class="form-group">
							<label for="matriksrisk">Hasil Matriks Risk</label>
							<select class="form-control" name="matriksrisk">
								<option value="Blue">Blue </option>
								<option value="Orange">Orange </option>
								<option value="Red">Red </option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea type="text" name="keterangan" class="form-control" style="btn-flat" placeholder="Tulis Keterangan Anda di sini ..."></textarea>
				</div>
				<button type="submit" class="btn btn-flat btn-sm btn-success pull-right">Simpan Keterangan</button>
			</form>
		</div>
	</div>
@elseif(count($nearmiss) <= 0)
	<h4>Nearmiss Belum dikonfirmasi</h4>
@elseif($nearmiss == "nothse")
	<h4>Hanya HSE yang boleh konfirmasi jenis ini</h4>
@else
	<h4>Nearmiss telah dikonfirmasi</h4>
@endif