<h1 class="text-center"><img src="/pokemonApi/img/pokeball.png" alt="Retourner en haut" />POKEMON<img src="/pokemonApi/img/pokeball.png" alt="Retourner en haut" /></h1>




<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
     <?php echo $this->Html->link(
    'Retour au Pokedex',
    array('controller' => 'Pokemons', 'action' => 'index')
    ); ?>
    </div>
    <div class="col">
     
    </div>
  </div>
</div>


<!--  -->




<div class="container">
    <div class="row">
        <div class="col">
           
        </div>
        <div class="col">
            <div class="card border-dark  " style="width: 12rem;">
                <div class="card-header text-dark bg-warning text-center  ">
                    <h5>Carte</h5>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item border-dark "><img src="<?php echo $pokemons->sprites->front_default; ?>" class="card-img-top" alt="..."></li>
                    <li class="list-group-item bg-success  border-dark  ">
                        <div class="card-body">
                            <h5 class="card-title text-center "><?php echo $pokemons->name; ?></h5>
                            <p class="card-text"></p>
                        </div>
                    </li>
                    <li class="list-group-item"></li>
                    
                    <?php foreach($pokemons->types as $type) : ?>
                        <h6>Types : 
                            <!-- <span style="background-color:<?php //echo $this->CouleurType->couleurType($type->type->name); ?>" class="badge badge-secondary"> -->

                            <span class="badge badge-secondary type-<?php echo $type->type->name; ?>">

                            <?php echo $type->type->name;?></span></h6>
                    <?php endforeach; ?>


                    <h6>Pv : </h6>
                    <div class="progress ">
                        
                        <div class="progress-bar " role="progressbar" style="width: <?php echo $this->Calcul->calculProgressbar($pokemons->stats[5]->base_stat); ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="180"><?php echo $pokemons->stats[5]->base_stat; ?></div>
                    </div>

                    <h6>Attaque :</h6>
                    <div class="progress">
  
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $this->Calcul->calculProgressbar($pokemons->stats[4]->base_stat); ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="180"><?php echo $pokemons->stats[4]->base_stat ; ?></div>
                    </div>

                    <h6>Defense :</h6>
                    <div class="progress">
  
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $this->Calcul->calculProgressbar($pokemons->stats[3]->base_stat); ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="180"><?php echo $pokemons->stats[3]->base_stat ; ?></div>
                    </div>

                    <h6>Attaque Special :</h6>
                    <div class="progress">
  
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $this->Calcul->calculProgressbar($pokemons->stats[2]->base_stat); ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="180"><?php echo $pokemons->stats[2]->base_stat ; ?></div>
                    </div>

                    <h6>Defense special :</h6>
                    <div class="progress">
  
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $this->Calcul->calculProgressbar($pokemons->stats[1]->base_stat); ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="180"><?php echo $pokemons->stats[1]->base_stat ; ?></div>
                    </div>

                    <h6>vitesse :</h6>
                    <div class="progress">
  
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $this->Calcul->calculProgressbar($pokemons->stats[0]->base_stat); ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="180"><?php echo $pokemons->stats[0]->base_stat ; ?></div>
                    </div>
                </ul>
                <div class="card-footer bg-warning">
                <img src="/pokemonApi/img/logo-pokemon.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="col">
         
        </div>
    </div>
</div>