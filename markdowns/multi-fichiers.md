# Mettre plusieurs fichiers dans un exercice

+ Tous les fichier sont dans le dossier `php-template`
+ Dans le fichier `techio.yml, ajout de :
```
- title: Séparation des langages
  statement: markdowns/multi-fichiers.md
```
+ Ajout de la ligne suivante dans ce fichier `.md` :
```
@[Exercice avec les langages séparés]({"stubs": ["index.php","stylesheet.css","contenu.html","code.php","javascript.js"], "command": "/bin/bash run.sh index.php"})
```

@[Exercice avec les langages séparés]({"stubs": ["index.php","stylesheet.css","contenu.html","code.php","javascript.js"], "command": "/bin/bash run.sh index.php"})

# Fichiers masqués

Pour proposer des problèmes à résoudre, on peut créer des fichiers qu'on n'affiche pas afin de traiter les modifications qui sont faites dans l'exercice avant de l'exécuter.
```
@[Exercice sans afficher le contenu du fichier index.php]({"stubs": ["stylesheet.css","contenu.html","code.php","javascript.js"], "command": "/bin/bash run.sh index.php"})
```

@[Exercice sans afficher le contenu du fichier index.php]({"stubs": ["stylesheet.css","contenu.html","code.php","javascript.js"], "command": "/bin/bash run.sh index.php"})
