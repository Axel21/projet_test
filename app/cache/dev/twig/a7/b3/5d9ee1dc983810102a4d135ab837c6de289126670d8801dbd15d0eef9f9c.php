<?php

/* ::base.html.twig */
class __TwigTemplate_a7b35d9ee1dc983810102a4d135ab837c6de289126670d8801dbd15d0eef9f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Avec le Soleil</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/favicon.ico"), "html", null, true);
        echo "\" />
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
        ";
        // line 9
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Alphabétisation")) {
            // line 10
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/alpha.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 12
        echo "        ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "EFT")) {
            // line 13
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/eft.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 15
        echo "        ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Céramique")) {
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/ceramique.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 18
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,400italic,700italic,500italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/navbar-fixed-top.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script>
// Carousel Auto-Cycle
  \$(document).ready(function() {
    \$('.carousel').carousel({
      interval: 6000
    });
  });

</script>
</head>
<body>
    <section id=\"page\" class=\"container-fluid\">

   <!--###### HEADER ######-->
      <header id=\"header\">
        <!--######## NAV BARRE #########-->
       
          <!-- Fixed navbar -->
    <section class=\"navbar navbar-fixed-top row\" role=\"navigation\">
      <section class=\"container col-md-10 menu-center\">
        <section class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <h1><a class=\"navbar-brand\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("vae_multi_site_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-soleil.png"), "html", null, true);
        echo "\"></a></h1>
        </section>
            ";
        // line 54
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 55
            echo "                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Rubrique:menu", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))));
            echo "
            ";
        } else {
            // line 57
            echo "                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Rubrique:menu", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))));
            echo "
            ";
        }
        // line 59
        echo "      </section>
    </section>
     <section id=\"fondheader\">
       
        <figure class=\"nonSmall\">
            ";
        // line 64
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Alphabétisation")) {
            // line 65
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/alpha.jpg"), "html", null, true);
            echo "\">
            ";
        }
        // line 67
        echo "            ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "EFT")) {
            // line 68
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/fleur.jpg"), "html", null, true);
            echo "\">
            ";
        }
        // line 70
        echo "            ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Céramique")) {
            // line 71
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/ceramique.jpg"), "html", null, true);
            echo "\">
            ";
        }
        // line 73
        echo "            
        </figure>
        <article>
       
         <a href=\"dons.html\">Faire un Don</a> 
          
       </article>

</header><!-- end header-->
    <section id=\"sous-header\">
      <!-- ########## CENTER ZONE ########## -->  
      <section id=\"content\" class=\"row container-fluid\">
        <section class=\"col-md-10 container\" id=\"content-center\">
      
        <!-- ########## LEFT CONTENT ########## -->
   <section id=\"left-content\" >
   <section class=\"col-md-9\">
            ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "   </section>
</section><!--end left-content-->

        <!-- ########## RIGHT CONTENT ########## --> 
        <section id=\"right-content\">
          <section class=\"col-md-3\">
            ";
        // line 97
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Agenda:liste", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"))));
        echo "
            ";
        // line 98
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Liens:listePartenaires", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"))));
        echo "
          </section>
        </section><!--end right-content--> 
        <!--<div class=\"container-fluid\">-->
<div class=\"row\">
<div class=\"col-md-12 clear\">

        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
<!--</div>--><!-- /.container -->

                            
<!-- Delete This -->                        

        </section>
     </section><!--end content-->  
