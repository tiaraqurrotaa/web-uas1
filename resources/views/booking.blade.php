@extends('template/layout')

@section('title','dashboard')


@section('content')
<div class="container-fluid">

<table class="table mt-2">  
 <tr>   
   <th>No.</th>
   <th>Nama</th>    
   <th>Email</th>    
   <th>Kamar</th>      
   <th>Nomor</th>
   <th>Orang</th>
   <th>Tanggal masuk dan keluar</th>
   <th>Aksi</th>
 </tr>


 <tr>
  <?php $count = 0; ?>
  @foreach ($booking as $a)
  <?php $count++; ?>

   <th>{{$count}}</th>
   
   <th>{{$a->name}}</th>   
   <th>{{$a->email}}</th>
   <th>{{$a->room}}</th>        
   <th>{{$a->number}}</th>
   <th>{{$a->number_guest}}</th>
   <th>{{$a->in_out}}</th>
   <th>
   <a  href="{{"hapus/bo/".$a->id}}" class="btn btn-danger btn-sm mr-3"><i class="fa fa-trash "></i></a>
   </th>
   </th>
   </th>
   <th>
     
   </th>
  </tr>
  @endforeach  

</table>

</div>


</div>

</div>

@endsection



