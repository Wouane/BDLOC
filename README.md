#bdloc.fr :: La location de BD nouveau genre

--------

## Contexte

Face aux constats suivants...

* Les gens n’ont plus le temps d’aller à la bibliothèque
* Les bibliothèques sont ringardes et old-school, surtout pour les jeunes
* Les bandes-dessinées se lisent toujours beaucoup en France
* Les bandes-dessinées coûte la peau des dents (autour de 12€, voire 15€) et se consomment très rapidement (autour d’une heure max.)
* Les bandes-dessinées ne sont pas vendues en format numérique

...la Marie de Paris a décidé de créer un nouveau système de location de BD, bdloc.fr, 100% en ligne, 100% gratuit, 100% moderne.

--------

## Pitch

Les abonnés à bdloc.fr louent leurs bandes-dessinées par internet. Celles-ci sont choisies directement sur le catalogue en ligne, et livrées en point relais près de chez-eux. Après les avoir lues, l’abonné les rééexpédie par le point relais, et peut alors en commander de nouvelles. 

--------

## Tarifs

L’abonnement est gratuit, mais réservé aux Parisiens. 

--------

## Zone géographique couverte

bdloc.fr sera lancé uniquement sur Paris intramuros, afin de mieux maîtriser les coûts de livraisons en point relais. 

--------

## Règlement de location

* 10 BD maximum par location (pas de minimum)
* Les locations sont d’une durée maximale de 2 semaines (pas de minimum), de la date de réception en point au relais, à la date de dépot (pour le retour) en point relais
* Les frais de retard sont de 10 centimes par BD, par jour
* bdloc.fr se réserve le droit de réclamer des frais pour BD endommagée
* Les frais de retard ou de dédommagement doivent être réglés avant de pouvoir relouer de nouvelles BD
--------

## Pages et sections du site

### Accueil

La page d’accueil présente brièvement le concept et affiche un grand bouton motivant l’internaute à s’abonner. 

Un lien menant à la page de connexion est également affiché, pour les utilisateurs déjà abonnés mais déconnecté. 

Les utilisateurs connectés ne peuvent pas accéder à cette page. Ils sont redirigés automatiquement vers la page "Catalogue". 

### Abonnement

Cette page présente un formulaire contenant les informations nécessaires pour identifier l’utilisateur : 

* username
* email
* mot de passe
* confirmation du mot de passe
* nom
* prénom
* code postal
* adresse (num, rue, app) (la ville est obligatoirement Paris)
* numéro de téléphone

Tous les champs sont requis. Si des erreurs sont détectées, le formulaire est représenté à l’internaute.

### Catalogue

Section la plus importante du site ! C’est cette section qui affiche la liste des BDs disponibles sur bdloc.fr, ainsi que des formulaires de filtres, tris et recherche. 

Cette section n’est accessible que par les utilisateurs connectés.

#### Filtres et recherche

Dans la barre latérale présente à gauche de l’écran se trouvent les formulaires de recherche et de filtres.  Il doit en effet être possible de n’afficher les BDs qui correspondent aux filtres suivants : 

* Catégorie (toutes par défaut)
* Disponibilité (toutes par défaut)

Un formulaire permettant de renseigner un mot-clef est également affiché dans cette barre. Si un mot-clef est inscrit, il doit s’ajouter aux filtres sélectionnés (dans le sens qu’il doit préciser les filtres, et non les remplacer). La recherche doit être réalisée dans les champs suivants : 

* Titre
* Auteurs 

#### Tris et pagination

Au haut de la page, au-dessus des mini-fiches des BDs, est affichée une barre horizontale qui offre la possibilité de modifier le critère de tri, et de choisir le nombre de BDs affiché par page.

Deux liste déroulantes devraient suffire. Il doit être possible de trier par : 

* Date d’ajout au catalogue ASC ou DESC (par défaut)
* Ordre alphabétique de titre ASC ou DESC
* Date de publication ASC ou DESC

La seconde liste permet de choisir le nombre de BDs entre 20 (par défaut), 40 ou 60.

On retrouve également dans cette barre horizontale les informations de pagination et les boutons "précédentes" et “suivantes”.

#### Affichage des mini-fiches des BDs

Le contenu principal de la page est donc présenté sous forme d’une liste de mini-fiches, une par BD. 

Chaque mini-fiche comporte les informations suivantes : 

