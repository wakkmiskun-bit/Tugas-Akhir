<h2>Antrian Pesanan</h2>

@foreach($orders as $o)
<form method="POST" action="/admin/antrian/{{ $o->id }}">
@csrf
@method('PUT')

<b>{{ $o->item }}</b> - {{ $o->nama }}

<select name="status">
  <option>menunggu</option>
  <option>diproses</option>
  <option>selesai</option>
</select>

<button>Update</button>
</form>
<hr>
@endforeach
<a href="/admin">Kembali ke Dashboard Admin</a>