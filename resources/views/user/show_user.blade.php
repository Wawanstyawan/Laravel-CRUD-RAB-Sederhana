@extends('navigation.navigation')

@section('content')                        
<div class="col-lg-12">
  <h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">Detail User</h2>
  <div class="custom-card">                  
    <div class="custom-card-header">
      <h4 class="text-center">Profile User</h4>                    
    </div>                                      
    <div class="custom-card-body">                    
      <div class="row">                                 
        <div class="col-md-10">                                        
          <div class="container-fluid">                            
            <div class="form-group row">                                  
              <label class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" value="{{$user->name}}" class="form-control-plaintext" readonly>
              </div>                                  
            </div>                  
            <div class="form-group row">                                  
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" value="{{$user->email}}" class="form-control-plaintext" readonly>
              </div>                                  
            </div>
            <div class="form-group row">                                  
              <label class="col-sm-2 col-form-label">Nomor HP</label>
              <div class="col-sm-10">
                <input type="email" value="{{$user->no_hp}}" class="form-control-plaintext" readonly>
              </div>                                  
            </div>
            <div class="form-group row">                                  
              <label class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <input type="text" value="Petugas" class="form-control-plaintext" readonly>
              </div>                                  
            </div>     
            <div class="form-group row">                                  
              <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                @php
                $jk = (($user->jk == "L") ? "Laki-laki" : (($user->jk == "P") ? "Perempuan": ''));                                
                @endphp
                <input type="text" value="{{$jk}}" class="form-control-plaintext" readonly>                        
              </div>                                  
            </div>                       
            <div class="form-group row">                                  
              <label class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="" id="" class="form-control-plaintext">{{$user->alamat}}</textarea>
              </div>                                  
            </div>     
          </div>                       
          <div class="footer-card-btn">
            <a href="{{route('user')}}" class="btn btn-dark">Kembali</a>                
          </div>                                
        </div>                                                     
      </div>                  
    </div>
  </div>
</div>  
@endsection