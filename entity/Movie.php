<?php


class Movie extends CrudObj
{
    public $id_movie;
    public $judul;
    public $deskripsi;
    public $poster;
    public $trailer;
    public $durasi;
    public $batas_tayang;
    public $mulai_tayang;

    public function __construct()
    {

    }
}