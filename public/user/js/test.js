let langkahSekarang = 1;

function pindahLangkah(langkah) {
    // Sembunyikan langkah sekarang
    $(`#langkah${langkahSekarang}`).hide();

    // Tampilkan langkah berikutnya
    $(`#langkah${langkah}`).show();

    // Perbarui langkah sekarang
    langkahSekarang = langkah;
}
