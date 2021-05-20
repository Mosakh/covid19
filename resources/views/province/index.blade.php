@extends('layout')

@section('content')
<title> Province </title>
<h1 class=""> Province Create</h1>
@if(Session::has('success'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    </div>
@endif

    <form action="{{route('province.store')}}" method="POST" class="form-group " >
        @csrf
        <div class="row">
            <div class="d-flex align-items-start flex-column  col-md-8" style="margin-top:20px">
                <label for="name"> Province </label>
                <input type="text" name="name" class=" form-control input-lg " placeholder="Enter Area" required width="300" >
            </div>
            <div class="col-md-8" style="margin-top:20px">
                <label for="name"> Areas</label>
                <select name="area_id" class="form-control input-lg" id="area_id ">
                    <option value="0" class='form-control'> Select</option>
                    @foreach ($data as $item )
                    <option value="{{$item->id}}"> {{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex align-items-start flex-column col-md-12" style="margin-top:20px">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>

    </form>


@endsection
