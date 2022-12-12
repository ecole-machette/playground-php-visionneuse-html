# Mettre plusieurs fichiers dans un exercice

+ Tous les fichier sont dans le dossier `php-template`
+ Dans le fichier `techio.yml, ajout de :
```
- title: Séparation des langages
  statement: markdowns/multi-fichiers.md
```
+ Ajout de la ligne suivante dans ce fichier `.md` :
```
@[Exercice avec les langages séparés]({"stubs": ["index.php","stylesheet.css","contenu.html","javascript.js","code.php"], "command": "/bin/bash run.sh index.php"})
```

@[Exercice avec les langages séparés]({"stubs": ["index.php","stylesheet.css","contenu.html","javascript.js","code.php"], "command": "/bin/bash run.sh index.php"})