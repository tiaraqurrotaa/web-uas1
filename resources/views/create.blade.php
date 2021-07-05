
@extends('template.layout')

@section('title','edit')


@section('content')


<div class="container-fluid">
    <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
    @csrf
           <div class="form-group">
               <label>Nama</label>
               <input type="text" name="name" class="form-control" required>
           </div>           
           <div class="form-group">
               <label>Pekerjaan</label>
               <input type="text" name="job" class="form-control" required>
           </div>           
           <div class="form-group">
               <label>Isi</label>
               <input type="text" name="field" class="form-control"  required>
           </div> 
           <div class="form-group">
           <label>Bintang</label>
           <select name='star' type="text" class="form-control"  required>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
	       </select>
           
           </div>                                      
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
       </form>
</div>



@endsection



