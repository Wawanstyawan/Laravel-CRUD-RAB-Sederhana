@extends('navigation.navigation')

@section('content')                        
<div class="col-md-12">
  <h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">Create Kegiatan</h2>
  <div class="custom-card">                  
    <div class="custom-card-header text-clear mb-6">
      <h4 class="text-center">Formulir Tambah Kegiatan</h4>                    
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
      <form action="{{ route('kegiatans.store') }}" method="POST">@csrf
        <div class="container-fluid">
          <div class="form-group row">                          
            <label class="col-sm-2 col-form-label">Nama Kegiatan</label>
            <div class="col-sm-10">
              <input type="text" name="nama_kegiatan" class="form-control" required="required">
            </div>                  
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Penanggung Jawab</label>
            <div class="col-sm-10">
              <input type="text" name="penanggung_jawab" class="form-control" required="required">                    
            </div>                  
          </div>                               
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor HP</label> 
            <div class="col-sm-10">
              <input type="text" name="no_hp" class="form-control" required="required">
            </div>                  
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
            <div class="col-sm-10">
              <input type="date" name="tgl_kegiatan" class="form-control">
            </div>                    
          </div>                  
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat Kegiatan</label>
            <div class="col-sm-10">
              <textarea name="alamat_kegiatan" class="form-control" required="required"></textarea>
            </div>                    
          </div>                                                                           
          
        </div>                                                                               
        <br>                                                                           
        <div class="footer-card-btn">
          <a href="{{route('kegiatans.index')}}" class="btn btn-dark">Kembali</a>
          <button type="submit" value="Simpan Data" class="btn btn-warning">Simpan</button>
        </div>                                        
      </form>                                                
    </div>
  </div>
</div>        
@endsection