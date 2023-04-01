<?php
require_once 'tugas6_abstract.php';
class Lingkaran extends Bentuk2D {
    private $jari_jari;
    
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }
    
    public function namaBidang() {
        return "Lingkaran";
    }
    
    public function luasBidang() {
        return 3.14* $this->jari_jari * $this->jari_jari;
    }
    
    public function kelilingBidang() {
        return 2 * 3.14 * $this->jari_jari;
    }
}
?>
