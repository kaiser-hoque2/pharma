 






@extends('backend.layouts.app')
@section('title',trans('create Users'))
@section('content')

 

 


	<div class="page-wrapper">
			<div class="page-content">
				<div class="card radius-10">
					 <div class="row">
    <div class="col-8 mx-3">
         
            <h4>{{$role->type}}</h4>
            @php 
                $routes=array();
                $auto_accept=array('GET',"DELETE");
                $permissions=array();
                foreach($permission as $perm){
                    $permissions[$perm->name]=$perm->name;
                }
            @endphp
            @foreach(Illuminate\Support\Facades\Route::getRoutes() as $v)
                @if($v->getPrefix()=="/admin")
                    @php
                        $rl=explode('.',$v->getName());
                        if(isset($rl[1]))
                            $routes[$rl[0]][]=array("method"=>$v->methods[0],"function"=>$rl[1]);
                    @endphp
                @endif
            @endforeach
            <form action="{{route('permission.save',encryptor('encrypt',$role->id))}}" method="post">
                @csrf
            
                <div class="row">
                @forelse($routes as $k=>$r)
                    <div class="col-6 col-sm-3 col-md-3 mt-3">
                        <input type="checkbox" onchange="checkAll(this)"> {{__($k)}}
                        @if($r)
                            <ul class="list-group">
                                @foreach($r as $name)
                                    @if(in_array($name['method'],$auto_accept))
                                    <li class="list-group-item">
                                        @if(in_array($k.'.'.$name['function'],$permissions))
                                            <input type="checkbox"  checked name="permission[]" value="{{$k.'.'.$name['function']}}"> 
                                             {{__($name['function'])}} 
                                        @else
                                        <input type="checkbox" name="permission[]" value="{{$k.'.'.$name['function']}}"> {{__($name['function'])}}
                                        @endif
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @empty

                @endforelse
                </div>
                <div class="row">
                    <div class="col-12 mt-2 mb-2">
                        <button type="submit" class="btn btn-primary"> Save</button>
                    </div>
                </div>
            </form>
            
        
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function checkAll(e){
        if($(e).prop('checked')==true)
            $(e).next('.list-group').find('input').attr('checked','checked');
        else
            $(e).next('.list-group').find('input').removeAttr('checked','checked');
    }

</script>
@endpush