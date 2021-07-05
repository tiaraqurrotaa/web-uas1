@extends('template/layout')

@section('title','dashboard')


@section('content')
<div class="container-fluid">

    <a href="/create" class="btn btn-primary btn-sm"><i class="fa fa-plus mr-2"></i>Tambah data</a> 

<table class="table mt-2">  
 <tr>   
   <th>No.</th>
   <th>Nama</th>    
   <th>Pekerjaan</th>    
   <th>Isi</th>      
   <th>Bintang</th>
   <th>Aksi</th>
 </tr>


 <tr>
  <?php $count = 0; ?>
  @foreach ($review as $a)
  <?php $count++; ?>

   <th>{{$count}}</th>
   
   <th>{{$a->name}}</th>   
   <th>{{$a->job}}</th>
   <th>{{$a->field}}</th>        
   <th>{{$a->star}}</th>
   <th>
   <a  href="{{"hapus/".$a->id}}" class="btn btn-danger btn-sm mr-3"><i class="fa fa-trash "></i></a>
   <a href="{{"edit/".$a->id}}"href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
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



