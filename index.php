<?php 
include_once ('./getPokemon.php');
$pokemon = GetPokemon();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex - Consumo API</title>
    <link rel="shortcut icon" href="./assets/images/pokeball.png" type="image/png">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <main class="pokedex">
        <article>
            <section class="external-pokemon">
                <picture>
                    <img src="<?=$pokemon->image_back?>" alt="Imagem de um pokemon">
                </picture>
            </section>

            <section class="pokedex-visor">
                <div class="pokemon-identification-container">
                    <h2 class="pokemon-identification">
                        <span class="pokemon-name"><?=$pokemon->name?></span>
                        <span class="pokemon-id"><?=$pokemon->id?></span>
                    </h2>
                </div>

                <div class="pokemon-image">
                    <picture>
                        <img src="<?=$pokemon->image?>" alt="Imagem de um pokemon" />
                    </picture>
                </div>

                <div class="pokemon-info-container">
                    <p class="power-name">
                        <span>
                            <?=$pokemon->types?>
                        </span> 
                    </p>
                    <p class="description">
                        <?=$pokemon->description?>
                    </p>
                    <p class="attack"> 
                        <span>
                            <?=$pokemon->attack?>
                        </span>
                    </p>
                    <p class="defense"> 
                        <span>
                            <?=$pokemon->defense?>
                        </span>
                    </p>
                    <p class="speed"> 
                        <span>
                            <?=$pokemon->speed?>
                        </span>
                    </p>
                </div>
            </section>

            <section class="message-container">
                <span><?=$pokemon->message?></span>
            </section>

            <section class="pokedex-controls">
                <form action="." method="POST">
                    <div class="search-container">
                        <div class="search-inputs">
                            <input type="text" name="pokemonName" id="pokemonName" placeholder="NOME" />
                            <input type="text" name="pokemonId" id="pokemonId" placeholder="ID" />
                        </div>

                        <div class="search-button">
                            <input type="submit" name="search" value="BUSCA">
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