<!-- ########## FOOTER ########## --> 
<footer id=\"footer\" class=\"row container-fluid\">


    <section id=\"footer1\" class=\"row\">
      <section class=\"col-md-10 footer-center \">
        <section class=\"row\">
      <article class=\"col-md-5\">
        ";
        // line 123
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Alphabétisation")) {
            // line 124
            echo "        ";
        }
        // line 125
        echo "        ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "EFT")) {
            // line 126
            echo "            <h3>Vous voulez allez plus loin dans votre développement personnel ?</h3>
            <p>Contactez-moi, nous ferons un bout de chemin ensemble tout en sachant que mon objectif est de vous rendre autonome le plus rapidement possible. Les séances peuvent se tenir via Skype ce qui vous donne une grande liberté de mouvements.</p>
        ";
        }
        // line 129
        echo "        ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Céramique")) {
            // line 130
            echo "        ";
        }
        // line 131
        echo "      </article>
      <article class=\"col-md-7\">
          ";
        // line 133
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Alphabétisation")) {
            // line 134
            echo "          ";
        }
        // line 135
        echo "          ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "EFT")) {
            // line 136
            echo "            <h3>Avertissement</h3>
            <p>l’EFT est une modalité thérapeutique qui fait partie d’un nouveau type de traitements et protocoles faisant partie de ce qui est appelé La Psychologie Energétique. Même si c’est toujours considéré à un stade expérimental, ces techniques sont utilisées par des thérapeutes, des infirmières, des kinésithérapeutes, des psychiatres et des individus de par le monde.</p><p> Jusqu’à aujourd’hui, l’EFT et les autres Techniques de Psychologie Energétiques (TAT, Zensight,...) ont eu des résultats exceptionnels dans le traitement de problèmes psychologiques et physiques.Néanmoins ces techniques ne sont PAS sensées remplacer les traitements médicaux ou psychothérapeutiques. </p>
            <p>Personnellement, je n’ai pas expérimenté d’effets secondaires négatifs en appliquant ces techniques en suivant correctement les protocoles et les suggestions de traitement.Cela ne veut pas dire que vous ou vos clients ne vont pas expérimenter ou percevoir des effets secondaires négatifs. Si vous utilisez ces techniques pour vous ou pour d’autres, vous devez être d’accord d’être pleinement responsable de votre bien-être et vous êtes encouragés d’aviser vos clients à faire de même.</p><p>Si vous êtiez perturbé après une séance de psychologie énergétique, contactez un praticien expérimenté.</p>
          ";
        }
        // line 140
        echo "          ";
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom") == "Céramique")) {
            // line 141
            echo "          ";
        }
        // line 142
        echo "
     </article>
     </section>
     </section>
    </section>


    <section id=\"footer2\" class=\"row\">
       <section class=\"col-md-10 footer-center\">
          <section class=\"row\">
          <article class=\"col-md-3\"><a href=\"aveclesoleil.be\" id=\"footer-soleil\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-soleil-footer.png"), "html", null, true);
        echo "\"><p>Avec Le Soleil - asbl</p></a></article>
          <article class=\"col-md-3 col-md-offset-6\"><a href=\"#\" id=\"logo-vae\">Web site create by <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/images/logo-vae.png"), "html", null, true);
        echo "\"></a></article>
          </section>  
        </section>
    </section>
 
</footer><!--end footer-->
</section><!--end sous-header -->
 </section><!--end page--> 
  <!-- jQuery -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
  <!-- Include all compiled plugins (below), or include insectionidual files as needed -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 167
        $this->displayBlock('javascripts', $context, $blocks);
        // line 168
        echo "    
</body>
</html>

";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
    }

    // line 167
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 167,  308 => 90,  300 => 168,  298 => 167,  293 => 165,  278 => 153,  274 => 152,  262 => 142,  259 => 141,  256 => 140,  250 => 136,  247 => 135,  244 => 134,  242 => 133,  238 => 131,  235 => 130,  232 => 129,  227 => 126,  224 => 125,  221 => 124,  219 => 123,  191 => 98,  187 => 97,  179 => 91,  177 => 90,  158 => 73,  152 => 71,  149 => 70,  143 => 68,  140 => 67,  134 => 65,  132 => 64,  125 => 59,  119 => 57,  113 => 55,  111 => 54,  104 => 52,  73 => 24,  65 => 19,  60 => 18,  54 => 16,  51 => 15,  45 => 13,  42 => 12,  36 => 10,  34 => 9,  27 => 5,  21 => 1,);
    }
}
