# Version Tag Composer - v1.0.0

## Descrição

Script para geração de versões "path", "minor", "major" para aplicações que utilizam o composer

## Pré-requisitos

Para instalação e execução é necessário ter instalado no ambiente os softwares abaixo nas versões descritas ou
superiores:

- PHP v7.4
- Composer v2.4

## Instalação

``` bash
composer require brunogodoif/version-tag-composer
```

## Utilização

Via **composer** é necessário informar o parâmetro **work-dir** com o diretório da biblioteca, como nos exemplos abaixo.

### Incrementar Tag

#### Patch

``` bash
    composer run app-version-patch --working-dir=./vendor/brunogodoif/version-tag-composer
```

#### Minor

``` bash
    composer run app-version-minor --working-dir=./vendor/brunogodoif/version-tag-composer
```

#### Minor

``` bash
    composer run app-version-major --working-dir=./vendor/brunogodoif/version-tag-composer
```

#### Obter Tag

``` bash
    composer run app-version --working-dir=./vendor/brunogodoif/version-tag-composer
```

Para facilitar, é possível também adicionar no arquivo **composer.json** de seu projeto, na tag **scripts** atalhos para
execução dos comandos já descritos acima.
Para criar estes atalhos na tag **scripts** execute a linha de comando abaixo.

**Este comando faz alterações em seu composer.json, por segurança realize um backup, caso haja algum tipo de problema na
execução**

``` bash
    composer run post-autoload-dump --working-dir=./vendor/brunogodoif/version-tag-composer
```