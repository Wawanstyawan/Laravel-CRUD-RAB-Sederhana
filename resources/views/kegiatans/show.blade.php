@extends('navigation.navigation')

@section('content')
<div class="col-sm-12">
	<h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">Detail Anggaran Kegiatan</h2>
	<div class="custom-card">
		<div class="custom-card-header text-clear mb-6">
			<a href="{{route('kegiatans.index')}}" class="btn btn-dark">Kembali</a>
		</div>
		<div class="custom-card-body">
			<table class="table table-hover" style="color: #000">
				@csrf
				{{ method_field('PUT') }}
				<tbody>
					<tr>
						<td style="width: 3%">1</td>
						<td style="width: 20%">Nama Kegiatan</td>
						<td>: {{ $kegiatan->nama_kegiatan }}</td>
					</tr>
					<tr>
						<td scope="col">2</td>
						<td>Penanggung Jawab</td>
						<td>: {{ $kegiatan->penanggung_jawab }}</td>
					</tr>
					<tr>
						<td scope="col">3</td>
						<td>No. HP</td>
						<td>: {{ $kegiatan->no_hp }}</td>
					</tr>
					<tr>
						<td scope="col">4</td>
						<td>Tanggal Kegiatan</td>
						<td>: {{ $kegiatan->tgl_kegiatan }}</td>
					</tr>
					<tr>
						<td scope="col">5</td>
						<td>Alamat Kegiatan</td>
						<td>: {{ $kegiatan->alamat_kegiatan }}</td>
					</tr>
				</tbody>
			</table>
			<br><hr>
			<h3 class="mt-4 fw-bold">Rancangan Anggaran Biaya Kegiatan {{ $kegiatan->nama_kegiatan }}</h3><br>
			<div>
				<button type="button" class="btn bi bi-plus mb-3 text-light" data-bs-toggle="modal" data-bs-target="#modal-create" style="background-color: #FFB002"> Tambah Kebutuhan</button>
				<a href="{{route('kebutuhans.exportpdf')}}" class="btn mb-3 btn-success text-light">Export PDF</a>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Kebutuhan</th>
							<th>Kuantitas</th>
							<th>Harga Satuan</th>
							<th>Subtotal</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@php
						$no = 1
						@endphp
						<?php $total_anggaran = 0 ?>
						@foreach($kebutuhans as $id => $kebutuhan)
						<?php $total_anggaran += $kebutuhan['harga_satuan'] * $kebutuhan['kuantitas']?>
						<tr class="table-light">
							<td class="text-center">{{ $no++ }}</td>
							<td>{{ $kebutuhan['urn_kebutuhan'] }}</td>
							<td>{{ $kebutuhan['kuantitas'] }}</td>
							<td>{{ $kebutuhan['harga_satuan'] }}</td>
							<td data-th="Subtotal" class="fs-6 fw-bold">Rp. {{ $kebutuhan['harga_satuan'] * $kebutuhan['kuantitas'] }}</td>
							<td class="text-center">
								<button type="button" class="btn bi bi-pencil-square text-light" data-myid="{{ $kebutuhan->id }}" data-myno="{{ $kebutuhan->no }}" data-myurn_kebutuhan="{{ $kebutuhan->urn_kebutuhan }}" data-mysumber_barang="{{ $kebutuhan->sumber_barang }}" data-mykuantitas="{{ $kebutuhan->kuantitas }}" data-myharga_satuan="{{ $kebutuhan->harga_satuan }}" data-bs-toggle="modal" data-bs-target="#edit" style="background-color: #FFB002"> Ubah</button>
							</td>
							<td class="text-center">
								<form action="{{ route('kebutuhans.destroy', $kebutuhan->id) }}">
									@csrf
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn bi bi-trash text-light" type="submit" style="background-color: #FFB002"> Hapus</button>
								</form>
							</td>
						</tr>
						@endforeach	
					</tbody>
					<tfoot class="table-light">
						<tr class="table-light">
							<td colspan="5" class="hidden-xs text-center"><strong>Total Pengeluaran</strong></td>
							<td class="hidden-xs"><strong>Rp. {{ $total_anggaran }}</strong></td>
							<td colspan="2" class="text-center"></td>
						</tr>
					</tfoot>	
				</table>
			</div>

			<!-- Create Kebutuhan -->
			<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title fw-bold" id="exampleModalLabel">Silahkan Isi Formulir Rincian Kebutuhan</h4>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="px-5 container">
								<form action="{{ route('kebutuhans.store') }}" method="POST">
									@csrf
									<div class="mb-3 form-group">
										<input type="hidden" name="id" value="{{ $kegiatan->id }}" class="form-control">
									</div>
									<div class="mb-3 form-group">
										<label class="form-label fw-bold">Kebutuhan</label><br>
										<input type="text" name="urn_kebutuhan" required="required" class="form-control">
									</div>
									<div class="mb-3 form-group">
										<label class="form-label fw-bold">Kuantitas</label><br>
										<input type="text" name="kuantitas" required="required" class="form-control">
									</div>
									<div class="mb-3 form-group">
										<label class="form-label fw-bold">Harga Satuan</label><br>
										<input type="text" name="harga_satuan" required="required" class="form-control">
									</div>
									<br>
									<div class="modal-footer mt-3">
										<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
										<button type="submit" class="btn bi bi-file-earmark-arrow-down text-light" style="background-color: #e66a00"> Simpan Data</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Edit Kebutuhan -->
			<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Silahkan Edit Formulir Rincian Kebutuhan</h4>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="px-5 container">
								<form action="{{ route('kebutuhans.update', 'test') }}" method="POST">
									@csrf
									<div class="mb-3 form-group">
										<input type="hidden" id="id" name="id" value="" class="form-control">
									</div>
									<div class="mb-3 form-group">
										<label class="form-label fw-bold">Kebutuhan</label><br>
										<input type="text" id="e_bth" name="urn_kebutuhan" value="" class="form-control">
									</div>
									<div class="mb-3 form-group">
										<label class="form-label fw-bold">Kuantitas</label><br>
										<input type="text" id="e_ktt" name="kuantitas" value="" class="form-control">
									</div>
									<div class="mb-3 form-group">
										<label class="form-label fw-bold">Harga Satuan</label><br>
										<input type="text" id="e_hsat" name="harga_satuan" value="" class="form-control">
									</div>
									<br>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
										<button type="submit" class="btn bi bi-file-earmark-arrow-down text-light" style="background-color: #e66a00"> Simpan Perubahan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection