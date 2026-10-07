# TP02-PHP-Nejmi-Amal
# TP02 - Programmation web 2 
# Présentation:
- **Nom:**Nejmi
- **Prénom:**Amal
- **Groupe:**4
- **Module:**Programmation Web 
# Exercices:
- `index.php` : Page d'accueil du TP
- `ex01.php` : Balises, HTML/PHP, commentaires et echo
- `ex02.php` : Variables, casse, concaténation et opérateur .=
- `ex03.php` : Constantes, calculs et affectation composée
- `ex04.php` : Types de données, conversions et `var_dump()`
- `ex05.php` : Conditions (`if`, `elseif`, `else`) 
- `ex06.php` : Structure `switch` et gestion des mois
- `ex07.php` : Boucles `for` et boucles imbriquées
- `ex08.php` : Boucles `while`, `do-while`, `continue` et `break`
- `ex09.php` : Tableaux associatifs et `foreach` 
- `ex10_get.html` / `ex10_get.php` : Formulaire et traitement GET
- `ex10_post.html` / `ex10_post.php` : Formulaire et traitement POST

# Réponses courtes aux questions 

# Exercice 2 :
 -  En PHP, les noms de variables sont **sensibles à la casse**, `$note` et `$Note` sont donc considérées deux variables différentes
  - `$a` : **Valide**.
  - `$_a` : **Valide**.
  - `$a_a` : **Valide**.
  - `$AAA` : **Valide**.
  - `$a!` : **Invalide**.
  - `$1a` : **Invalide**.
  - `$a1` : **Valide**.

# Exercice 4 : 
  - `echo false` affiche une chaîne vide car en PHP, le booléen `false` converti en chaîne donne `""` (rien).
  - `var_dump()` affiche des informations détaillées sur le type et la valeur de la variable, affichant clairement `bool(false)`.

# Exercice 5 : 
- `-1` : Note invalide
- `9` : Non validé
- `10` : Passable
- `12` : Assez bien
- `14` : Bien
- `16` : Très bien
- `21` : Note invalide
# Exercice 6:
- `1`: Janvier
- `3`: Mars
- `12`: Décembrec
- `15`: Message erreur
# Exercice 10 (Partie A) :
- Avec la méthode **GET**, les données du formulaire sont transmises directement visibles dans la barre d'adresse de l'URL après un point d'interrogation (`?`), sous forme de paires clé/valeur (ex: `?nom=...&prenom=...&groupe=...`).


