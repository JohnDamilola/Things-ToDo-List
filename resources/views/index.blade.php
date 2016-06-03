@extends('shared.master')

@section('content')
                 @if (count($tasks)>0)
                    @foreach($tasks as $task)
                    <div class="col-md-4" style="min-height:200px;">
                    <div class="panel panel-success" style="box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(100,100,100,0.6);">
                      <div class="panel-heading" style="background-image: url('images/11.jpg'); color:#fff;">
                        <h4>{{ $task->title }}</h4>
                      </div>
                        <div class="panel-body">
                        <p>{{ $task->description }}</p>
                        <p>Created at {{ $task->created_at }}</p>
                        <form action="{{ url('task/'.$task->id) }}" method="post">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <input type="hidden" name="_method" value="DELETE">


                        <button type="submit" class="btn btn-md" style="padding:10px; margin:5px; background-color:#FF3B30; color:#fff">
                          <i class="fa fa-times"></i> Delete</button>
                        </form>
                          <a class="btn btn-md" style="padding:10px; margin:5px; background-color:#3472F7; color:#fff" href="edit/{$task->id}">
                            <i class="fa fa-edit"></i> Edit</a>
                      </div>
                    </div>
                    </div>
                    @endforeach
                    {!! $tasks->links() !!}
                @endif
                <nav class="nav navbar navbar-right navbar-fixed-bottom">
                  <a href="create">
              <button class="btn btn-lg" style="border-radius:500px; margin:20px; padding:10px; margin:5px; background-color:#FF3B30; color:#fff;">
                <i class="fa fa-edit"></i> .</button>
              </a>
            </nav>
@stop
