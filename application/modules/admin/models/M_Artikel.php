<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Artikel extends CI_Model {

    public function getArtikel() {
        $query = "SELECT `artikel`.*, `kategori_wisata`.`kategori`
                FROM `artikel` JOIN `kategori_wisata`
                ON `artikel`.`kategori_wisata_id` = `kategori_wisata`.`id`
            ";
        return $this->db->query($query)->result_array();
    }

    public function getCategoryArtikel() {
        return $this->db->get('kategori_wisata')->result_array();
    }

}