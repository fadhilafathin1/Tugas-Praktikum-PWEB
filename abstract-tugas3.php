<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models-tugas3.php';
require_once 'controller/student_controller.php';
require_once 'controller/controller-tugas3.php';


abstract class Controller {
    abstract static function index(); // menampilkan keseluruhan data
    abstract static function show($data); // menampilkan data spesifik
    abstract static function add(); // penambahan data dalam formulir
    abstract static function save(); // menyimpan data
    abstract static function edit($data); // mengedit data secara spesifik
    abstract static function update($data); // mengupdate data 
    abstract static function remove($data); // menghapus data
}

abstract class AbstractStudents {
    abstract static function select(); // mengambil semua data dari tabel mahasiswa
    abstract static function insert($id, $name, $email, $role_fk); // menambahkan data ke tabel mahasiswa
    abstract static function delete(); // menghapus data mahasiswa tabel mahasiswa
    abstract static function joinRoles($clauseAddition = ""); // untuk melakukan join (penggabungan) dengan tabel roles
    abstract static function fresh(); // mengembalikan data mahasiswa
    abstract static function selectById($id); // memilih data berdasarkan id
    abstract static function selectWhere($clause); // memilih data berdasarkan kondisi
    abstract static function updateById($id, $name, $email, $role_fk); // mengupdate data berdasarkan id
    abstract static function updateWhere($clause, $name, $email, $role_fk); // mengupdate data berdasarkan kondisi
    abstract static function deleteById($id);  //menghapus data berdasarkan id
    abstract static function deleteWhere($clause); //menghapus data berdasarkan kondisi
}


interface CustomFunctions {
    static function purge();
    static function restore();
}