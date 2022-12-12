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

@[Nom de l'exercice]({"stubs": ["visionneuse.php"], "command": "/bin/bash run.sh visionneuse.php"})