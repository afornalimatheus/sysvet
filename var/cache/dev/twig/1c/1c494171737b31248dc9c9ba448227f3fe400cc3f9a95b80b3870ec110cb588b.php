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
        $__internal_a6367cf3b4983c61374e02a4065e4ee72cfa4454028019cc4b242ef7b58b17d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6367cf3b4983c61374e02a4065e4ee72cfa4454028019cc4b242ef7b58b17d5->enter($__internal_a6367cf3b4983c61374e02a4065e4ee72cfa4454028019cc4b242ef7b58b17d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_26fb05853863fd619ca11ccd507c581ddec88f0bcca1052835b4b53b932fe757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fb05853863fd619ca11ccd507c581ddec88f0bcca1052835b4b53b932fe757->enter($__internal_26fb05853863fd619ca11ccd507c581ddec88f0bcca1052835b4b53b932fe757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        echo "  
    </div>
    <!-- /#page-content-wrapper -->
</div>
";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "</body>
</html>
";
        
        $__internal_a6367cf3b4983c61374e02a4065e4ee72cfa4454028019cc4b242ef7b58b17d5->leave($__internal_a6367cf3b4983c61374e02a4065e4ee72cfa4454028019cc4b242ef7b58b17d5_prof);

        
        $__internal_26fb05853863fd619ca11ccd507c581ddec88f0bcca1052835b4b53b932fe757->leave($__internal_26fb05853863fd619ca11ccd507c581ddec88f0bcca1052835b4b53b932fe757_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_407c3bfecee2492ac2ccf4f74c58f6efc4dc529ebce38a01f5a7c1c9c895ff4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407c3bfecee2492ac2ccf4f74c58f6efc4dc529ebce38a01f5a7c1c9c895ff4c->enter($__internal_407c3bfecee2492ac2ccf4f74c58f6efc4dc529ebce38a01f5a7c1c9c895ff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76876247a7d3dd3f5f5fb92c180159c378581106ac283515badef08dc4518caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76876247a7d3dd3f5f5fb92c180159c378581106ac283515badef08dc4518caa->enter($__internal_76876247a7d3dd3f5f5fb92c180159c378581106ac283515badef08dc4518caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_76876247a7d3dd3f5f5fb92c180159c378581106ac283515badef08dc4518caa->leave($__internal_76876247a7d3dd3f5f5fb92c180159c378581106ac283515badef08dc4518caa_prof);

        
        $__internal_407c3bfecee2492ac2ccf4f74c58f6efc4dc529ebce38a01f5a7c1c9c895ff4c->leave($__internal_407c3bfecee2492ac2ccf4f74c58f6efc4dc529ebce38a01f5a7c1c9c895ff4c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1824f9cf632957166d494f9762ebf0de2a4fcea8f917c251b6b4950a9412bd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1824f9cf632957166d494f9762ebf0de2a4fcea8f917c251b6b4950a9412bd35->enter($__internal_1824f9cf632957166d494f9762ebf0de2a4fcea8f917c251b6b4950a9412bd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b22baa1769bc0d1cc580e5c55eceeaa986d2e440e44ba5f6a3eedf87dae1984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b22baa1769bc0d1cc580e5c55eceeaa986d2e440e44ba5f6a3eedf87dae1984->enter($__internal_9b22baa1769bc0d1cc580e5c55eceeaa986d2e440e44ba5f6a3eedf87dae1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b22baa1769bc0d1cc580e5c55eceeaa986d2e440e44ba5f6a3eedf87dae1984->leave($__internal_9b22baa1769bc0d1cc580e5c55eceeaa986d2e440e44ba5f6a3eedf87dae1984_prof);

        
        $__internal_1824f9cf632957166d494f9762ebf0de2a4fcea8f917c251b6b4950a9412bd35->leave($__internal_1824f9cf632957166d494f9762ebf0de2a4fcea8f917c251b6b4950a9412bd35_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd0c634d1130be32795dc50f8678b1a2cad730c570d6b5a7851566e5072bc3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0c634d1130be32795dc50f8678b1a2cad730c570d6b5a7851566e5072bc3d1->enter($__internal_cd0c634d1130be32795dc50f8678b1a2cad730c570d6b5a7851566e5072bc3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c285695097135bb349640dee4b25d4cb7f62c6d3f80ff6b7d83fe5be84a8dd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c285695097135bb349640dee4b25d4cb7f62c6d3f80ff6b7d83fe5be84a8dd5b->enter($__internal_c285695097135bb349640dee4b25d4cb7f62c6d3f80ff6b7d83fe5be84a8dd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c285695097135bb349640dee4b25d4cb7f62c6d3f80ff6b7d83fe5be84a8dd5b->leave($__internal_c285695097135bb349640dee4b25d4cb7f62c6d3f80ff6b7d83fe5be84a8dd5b_prof);

        
        $__internal_cd0c634d1130be32795dc50f8678b1a2cad730c570d6b5a7851566e5072bc3d1->leave($__internal_cd0c634d1130be32795dc50f8678b1a2cad730c570d6b5a7851566e5072bc3d1_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d82821edd41db13f2c32d2de770524ccf6f5e2cfe208e281bf95f98d911a88dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82821edd41db13f2c32d2de770524ccf6f5e2cfe208e281bf95f98d911a88dd->enter($__internal_d82821edd41db13f2c32d2de770524ccf6f5e2cfe208e281bf95f98d911a88dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b5ea2e1be7bbfaf8532044c98dee700ea1b3d768dda333b665173404d492a7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ea2e1be7bbfaf8532044c98dee700ea1b3d768dda333b665173404d492a7a9->enter($__internal_b5ea2e1be7bbfaf8532044c98dee700ea1b3d768dda333b665173404d492a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5ea2e1be7bbfaf8532044c98dee700ea1b3d768dda333b665173404d492a7a9->leave($__internal_b5ea2e1be7bbfaf8532044c98dee700ea1b3d768dda333b665173404d492a7a9_prof);

        
        $__internal_d82821edd41db13f2c32d2de770524ccf6f5e2cfe208e281bf95f98d911a88dd->leave($__internal_d82821edd41db13f2c32d2de770524ccf6f5e2cfe208e281bf95f98d911a88dd_prof);

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
        return array (  167 => 51,  150 => 47,  133 => 6,  115 => 5,  103 => 52,  101 => 51,  94 => 47,  80 => 36,  74 => 33,  68 => 30,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
