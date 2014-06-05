<?php

/* VaeMultiSiteBundle:Site:index.html.twig */
class __TwigTemplate_4e915583655e0fbd2d2a0e3ae5dc8ddede8afaa035ff9a104c8dae223bb05382 extends Twig_Template
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
        echo "<h1>Bienvenu sur le site de l'asbl avec le soleil</h1>

 <div>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("vae_multi_site_accueil", array("_locale" => "fr"));
        echo "\">Francais</a>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("vae_multi_site_accueil", array("_locale" => "en"));
        echo "\">Anglais</a>   
</div>

<ul>
    <li>
        ";
        // line 10
        if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
            // line 11
            echo "        <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Alphabétisation", "slugRubrique" => "accueil")), "html", null, true);
            echo "'>Alphabétisation</a>
        <a href='";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "EFT", "slugRubrique" => "accueil")), "html", null, true);
            echo "'>EFT</a>
        <a href='";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Céramique", "slugRubrique" => "accueil")), "html", null, true);
            echo "'>Céramique</a>
        ";
        } else {
            // line 15
            echo "        <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Alphabétisation", "slugRubrique" => "home")), "html", null, true);
            echo "'>Alphabétisation</a>
        <a href='";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "EFT", "slugRubrique" => "home")), "html", null, true);
            echo "'>EFT</a>
        <a href='";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => "Céramique", "slugRubrique" => "home")), "html", null, true);
            echo "'>Céramique</a>
        ";
        }
        // line 18
        echo "    
    </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "VaeMultiSiteBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  61 => 17,  57 => 16,  52 => 15,  47 => 13,  43 => 12,  38 => 11,  36 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}
