@extends('layout')

@section('content')
<title> Case</title>
<h1 class=""> Case Create</h1>
@if(Session::has('success'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    </div>
@endif
        <form action="{{route('case.store')}}" method="POST" class="form-group" >
            @csrf
            <div class="row">
                    <div class="d-flex align-items-start flex-column col-md-8 " style="padding:20px" width="200">
                        <label for="name"> Case </label>
                        <input type="text" name="name" class=" form-control input-lg" placeholder="Enter Area" required >
                    </div>
                    <div class="d-flex align-items-start flex-column col-md-12" style="padding:20px">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
            </div>
        </form>


@endsection
