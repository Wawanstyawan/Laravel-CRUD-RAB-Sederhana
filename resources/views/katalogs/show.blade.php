@extends('navigation.navigation')
@section('katalogs', 'active')
@section('content')                        
<div class="col-lg-12">
  <h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">Detail Katalog Barang</h2>
  <div class="custom-card">
    <div class="custom-card-body">                    
      <div class="row">                
        <div class="col-md-2 text-center">  
          <div class="row">
            <div class="col-12">
              <div class="img-profile">   
                <label for="upload_user_image">
                  <img src="{{ url('template/img/katalog/'.$katalogs['foto']) }}" class="img-fluid">                           
                </label>
              </div>     
            </div>
            <div class="col-12">
              <h5 class="card-title">{{ $katalogs['nama_katalog'] }}</h5>
            </div>
          </div>
        </div>                   
        <div class="col-md-10">
          <div class="container-fluid">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
                <p class="text-dark">{{ $katalogs->kategori->nama_kategori }}</p>
              </div>                                  
            </div>                  
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Barang</label>
              <div class="col-sm-10">
                <p class="text-dark">{{ $katalogs['nama_katalog'] }}</p>
              </div>                                  
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <p class="text-dark">{{ $katalogs['harga'] }}</p>
              </div>                                  
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Link Referensi</label>
              <div class="col-sm-10">
                <a class="btn text-light" href="{{ $katalogs['link_referensi'] }}" style="background-color: #FFB002">Cek disini</a>
              </div>                                  
            </div>                         
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <p class="text-dark">{{ $katalogs['description'] }}</p>
              </div>                                  
            </div>     
          </div>                       
          <div class="footer-card-btn">
            <a href="{{route('katalogs.index')}}" class="btn btn-dark">Kembali</a>                
          </div>                                
        </div>
      </div>                  
    </div>
  </div>
</div>  
@endsection