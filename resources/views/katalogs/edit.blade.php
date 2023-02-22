@extends('navigation.navigation')
@section('katalogs', 'active')
@section('content')                       
<div class="col-md-12">
  <h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">Edit Katalog</h2>
  <div class="custom-card">                  
    <div class="custom-card-header text-clear mb-6">
      <h4 class="text-center">Formulir Edit Katalog Barang</h4>                    
    </div>               
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif                            
    <div class="custom-card-body">
      <form action="{{ route('katalogs.update', $katalogs->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container-fluid">
          <div class="form-group row">                          
            <label class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
            <select class="form-control" name="kategori_id">
                <option hidden>--Pilih Kategori--</option>
                @foreach ($kategoris as $item)
                <option value="{{ $item->id }}" {{ old('kategori_id', $katalogs->kategori_id) == $item->id ? 'selected' : null }}>{{ $item->nama_kategori }}</option>
                @endforeach
              </select>
            </div>                  
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" name="nama_katalog" class="form-control" value="{{$katalogs->nama_katalog}}">                    
            </div>                  
          </div>                               
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Harga</label> 
            <div class="col-sm-10">
              <input type="text" name="harga" class="form-control" value="{{$katalogs->harga}}">
            </div>                  
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
              @if($katalogs->foto)
              <img src="{{ asset('template/img/katalog/'.$katalogs->foto) }}" class="img-preview img-fluid col-sm-5 d-block">
              @endif
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input type="file" id="foto" name="foto" class="form-control" onchange="previewImage()">
            </div>                    
          </div>                  
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Link Referensi</label>
            <div class="col-sm-10">
              <input type="text" name="link_referensi" class="form-control" value="{{$katalogs->link_referensi}}">
            </div>                    
          </div>                                                                           
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi</label> 
            <div class="col-sm-10">
              <textarea rows="7" name="description" class="form-control">${{$katalogs->description}}</textarea>
            </div>
        </div>                                                                               
        <br>                                                                           
        <div class="footer-card-btn">
          <a href="{{route('katalogs.index')}}" class="btn btn-dark">Kembali</a>
          <button type="submit" value="Simpan Data" class="btn btn-warning">Simpan</button>
        </div>                                        
      </form>                                                
    </div>
  </div>
</div>  
<script type="text/javascript">
    function previewImage() {
      const foto = document.querySelector('#foto');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(foto.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    } 
  </script>      
@endsection