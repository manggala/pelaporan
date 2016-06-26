<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-6"><b>Id Form Pre-Operation</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->id_preOperation}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>Operator</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->nama}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>Head Truck</b></div>
			<div class="col-sm-6">
				{{ $daftarPreOperation[0]->id_headtruck}} (<?php echo $daftarPreOperation[0]->hour_meter." Hour, ".$daftarPreOperation[0]->kilo_meter." km"?>)
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>Tanggal Pre-Operation</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->tanggal_preOperation}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>Keterangan Pre-Operation</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->keterangan_preOperation}}</div>
		</div>
		<hr>
	</div>
</div>
<div class="row">
	<button style="background-color: none; border: none" class="col-md-12" onclick="ShowHidden(this)">Lihat Daftar Pertanyaan dan Jawaban</button>
	<div class="col-md-12" style="display: none">
		<h4>Daftar Pertanyaan dan Jawaban Form</h4>
		<div class="row">
			<div class="col-sm-6"><b>1.	Periksa level oli mesin</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_1}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>2.	Periksa level air pendingin (coolant)</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_2}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>3.	Periksa level minyak kopling</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_3}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>4.	Periksa isi air pencuci kaca</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_4}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>5.	Periksa kekencangan terminal battery</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_5}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>6.	Periksa lampu-lampu indikator</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_6}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>7.	Periksa meteran pengukur (gauge)</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_7}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>8.	Periksa fungsi klakson</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_8}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>9.	Periksa vehicle massage / error code</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_9}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>10.	Periksa indikator tekanan oli mesin</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_10}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>11.	Periksa indikator pengisian battery</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_11}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>12.	Periksa fungsi power steering</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_12}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>13.	Periksa indikator sistem tekanan udara</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_13}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>14.	Periksa bunyi tidak normal pada Engine dan Gearbox</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_14}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>15.	Periksa asap knalpot</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_15}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>16.	Periksa kebocoran oli dan coolant</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_16}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>17.	Periksa fungsi dan kondisi lampu-lampu</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_17}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>18.	Periksa / buangkandungan air di tangki udara</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_18}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>19.	Periksa kondisi dan tekanan ban</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_19}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>20.	Periksa posisi dan kondisi kaca spion</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_20}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>21.	Setel posisi jok dan steering</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_21}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>22.	Pakai sabuk pengaman</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_22}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>23.	Periksa kerja rem kaki dan rem parkir</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_23}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>24.	Periksa kondisi APAR</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_24}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>25.	Periksa indikator level bahan bakar</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_25}}</div>
		</div>
		<div class="row">
			<div class="col-sm-6"><b>26.	Pengecekan Rotary Lamp</b></div>
			<div class="col-sm-6">{{ $daftarPreOperation[0]->pertanyaan_26}}</div>
		</div>
	</div>
</div>