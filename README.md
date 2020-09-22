# NewPokedex
Projeto dedicado à resolução de um trabalho de faculdade na disciplina Desenvolvimento para Servidores I.

## Objetivo
Consumir uma API e exibir os dados ao usuário através de uma página web utilizando apenas HTML, CSS e PHP.

## O projeto
Neste projeto criamos uma página web que exibirá os dados consumidos de uma API com o tema Pokemon.
As informações são exibidas dentro de uma "pokedex", informações que podem ser pesquisadas através do número ou nome do pokemon.

### Dados exibidos sobre o pokemon
<ul>
  <li>Nome</li>
  <li>Número</li>
  <li>Imagem</li>
  <li>Tipos</li>
  <li>Ataque</li>
  <li>Deseza</li>
  <li>Rapidez</li>
</ul>

### APIs utilizadas
<ul>
  <li><a href="https://pokeapi.co/">PokeApi</a></li>
  <li><a href="https://www.canalti.com.br/api/pokemons.json">Canal TI</a></li>
</ul>

## Instalação
Para utilizar o projeto é necessário utilizar um servidor Apache, como o <a href="https://www.apachefriends.org/pt_br/download.html">XAMPP</a> e <a href="https://www.wampserver.com/en/">WampServer</a>.

##### XAMPP

##### WampServer
<ul>
  <li>Instalar o <a href="https://www.wampserver.com/en/">WampServer</a></li>
  <li>Ir até a pasta www e baixar o projeto, por padrão ela é instalada em 'C:\wamp64\www\'</li>
  <li>Abrir o navegador e digitar localhost ou o ip 127.0.0.1</li>
  <li>Será listado as pastas existentes, procurar por NewPokedex e entrar nela</li>
</ul>

## Funcionamento
<img src="https://github.com/andyantunes/NewPokedex/blob/master/assets/prints/pokedex.png" alt="Imagem da pokedex criada para o projeto de consumo de API" />

Existem dois campos para busca:
<ul>
  <li>Por nome</li>
  <li>Por id</li>
</ul>

Ao clicar em 'BUSCA', é retornado as informações do pokemon encontrado.
É possível também obter resultado através do teclado no lado direito, onde, clicando para cima busca o próximo pokemon e para baixo busca o anterior.
A baixo o visor existe um local para exibição de mensagens ao usuário.
