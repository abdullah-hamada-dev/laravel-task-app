@extends('layouts.app')

@section('title',$task->task)
@section('content')
    @can('view-task',$task)
    <div class="content">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header">
                    <h4>{{$task->task}}</h4>
                    <a href="{{route('task.edit',$task->slug)}}" class="btn btn-group btn-warning pull-right'">Edit</a>
                </div>
                <div class="card-body text-primary">
                    {{$task->description}}
                </div>
                <div class="card-footer text-primary"><strong>Category:</strong> {{$task->category}}</div>
        </div>
    </div>
    @endcan
    @cannot('view-task',$task)
    <div class="content"> <h1> You Are Not Authorised To View This Page</h1></div>
    @endcannot
@endsection
