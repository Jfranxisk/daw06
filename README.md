![PHP](https://img.shields.io/badge/php-7+-blue)
![MariaDB](https://img.shields.io/badge/MariaDB-10+-green)
![DAW](https://img.shields.io/badge/DAW-06-pink)
![DAW](https://img.shields.io/badge/Llicence-MIT-purple)

# DAW06 - Aplicació "La Meva Botiga"

## Table of Contents
1. [Captures](#captures)
2. [Tecnologies](#tecnologies)
3. [Instalacio](#instalacio)
4. [Funcionament](#funcionament)
5. [Llicencia](#llicencia)

Es un projecte intranet per gestionar productes de qualsevol botiga. Permet crear productes, eliminar i modificar.

## Captures
![image](https://i.imgur.com/qsE32mH.png)

## Tecnologies
Es projecte requereix de les tecnologies:
- PHP 7.0 o superior
- MariaDB 10 o superior

## Instalacio
Recomenam emplear MariaDB pero se pot emplear MySQL tambe.

1. Crea la base de dades 'la_teva_botiga'
2. Llança les sentencies SQL per crear les taules.
```sql
  CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
  );

  CREATE TABLE IF NOT EXISTS productes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    descripció TEXT,
    preu DECIMAL(10, 2) NOT NULL,
    categoria_id INT NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categories(id)
  );
```

## Funcionament
`Nou producte`
Redireccionarà a un formulari on s'haura de ompli per crear un nou producte, els camps son:
  - Nom
  - Descripcio
  - Preu
  - Categoria

`Modificar producte`
Mateix sistema que per crear un producte nou, redirecciona a un formulari amb ses dades carregades des producte a modificar i on se pot modificar el valor de es camp desitjat.

`Eliminar producte`
Elimina el producte seleccionat de la base de dades i per tant del llistat de la aplicació.

## Llicencia
MIT License
