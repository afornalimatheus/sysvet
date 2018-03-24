<?php

/* base.html.twig */
class __TwigTemplate_b1cd8acd56267e8dc78034a7c64a8d118c952834e0ce91f29194d2c9c3e5257a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2e7eb6be90141a10d45ed57b44cb5f91e372dbc9837770bce2560bd7138a6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e7eb6be90141a10d45ed57b44cb5f91e372dbc9837770bce2560bd7138a6cb->enter($__internal_e2e7eb6be90141a10d45ed57b44cb5f91e372dbc9837770bce2560bd7138a6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_aafc7f7d286459061f40f98791100ab3d5da0fb20b2cefed1ee8a4ce49adc18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafc7f7d286459061f40f98791100ab3d5da0fb20b2cefed1ee8a4ce49adc18a->enter($__internal_aafc7f7d286459061f40f98791100ab3d5da0fb20b2cefed1ee8a4ce49adc18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script src=\"/js/jquery/jquery.js\" type=\"text/javascript\"></script>
    <script src=\"/js/bootstrap.bundle.js\" type=\"text/javascript\"></script>
    <link href=\"/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/css/simple-sidebar.css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>
<body>
    <div id=\"wrapper\" class=\"toggled\">
        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"#\">
                        Sysvet
                    </a>
                </li>
                <li>
                    <a href=\"/\">Home</a>
                </li>
                <li>
                    <a href=\"#\">Usuários</a>
                </li>
                <li>
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Clientes</a>
                </li>
                <li>
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_index");
        echo "\">Serviços</a>
                </li>
                <li>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_index");
        echo "\">Agendamentos</a>
                </li>
                <li>
                    <a href=\"#\">Relatórios</a>
                </li>
                ";
        // line 41
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 42
            echo "                <li>
                    <a href=\"/logout\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nome", array()), "html", null, true);
            echo " (Logout)</a>
                </li>
                ";
        }
        // line 46
        echo "            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        echo "  
    </div>
    <!-- /#page-content-wrapper -->
