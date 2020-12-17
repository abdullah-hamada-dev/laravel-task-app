@extends('layouts.app')
@section('title','Edit Task')
@section('content')
    @can('edit-task',$task)
    <div class="container">
        <div class="row">
        <div class="col-m-6">

            <form class="form-horizontal" method="post" action="{{route('task.update',$task->slug)}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group{{ $errors->has('task') ? ' has-error' : '' }}">
                    <label for="task" class="col-sm-2 control-label">task</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control @error('task') is-invalid @enderror" id="task" name="task" placeholder="task" value="{{$task->task}}">
                        @if ($errors->has('task'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('task') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label for="category" class="col-sm-2 control-label">Slug</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="category" value="{{$task->slug}}">
                        @if ($errors->has('slug'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('slug') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                    <label for="category" class="col-sm-2 control-label">Category</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control  @error('category') is-invalid @enderror" id="category" name="category" placeholder="category" value="{{$task->category}}">
                        @if ($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="category" class="col-sm-2 control-label">Description</label>
                    <div class="col-md-5">
                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="description">{{$task->description}}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                            @endif   <strong>{{ $errors->first('description') }}</strong>
                            </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-5">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    @endcan
    @cannot('edit-task',$task)
    <div class="content"><h1>you are not allowed to view this page</h1></div>
    @endcannot
@endsection