* La couverture de la BD
* Le titre
* Les auteurs
* Nombre d’exemplaires disponibles
* Un bouton "Plus de détails"
* Un bouton "Ajouter au panier" (si dispo)

En cliquant sur le bouton "Plus de détails", l’abonné visualise toutes les informations publiques disponibles sur cette BD. 

#### Page détails

Cette page s'ouvre par défaut dans une fenêtre modale, par-dessus les mini-fiches.
Toutes les informations et images sur la bande-dessinée, ainsi que toutes les infos sur l’auteur et la série, si disponible, sont affichées

Un bouton "Ajouter au panier" est en évidence sur cette page, si un exemplaire de la BD est disponible. 

### Système de panier

Le système de panier permet à l’abonné de construire sa prochaine livraison de BD. Chaque fois qu’il clique sur un bouton "Ajouter au panier", un exemplaire de la BD est ajouté à ce panier. Le bouton doit alors indiquer “Dans votre panier”, et devenir inactif. 

Un panier peut contenir au maximum 10 BDs, et un seul exemplaire de chaque BD. 

Au moment même où l’abonné ajoute une BD à son panier, cet exemplaire est considéré comme "loué", c-à-d qu’il n’est plus disponible à la location pour les autres abonnés. Si l’abonné le retire de son panier, alors celui-ci redevient disponible à la location. 

Un panier n’est valide que pendant 10 minutes après sa dernière modification. Passé ce délai, toutes les BDs sont remises en location. 

Dans le menu principal du site, en haut de l’écran, est toujours affiché un lien vers le panier. Sur ce lien est affiché le nombre de BDs présentes au panier. 

Ce lien mène vers la page récapitulative du panier. 

#### Ajout de BD au panier

Le clic sur un bouton "Ajouter au panier" peut déclencher des actions de 2 types : 

OPTION 1 : 

En AJAX. La BD est ainsi ajouté au panier sans même quitter la page. Avec cette option, le compteur du panier (le nombre de BD affiché sur le lien) doit être incrémenté en JS. 

OPTION 2 : 

Avec une requête HTTP classique. Dans ce cas, l’abonné doit absolument être redirigé, après l’ajout, vers la page sur laquelle il se trouvait lors du clic. 

#### Page récapitulative du panier

Cette page affiche tout le contenu du panier, sous forme de tableau. Sur chaque ligne du tableau, les informations/boutons suivants sont affichés : 

* Couverture de la BD
* Titre
* Bouton "Retirer du panier"

Encore une fois, le bouton "Retirer du panier" peut agir en AJAX, ou en requête HTTP. 

Sous le tableau, un bouton permet de valider le panier. En cliquant dessus, l’abonné est amené à la page de choix du point relais, sauf si celui-ci a des amendes à payer, dans lequel cas l’abonné est dirigé vers la page de paiement des amendes. 

Un autre bouton permet de retourner au catalogue.

#### Choix du point relais

Cette page présente une carte Google Map, avec un marqueur placé sur les point relais les plus proches du domicile de l’internaute. En cliquant sur un marqueur, une bulle d’information sur le point relais s’affiche, avec un lien permettant de choisir ce point relais. 

Après sélection d’un point relais, l’internaute est dirigé vers la page de confirmation. 

Voir annexe pour la liste des points relais. 

#### Page de confirmation

Cette page affiche l’horaire prévu de livraison (48h ouvrables après la confirmation), l’adresse du point relais, le nombre de BDs commandées ainsi qu’un lien pour visualiser la liste des BDs commandées. 

Près de l’adresse du point relais, un lien permet de modifier celui-ci, en amenant l’abonné vers la page précédente.

Finalement, un bouton permet de réaliser la commande. 

### Mon compte

Cette page est accessible directement depuis le menu principal, et comporte une liste de liens vers des pages permettant de modifier ses coordonnées et ses options, et plus.

Voici la liste des liens et des pages nécessaires : 

* Modifier mes informations personnelles
* Modifier mon mot de passe
* Consulter mon historique de locations
* Payer une amende
* Me désabonner

#### Modifier mes informations personnelles

Cette page affiche le même formulaire que pour l’inscription, à l’exception des champs de mot de passe. 

#### Modifier mon mot de passe

Cette page affiche un formulaire de modification de mot de passe (avec confirmation de celui-ci), mais doit également redemander le mot de passe actuel à l’utilisateur (pour plus de sécurité). 

#### Consulter mon historique de locations

