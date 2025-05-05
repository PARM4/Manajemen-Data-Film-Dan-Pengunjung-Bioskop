# <p align="center" style="margin-top: 0;">MANAJEMEN DATA FILMS DAN PENGUNJUNG BIOSKOP</p>

<p align="center">
  <img src="logo_unsulbar.png" width="300" alt="Deskripsi gambar" />
</p>

### <p align="center">PARMA</p>
### <p align="center">D0223515</p></br>
### <p align="center">Framework Web Based</p>
### <p align="center">2025</p>

---
## Role Sistem
### 1. Admin
- Mengelola data film (tambah, edit, hapus)
- Mengelola jadwal tayang (tambah, edit, hapus)
- Melihat semua data pengunjung dan tiket

### 2. Staf
- Melihat daftar film dan jadwal tayang
- Membantu input pembelian tiket oleh pengunjung (pemesanan manual)
- Melihat data pengunjung
- Melihat daftar tiket yang terjual

### 3. Pengunjung
- Melihat daftar film dan jadwal tayang
- Melakukan pemesanan tiket

---
## Tabel Database beserta fieldnya dan tipe datanya

### 1.Tabel ```{films}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | ID Film |
| title | VARCHAR | Judul Film |
| genre | VARCHAR | Gendre (misal : action, horo) |
| durasi | INT | Durasi dalam menit |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diupdate |

### 2. Tabel ```{pengunjungs}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | ID Pengunjung |
| nama | VARCHAR | Nama Pengunjung |
| created_at | TIMESTAMP | Waktu dibuat |
| updatet_at | TIMESTAMP | Waktu diubah |

### 3. Tabel ```{jadwals}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | ID Jadwal Tayang |
| id_film | INT(FK) | Relasi ke ```{films.id}``` |
| ruangan | VARCHAR | Tempat Tayang|
| show_date | DATE | Tanggal Tayang |
| shoe_time | TIME | Jam Tayang|
| created_at | TIMESTAMP | Waktu dibuat |
| updatet_at | TIMESTAMP | Waktu diubah |

### 4. Tabel ```{tikets}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | ID Tiket |
| id_pengunjung | INT(FK) | Relasi ke ```{pengunjungs.id}``` |
| id_jadwal | INT(FK) | Relasi ke ```{jadwals.id}``` |
| kursi | VARCHAR | Nomor Kursi (misal : A1, B3) |
| harga | DECIMAL(8,2) | Harga Tiket|
| created_at | TIMESTAMP | Waktu dibuat |
| updatet_at | TIMESTAMP | Waktu diubah |

---

## Relasi Antar Tabel
### 1. films ↔ jadwals
- **Relasi** : One to Many
- **Penjelasan** : Satu film dapat memiliki banyak jadwal tayang.
- **Kunci Relasi** : ```{films.id}```←→ ```{jadwals.id_film}```

### 2. pengunjungs ↔ tikets
- **Relasi**: One to Many
- **Penjelasan**: Satu pengunjung bisa memesan banyak tiket.
- **Kunci Relasi**: ```{pengunjungs.id}``` ←→ ```{tikets.id_pengunjung}```

### 3. jadwals ↔ tikets
- **Relasi**: One to Many
- **Penjelasan**: Satu jadwal bisa memiliki banyak tiket.
- **Kunci Relasi**: ```{jadwals.id}``` ←→ ```{tikets.id_jadwal}```





