<?php

/* VaeBaseBundle:Dons:dons.html.twig */
class __TwigTemplate_bfd98973d7b4c86b37d39c7e9d09f351a091d8ddab0732fa393874db15dc7b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 4
            echo " <article>
              <h2>Faite un dons pour notre asbl</h2>
              <p>Nous sommes une association à but non lucratif.<br>
                Nous somme là pour aider les personnes en difficulté et toutes nos formations ou nos ateliers ne sont pas payants.<br>
                C'est pour cela que nous demandons des dons aux personnes qui peuvent le faire et qui voudrais nous aider dans nos idées.
              </p>
              </article>

            <article>
               
              <p>Si vous voulez un peu mieux nous connaître et connaître nos idées et nos activités rendez vous sur notre page";
            // line 14
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 15
                echo "                                                                                                                              <a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "qui-sommes-nous")), "html", null, true);
                echo "\">historique</a></p>
                                                                                                                              ";
            } else {
                // line 17
                echo "                                                                                                                              <a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "who-are-we")), "html", null, true);
                echo "\">historique</a></p>
                                                                                                                              ";
            }
            // line 19
            echo "      </article>
      <article>
        
      </article>

            <article><h2>Faire un don via paypal</h2>

                   <p>Pour plus de sécurité et de facilité pour vous comme pour nous, nous vous proposont de réaliser votre dons via paypal en cliquant sur le bouton si dessous<p>
                     <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"GADXW639KXMTQ\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/fr_FR/BE/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                      </form>
              </article>

          <article>
            <p><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "contact")), "html", null, true);
            echo "\">N'hésité pas à nous contacter!</a></p>
          </article>

";
        } else {
            // line 40
            echo "
 <article>
              <h2>Made a donation to our association</h2>
              <p>We are a non-profit organization.<br>
                We are here to help people in trouble and all our training or our workshops are not paid.<br>
                This is why we ask for donations to people who can do it and that would help us in our ideas.
              </p>
              </article>

            <article>
               
              <p>If you want a little more about us and our ideas and our activities please visit our page ";
            // line 51
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 52
                echo "                                                                                                                              <a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "qui-sommes-nous")), "html", null, true);
                echo "\">historique</a></p>
                                                                                                                              ";
            } else {
                // line 54
                echo "                                                                                                                              <a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "who-are-we")), "html", null, true);
                echo "\">historique</a></p>
                                                                                                                              ";
            }
            // line 56
            echo "      </article>
      <article>
        
      </article>

            <article><h2>Donate via paypal </h2>

                   <p>For safety and ease for you as for us, we will proposont to make your donations via paypal by clicking the button below<p>
                     <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                      <input type=\"hidden\" name=\"hosted_button_id\" value=\"GADXW639KXMTQ\">
                      <input type=\"image\" src=\"https://www.paypalobjects.com/fr_FR/BE/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !\">
                      <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                      </form>
              </article>

          <article>
            <p><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "contact")), "html", null, true);
            echo "\">Do not hesitate to contact us</a></p>
          </article>
 

";
        }
        // line 78
        echo "
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Dons:dons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 78,  131 => 73,  112 => 56,  106 => 54,  100 => 52,  98 => 51,  85 => 40,  78 => 36,  59 => 19,  53 => 17,  47 => 15,  45 => 14,  33 => 4,  31 => 3,  28 => 2,);
    }
}
