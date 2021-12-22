@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<form action="/friends" method="GET">
<div class="col-sm-8">
        <div class="card border-success mb-3" style="max-width: 30rem;">
            <div class="card-header bg-success text-dark">
                <b>Friends Detail</b>
            </div>
            <div class="card-body bg-white p-2 text-dark bg-opacity-10">
                <h6>Nama Teman : {{ $friend['nama'] }} </a> </h6>
                <h6>No Tlp : {{ $friend['no_tlp'] }} </h6>
                <h6>Alamat : {{ $friend['alamat'] }} </h6>
                <h6>Group Saat Ini : {{ $friend['groups_id'] }} </h6>
            </div>
        </div>
</form>
@endsection

   
