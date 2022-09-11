require('./bootstrap');
import "bootstrap";

(function($) { // Begin jQuery
    $(function() { // DOM ready
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        // Close one dropdown when selecting another
        $('.nav-dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      // Clicking away from dropdown will remove the dropdown class
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
      // Toggle open and close nav styles on click
      $('#nav-toggle').click(function() {
        $('nav ul').slideToggle();
      });
      // Hamburger to X toggle
      $('#nav-toggle').on('click', function() {
        this.classList.toggle('active');
      });
    }); // end DOM ready
  })(jQuery); // end jQuery
  // formulaire
   Gestion avancée :
  selecteur : document.querySelector(cssRule) et document.querySelectorAll(cssRule)
  gestion classes : 
      element.classList.add(className); 
      element.classList.remove(className); 
      element.classList.contains(className); 
      element.classList.toggle(className)
  gestion select : element.selectedIndex; element.options;
  

 inputsText = document.querySelectorAll("form input[type='text']");

document.addEventListener("DOMContentLoaded", function(event){
  
evenement keyup pour tous les input text 
   => si saisie entre 4 et 8 caractères, ajouter la class "success" sur le input, sinon ajouter la classe "error" sur le input
  
  // évènement à la soumission du formulaire
  // => vérifier que tous les champs sont renseignés 
  // => vérifier que le nom est différent du mot de passe
  // => vérifier que les mots de passe sont identiques
  // => vérifier que le login ne contient pas "admin","administrator","superadmin","chuck", "root", "postmaster" 
  // => créer une div juste avant contenant le message d'erreur pour chaque erreur
  // => supprimer toutes les div>div dans le formulaire
  
  
});