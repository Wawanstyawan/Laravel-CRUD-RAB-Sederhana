@extends('navigation.navigation')
@section('katalogs', 'active')
@section('content')
<div class="col-sm-12">
	<h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">Katalog</h2>
	<div class="custom-card">
		<div class="custom-card-header with-tools">
			<h4>Mengelola Katalog</h4>
		</div>
		<div class="container-fluid">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<div class="d-flex row">            
						<div class="p-2 d-inline-flex">
							<a href="{{route('katalogs.create')}}" class="btn btn-custom-success" style="background-color: #FFB002"><span class="fa fa-plus"></span> Tambah Katalog</a>
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
							<th scope="col">Kategori</th>
							<th scope="col">Nama Barang</th>
							<th scope="col">Harga</th>
							<th scope="col">Foto</th>
							<th scope="col">Link Referensi</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody class="search-table">
						@php
						$no = 1
						@endphp
						@foreach ($katalogs as $key => $item) 
						<tr class="table-light">
							<td scope="row">{{ $no++ }}</td>
							<td>{{ $item->kategori->nama_kategori }}</td>
							<td>{{ $item['nama_katalog'] }}</td>
							<td>{{ $item['harga'] }}</td>
							<td>
								<img src="{{ asset('template/img/katalog/'.$item['foto']) }}" style="width: 40px;">
							</td>
							<td>
								<a class="btn text-light" href="{{ $item['link_referensi'] }}" style="background-color: #FFB002">Cek disini</a>
							</td>
							<td>
								<form action="{{ route('katalogs.destroy', $item->id) }}">
									@csrf
									<div class="d-flex">
										<div class="p-1">
											<a class="btn bi bi-arrow-up-left-square text-light" href="{{ route('katalogs.show', $item->id) }}" style="background-color: #FFB002"></a>
										</div>
										<div class="p-1">
											<a class="btn bi bi-pencil-square text-light" href="{{ route('katalogs.edit', $item->id) }}" style="background-color: #FFB002"></a>
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
					<p class="text-card" style="margin-bottom: 0">Total Katalog : <span class="total-row"></span></p>
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