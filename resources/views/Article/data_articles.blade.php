@extends('layouts.admin-layout')
@section('main')
<!-- Progress Table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Les donnees de la table article</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User_id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Post</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Created_at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->user_id}}</td>
                                <td>{{$article->nom}}</td>
                                <td>{{$article->post}}</td>
                                <td><img src="{{asset('/uploads/profile').'/'.$article->profile}}" width="60" height="60"></td>
                                <td>{{$article->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection
