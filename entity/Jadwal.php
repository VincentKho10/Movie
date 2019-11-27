<?php


class Jadwal extends CrudObj
{
    public $id_jadwal;
    public $waktu_tayang;
    public $movie_id_movie;
    public $teater_id_teater;
    public $harga;

    public function __construct()
    {

    }
}