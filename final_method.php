<?php
class Kendaraan {

    final public function mesin() {
        echo "Mesin standar";
    }
}

class Mobil extends Kendaraan {

    // ERROR kalau override
    public function mesin() {
        echo "Mesin mobil";
    }

}

?>