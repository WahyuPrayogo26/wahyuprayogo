@extends('backend.app')
@section('content')
      @if(session('pesan'))
        <div class="alert alert-success">
          {{session('pesan')}}
        </div>
      @endif
 <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Tambah Data</h4>
                <a class="btn btn-primary btn-round ml-auto" href="{{route('skill.index')}}">Kembali</a>
            </div>
        </div>     
<div class="modal-body">

	<form method="POST" action="{{route('skill.store')}}">
		@csrf
		<div class="row">
			<br>
				<div class="col-sm-12">
					<div class="form-group form-group-default">
						<label for="name">Skill</label>
						<input name="name" type="text" id="name" class="form-control">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label for="squareSelect">Akun</label>
						<select name="id_akun" class="form-control input-square" id="squareSelect" >
							@foreach ($akun as $item)
							<option value={{$item->id}}>{{$item->name}}</option>
						@endforeach
						</select>

					</div>
				</div>

				
				<div class="modal-footer no-bd">
					<input type="submit" value="Simpan" class="btn btn-success ">
       				<input type="reset" value="Reset" class="btn btn-danger ">
				</div>
		</div>
		</form>
	</div>
</div>
</div>
@endsection