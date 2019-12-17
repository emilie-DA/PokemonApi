<?php
class PokemonsController extends AppController {

    public $helpers = ['Calcul','CouleurType'];

    public function index() {
        $pokemons = $this->Pokemon->recupererTous();
        //debug($pokemons);
        $this->set('pokemons',$pokemons);
    }

    /*
        $this->Pokemon->functionDuModele();

        ----> $this->[nom_du_model]->function_du_modele()
    */

     public function detail($nomPokemon) {
        $pokemons = $this->Pokemon->recupererUnPokemon($nomPokemon);
        $this->set('pokemons',$pokemons); 

     }

     
}