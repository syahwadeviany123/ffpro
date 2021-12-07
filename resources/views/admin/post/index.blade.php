@extends('layouts.admin.app')

@section('content')

<div class="main-content" style="min-height: 530px;">
    <section class="section">
      <div class="section-header">
        <h1>Posts</h1>
        <div class="section-header-button">
          <a href="{{$route}}" class="btn btn-primary">Add New</a>
        </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Posts</a></div>
          <div class="breadcrumb-item">All Posts</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Posts</h2>
        <p class="section-lead">
          You can manage all posts, such as editing, deleting and more.
        </p>


        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>All Posts</h4>
              </div>
              <div class="card-body">


                <div class="table-responsive">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Tittle</th>
                                <th>Slug</th>
                                <th>Expert</th>
                                <th>Date</th>
                                <th>Created By</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}
                                    <div class="table-links">
                                        <a href="{{route('post.edit',$post->id)}}">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" onclick="event.preventDefault(); $('#destroy-{{ $post->id }}').submit()">Delete</a>
                                        <div class="bullet"></div>
                                        <form id="destroy-{{$post->id}}" action="{{ route('post.destroy' , $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                      </div>
                                </td>
                                <td>{{$post->slug}}</td>
                                <td>{{$post->expert}}</td>
                                <td>{{$post->created_at}}</td>
                                
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection

@section('script')

<script>
    $(document).ready( function () {
      $('#table_id').DataTable();
    } );
</script>

@endsection
