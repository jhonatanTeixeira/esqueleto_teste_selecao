# Arquitetura

## Stack
 Para esse teste temos uma stack bem simplificada.
* PHP 7.0
* Slim 3
* Pimple
* Doctrine 2 (com sqlite3)
* Whoops
* Guzzle
* Twig
* Jquery

## Paradigma
Esse exemplo não se utiliza de MVC mas sim de ADR (Action-Domain-Responder) e pela natureza do Slim 3 está se usando a PSR-7

## Estilo
* Recomenda-se o uso da PSR-2 para padronizar o código. PHPCS será passado no código ao final do teste
* As entidades estão usando annotations para seu mapeamento
* O uso de service providers está sendo empregado para registrar serviços no container
* Dependency Injection ao invés de Service Locator é altamente recomendável
* Utilização dos conceitos S.O.L.I.D são desejáveis
* PHPMD será passado ao fim do teste, mas apenas métricas de code size serão avaliadas 

## Exemplos
Há exemplos prontos de actions na pasta src/Action e de uma entidade em src/Domain/Model

## Objetivos
* Pede-se um cadastro de personagens de ficção, com os campos nome, altura, cor de pele, sexo, ano de nascimento e planeta natal
* Todavia, ao digitar um nome, se o mesmo existir na base de dados do filme "star wars", base essa que deve ser consultada através da [SWAPI](https://swapi.co/), porém não diretamente via ajax e sim por uma url do próprio sistema. E o sistema deverá preencher o restante dos campos com os dados providos por tal api
* Outro requisito seria referente ao campo planeta natal, pois quando o mesmo for preenchido como sendo o planeta Alderaan, deve se exibir mais alguns campos no form, sendo os seguintes campos de endereço: país, estado, cidade, bairro e rua

## Side Quests
* Se não houver nenhum erro de code standard, ganhará pontos
* Se não houver erros de mess detector, mais prestigio
* Se conseguir ao menos fazer um único teste unitário, serás o cara
