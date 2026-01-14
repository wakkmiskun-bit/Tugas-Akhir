Schema::create('orders', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('whatsapp');
    $table->string('item');
    $table->integer('harga');
    $table->enum('status', ['menunggu','diproses','selesai'])->default('menunggu');
    $table->timestamps();
});
// Compare this snippet from Tugas-Akhir/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php ends here    