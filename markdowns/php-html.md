# Création d'une page de playground

Il faut créer un fichier `.md` dans le dossier `markdowns`. Il est possible d'utiliser des markdowns référencés sur cette [page](https://www.codingame.com/playgrounds/408/tech-io-documentation/markdown-cheatsheet).

Pour placer la page dans le playground, il faut modifier le fichier `techio.yml` comme suite :
```
plan:
- title: PHP et visionneuse HTML
  statement: markdowns/php-html.md
```

# Création d'un exercice avec visionneuse

+ Créer un fichier `.php` dans le dossier `php-template` avec du code HTML et PHP
+ L'appeler dans cette page en tapant dans le fichier `.md` :
```
@[Nom de l'exercice]({"stubs": ["visionneuse.php"], "command": "/bin/bash run.sh visionneuse.php"})
```
+ Modifier le runner dans le fichier `.sh` comme suite :
```
echo "TECHIO> redirect-streams 'Sortie brut'"
php $1

echo

php $1 > output.html
echo "TECHIO> open -s /project/target/ output.html"
```

@[Nom de l'exercice]({"stubs": ["visionneuse.php"], "command": "/bin/bash run.sh visionneuse.php"})

# Durée de vie de la visionneuse

La visionneuse a une durée de vie de 2 minutes après la dernière requête effectuée. Son début de vie commence à partir du moment où on clique sur `RUN`. Le compte à rebour se remet à 0 à chaque fois qu'on clique.
Il semble tout de même qu'il n'y ait pas de problème quand on reste sur la page du test. Ça arrive peut-être quand on est sur un autre onglet du navigateur. `A élucider`

## Documentations

+ Redirection de la sortie : [redirect-streams](https://www.codingame.com/playgrounds/408/tech-io-documentation/redirect-streams)
+ Visionneuse : [open](https://www.codingame.com/playgrounds/408/tech-io-documentation/open)
