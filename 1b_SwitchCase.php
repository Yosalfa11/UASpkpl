<?php

class Kubus{
    
    public function __construct($ENAM = 6, $DUABELAS = 12){
        $this->ENAM = $ENAM;
        $this->DUABELAS = $DUABELAS;
    }

    public function luasKubus($sisi){
        echo "Luas Permukaan Kubus adalah : ". $this->ENAM * $sisi *$sisi;
    }

    public function volumeKubus($sisi){
        echo "Volume Kubus adalah : ". $sisi * $sisi * $sisi;
    }

    public function kelilingKubus($sisi){
        echo "Keliling Kubus adalah : ". $this->DUABELAS * $sisi;
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih';
    }

    public function prosesHitungKubus ($hitungKubus, $sisi)
    {
        switch ($hitungKubus) {
            case 'luas':
                $this->luasKubus($sisi);
                break;
            case 'volume':
                $this->volumeKubus($sisi);
                break;
            case "keliling":
                $this->kelilingKubus($sisi);
                break;
            default:
            $this->noChoice();
        }
    }
}

$sisi = 20;
$hitungKubus = new Kubus;
$hitungKubus->prosesHitungKubus('keliling', $sisi);

?>
