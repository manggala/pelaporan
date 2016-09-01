<style type="text/css">
table {
  border-collapse: collapse;
}
table td, table th {
  border: 1px solid black;
}
table tr:first-child th {
  border-top: 0;
}
table tr:last-child td {
  border-bottom: 1;
}
table tr td:first-child,
table tr th:first-child {
  border-left: 1;
}
table tr td:last-child,
table tr th:last-child {
  border-right: 1;
}
table{
	width: 100%;
	padding: 10px;
}
.report-label{
	width: 30%;
}

.report-half{
	width: 50%;
}
.report-full{
	width: 100%;
}
td{
	border: 1;
}
</style>
<table class="report-full">
	<tr>
		<td style="width: 3cm">
			<img src="{{URL::to('assets/Logo.png')}}" style="width: 100px">
		</td>
		<td style="width: 10cm">
			<p style="font-size: 36px; font-weight:bold; text-align:center">Laporan preOperation</p>
		</td>
		<td style="width: 3cm">
			<p style="text-align: center; font-size: 18px; font-weight: bold">ID
				<span style="text-align: center; font-size: 36px; font-weight: bold">
					#{{$preOperation[0]->id_preOperation}}
				</span>
			</p>
		</td>
	</tr>
	<tr>
		<td class="report-label">Nama Operator</td>
		<td colspan="2">{{$preOperation[0]->nama}}</td>
	</tr>
	<tr>
		<td class="report-label">Nama Supervisi</td>
		<td colspan="2">{{$preOperation[0]->nama_supervisi}}</td>
	</tr>
	<tr>
		<td class="report-label">HeadTruck</td>
		<td colspan="2">{{$preOperation[0]->id_head_truck}} ({{$preOperation[0]->hour_meter}},{{$preOperation[0]->kilo_meter}})</td>
	</tr>
	<tr>
		<td class="report-label">Status preOperation</td>
		<td colspan="2">@if($preOperation[0]->status_preOperation == 1)
			Diizinkan
			@elseif($preOperation[0]->status_preOperation == -1)
			Ditolak
			@endif
		</td>
	</tr>
	<tr>
		<td class="report-label">Tanggal preOperation</td>
		<td colspan="2">{{$preOperation[0]->tanggal_preOperation}}</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc;">Keterangan</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">{{$preOperation[0]->keterangan_preOperation}}</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc">Pertanyaan-pertanyaan</td>
	</tr>
	<tr>
		<td colspan="3" style="">
			<table width="100%" style="border:none">
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">1.	Periksa level oli mesin</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_1}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">2.	Periksa level air pendingin (coolant)</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_2}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">3.	Periksa level minyak kopling</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_3}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">4.	Periksa isi air pencuci kaca</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_4}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">5.	Periksa kekencangan terminal battery</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_5}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">6.	Periksa lampu-lampu indikator</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_6}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">7.	Periksa meteran pengukur (gauge)</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_7}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">8.	Periksa fungsi klakson</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_8}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">9.	Periksa vehicle massage / error code</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_9}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">10.	Periksa indikator tekanan oli mesin</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_10}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">11.	Periksa indikator pengisian battery</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_11}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">12.	Periksa fungsi power steering</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_12}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">13.	Periksa indikator sistem tekanan udara</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_13}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">14.	Periksa bunyi tidak normal pada Engine dan Gearbox</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_14}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">15.	Periksa asap knalpot</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_15}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">16.	Periksa kebocoran oli dan coolant</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_16}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">17.	Periksa fungsi dan kondisi lampu-lampu</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_17}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">18.	Periksa / buangkandungan air di tangki udara</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_18}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">19.	Periksa kondisi dan tekanan ban</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_19}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">20.	Periksa posisi dan kondisi kaca spion</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_20}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">21.	Setel posisi jok dan steering</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_21}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">22.	Pakai sabuk pengaman</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_22}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">23.	Periksa kerja rem kaki dan rem parkir</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_23}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">24.	Periksa kondisi APAR</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_24}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">25.	Periksa indikator level bahan bakar</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_25}}</td>
				</tr>
				<tr style="border-bottom: 1px solid black">
					<td style="width: 70%; text-align:left">26.	Pengecekan Rotary Lamp</td>
					<td style="width: 30%; text-align:center">{{$preOperation[0]->pertanyaan_26}}</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
