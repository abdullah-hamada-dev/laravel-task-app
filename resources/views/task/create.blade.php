@extends('layouts.app')

@section('title','Add New Task')

@section('content')

@section('content')
    <div>
        <div class="col-md-8">
            <form class="form-horizontal" method="post" action="{{route('task.store')}}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('task') ? ' has-error' : '' }} row col-md">
                    <label for="task" class="col-md-4 col-form-label text-md-right">Task</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control @error('task') is-invalid @enderror" id="task" name="task" placeholder="Task" value="{{ old('task') }}">
                        @if ($errors->has('task'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('task') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} row col-md">
                    <label for="slug" class="col-md-4 col-form-label text-md-right">Slug</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" value="{{ old('slug') }}">
                        @if ($errors->has('slug'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('slug') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }} row col-md">
                    <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" placeholder="category" value="{{ old('category') }}">
                        @if ($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} row col-md">
                    <label for="category" class="col-md-4 col-form-label text-md-right">Description</label>
                    <div class="col-md-5">
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                            @endif   <strong>{{ $errors->first('description') }}</strong>
                            </span>


                    </div>
                </div>


                <div class="form-group ">
                    <div class="offset-md-4 col-md-5">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@endsection
