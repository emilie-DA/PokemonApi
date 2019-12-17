<?php
App::uses('AppHelper', 'View/Helper');

class CouleurTypeHelper extends AppHelper {

    public function couleurType($type) {
        $couleurs = array ( 
            'normal'=>  '#a7b71f',
            'fighting'=>  '#bf2f27',
            'flying'=>  '#a78ff0',
            'poison'=>  '#77c84f',
            'ground'=>  '#e0bf67',
            'rock'=>  '#b79f37',
            'bug'=>  '#a7b71f',
            'ghost'=>  '#6f5797',
            'steel'=>  '#b7b7d0',
            'fire'=>  '#f07f2f',
            'water'=>  '#678ff0',
            'grass'=>  '#77c84f',
            'electric'=>  '#f8d02f',
            'psychic'=> ' #77c84f',
            'ice'=> '#97d8d8',
            'dragon'=>  '#6f37f8',
            'dark'=>  '#6f5747',
            'fairy'=>  '#f07fff'
        );
        return $couleurs[$type];
    }

}