</div>
";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "</body>
</html>
";
        
        $__internal_e2e7eb6be90141a10d45ed57b44cb5f91e372dbc9837770bce2560bd7138a6cb->leave($__internal_e2e7eb6be90141a10d45ed57b44cb5f91e372dbc9837770bce2560bd7138a6cb_prof);

        
        $__internal_aafc7f7d286459061f40f98791100ab3d5da0fb20b2cefed1ee8a4ce49adc18a->leave($__internal_aafc7f7d286459061f40f98791100ab3d5da0fb20b2cefed1ee8a4ce49adc18a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54e21a23a4d0c6f04f1a9e1c7b7c28e233c72343f9cd369f58a98938318ad30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54e21a23a4d0c6f04f1a9e1c7b7c28e233c72343f9cd369f58a98938318ad30->enter($__internal_f54e21a23a4d0c6f04f1a9e1c7b7c28e233c72343f9cd369f58a98938318ad30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3bb33786ec751c0505301defe1e977b37bc138f3121873938b98dac46600b679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb33786ec751c0505301defe1e977b37bc138f3121873938b98dac46600b679->enter($__internal_3bb33786ec751c0505301defe1e977b37bc138f3121873938b98dac46600b679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3bb33786ec751c0505301defe1e977b37bc138f3121873938b98dac46600b679->leave($__internal_3bb33786ec751c0505301defe1e977b37bc138f3121873938b98dac46600b679_prof);

        
        $__internal_f54e21a23a4d0c6f04f1a9e1c7b7c28e233c72343f9cd369f58a98938318ad30->leave($__internal_f54e21a23a4d0c6f04f1a9e1c7b7c28e233c72343f9cd369f58a98938318ad30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_701da4a68e2171534009bc51f7f7e51e9a79af4df6156824a2de1c752ebea3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701da4a68e2171534009bc51f7f7e51e9a79af4df6156824a2de1c752ebea3b4->enter($__internal_701da4a68e2171534009bc51f7f7e51e9a79af4df6156824a2de1c752ebea3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3892ee6cc1ad2746a4268348d45a8ee462efe43ec827863f2703c1a3c80e2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3892ee6cc1ad2746a4268348d45a8ee462efe43ec827863f2703c1a3c80e2b9->enter($__internal_d3892ee6cc1ad2746a4268348d45a8ee462efe43ec827863f2703c1a3c80e2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3892ee6cc1ad2746a4268348d45a8ee462efe43ec827863f2703c1a3c80e2b9->leave($__internal_d3892ee6cc1ad2746a4268348d45a8ee462efe43ec827863f2703c1a3c80e2b9_prof);

        
        $__internal_701da4a68e2171534009bc51f7f7e51e9a79af4df6156824a2de1c752ebea3b4->leave($__internal_701da4a68e2171534009bc51f7f7e51e9a79af4df6156824a2de1c752ebea3b4_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_b73507d8f23d1620958f7cd7a20758473b79329ae69e5473c2f9fc6e4fc2eb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73507d8f23d1620958f7cd7a20758473b79329ae69e5473c2f9fc6e4fc2eb21->enter($__internal_b73507d8f23d1620958f7cd7a20758473b79329ae69e5473c2f9fc6e4fc2eb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_076ebd70af4af954c81beb6ad2386c3bbb4b9dfaad042188bacec6bda585477f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076ebd70af4af954c81beb6ad2386c3bbb4b9dfaad042188bacec6bda585477f->enter($__internal_076ebd70af4af954c81beb6ad2386c3bbb4b9dfaad042188bacec6bda585477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_076ebd70af4af954c81beb6ad2386c3bbb4b9dfaad042188bacec6bda585477f->leave($__internal_076ebd70af4af954c81beb6ad2386c3bbb4b9dfaad042188bacec6bda585477f_prof);

        
        $__internal_b73507d8f23d1620958f7cd7a20758473b79329ae69e5473c2f9fc6e4fc2eb21->leave($__internal_b73507d8f23d1620958f7cd7a20758473b79329ae69e5473c2f9fc6e4fc2eb21_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bec749a9d2ecc28624e01fbeaf4baf8ca7c27642ad2dd0ff49429f2f7eeebbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec749a9d2ecc28624e01fbeaf4baf8ca7c27642ad2dd0ff49429f2f7eeebbef->enter($__internal_bec749a9d2ecc28624e01fbeaf4baf8ca7c27642ad2dd0ff49429f2f7eeebbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_30b8ec009a3ce5b9b3eea4561d481067f315692c6c53fb7e152b28f46f01b84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b8ec009a3ce5b9b3eea4561d481067f315692c6c53fb7e152b28f46f01b84f->enter($__internal_30b8ec009a3ce5b9b3eea4561d481067f315692c6c53fb7e152b28f46f01b84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30b8ec009a3ce5b9b3eea4561d481067f315692c6c53fb7e152b28f46f01b84f->leave($__internal_30b8ec009a3ce5b9b3eea4561d481067f315692c6c53fb7e152b28f46f01b84f_prof);

        
        $__internal_bec749a9d2ecc28624e01fbeaf4baf8ca7c27642ad2dd0ff49429f2f7eeebbef->leave($__internal_bec749a9d2ecc28624e01fbeaf4baf8ca7c27642ad2dd0ff49429f2f7eeebbef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 56,  163 => 52,  146 => 6,  128 => 5,  116 => 57,  114 => 56,  107 => 52,  99 => 46,  93 => 43,  90 => 42,  88 => 41,  80 => 36,  74 => 33,  68 => 30,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <script src=\"/js/jquery/jquery.js\" type=\"text/javascript\"></script>
    <script src=\"/js/bootstrap.bundle.js\" type=\"text/javascript\"></script>
    <link href=\"/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/css/simple-sidebar.css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>
<body>
    <div id=\"wrapper\" class=\"toggled\">
        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"#\">
                        Sysvet
                    </a>
                </li>
                <li>
                    <a href=\"/\">Home</a>
                </li>
                <li>
                    <a href=\"#\">Usuários</a>
                </li>
                <li>
                    <a href=\"{{ path(\"cliente_index\") }}\">Clientes</a>
                </li>
                <li>
                    <a href=\"{{ path(\"servico_index\") }}\">Serviços</a>
                </li>
                <li>
                    <a href=\"{{ path(\"agendamento_index\") }}\">Agendamentos</a>
                </li>
                <li>
                    <a href=\"#\">Relatórios</a>
                </li>
                {% if app.user != null %}
                <li>
                    <a href=\"/logout\">{{ app.user.nome }} (Logout)</a>
                </li>
                {% endif %}
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
        {% block body %}{% endblock %}  
    </div>
    <!-- /#page-content-wrapper -->
</div>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/base.html.twig");
    }
}
