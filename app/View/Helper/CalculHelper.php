<?php
App::uses('AppHelper', 'View/Helper');

class CalculHelper extends AppHelper {

    public function calculProgressbar($stat) {
        $resultat = $stat *100 / 180;
        return $resultat;
    }

}