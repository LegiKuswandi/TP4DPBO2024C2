<?php

// Menggunakan kelas Template dan DB dari model
include_once("models/Template.class.php");
include_once("models/DB.class.php");

// Menggunakan kelas MembersController dari controller
include_once("controller/Members.controller.php");

// Membuat instance dari MembersController
$members = new MembersController();

// Memeriksa apakah ada parameter 'action' dalam URL
if(isset($_GET['action'])){
    // Jika 'action' adalah 'delete', hapus data
    if($_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $members->delete($id);
    } 
    // Jika 'action' adalah 'addform', tampilkan formulir tambah data
    else if($_GET['action'] == 'addform'){
        $members->addForm();
    } 
    // Jika 'action' adalah 'editform', tampilkan formulir edit data dengan ID tertentu
    else if($_GET['action'] == 'editform'){
        $id = $_GET['id'];
        $members->editForm($id);
    }
} 
// Jika tidak ada 'action' dalam URL
else if(isset($_POST['submit']) ) {
    // Jika ada input dengan nama 'id' dalam POST, maka edit data
    if(isset($_POST['id'])){ 
        $id = $_POST['id']; 
        $members->edit($id, $_POST);
    } 
    // Jika tidak ada input dengan nama 'id' dalam POST, maka tambah data baru
    else {
        $members->add($_POST);
    }
} 
// Jika tidak ada 'action' dalam URL dan tidak ada input 'submit' dalam POST
else {
    // Tampilkan halaman utama (indeks)
    $members->index();
}
