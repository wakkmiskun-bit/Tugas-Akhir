<form action="/pesan" method="POST">
@csrf
<input name="nama" placeholder="Nama lengkap">
<input name="whatsapp" placeholder="No WhatsApp">
<input name="item" value="Fotocopy BW">
<input type="number" name="harga" value="500">
<button>Kirim Pesanan</button>
</form>
@if(session('success'))
<p>{{ session('success') }}</p>