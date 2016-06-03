@extends('shared.master')

@section('content')
            <div class="content col-md-8">
                <div class="title"><h2>Add a Task</h2></div>
                 <form action="update" method="POST">
                   @if ($errors->has('title'))
                    	<span class="help-block">{{ $errors->first('title') }}
                   @endif
                      <input type="text" value="" class="form-control input{{ $errors->has('title') ? ' has-error' : '' }}" name="title" placeholder="Title of the Task">
                   @if ($errors->has('description'))
                         <span class="help-block">{{ $errors->first('description') }}
                   @endif
                      <input type="text" value="" class="form-control input{{ $errors->has('description') ? ' has-error' : '' }}" name="description" placeholder="Description">
                      <input type="hidden" name="_token" value="{{ Session::token() }}">
                      <button class="btn btn-md btn-success">Add</button>
                 </form>
                 <a href="/">
                   <button class="btn btn-danger btn-md"><i class="fa fa-eyes"></i> View Tasks</button></a><br>
            </div>
@stop
