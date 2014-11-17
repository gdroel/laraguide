@extends('layout')

@section('content')
<div class="bg1">
  <h1 class='centered white'>LARAGUIDE</h1>
  <h4 class='centered white'>Collection of Resources for Artisans</h4>
  <div class='container'>
    <div class='row main-resources'>
      <div class='col-md-4'>
        <img class='img-responsive' img src="../images/taylorlaravel.png" alt="alt" />
        <h3 class='centered white'>From Apprentice to Artisan</h3>
      </div>
      <div class='col-md-4'>
          <img class='img-responsive' img src="../images/laracasts.png" alt="alt" />
        <h3 class='centered white'>Laracasts</h3>
      </div>
      <div class='col-md-4'>
        <img class='img-responsive' img src="../images/codebright.png" alt="alt" />
        <h3 class='centered white'>Code Bright</h3>
      </div>
    </div>
  </div>
  
  <h3>Top Repos</h3>
  <h3>Top Tutorials</h3>
  <h3>Top References</h3>
  <h3>Top Communities</h3>
  <h3>People to Follow</h3>




  </div>
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
                 	            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  {{ Form::submit('Add', array('class'=>'btn btn-primary'))}}
                  {{ Form::close() }}

          </div>
      </div>
    </div>
</div>

@stop