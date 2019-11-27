<?php


class Tiket extends CrudObj
{
    public $id_tiket;
    public $user_id_user;
    public $kursi_id_kursi;
    public $kursi_teater_id_teater;
    public $jadwal_id_jadwal;
    public $jadwal_movie_id_movie;
    public $terbayar;
    public $batas_bayar;

    public function __construct()
    {

    }
}