@extends('layout')

@section('content')

<h1>All Articles</h1>
<a href="#" class="btn btn-lg btn-success"
   data-toggle="modal"
   data-target="#basicModal">Add an Article</a>

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
            <h4 class="modal-title" id="myModalLabel">New Article</h4>
            </div>
            <div class="modal-body">
               	{{ Form::open(array('action'=>'HomeController@doCreate')) }}
               	{{ Form::text('name',null,array('class'=>'form-control','placeholder'=>'Title')) }}
                <br>
               	{{ Form::text('url',null,array('class'=>'form-control','placeholder'=>'Url')) }}
                <br>
                {{ Form::text('author',null,array('class'=>'form-control','placeholder'=>'Author'))}}
                <br>
                {{ Form::text('email',null,array('class'=>'form-control','placeholder'=>'Your Email')) }}
                <br>
               	{{ Form::select('difficulty', array('easy' => 'Easy', 'medium' => 'Medium', 'hard'=>'Hard'), 'Difficulty')}}
               	{{ Form::close() }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
  </div>
</div>
@stop