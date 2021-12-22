@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<center>
    <h1>{{ $group['name'] }}</h1>
    </center>
    <form action="/friends" method="GET">
        <div class="row">
@foreach ($friend as $friends)
    <div class="col-sm-4">
        <div class="card border-success mb-3" style="max-width: 30rem;">
            <div class="card-header bg-success text-dark">
                <b>Friends Detail</b>
            </div>
            <div class="card-body bg-white p-2 text-dark bg-opacity-10">
                <h6>Nama Teman : {{ $friends['nama'] }} </a> </h6>
                <h6>No Tlp : {{ $friends['no_tlp'] }} </h6>
                <h6>Alamat : {{ $friends['alamat'] }} </h6>
                <h6>Group Saat Ini : {{ $friends['groups_id'] }} </h6>
            </div>
        </div>
    </div>
    @endforeach
</div>

</form>
   @endsection