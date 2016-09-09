<?php

/* login.twig */
class __TwigTemplate_e1d6cfd07abac2fdc3a67fe2c36afb97b9c68fe8fb4446900ff39eee4aa11e92 extends Twig_Template
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
        echo "<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Login using Slim</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
\t\t<link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href='";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/style.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>Login Page</h1>
        <div>a PHP Powered</div>
\t\t<form action=\"/user_login\" method=\"post\">
\t\t\t<span style=\"color:red\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "message", array(0 => "error"), "method"), 0, array(), "array"), "html", null, true);
        echo "</span>

\t\t\t<fieldset>
\t\t\t\t<input name=\"user_name\" type=\"text\" placeholder=\"Enter User Name\">
\t\t\t\t<input name=\"user_password\" type=\"password\" placeholder=\"Enter Password\">
\t\t\t</fieldset>
\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Login\"/>
\t\t\t\t
\t\t</form>
    </body>
</html>
        
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  27 => 7,  19 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>Login using Slim</title>*/
/*         <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>*/
/* 		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href='{{ base_url() }}/css/style.css' rel='stylesheet' type='text/css'>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Login Page</h1>*/
/*         <div>a PHP Powered</div>*/
/* 		<form action="/user_login" method="post">*/
/* 			<span style="color:red">{{ flash.message('error')[0] }}</span>*/
/* */
/* 			<fieldset>*/
/* 				<input name="user_name" type="text" placeholder="Enter User Name">*/
/* 				<input name="user_password" type="password" placeholder="Enter Password">*/
/* 			</fieldset>*/
/* 				<input type="submit" class="button" value="Login"/>*/
/* 				*/
/* 		</form>*/
/*     </body>*/
/* </html>*/
/*         */
/* */