Cette page affiche la liste de tous les paniers créés par cet utilisateur (et de leurs bds), grosso modo de la même manière que sur la page récapitulative du panier. 

#### Payer une amende

Sur cette page, s’affiche la liste de toutes amendes à payer, sous forme de tableau. 

Les colonnes sont les suivantes : 

* Date de l’amende
* Motif (retard, dégradation)
* Montant

Sur chaque ligne du tableau, un bouton "Payer maintenant" permet de régler l’amende avec Paypal. 

#### Me désabonner

L’utilisateur est invité à nous faire part des raisons qui le pousse à nous quitter. Il doit également compléter un "captcha", le plus difficile possible !

Un bouton permet de confirmer l’action. 

--------

## Annexe Point Relais 

* Libria - 82 Passage Choiseul - 75002 Paris
* Telecom Star - 15 Bd de Bonne Nouvelle - 75002 Paris
* Hypso Reprographie - 53 rue de Montmorency - 75003 Paris
* BM Pressing - 4 Bis Bd Morland - 75004 Paris
* Game Cash / CG Paris 5 - 21 rue Monge - 75005 Paris
* Chez Florence - 11 rue Dauphine - 75006 Paris
* Aux Fleurs du Bac - 69 rue du Bac - 75007 Paris
* Cordonnerie Serrurerie Grenell - 165 rue de Grenelle - 75007 Paris
* Clean Pressing - 15 rue Manuel - 75009 Paris
* Luffy - 35 rue de Clichy - 75009 Paris
* Les Coteaux de Saumur - 10 rue Bichat - 75010 Paris
* Magenta Art Deco - 34 Ter rue du Dunkerque - 75010 Paris
* Baticlean 75 - 191 rue de Charonne - 75011 Paris
* Cala Thé A - 133 rue de Montreuil - 75011 Paris
* A Livr' Ouvert - 171 Bis Bd Voltaire - 75011 Paris
* Pressing Boulle - 13 rue Boulle - 75011 Paris
* B.C.B.G / SARL Fleuve Bleu - 18 rue Jules Valles - 75011 Paris
* L'Atelier du Trèfles Cadeaux - 13 Bis Avenue Philippe Auguste - 75011 Paris
* Lio Optic - 44 Bd Diderot - 75012 Paris
* A.M Presse Bizot - 116 Av Général Michel Bizot - 75012 Paris
* Alanpark - 105 rue de Charenton - 75013 Paris
* Okbi Presse - 91 rue de Barrault - 75013 Paris
* Encherexpert - 51 rue de Clisson - 75013 Paris
* Maison de la Presse - 137 Bd Auguste Blanqui - 75013 Paris
* Ideal Optic - 101 Av de France - 75013 Paris
* Chryzalys - 206 Bd Raspail - 75014 Paris
* Agip Papeterie Côté Sud - 133 Av du Maine - 75014 Paris
* Animalerie Little Zoo - 40 Bd Brune - 75014 Paris
* Cordonnerie B.V.F - 22 rue des Volontaires - 75015 Paris
* Moveux - 14 rue Dupleix - 75015 Paris
* Saveurs du Sud - 14 Av Félix Faure - 75015 Paris
* Anwa - 105 Bis rue des Entrepreneurs - 75015 Paris
* Mercerie Poncet - 15 rue Daumier - 75016 Paris
* Vu du XII - 96 Av de Mozart - 75016 Paris
* Centre Literie - 2 Bd Bessières - 75017 Paris
* Salon Marylène - 45 rue Brochant - 75017 Paris
* Allo Micro - 117 rue Legendre - 75017 Paris
* Encherexpert - 61 rue Guy Moquet - 75017 Paris
* Au Rocher de Joie - 12 rue Lamarck - 75018 Paris
* Consoplus Informatique - 8 Bd Ney - 75018 Paris
* Unity Génération - 17 rue Simart - 75018 Paris
* Isabelle Cherchevsky Atelier - 15 rue Lagouat - 75018 Paris
* Labelencre - 10 Av de La porte Brunet - 75019 Paris
* Prim Plus - 9 rue du Cher - 75020 Paris
* Cadeaux Chics - 27 rue Saint Fargeau - 75020 Paris
* Optic 62 - 62 rue de Belleville - 75020 Paris
* Pressing 113 - 113 Bd Davout - 75020 Paris
* Copy Conforme - 25 rue Gatinée - 75020 Paris