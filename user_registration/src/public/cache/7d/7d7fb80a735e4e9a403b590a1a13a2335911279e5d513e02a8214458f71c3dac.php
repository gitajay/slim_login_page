<?php

/* user.twig */
class __TwigTemplate_6e9b3739ad84e9865d0903abf0eb170a545080f56ba0d47f16fff020bf30cab6 extends Twig_Template
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
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Welcome using Slim</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
\t\t<link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/style.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>Welcome ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
        <div>a PHP Powered</div>
\t\t<!-- Have to use twig function - later -->
\t\t<a href='user_login'>Logout</a>
    </body>
</html>
        
";
    }

    public function getTemplateName()
    {
        return "user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>Welcome using Slim</title>*/
/*         <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>*/
/* 		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href='{{ base_url() }}/css/style.css' rel='stylesheet' type='text/css'>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Welcome {{name}}</h1>*/
/*         <div>a PHP Powered</div>*/
/* 		<!-- Have to use twig function - later -->*/
/* 		<a href='user_login'>Logout</a>*/
/*     </body>*/
/* </html>*/
/*         */
/* */
