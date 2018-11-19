@extends('layouts.admin')






@section('content')


    <h1>Posts</h1>


<table class="table">
   <thead>
     <tr>
         <th>Id</th>
         <th>Photo</th>
         <th>Created at</th>
         <th>DEL</th>

    </thead>
    <tbody>

    @if($photos)


        @foreach($photos as $photo)

    <tr>
    <td>{{$photo->id}}</td>
    <td><img height="50" src="{{$photo ? $photo->file : 'http://placehold.it/400x400' }}" alt="" ></td>
    <td>{{$photo->created_at->diffForhumans()}}</td>
    <td>

    {!! Form::open(['method'=>'DELETE','action'=> ['AdminMediasController@destroy', $photo->id]]) !!}
    <div class="form-group">
    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}


          </td>

      </tr>

        @endforeach

        @endif

   </tbody>
 </table>




@stop