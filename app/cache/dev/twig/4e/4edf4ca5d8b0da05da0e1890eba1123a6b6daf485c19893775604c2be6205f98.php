<?php

/* SecretariaBundle:Default:layout.html.twig */
class __TwigTemplate_b3a524a6dacfec22951201bc1bdbafa5669086eb331338c3eecbf8bf84c29911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eecabb926ae7c788d4f162849414f3f40ac324dfbbc5a1e9e6e1ace53eabef8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecabb926ae7c788d4f162849414f3f40ac324dfbbc5a1e9e6e1ace53eabef8c->enter($__internal_eecabb926ae7c788d4f162849414f3f40ac324dfbbc5a1e9e6e1ace53eabef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SecretariaBundle:Default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Documento sin título</title>
\t<link rel = \"stylesheet\" href=\"/public/css/bootstrap.min.css\" />
\t<script src=\"/public/js/jquery-3.1.1.min.js\"></script>
    <script src=\"/public/js/bootstrap.min.js\"></script>
    
    
</head>

<body>
\t<nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Club Pical</a>
          </div>
          <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Secretaria <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pical_secretaria_socios_index");
        echo "\">Listado Socios</a></li>
                  <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pical_secretaria_socio_form_add");
        echo "\">Nuevo Socio</a></li>
                  
                </ul>
              </li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Tesoreria <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Action</a></li>
                  <li><a href=\"#\">Another action</a></li>
                  <li><a href=\"#\">Something else here</a></li>
                  <li role=\"separator\" class=\"divider\"></li>
                  <li class=\"dropdown-header\">Nav header</li>
                  <li><a href=\"#\">Separated link</a></li>
                  <li><a href=\"#\">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"active\"><a href=\"./\">Default <span class=\"sr-only\">(current)</span></a></li>
              <li><a href=\"../navbar-static-top/\">Static top</a></li>
              <li><a href=\"../navbar-fixed-top/\">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
    <div class=\"container\">
\t";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "\t</div>
</body>
</html>
";
        
        $__internal_eecabb926ae7c788d4f162849414f3f40ac324dfbbc5a1e9e6e1ace53eabef8c->leave($__internal_eecabb926ae7c788d4f162849414f3f40ac324dfbbc5a1e9e6e1ace53eabef8c_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_daa65ea08cf5279b3ddb9d9e82fce190dd92d82e8f5a774efff2c37764afb5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa65ea08cf5279b3ddb9d9e82fce190dd92d82e8f5a774efff2c37764afb5ea->enter($__internal_daa65ea08cf5279b3ddb9d9e82fce190dd92d82e8f5a774efff2c37764afb5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_daa65ea08cf5279b3ddb9d9e82fce190dd92d82e8f5a774efff2c37764afb5ea->leave($__internal_daa65ea08cf5279b3ddb9d9e82fce190dd92d82e8f5a774efff2c37764afb5ea_prof);

    }

    public function getTemplateName()
    {
        return "SecretariaBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 59,  91 => 60,  89 => 59,  59 => 32,  55 => 31,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Documento sin título</title>
\t<link rel = \"stylesheet\" href=\"/public/css/bootstrap.min.css\" />
\t<script src=\"/public/js/jquery-3.1.1.min.js\"></script>
    <script src=\"/public/js/bootstrap.min.js\"></script>
    
    
</head>

<body>
\t<nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Club Pical</a>
          </div>
          <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Secretaria <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"{{ path('pical_secretaria_socios_index') }}\">Listado Socios</a></li>
                  <li><a href=\"{{ path('pical_secretaria_socio_form_add') }}\">Nuevo Socio</a></li>
                  
                </ul>
              </li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Tesoreria <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Action</a></li>
                  <li><a href=\"#\">Another action</a></li>
                  <li><a href=\"#\">Something else here</a></li>
                  <li role=\"separator\" class=\"divider\"></li>
                  <li class=\"dropdown-header\">Nav header</li>
                  <li><a href=\"#\">Separated link</a></li>
                  <li><a href=\"#\">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"active\"><a href=\"./\">Default <span class=\"sr-only\">(current)</span></a></li>
              <li><a href=\"../navbar-static-top/\">Static top</a></li>
              <li><a href=\"../navbar-fixed-top/\">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
    <div class=\"container\">
\t{% block body %}{% endblock %}
\t</div>
</body>
</html>
";
    }
}
