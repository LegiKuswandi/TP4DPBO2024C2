# TP4DPBO2024C2

## Saya Legi Kuswandi mengerjakan TP4 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Sruktur Folder Setelah menerapkan Konsep MVC (Model, View, Controller)
![Screenshot 2024-05-07 233128](https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/e933e8d0-4e0f-4ef7-8441-f7c7ad5ef24b)


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

### Halaman depan yang menampilkan daftar member pembalap team F1
![Screenshot 2024-05-07 232936](https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/83eebc61-e1fa-47e0-b63b-8b37094788b4)

### Halaman untuk menambah data pembalap
![Screenshot 2024-05-07 232956](https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/82467794-c9d3-41e5-90ac-ccd84fab1519)

### Halaman untuk melakukan edit data pembalap
![Screenshot 2024-05-07 233011](https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/f3ea64bf-b8a4-40c2-9343-5edd5cb000ca)

### Halaman daftar TEAM F1
![Screenshot 2024-05-07 233030](https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/bd801da4-ff4a-4e81-bbd6-850dd152c6b1)

### Halaman untuk menambah data team
![Screenshot 2024-05-07 233044](https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/d0be7b44-d551-4c01-8342-5b1927958b9b)

### Halaman untuk edit data TEAM F1
![Screenshot 2024-05-07 233101](https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/a3b52fe6-2442-4abe-af84-d951e1c6aa69)

# Screen Record
https://github.com/LegiKuswandi/TP4DPBO2024C2/assets/147142081/70cf39d5-64fe-4e3f-9a65-af64bdfe4df5







