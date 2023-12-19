<?= $this->extend('layouts/user_template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h2 class="mb-5">Personality Test</h2>

    <form method="POST" action="<?= base_url('psy') ?>">
        <div class="langkah" id="langkah1">

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" required>
            </div>

            <button type="button" class="btn btn-primary" onclick="pindahLangkah(2)">Mulai Tes</button>
        </div>

        <div class="langkah" id="langkah2" style="display: none;">

            <div class="form-group">
                <p>1. Saya lebih suka beraktivitas sendiri daripada bersama orang lain.</p>
                <input type="radio" name="soal1" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal1" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal1" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal1" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>2. Setelah berinteraksi sosial yang intens, saya merasa butuh waktu sendiri untuk mengistirahatkan
                    diri.</p>
                <input type="radio" name="soal2" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal2" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal2" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal2" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>3. Saya cenderung mendengarkan lebih banyak daripada berbicara dalam percakapan kelompok.</p>
                <input type="radio" name="soal3" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal3" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal3" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal3" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>4. Saya merasa energik dan segar setelah berada dalam kerumunan orang.</p>
                <input type="radio" name="soal4" value="2" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal4" value="4">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal4" value="6">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal4" value="8">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>5. Saya lebih memilih pertemuan kecil daripada pesta besar.</p>
                <input type="radio" name="soal5" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal5" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal5" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal5" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <button type="button" class="btn btn-secondary" onclick="pindahLangkah(1)">Previous</button>
            <button type="button" class="btn btn-success" onclick="pindahLangkah(3)">Next</button>
        </div>

        <div class="langkah" id="langkah3" style="display: none;">

            <div class="form-group">
                <p>6. Saya cenderung berfokus pada fakta dan detail daripada ide dan konsep.</p>
                <input type="radio" name="soal6" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal6" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal6" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal6" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>7. Saya menilai situasi berdasarkan pengalaman konkret daripada membayangkan kemungkinan-kemungkinan.
                </p>
                <input type="radio" name="soal7" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal7" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal7" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal7" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>8. Saya lebih suka langkah-langkah praktis dan konkret daripada ide yang abstrak.</p>
                <input type="radio" name="soal8" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal8" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal8" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal8" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>9. Saya cenderung melihat gambaran keseluruhan daripada detail-detail kecil.</p>
                <input type="radio" name="soal9" value="2" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal9" value="4">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal9" value="6">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal9" value="8">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>10. Saya merasa nyaman dengan informasi yang nyata dan dapat diobservasi.</p>
                <input type="radio" name="soal10" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal10" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal10" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal10" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <button type="button" class="btn btn-secondary" onclick="pindahLangkah(2)">Previous</button>
            <button type="button" class="btn btn-success" onclick="pindahLangkah(4)">Next</button>
        </div>

        <div class="langkah" id="langkah4" style="display: none;">

            <div class="form-group">
                <p>11. Saya membuat keputusan berdasarkan logika dan analisis daripada perasaan dan empati.</p>
                <input type="radio" name="soal11" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal11" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal11" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal11" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>12. Saya cenderung bersikap objektif dan jarang terpengaruh oleh emosi dalam pengambilan keputusan.
                </p>
                <input type="radio" name="soal12" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal12" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal12" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal12" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>13. Saya merasa lebih nyaman dengan aturan dan kriteria objektif daripada penilaian yang subjektif.
                </p>
                <input type="radio" name="soal13" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal13" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal13" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal13" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>14. Saya cenderung mengevaluasi keputusan berdasarkan konsekuensi logis daripada dampak emosional.
                </p>
                <input type="radio" name="soal14" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal14" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal14" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal14" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>15. Saya lebih suka memberikan saran berdasarkan fakta dan analisis daripada perasaan pribadi.</p>
                <input type="radio" name="soal15" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal15" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal15" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal15" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <button type="button" class="btn btn-secondary" onclick="pindahLangkah(3)">Previous</button>
            <button type="button" class="btn btn-success" onclick="pindahLangkah(5)">Next</button>
        </div>

        <div class="langkah" id="langkah5" style="display: none;">

            <div class="form-group">
                <p>16. Saya suka merencanakan aktivitas dan kegiatan saya jauh-jauh hari.</p>
                <input type="radio" name="soal16" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal16" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal16" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal16" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>17. Saya merasa nyaman ketika ada struktur dan rencana dalam hidup saya.</p>
                <input type="radio" name="soal17" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal17" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal17" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal17" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>18. Saya cenderung menyelesaikan tugas sebelum batas waktu daripada menunda-nunda.</p>
                <input type="radio" name="soal18" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal18" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal18" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal18" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>19. Saya lebih suka membuat keputusan daripada terbuka untuk berbagai kemungkinan.</p>
                <input type="radio" name="soal19" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal19" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal19" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal19" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <div class="form-group">
                <p>20. Saya merasa puas ketika suatu pekerjaan selesai dan ditutup.</p>
                <input type="radio" name="soal20" value="8" required>
                <label for="SS">Sangat Setuju</label><br>
                <input type="radio" name="soal20" value="6">
                <label for="S">Setuju</label><br>
                <input type="radio" name="soal20" value="4">
                <label for="TS">Tidak Setuju</label><br>
                <input type="radio" name="soal20" value="2">
                <label for="STS">Sangat Tidak Setuju</label><br>
            </div>

            <button type="button" class="btn btn-secondary" onclick="pindahLangkah(4)">Previous</button>
            <button class="btn btn-warning" type="submit">Selesai</button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>