﻿# Version Tag Composer - v1.0.0

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

### Incrementar Tag

#### Patch

``` bash
    composer run app-version-patch
```

#### Minor

``` bash
    composer run app-version-minor
```

#### Minor

``` bash
    composer run app-version-major
```

#### Obter Tag

``` bash
    composer run app-version
```
