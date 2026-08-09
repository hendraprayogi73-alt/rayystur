<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>CAP GAME</title>

<link rel="stylesheet"
href="{{ asset('assets/css/admin.css') }}">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<div class="sidebar">

<div class="logo">
CAP GAME
</div>

<ul>

<li>
<a href="/dashboard">
Dashboard
</a>
</li>

<li>
<a href="/accounts">
Akun Game
</a>
</li>

<li>
<a href="/sponsors">
Sponsor
</a>
</li>

<li>
<a href="/reports">
Laporan
</a>
</li>

<li>
<a href="/settings">
Pengaturan
</a>
</li>

</ul>

</div>

<div class="content">

@yield('content')

</div>

</body>
</html>
