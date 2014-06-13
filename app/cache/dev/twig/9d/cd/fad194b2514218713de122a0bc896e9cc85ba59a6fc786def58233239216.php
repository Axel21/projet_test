<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9dcdfad194b2514218713de122a0bc896e9cc85ba59a6fc786def58233239216 extends Twig_Template
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
        // line 2
        echo "<div id='profil_test_container'>
    <h1>Votre Profil :</h1>
<div class=\"fos_user_user_show\" id='profil'>
    <p><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("vae_multi_site_accueil");
        echo "\" class=\"btn\">retour au site</a></p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
    <p><a href='";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "'>modifier mot de passe</a></p>
</div>
<div>
    ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeInscriptionBundle:Inscription:liste"));
        echo "
</div>
<div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 6,  24 => 5,  19 => 2,  72 => 12,  67 => 11,  62 => 6,  56 => 5,  51 => 13,  48 => 12,  46 => 11,  40 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
