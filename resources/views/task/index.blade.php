@extends('layouts.app')

@section('title','Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="list-group ">
                    @if(count($tasks))
                        @foreach ($tasks as $task)
                            <li class="list-group-item ">
                                <a class ="secondary-content" href="{{route('task.edit',$task->slug)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                    </svg>
                                </a>
                                <a class="secondary-content" href="{{route('task.show',$task->slug)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                    </svg>
                                </a>
                                <a class="secondary-content" href="#" onclick="event.preventDefault();
                                    var del = confirm('Are you sure that you want to delete this task?');
                                    if(del==true){
                                    document.getElementById('df-{{$task->id}}').submit();}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                    </svg>                                </a>
                                <form id="df-{{$task->id}}" action="{{route('task.destroy',$task->slug)}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}{{ method_field('DELETE') }}
                                </form>

                                {{$task->task}}
                            </li>

                        @endforeach
                    @else
                        <li class="list-group-item"> No Task added yet <a href="{{ route('task.create') }}"> click here</a> to add new task. </li>
                    @endif
                </ul>
            </div>

            <div class="col-md-3">
                <img class="img-responsive img-circle" src="{{asset('storage/'.$image)}}" width="100px" height="100px">
            </div>
        </div>
    </div>
@endsection
