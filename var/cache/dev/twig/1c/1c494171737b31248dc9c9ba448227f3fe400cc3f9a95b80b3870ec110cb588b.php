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
        $__internal_84be4f471a118a2529cd076bdf5d502628bcb4184374b0a9769e52bea049f863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84be4f471a118a2529cd076bdf5d502628bcb4184374b0a9769e52bea049f863->enter($__internal_84be4f471a118a2529cd076bdf5d502628bcb4184374b0a9769e52bea049f863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9aa1a12d8c37e1c886adabe44b22e18fe1ca0215c3cb89aeee843b7c790e3ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa1a12d8c37e1c886adabe44b22e18fe1ca0215c3cb89aeee843b7c790e3ff1->enter($__internal_9aa1a12d8c37e1c886adabe44b22e18fe1ca0215c3cb89aeee843b7c790e3ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Usuários</a>
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
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutUrl(), "html", null, true);
            echo "\">";
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
        
        $__internal_84be4f471a118a2529cd076bdf5d502628bcb4184374b0a9769e52bea049f863->leave($__internal_84be4f471a118a2529cd076bdf5d502628bcb4184374b0a9769e52bea049f863_prof);

        
        $__internal_9aa1a12d8c37e1c886adabe44b22e18fe1ca0215c3cb89aeee843b7c790e3ff1->leave($__internal_9aa1a12d8c37e1c886adabe44b22e18fe1ca0215c3cb89aeee843b7c790e3ff1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d00e2ab857f2d3a8f9966f76f4241128e393799671b0271ffaa3239ad987ac6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00e2ab857f2d3a8f9966f76f4241128e393799671b0271ffaa3239ad987ac6b->enter($__internal_d00e2ab857f2d3a8f9966f76f4241128e393799671b0271ffaa3239ad987ac6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_237d4a7fd7a3a1b83c32138b1be85dde918b7d3d481ecc5172e0edbcbdac86c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237d4a7fd7a3a1b83c32138b1be85dde918b7d3d481ecc5172e0edbcbdac86c0->enter($__internal_237d4a7fd7a3a1b83c32138b1be85dde918b7d3d481ecc5172e0edbcbdac86c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_237d4a7fd7a3a1b83c32138b1be85dde918b7d3d481ecc5172e0edbcbdac86c0->leave($__internal_237d4a7fd7a3a1b83c32138b1be85dde918b7d3d481ecc5172e0edbcbdac86c0_prof);

        
        $__internal_d00e2ab857f2d3a8f9966f76f4241128e393799671b0271ffaa3239ad987ac6b->leave($__internal_d00e2ab857f2d3a8f9966f76f4241128e393799671b0271ffaa3239ad987ac6b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96431fb21ff660347c0dfac9cea18c4bb1041e7b3da10dbafac5065846dbba7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96431fb21ff660347c0dfac9cea18c4bb1041e7b3da10dbafac5065846dbba7e->enter($__internal_96431fb21ff660347c0dfac9cea18c4bb1041e7b3da10dbafac5065846dbba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83e934ddccbb8c4a287a202d6f3e441103244230c069fed3a3e2e0e048f40eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e934ddccbb8c4a287a202d6f3e441103244230c069fed3a3e2e0e048f40eda->enter($__internal_83e934ddccbb8c4a287a202d6f3e441103244230c069fed3a3e2e0e048f40eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83e934ddccbb8c4a287a202d6f3e441103244230c069fed3a3e2e0e048f40eda->leave($__internal_83e934ddccbb8c4a287a202d6f3e441103244230c069fed3a3e2e0e048f40eda_prof);

        
        $__internal_96431fb21ff660347c0dfac9cea18c4bb1041e7b3da10dbafac5065846dbba7e->leave($__internal_96431fb21ff660347c0dfac9cea18c4bb1041e7b3da10dbafac5065846dbba7e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_4df8fda9af141e9010d95fc340de65e7bac44205896a8e8765fffac9144b39d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df8fda9af141e9010d95fc340de65e7bac44205896a8e8765fffac9144b39d6->enter($__internal_4df8fda9af141e9010d95fc340de65e7bac44205896a8e8765fffac9144b39d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcf564e12d7c7c7667ebfb36a5ee5deed78bea5805b60c55f5a09d4f552820ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf564e12d7c7c7667ebfb36a5ee5deed78bea5805b60c55f5a09d4f552820ff->enter($__internal_dcf564e12d7c7c7667ebfb36a5ee5deed78bea5805b60c55f5a09d4f552820ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dcf564e12d7c7c7667ebfb36a5ee5deed78bea5805b60c55f5a09d4f552820ff->leave($__internal_dcf564e12d7c7c7667ebfb36a5ee5deed78bea5805b60c55f5a09d4f552820ff_prof);

        
        $__internal_4df8fda9af141e9010d95fc340de65e7bac44205896a8e8765fffac9144b39d6->leave($__internal_4df8fda9af141e9010d95fc340de65e7bac44205896a8e8765fffac9144b39d6_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e7ee9daecb5457f19bc3fe92ddec515490b556c6df1c2f2cc38759b86a913ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7ee9daecb5457f19bc3fe92ddec515490b556c6df1c2f2cc38759b86a913ea->enter($__internal_7e7ee9daecb5457f19bc3fe92ddec515490b556c6df1c2f2cc38759b86a913ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6a29d47d300d415ea4e00baf2dc24791cff20d4bb5e153dbbd2ad99826cb6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a29d47d300d415ea4e00baf2dc24791cff20d4bb5e153dbbd2ad99826cb6c5->enter($__internal_d6a29d47d300d415ea4e00baf2dc24791cff20d4bb5e153dbbd2ad99826cb6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d6a29d47d300d415ea4e00baf2dc24791cff20d4bb5e153dbbd2ad99826cb6c5->leave($__internal_d6a29d47d300d415ea4e00baf2dc24791cff20d4bb5e153dbbd2ad99826cb6c5_prof);

        
        $__internal_7e7ee9daecb5457f19bc3fe92ddec515490b556c6df1c2f2cc38759b86a913ea->leave($__internal_7e7ee9daecb5457f19bc3fe92ddec515490b556c6df1c2f2cc38759b86a913ea_prof);

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
        return array (  185 => 56,  168 => 52,  151 => 6,  133 => 5,  121 => 57,  119 => 56,  112 => 52,  104 => 46,  96 => 43,  93 => 42,  91 => 41,  83 => 36,  77 => 33,  71 => 30,  65 => 27,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                    <a href=\"{{ path(\"usuario_index\") }}\">Usuários</a>
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
                    <a href=\"{{ logout_url() }}\">{{ app.user.nome }} (Logout)</a>
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
