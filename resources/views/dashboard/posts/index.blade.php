@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create my post</a>
    
    <div class="table-responsive small col-lg-10">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="" class="badge bg-warning"><span data-feather="edit-2"></span></a>
                        <a href="" class="badge bg-danger"><span data-feather="x-octagon"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
@endsection