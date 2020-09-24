# <img src="https://github.com/andyantunes/NewPokedex/blob/master/assets/images/pokeball.png" width="25" alt="Pokebola" />  NewPokedex
Projeto dedicado à resolução de um trabalho de faculdade na disciplina Desenvolvimento para Servidores I.

## Objetivo
Consumir uma API e exibir os dados ao usuário através de uma página web utilizando apenas HTML, CSS e PHP.

## O projeto
Neste projeto criamos uma página web que exibirá os dados consumidos de uma API com o tema Pokémon.
As informações são exibidas dentro de uma "Pokedex", informações que podem ser pesquisadas através do número ou nome do Pokémon.

### Dados exibidos sobre o pokemon
<ul>
  <li>Nome</li>
  <li>Número</li>
  <li>Imagem</li>
  <li>Tipos</li>
  <li>Ataque</li>
  <li>Defesa</li>
  <li>Rapidez</li>
</ul>

### APIs utilizadas
<ul>
  <li><a href="https://pokeapi.co/">PokeApi</a></li>
  <li><a href="https://www.canalti.com.br/api/pokemons.json">Canal TI</a></li>
</ul>

• Para recuperar os dados dos pokemons foi utilizada a API <a href="https://pokeapi.co/docs/v2#wrap">PokeAPI</a> com o endpoint "https://pokeapi.co/api/v2/pokemon/{nome ou id}"
onde os parâmetros de busca são o nome ou o id do Pokémon.

• Para as imagens dos Pokémons foi utilizada a API que se encontra no site do <a href="https://www.canalti.com.br/api/pokemons.json">Canal TI</a> com o endpoint "https://www.canalti.com.br/api/pokemons.json", onde é retornado um json que possui a URL das imagens.
## Instalação
Para utilizar o projeto é necessário utilizar um servidor Apache, como o <a href="https://www.apachefriends.org/pt_br/download.html">XAMPP</a> e <a href="https://www.wampserver.com/en/">WampServer</a>.

##### XAMPP
<ul>
  <li>Instalar o <a href="https://www.apachefriends.org/pt_br/download.html">XAMPP</a></li>
  <li>Ir até a pasta htdocs e baixar o projeto, por padrão ela é instalada em 'C:\xampp\htdocs\'</li>
  <li>Abrir o navegador e digitar localhost ou o ip 127.0.0.1</li>
  <li>Será listado as pastas existentes, procurar por NewPokedex e acessar o arquivo index dentro da mesma</li>
</ul>


##### WampServer
<ul>
  <li>Instalar o <a href="https://www.wampserver.com/en/">WampServer</a></li>
  <li>Ir até a pasta www e baixar o projeto, por padrão ela é instalada em 'C:\wamp64\www\'</li>
  <li>Abrir o navegador e digitar localhost ou o ip 127.0.0.1</li>
  <li>Será listado as pastas existentes, procurar por NewPokedex e entrar nela</li>
</ul>

## Funcionamento
<img src="https://github.com/andyantunes/NewPokedex/blob/master/assets/prints/pokedex.png" alt="Imagem da pokedex criada para o projeto de consumo de API" />

• Existem dois campos para busca:
<ul>
  <li>Por nome;</li>
  <li>Por id.</li>
</ul>

• Ao clicar em no botão 'BUSCA':
<ul>
<li>É retornado os dados do Pokémon encontrado;</li>
<li>É retornada a mensagem de erro no visor "Pokémon Não existe" ou "Pokémon Não cadastrado".</li> 
</ul>

• Existem dois seletores para exibição ápos a busca:
<ul>
  <li>Seta para cima: Próximo Pokémon ao pesquisado na lista;</li>
  <li>Seta para baixo: Pokémon anterior ao pesquisado na lista.</li>
</ul>

## Problemas encontrados
Percebemos que a exibição dos dados estava demorando, descobrimos que era e requisição das imagens que estavam deixando lento.
<p>Como solução copiamos o json retornado da API do Canal TI e deixamos local, assim, o programa pegava a URL no arquivo json local para fazer a exibição das imagens.</p>