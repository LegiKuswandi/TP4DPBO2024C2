# TP4DPBO2024C2

## Saya Legi Kuswandi mengerjakan TP4 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Penjelasan Model Database

## Model Members

Model `Members` bertanggung jawab untuk menangani operasi terkait anggota dari sebuah tim.

### Metode

1. **getMembersJoin()**
   - Mengambil semua anggota beserta detail tim mereka dengan melakukan operasi JOIN.
   
2. **getMembers()**
   - Mengambil semua anggota dari database.
   
3. **getMembersById($id)**
   - Mengambil anggota tertentu berdasarkan ID mereka beserta detail tim mereka.
   
4. **addMembers($data)**
   - Memasukkan anggota baru ke dalam database dengan data yang diberikan (nama, email, telepon, tanggal bergabung, tim).
   
5. **updateMembers($id, $data)**
   - Memperbarui detail anggota tertentu yang diidentifikasi dengan ID mereka dengan data yang diberikan.
   
6. **deleteMembers($id)**
   - Menghapus anggota dari database berdasarkan ID mereka.

## Model Team

Model `Team` menangani operasi terkait dengan tim.

### Metode

1. **getTeam()**
   - Mengambil semua tim dari database.
   
2. **getTeamById($id)**
   - Mengambil tim tertentu berdasarkan ID mereka.
   
3. **addTeam($data)**
   - Memasukkan tim baru ke dalam database dengan data yang diberikan (nama tim, tahun berdiri).
   
4. **updateTeam($id, $data)**
   - Memperbarui detail tim tertentu yang diidentifikasi dengan ID mereka dengan data yang diberikan.
   
5. **deleteTeam($id)**
   - Menghapus tim dari database berdasarkan ID mereka.

# Penjelasan Controller

## MembersController

Controller `MembersController` bertanggung jawab untuk mengelola operasi terkait dengan anggota tim.

### Metode

1. **index()**
   - Menampilkan semua anggota beserta detail tim mereka.

2. **addForm()**
   - Menampilkan formulir untuk menambahkan anggota baru ke dalam database.

3. **editForm($id)**
   - Menampilkan formulir untuk mengedit anggota yang dipilih berdasarkan ID mereka.

4. **add($data)**
   - Menambahkan anggota baru ke dalam database berdasarkan data yang diberikan.

5. **edit($id, $data)**
   - Mengupdate detail anggota tertentu berdasarkan ID mereka dengan data yang diberikan.

6. **delete($id)**
   - Menghapus anggota dari database berdasarkan ID mereka.

## TeamController

Controller `TeamController` mengatur operasi terkait dengan tim.

### Metode

1. **index()**
   - Menampilkan semua tim.

2. **addForm()**
   - Menampilkan formulir untuk menambahkan tim baru ke dalam database.

3. **editForm($id)**
   - Menampilkan formulir untuk mengedit tim yang dipilih berdasarkan ID mereka.

4. **add($data)**
   - Menambahkan tim baru ke dalam database berdasarkan data yang diberikan.

5. **edit($id, $data)**
   - Mengupdate detail tim tertentu berdasarkan ID mereka dengan data yang diberikan.

6. **delete($id)**
   - Menghapus tim dari database berdasarkan ID mereka.

# Screenshot

