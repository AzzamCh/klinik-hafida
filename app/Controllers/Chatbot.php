<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Chatbot extends Controller
{
    public function reply()
    {
        // 1. Ambil data JSON dari JavaScript
        $json = $this->request->getJSON();
        $pesanUser = strtolower($json->pesan ?? ''); 

        // 2. Jawaban Default (Jika bot tidak mengerti)
        $jawaban = "Maaf, saya belum paham pertanyaan itu. 🤔<br>Silakan tanya seputar:<br>- <b>Jadwal & Alamat</b><br>- <b>Layanan (Umum, Gigi, KIA)</b><br>- <b>Syarat BPJS</b><br>- <b>Cara Daftar</b>";

        // 3. LOGIKA DETEKSI KATA KUNCI (KNOWLEDGE BASE)

        // --- SAPAAN & IDENTITAS ---
        if (str_contains($pesanUser, 'halo') || str_contains($pesanUser, 'hai') || str_contains($pesanUser, 'siang') || str_contains($pesanUser, 'pagi') || str_contains($pesanUser, 'sore') || str_contains($pesanUser, 'malam')) {
            $jawaban = "Halo! 👋 Selamat datang di <b>Asisten Virtual Klinik Pratama Hafida</b>.<br>Kami siap melayani kesehatan keluarga Anda dengan sepenuh hati.";
        }
        elseif (str_contains($pesanUser, 'kamu siapa') || str_contains($pesanUser, 'bot')) {
            $jawaban = "Saya adalah asisten virtual yang siap membantu menjawab pertanyaan seputar layanan di Klinik Hafida. 😊";
        }

        // --- JADWAL OPERASIONAL ---
        elseif (str_contains($pesanUser, 'jadwal') || str_contains($pesanUser, 'jam') || str_contains($pesanUser, 'buka') || str_contains($pesanUser, 'tutup')) {
            $jawaban = "🕒 <b>Jam Operasional Klinik Hafida:</b><br>✅ <b>Senin - Sabtu:</b> 07.00 - 21.00 WIB<br>❌ <b>Minggu:</b> Libur / Dengan Perjanjian.<br><br>Kami melayani pasien Umum & BPJS.";
        }

        // --- ALAMAT & LOKASI ---
        elseif (str_contains($pesanUser, 'alamat') || str_contains($pesanUser, 'lokasi') || str_contains($pesanUser, 'dimana') || str_contains($pesanUser, 'tempat') || str_contains($pesanUser, 'map')) {
            $jawaban = "📍 <b>Lokasi Klinik Hafida:</b><br>Jl. Sulawesi No. 45, Kel. Mulyoharjo, Kec. Pemalang.<br>(Dekat Alun-alun Pemalang).<br><br>Cek peta di bagian bawah website ini ya!";
        }

        // --- LAYANAN POLI (UMUM, GIGI, KIA) ---
        elseif (str_contains($pesanUser, 'poli') || str_contains($pesanUser, 'layanan') || str_contains($pesanUser, 'servis')) {
            $jawaban = "🏥 <b>Layanan Kami Meliputi:</b><br>1. <b>Poli Umum</b> (Periksa Dokter, Surat Sehat)<br>2. <b>Poli Gigi</b> (Cabut, Tambal, Scaling)<br>3. <b>KIA & KB</b> (Ibu Hamil, Imunisasi)<br>4. <b>Laboratorium</b> (Cek Gula, Asam Urat, Kolesterol)";
        }
        elseif (str_contains($pesanUser, 'gigi') || str_contains($pesanUser, 'karang') || str_contains($pesanUser, 'tambal')) {
            $jawaban = "🦷 <b>Poli Gigi & Mulut:</b><br>Kami melayani pembersihan karang gigi (scaling), penambalan, pencabutan, dan konsultasi kesehatan gigi. Tersedia Senin-Sabtu.";
        }
        elseif (str_contains($pesanUser, 'hamil') || str_contains($pesanUser, 'kb') || str_contains($pesanUser, 'imunisasi') || str_contains($pesanUser, 'bersalin')) {
            $jawaban = "🤰 <b>Layanan KIA & KB:</b><br>Kami melayani pemeriksaan ibu hamil (ANC), pelayanan KB, imunisasi bayi, dan kesehatan reproduksi.";
        }
        elseif (str_contains($pesanUser, 'lab') || str_contains($pesanUser, 'darah') || str_contains($pesanUser, 'kolesterol') || str_contains($pesanUser, 'gula')) {
            $jawaban = "🔬 <b>Layanan Laboratorium:</b><br>Tersedia cek darah sederhana seperti:<br>- Gula Darah<br>- Asam Urat<br>- Kolesterol<br>Hasil cepat dan akurat.";
        }

        // --- BPJS & ASURANSI ---
        elseif (str_contains($pesanUser, 'bpjs') || str_contains($pesanUser, 'kis') || str_contains($pesanUser, 'askes')) {
            $jawaban = "✅ <b>Kami Menerima BPJS Kesehatan!</b><br><br><b>Syarat Pendaftaran:</b><br>1. Membawa Kartu BPJS/KIS Asli (Aktif)<br>2. Membawa KTP/KK<br>3. Rujukan (Jika diperlukan)<br><br>Pastikan Faskes Tingkat 1 Anda di Klinik Hafida ya!";
        }

        // --- BIAYA / HARGA ---
        elseif (str_contains($pesanUser, 'biaya') || str_contains($pesanUser, 'harga') || str_contains($pesanUser, 'tarif') || str_contains($pesanUser, 'bayar')) {
            $jawaban = "💰 <b>Informasi Biaya:</b><br>🟢 <b>Pasien BPJS:</b> GRATIS (Sesuai ketentuan).<br>🟡 <b>Pasien Umum:</b> Terjangkau & Bersahabat.<br><br>Untuk detail harga tindakan khusus (seperti Gigi/Lab), silakan tanyakan langsung di resepsionis.";
        }

        // --- CARA DAFTAR / KONTAK ---
        elseif (str_contains($pesanUser, 'daftar') || str_contains($pesanUser, 'antre') || str_contains($pesanUser, 'online')) {
            $jawaban = "📝 <b>Cara Pendaftaran:</b><br>1. <b>Datang Langsung</b> ke resepsionis.<br>2. <b>Daftar Online</b> via WhatsApp biar gak antre lama.<br><br>Klik tombol <b>'Daftar Online'</b> di menu atas website ini.";
        }
        elseif (str_contains($pesanUser, 'wa') || str_contains($pesanUser, 'telpon') || str_contains($pesanUser, 'nomor') || str_contains($pesanUser, 'kontak') || str_contains($pesanUser, 'hubungi')) {
            $jawaban = "📞 <b>Kontak Kami:</b><br>WhatsApp/Telp: <b>0811-2800-0588</b><br>Email: klinikhafida@gmail.com<br><br>Kami siap menjawab pertanyaan Anda pada jam kerja.";
        }

        // --- PENUTUP / TERIMA KASIH ---
        elseif (str_contains($pesanUser, 'makasih') || str_contains($pesanUser, 'thanks') || str_contains($pesanUser, 'suwun')) {
            $jawaban = "Sama-sama! Semoga Anda dan keluarga sehat selalu. 😊<br>Jangan lupa jaga kesehatan ya!";
        }

        // 4. Kirim Balasan (JSON)
        return $this->response->setJSON([
            'balasan' => $jawaban
        ]);
    }
}