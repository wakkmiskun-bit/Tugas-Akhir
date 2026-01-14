<h2>Riwayat Pesanan</h2>

@forelse($orders as $o)
<p>
<b>{{ $o->item }}</b> - {{ $o->status }} <br>
{{ $o->nama }} | {{ $o->whatsapp }}
</p>
@empty
<p>Belum ada riwayat pesanan</p>
@endforelse
<a href="/pesan">Buat Pesanan Baru</a>