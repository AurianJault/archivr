🚧 La balise `a-entity` qui contient la scène à affiché doit avoir l'id `base` 🚧 


# Transition entre view
Fais une transition de fade In/Out entre les éléments et les deux sky.

## animationcustom (Component)
A ajouter à TOUS les éléments visibles (sky compris)

## `goTo('pathToHTMLContent')` 
A mettre dans l'èvenement `onclick` de la flèche de direction.
Permet de changer de view, lance automatiquement les évènements pour les animations de transition.

#### Exemple: 
```html 
<a-box color="pink" position="0 1 -3" onclick="goTo()"  animationcustom class="clickable">
</a-box>
```

__Projet à voir dans le repot *A-frame-training* -> *template* dans la branche *Aurian*__


# Apparition d'éléments
permet de faire apparaitre des éléments en regardant un endroit dans l'image.

## Fades (Component)
__Un nom de classe = 1 panneaux d'affichages.__   
Mets l'opacité des éléments à 0 (invisible) et l'ajoute dans la classe `.default` si aucune n'est renseignée.  
🛑 Si il y a plusieur panneaux à afficher, changez les classes 🛑 

## FadeIn('classe')/FadeOut('classe')
Doit-être ajoutée dans l'évènement `nmouseenter`
```

__Projet à voir dans le repot *A-frame-training* -> *playground* dans la branche *Aurian*__
# Lecture de MP3

# Controle des manette :

