<script>
    $(document).ready(function() {
    $('#myTable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }
    } );
} );
</script>
    
    <h1 class="text-center"><img src="/pokemonApi/img/pokeball.png" alt="Retourner en haut" />POKEDEX<img src="/pokemonApi/img/pokeball.png" alt="Retourner en haut" /></h1>


    <!-- <div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Recherche</button>
    </form>
    </div>
  </div>
</div> -->
    
    
    


    <table class="table" id="myTable">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <!-- boucle avec foreach  pour recuperé tout les pokemon -->
            <?php foreach ($pokemons as $pokemon) : ?>
                <tr>
                    <td><?php echo $pokemon->name; ?></td>
                    <td>
                        <a class='button' href="/pokemonApi/pokemons/detail/<?php echo $pokemon->name; ?>">Detail</a>
                    </td>


                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>

    <footer>


    <div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
     <div id="scroll_to_top "> 
            <a href="#top"><img src="/pokemonApi/img/4.png" alt="Retourner en haut" /></a> 
        </div>
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>
        
    </footer>