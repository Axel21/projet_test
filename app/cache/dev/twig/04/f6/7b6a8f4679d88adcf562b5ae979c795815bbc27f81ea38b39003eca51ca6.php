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
              ";
        // line 7
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 8
            echo "              <p>Pour nous contactez, remplisez le formulaire si dessous<br/>
                ou téléphonez nous au 0495/187608</p>
              ";
        } else {
            // line 11
            echo "              <p>To contact us, fill the form below<br/>
                or call us at 0495/187608 </p>
              ";
        }
        // line 14
        echo "                 <form role=\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_formation_contact_send", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nom"))), "html", null, true);
        echo "\" method=\"post\">
                 <div class=\"form-group\">
                   <label for=\"nom\">Votre nom</label>
                   <input type=\"text\" class=\"form-control\" id=\"nom\" placeholder=\"Entrer votre nom\" required>
                 </div>
                 <div class=\"form-group\">
                   <label for=\"suject\">votre adresse email</label>
                   <input type=\"email\" class=\"form-control\" id=\"mail\" placeholder=\"Entrer votre email\" required>
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
        return array (  37 => 14,  32 => 11,  27 => 8,  25 => 7,  21 => 5,  19 => 1,);
    }
}
