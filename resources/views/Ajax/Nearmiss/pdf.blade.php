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
			<p style="font-size: 36px; font-weight:bold; text-align:center">Laporan Nearmiss</p>
		</td>
		<td style="width: 3cm">
			<p style="text-align: center; font-size: 18px; font-weight: bold">ID
				<span style="text-align: center; font-size: 36px; font-weight: bold">
					#{{$nearmiss[0]->id_nearmiss}}
				</span>
			</p>
		</td>
	</tr>
	<tr>
		<td class="report-label">Nama Operator</td>
		<td colspan="2">{{$nearmiss[0]->nama}}</td>
	</tr>
	<tr>
		<td class="report-label">Nama Supervisi</td>
		<td colspan="2">{{$nearmiss[0]->nama_supervisi}}</td>
	</tr>
	<tr>
		<td class="report-label">Status Nearmiss</td>
		<td colspan="2">Dikonfirmasi</td>
	</tr>
	<tr>
		<td class="report-label">Tanggal Terjadi Nearmiss</td>
		<td colspan="2">{{$nearmiss[0]->tanggal_nearmiss}}</td>
	</tr>
	<tr style="padding-bottom: 100px">
		<td class="report-label">Lokasi Nearmiss</td>
		<td colspan="2">{{$nearmiss[0]->lokasi_nearmiss}}</td>
	</tr>
	<tr>
		<td class="report-label">Nama Saksi</td>
		<td colspan="2">{{$nearmiss[0]->nama_saksi_nearmiss}}</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 25px"></td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc;">Perbuatan yang dilakukan</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">{{$nearmiss[0]->perbuatan_dilakukan_nearmiss}}</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc">Tahapan Kejadian Nearmiss</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">{{$nearmiss[0]->tahapan_kejadian_nearmiss}}</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc">Penyebab Nearmiss</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">{{$nearmiss[0]->penyebab_nearmiss}}</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc">Penjelasan Penyebab Nearmiss</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">{{$nearmiss[0]->penjelasan_penyebab_nearmiss}}</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc">Bukti-Bukti</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">
			<table width="100%" style="border:none">
				<tr style="border:none">
					<td style="width: 50%; border:none; text-align:center"><img src="{{URL::to('images_upload/'.$nearmiss[0]->bukti_1)}}" style="height:300px"></td>
					<td style="width: 50%; border:none; text-align:center"><img src="{{URL::to('images_upload/'.$nearmiss[0]->bukti_2)}}" style="height:300px"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc">Konfirmasi Nearmiss</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">
			<table width="100%" style="border:none">
				<tr style="border:none">
					<td style="width: 33%; border:none; text-align:center">Likelihood: {{$konfirmasi_nearmiss[0]->likelihood}}</td>
					<td style="width: 33%; border:none; text-align:center">Severity: {{$konfirmasi_nearmiss[0]->severity}}</td>
					<td style="width: 33%; border:none; text-align:center">Severity K3: {{$konfirmasi_nearmiss[0]->severityk3}}</td>
				</tr>
				<tr>
					<td style="text-align: center" colspan="3">Matriks Resiko : {{$konfirmasi_nearmiss[0]->matriksrisk}}</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="background-color: #ccc">Keterangan</td>
	</tr>
	<tr>
		<td colspan="3" style="height: 100px">{{$konfirmasi_nearmiss[0]->keterangan}}</td>
	</tr>
</table>
