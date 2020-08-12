I) Partie théorique : 

Encapsulation / Abstraction (2 points)
1) En POO, expliquez à quoi sert le principe d’encapsulation. Expliquez moi un exemple concret d’utilisation (0.5 pts)
- Le principe d'encapsulation sert à faciliter l'utilisation d'un objet complexe pour le consommateur.
- Par exemple un utilisateur ne doit pas manipuler tous les éléments d'un moteur et les comprendre, on lui donne à la place des commandes simplifiées (les pédales, le levier de vitesse, etc)

2) Donnez les 3 visibilités possibles pour des attributs (0.5 pts)
- public
- private
- protected

3) Quels sont les éléments que l’on peut trouver dans un objet de type exception (donnez 4 éléments) (0.25 pts / elements correctes)

Les interfaces (2 points)
4) Déterminez ce qu’est une interface et son utilité en programmation orienté objet. (1 pts)
Une interface est un modèle pour la création de classes qui oblige à implémenter certaines méthodes qui seront publiques quand on crée une classe qui l'utilise

5) Comment créer une interface en PHP et comment l’utiliser ? (1 pts)
interface monInterface
{
	public function maMethode();
}

Pour l'utiliser on créer une classe qui implémente l'interface
class maClasse implements monInterface

Les classes abstraites (2 points)

6) Définissez ce qu’est une classe abstraite et son utilité en POO. (0.5 pts)
Une classe abstraite est une classe qui ne peut pas être instanciée mais qui permet de créer des méthodes qui seront réutilisées par les classes qui en héritent

7) Comment créer une classe abstraite en PHP ? (0.5 pts)
abstract class maClasseAbstraite {}

Les méthodes magiques (2 points)
8) Comment peut on reconnaitre une méthode magique dans une classe (0.5 pts)
On reconnaît une méthode magique grâce aux : __ devant le nom de la méthode

9) Citez moi 4 méthodes magiques et décrivez leur implémentation en PHP (0.5 pts)
__construct()
__destruct()
__set($name, $value)
__get($name)

10) Pour chacune d’entre elle, expliquez à quelle moment elle est appelée. (0.5 pts)
__construct est appelée quand on crée un nouvel objet avec new
__destruct() est appelée pour détruire un objet, elle est appelée automatiquement à la fin du script
__set permet de détecter la modification d’un attribut qui n’existe pas ou qui est privé
__get permet de détecter l’accession à un attribut qui n’existe pas ou qui est privé

11) Expliquez l’utilité de la fonction serialize et unserialize en POO. (0.5 pts)
serialize transforme un objet en chaîne de caractères pour pouvoir le sauvegarder (dans $_SESSION par exemple)
unserialize est l'opération contraire, elle permet de récupérer un objet à partir d'une chaîne de caractères

Le modèle MVC (2 points)
12) Quel est l’intérêt de programmer en utilisant un modèle MVC (0.5pts)
Structurer le code, rendre la maintenance plus facile, dissocier le SQL du PHP et du HTML/CSS/JS
13) Dans un modèle MVC que vais je retrouver dans le M (0.5pts)
Dans le modèle on retrouve les traitements qui se font sur la base de données (les requêtes SQL notamment)

14) Dans un modèle MVC que vais-je retrouver dans le V (0.5pts)
Dans la vue on retrouve les pages que l'utilisateur verra (le HTML/CSS/JS principalement)

15) Dans un modèle MVC que vais-je retrouver dans le C (0.5pts)
Dans le contrôleur on retrouve les traitements qui se font entre la vue et le modèle (du PHP)


Partie théorique

1) 
interface LoginInterface {
    public function login($user, $password);
}

2)Citez 6 méthodes magiques. Expliquez à quelle moment elles sont déclenchées et les paramètres qu’elles prennent. (1.5 points
__construct()
__destruct()
__set($name, $value)
__get($name)
__isset($name)
__unset($name)

3) __destruct()

4) une classe abstraite
abstract class MaClasseAbstraite {}

5) 
public - Accessible de partout
private - Accessible uniquement au sein de la classe 
protected - Accessible uniquement au sein de la classe ou au sein des classes qui en héritent

6)

7) Le routeur appelle les bonnes fonctions pour les traitements et l'affichage en fonction de l'url et donc grâce à $_GET

8) Structurer le code, rendre la maintenance plus facile, dissocier le SQL du PHP et du HTML/CSS/JS

9) Le M correspond à Modèle qui est la partie du pattern qui gère les traitements avec la base de données
Le V correspond à Vue qui est la partie qui gère l'affichage pour l'utilisateur
Le C correspond à Contrôleur  qui est la partie qui gère les traitements entre la vue et le modèle
