@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cấp quyền cho user : {{$user->name}}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{url('/insert_permission',[$user->id])}}" method="POST">
                    @csrf
                    @if(isset($name_roles))
                    <p>Vai trò hiện tại :{{$name_roles}}</p>
                    @endif
                    
                    @foreach($permission as $key => $per)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" 
                        @foreach($get_permission_via_role as $key =>$get)
                            @if(($get->id == $per->id)) checked
                            @endif
                        @endforeach
                        name="permission[]" value="{{$per->id}}" id="{{$per->id}}">
                        <label class="form-check-label" for="{{$per->id}}">
                            {{$per->name}}
                        </label>
                    </div>
                    @endforeach
                    <input type="submit" name="insertpermission" value="Cấp quyền" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{url('/insert-permission')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tên quyền</label>
                            <input type="text" class="form-control" value="{{old('permission')}}" name="permission" placeholder="Tên quyền...">
                        </div>
                        
                        <input type="submit" name="insertper" value="Thêm quyền" class="btn btn-danger">
                    </form>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
