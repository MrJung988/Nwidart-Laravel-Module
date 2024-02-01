@extends('common.common')

@section('card-header', 'Add New Task')

@section('card-body')
    <section>
        <div class="card w-75 mx-auto p-4">
            <form action="{{ route('admin.task.store') }}" method="post">
                @csrf
                <div class="container">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control">
                    <br>

                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control"></textarea>
                    <br>

                    <button type="submit" class="btn btn-primary">Create Task</button>
                </div>
            </form>
        </div>
    </section>
@endsection
