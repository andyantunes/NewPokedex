<?php include_once ('./utils/getPokemon.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex - Consumo API</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <main class="pokedex">
        <article>
            <section class="external-pokemon">
                <picture>
                    <img src="http://www.serebii.net/pokemongo/pokemon/006.png" alt="Imagem de um pokemon">
                </picture>
            </section>

            <section class="pokedex-visor">
                <div class="pokemon-identification-container">
                    <h2 class="pokemon-identification">
                        <span class="pokemon-name"><?=$pokemonObject->name?></span>
                        <span class="pokemon-id">#<?=$pokemonObject->id?></span>
                    </h2>
                </div>

                <div class="pokemon-image">
                    <picture>
                        <img src="http://www.serebii.net/pokemongo/pokemon/006.png" alt="Imagem de um pokemon" />
                    </picture>
                </div>

                <div class="pokemon-info-container">
                    <p class="power-name">Nome do poder</p>
                    <p class="description">Lorem ipsum dolor, sit amet consectetur</p>
                    <p class="attack">Ataque 
                        <span>
                            <?=$pokemonObject->stats[1]->base_stat?>
                        </span>
                    </p>
                    <p class="defense">Defesa 
                        <span>
                            <?=$pokemonObject->stats[2]->base_stat?>
                        </span>
                    </p>
                    <p class="speed">Rapidez 
                        <span>
                            <?=$pokemonObject->stats[5]->base_stat?>
                        </span>
                    </p>
                </div>
            </section>

            <section class="pokedex-controls">
                <form action="." method="POST">
                    <div class="search-container">
                        <div class="search-inputs">
                            <input type="text" name="pokemonName" id="pokemonName" placeholder="NOME" />
                            <input type="text" name="pokemonId" id="pokemonId" placeholder="ID" />
                        </div>

                        <div class="search-button">
                            <input type="submit" value="BUSCA">
                        </div>
                    </div>

                    <div class="controls-container">
                        <div class="external-circle">
                            <div class="internal-circle"></div>
                        </div>

                        <label class="up" for="upAction">
                            <i class="fas fa-caret-up"></i>
                            <input type="radio" name="action" id="upAction">
                        </label>

                        <label class="down" for="downAction">
                            <i class="fas fa-caret-down"></i>
                            <input type="radio" name="action" id="downAction">
                        </label>

                        <label class="right" for="rightAction">
                            <i class="fas fa-caret-right"></i>
                            <input type="radio" name="action" id="rightAction">
                        </label>

                        <label class="left" for="leftAction">
                            <i class="fas fa-caret-left"></i>
                            <input type="radio" name="action" id="leftAction">
                        </label>
                    </div>
                </form>
            </section>
        </article>
    </main>
</body>

</html>