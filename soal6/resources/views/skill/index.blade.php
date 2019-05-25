@extends('backend.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">SKILL</h4>
                <a class="btn btn-primary btn-round ml-auto" href="{{route('skill.create')}}">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>User ID</th>                            
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                         <tr>
                            <th>#</th>
                            <th>Name</th> 
                            <th>User ID</th>                         
                            <th style="width: 10%">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                       <?php $no=1; ?>
                            @foreach ($skill as $item)      
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->Akun->name}}</td>
                            <td>
                                <div class="form-button-action">
                                    <a data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" href="{{route('skill.edit',$item->id)}}"><i class="fa fa-edit"></i></a>

                                   <form action="{{route('skill.destroy',$item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button  onclick="return confirm('Data Akan Di Hapus yakin ?')" type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                            <?php $no++ ?>
                        @endforeach;
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
