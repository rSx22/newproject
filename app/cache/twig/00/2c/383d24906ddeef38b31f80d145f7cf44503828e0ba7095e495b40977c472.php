<?php

/* user/form_addUser.html.twig */
class __TwigTemplate_002c383d24906ddeef38b31f80d145f7cf44503828e0ba7095e495b40977c472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (((isset($context["methode"]) ? $context["methode"] : null) == "formuser")) {
            // line 2
            echo "\t
\t";
            // line 3
            $this->loadTemplate("index.html.twig", "user/form_addUser.html.twig", 3)->display($context);
            // line 4
            echo "
";
        }
        // line 6
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"col-md-8 col-md-offset-2 top-buffer3\">
\t<form method=\"POST\" action=\"index.php?p=add_user\"> 
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t <input type=\"text\" class=\"form-control\" placeholder=\"Code postal régional - Ex : 75200\" name=\"codepost\">
\t\t\t\t <input type=\"text\" class=\"form-control top-bufferinputxt\" placeholder=\"nom@email.com\" name=\"email\">
\t\t\t\t <div class=\"row\">
\t\t\t\t\t  <div class=\"col-xs-6\">
\t\t\t\t\t    <input type=\"password\" class=\"form-control top-bufferinputxt\" placeholder=\"Mot de passe\" name=\"password\"></div>
\t\t\t\t\t  <div class=\"col-xs-6\">
\t\t\t\t\t    <input type=\"password\" class=\"form-control top-bufferinputxt\" placeholder=\"Confirmer\" name=\"password_check\"></div>
\t\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"confirmswitch top-buffer1\">
\t\t\t\t\t<input type=\"checkbox\" name=\"confirmswitch\" class=\"confirmswitch-checkbox\" id=\"myconfirmswitch\">
\t\t\t\t\t<label class=\"confirmswitch-label\" for=\"myconfirmswitch\">
\t\t\t\t\t<span class=\"confirmswitch-inner\"></span>
\t\t\t\t\t<span class=\"confirmswitch-switch\"></span>
\t\t\t\t\t</label>
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 littletext col-md-offset-2\" style=\"position:absolute;width:300px;bottom:12px;left:100px\">
\t\t\t\t\t J'accepte les conditions d'utilisation générales
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 text-center\">
\t\t\t<div class=\"littletext notifyform\"> ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t\t<input class=\"btninscript top-buffer3\" type=\"submit\" value=\"S'inscrire\">
\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/form_addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 35,  37 => 7,  31 => 6,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}