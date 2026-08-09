@extends('layouts.admin')

@section('content')

<div class="grid">

<div class="card">
<h3>Total Akun</h3>
<h1>{{ $accounts }}</h1>
</div>

<div class="card">
<h3>Total Sponsor</h3>
<h1>{{ $sponsors }}</h1>
</div>

<div class="card">
<h3>Total Laporan</h3>
<h1>{{ $reports }}</h1>
</div>

</div>

<canvas id="visitorChart"></canvas>

@endsection
