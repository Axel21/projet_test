<?php

/* VaeBaseBundle:Contact:form.html.twig */
class __TwigTemplate_04f67b6a8f4679d88adcf562b5ae979c795815bbc27f81ea38b39003eca51ca6 extends Twig_Template
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
        echo "  ";
        // line 5
        echo "
            <article>
              <p>Pour nous contactez, remplisez le formulaire si dessous<br/>
                où téléphonez nous au 0495/187608</p>
                 <form role=\"form\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_formation_contact_send", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nom"))), "html", null, true);
        echo "\" method=\"post\">
                 <div class=\"form-group\">
                   <label for=\"nom\">Votre nom</label>
                   <input type=\"text\" class=\"form-control\" id=\"nom\" placeholder=\"Entrer votre nom\" required>
                 </div>
                 <div class=\"form-group\">
                   <label for=\"suject\">Suject de votre message</label>
                   <input type=\"text\" class=\"form-control\" id=\"Suject\" placeholder=\"Entrer le suject de votre message\" required>
                 </div>
                 <div class=\"form-group\">
                   <label for=\"message\">Votre message</label>
                   <textarea id=\"message\" class=\"form-control\" rows=\"3\" placeholder=\"Entrer votre message\" required></textarea>
                   
                 </div>
                 
                <button type=\"submit\" class=\"btn \">Envoyer votre message</button>
              </form>
              </article>

   


";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Contact:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  21 => 5,  19 => 1,);
    }
}
