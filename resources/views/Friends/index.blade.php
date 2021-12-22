@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<h3>MY FRIENDS</h3>
<a href="/friends/create" class="card-link btn-primary btn">Tambah Teman</a>
<div class="mb-3"></div>
<div class="row">
    @foreach ($friends as $friend)
    <div class="col-sm-4">
        <div class="card border-success mb-3" style="max-width: 30rem;">
            <div class="card-header bg-success text-dark">
                <b>Friends</b>
            </div>
            <div class="card-body bg-white p-2 text-dark bg-opacity-10">
                <a href="/friends/{{$friend['id']}}" class="card-title">{{ $friend['nama'] }}</a>
                <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
                <p class="card-text">{{ $friend['alamat'] }}</p>
                <a href="/friends/{{$friend['groups_id']}}/detail" class="card-link btn-primary">Detail Teman</a>
                <a href="/friends/{{$friend['id']}}/edit" class="card-link btn-warning">Edit Teman</a>
                <form action="/friends/{{ $friend['id'] }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="card-link btn-danger">Delete Teman</b>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $friends-> links() }}
</div>
<div class="mb-3"></div>
@endsection
</div>