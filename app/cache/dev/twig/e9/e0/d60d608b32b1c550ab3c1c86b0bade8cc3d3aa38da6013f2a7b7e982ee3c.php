<?php

/* VaeBoutiqueBundle:Produit:error.html.twig */
class __TwigTemplate_e9e0d60d608b32b1c550ab3c1c86b0bade8cc3d3aa38da6013f2a7b7e982ee3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>  
    <title>Avec le Soleil - Error</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/favicon.ico"), "html", null, true);
        echo "\" />
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
   
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/chapeau.css"), "html", null, true);
        echo "\">
     
      <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,400italic,700italic,500italic' rel='stylesheet' type='text/css'>

      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href=\"navbar-fixed-top.css\" rel=\"stylesheet\">
</head>
<body>
    <section id=\"page\" class=\"container-fluid\">


    <section id=\"sous-header\">
      <!-- ########## CENTER ZONE ########## -->  
      <section id=\"content\" class=\"row container-fluid\">
        <section class=\"col-md-10 container\" id=\"content-center\">
          <h1 class=\"col-md-4 col-md-offset-4\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-soleil-grand.png"), "html", null, true);
        echo "\"></h1>
        </section>
     <article id='messageError'>
         
                <p>Une erreur est survenue</p>
                <p>Le paiement n'a pas été effectué</p>
                <p><a href='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "fr", "nomSite" => "Céramique", "slugRubrique" => "boutique")), "html", null, true);
        echo "'>Retour à la boutique</a><p>

                <p> An error occured </p>
                <p> payment has not been made ​​</p>
                <p><a href='";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "en", "nomSite" => "Céramique", "slugRubrique" => "shop")), "html", null, true);
        echo "'>Back to shop</a><p>
                 
     </article>
       
     </section><!--end content-->  
</section><!--end sous-header -->
 </section><!--end page--> 
  <!-- jQuery -->
  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
 

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include insectionidual files as needed -->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "VaeBoutiqueBundle:Produit:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 53,  75 => 40,  68 => 36,  59 => 30,  38 => 12,  33 => 10,  25 => 5,  19 => 1,);
    }
}
