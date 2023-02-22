@extends('navigation.navigation')
@section('kegiatans', 'active')
@section('content')
<div class="col-sm-12">
	<h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">Ayo Buat Rencana Anggaran Biaya Kegiatan Karang Tarunamu</h2>
	<div class="custom-card">
		<div class="custom-card-header with-tools">
			<h4>Mengelola Kegiatan</h4>
		</div>
		<div class="container-fluid">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<div class="d-flex row">            
						<div class="p-2 d-inline-flex">
							<a href="{{route('kegiatans.create')}}" class="btn btn-custom-success" style="background-color: #FFB002"><span class="fa fa-plus"></span> Buat Kegiatan</a>
						</div>
						<div class="ml-auto p-2">
							<input class="form-control search-box" type="text" placeholder="Search" aria-label="Search">
						</div>
					</div>
				</li>
			</ul>
			<div class="custom-card-body-table table-responsive">
				<table class="table table-fixed display nowrap"  id="data_table" width="100%">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama Kegiatan</th>
							<th scope="col">Penanggung Jawab</th>
							<th scope="col">No Hp</th>
							<th scope="col">Tanggal Kegiatan</th>
							<th scope="col">Alamat Kegiatan</th>
							<th scope="col">Opsi</th>
						</tr>
					</thead>
					<tbody class="search-table">
						@php
						$no = 1
						@endphp
						@foreach ($kegiatans as $key => $item)
						<tr class="table-light">
							<td scope="row">{{ $no++ }}</td>
							<td>{{ $item['nama_kegiatan'] }}</td>
							<td>{{ $item['penanggung_jawab'] }}</td>
							<td>{{ $item['no_hp'] }}</td>
							<td>{{ $item['tgl_kegiatan'] }}</td>
							<td>{{ $item['alamat_kegiatan'] }}</td>
							<td>
								<form action="{{ route('kegiatans.destroy', $item->id) }}">
									@csrf
									<div class="d-flex">
										<div class="p-1">
											<a class="btn bi bi-arrow-up-left-square text-light" href="{{ route('kegiatans.show', $item->id) }}" style="background-color: #FFB002"></a>
										</div>
										<div class="p-1">
											<a class="btn bi bi-pencil-square text-light" href="{{ route('kegiatans.edit', $item->id) }}" style="background-color: #FFB002"></a>
										</div>
										<div class="p-1">
											<button class="btn bi bi-trash text-light" type="submit" style="background-color: #FFB002"></button>
										</div>
									</div>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="d-flex mt-2">
				<div class="align-self-center p-2">
					<p class="text-card" style="margin-bottom: 0">Total Kegiatan : <span class="total-row"></span></p>
				</div>
				<div class="ml-auto p-2">
					<nav class="pagination-table" aria-label="Page navigation example">
						<ul class="pagination"></ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection