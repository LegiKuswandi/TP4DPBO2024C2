<?php

// Menggunakan kelas Template dan DB dari model
include_once("models/Template.class.php");
include_once("models/DB.class.php");

// Menggunakan kelas TeamController dari controller
include_once("controller/Team.controller.php");

// Membuat instance dari TeamController
$team = new TeamController();

// Memeriksa apakah ada input 'submit' dalam POST
if(isset($_POST['submit']) ) {
    // Jika ada input dengan nama 'id' dalam POST, maka edit data
    if(isset($_POST['id'])){ 
        $id = $_POST['id']; 
        $team->edit($id, $_POST);
    } 
    // Jika tidak ada input dengan nama 'id' dalam POST, maka tambah data baru
    else {
        $team->add($_POST);
    }
} 
// Jika tidak ada input 'submit' dalam POST dan ada parameter 'action' dalam URL
else if(isset($_GET['action'])){
    // Jika 'action' adalah 'delete', hapus data
    if($_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $team->delete($id);
    } 
    // Jika 'action' adalah 'addform', tampilkan formulir tambah data
    else if($_GET['action'] == 'addform'){
        $team->addForm();
    } 
    // Jika 'action' adalah 'editform', tampilkan formulir edit data dengan ID tertentu
    else if($_GET['action'] == 'editform'){
        $id = $_GET['id'];
        $team->editForm($id);
    }
} 
// Jika tidak ada input 'submit' dalam POST dan tidak ada parameter 'action' dalam URL
else {
    // Tampilkan halaman utama (indeks)
    $team->index();
}