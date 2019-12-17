<?php

App::uses('AppModel', 'Model');

class Pokemon extends AppModel {
    
    public $useTable =false;
    
    /*
        App::uses('HttpSocket', 'Network/Http');
        $HttpSocket = new HttpSocket();
        $results = $HttpSocket->get('https://www.google.com/search', array('q' => 'cakephp'));

        url cible : https://pokeapi.co/api/v2/pokemon?offset=0&limit=1000
    */

    // public function jeFaisUnTest() {

    // }

    public function recupererTous() {
        App::uses('HttpSocket', 'Network/Http');
        $HttpSocket = new HttpSocket();
        $results = $HttpSocket->get('https://pokeapi.co/api/v2/pokemon?offset=0&limit=1000', array('q' => 'cakephp'));
        $pokemons=json_decode($results);
        return $pokemons->results;
        
    }

    public function recupererUnPokemon($nomPokemon) {
        App::uses('HttpSocket', 'Network/Http');
        $HttpSocket = new HttpSocket();
        $results = $HttpSocket->get('https://pokeapi.co/api/v2/pokemon/'.$nomPokemon, array('q' => 'cakephp'));
        $pokemons=json_decode($results);
        //debug($pokemons);
        return $pokemons;
        
    }

}