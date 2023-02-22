@extends('navigation.navigation')

@section('content')
<div class="col-sm-12">
  <h2 class="mt-3 fw-bold" style="color: #000; margin-bottom: 20px;">User</h2>
  <div class="custom-card">                  
    <div class="custom-card-header with-tools">
      <h4>Mengelola User</h4>
    </div>        
    <div class="container-fluid">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="d-flex row">            
            <div class="p-2 d-inline-flex">
              <a href="{{route('create_user')}}" class="btn btn-custom-success" style="background-color: #FFB002"><span class="fa fa-plus"></span> Tambah User</a>                                           
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
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Username</th>                 
              <th scope="col">Nomor HP</th>   
              <th scope="col">Akses</th>           
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="search-table">
            @php
            $no = 1  
            @endphp
            @foreach ($users as $key => $item)
            @if ($item->id == 1)
            @continue  
            @endif
            @if (\Auth::user()->id == $item->id)
            @continue
            @endif
            <tr>                                         
              <th scope="row">{{$no++}}</th>
              <td>{{$item->name}}</td>                
              <td>{{$item->email}}</td>                
              <td>{{$item->username}}</td>
              <td>{{$item->no_hp}}</td>   
              <td>{{$item->role->name}}</td>                             
              <td>                  
                <form action="{{route('delete_user', $item->id)}}" method="POST" id="delete_user{{$item->id}}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}                      
                  <div class="d-flex">
                    <div class="p-1">
                      <a href="{{route('show_user', $item->id)}}" class="btn bi bi-arrow-up-left-square text-light" style="background-color: #FFB002"></a>
                    </div>                                  
                    <div class="p-1">                          
                      <a href="{{route('edit_user', $item->id)}}" class="btn bi bi-pencil-square text-light" style="background-color: #FFB002"></a>
                    </div>
                    <div class="p-1">                          
                      <button type="button" class="btn bi bi-trash text-light delete_confirm" style="background-color: #FFB002" data-id="{{$item->id}}" data-toggle="modal"></button>
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
          <p class="text-card" style="margin-bottom: 0">Total Users : <span class="total-row"></span></p>
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
@push('scripts')
<script>      
  $('.delete_confirm').click(function(){             
    $('#btn_delete').attr('data-id', $(this).data('id'))    
    $('#modal_delete_user').modal('show');
  });
  $('#btn_delete').click(function(){                
    $('#delete_user'+$(this).data('id')).submit();
  });
</script>
@endpush
