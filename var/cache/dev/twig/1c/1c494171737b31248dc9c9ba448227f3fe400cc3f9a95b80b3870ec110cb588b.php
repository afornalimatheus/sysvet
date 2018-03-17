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
        $__internal_0897dd046623b4ab0c8d6f2afbf14290a777048996e72745ef63b969e66c16fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0897dd046623b4ab0c8d6f2afbf14290a777048996e72745ef63b969e66c16fa->enter($__internal_0897dd046623b4ab0c8d6f2afbf14290a777048996e72745ef63b969e66c16fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d274da6721aae72d59d10e0e22a2f0e59baeba920b05b03c94237d1e65137343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d274da6721aae72d59d10e0e22a2f0e59baeba920b05b03c94237d1e65137343->enter($__internal_d274da6721aae72d59d10e0e22a2f0e59baeba920b05b03c94237d1e65137343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0897dd046623b4ab0c8d6f2afbf14290a777048996e72745ef63b969e66c16fa->leave($__internal_0897dd046623b4ab0c8d6f2afbf14290a777048996e72745ef63b969e66c16fa_prof);

        
        $__internal_d274da6721aae72d59d10e0e22a2f0e59baeba920b05b03c94237d1e65137343->leave($__internal_d274da6721aae72d59d10e0e22a2f0e59baeba920b05b03c94237d1e65137343_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbe4f21c7a44ef1ba3d157e9db439943bdc011e8a7fb85d2f4722410a8481869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe4f21c7a44ef1ba3d157e9db439943bdc011e8a7fb85d2f4722410a8481869->enter($__internal_bbe4f21c7a44ef1ba3d157e9db439943bdc011e8a7fb85d2f4722410a8481869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0443cc68ec2d41145ca56c3d7c178d7ac7f3f0d85f350c69cd8ca554c5d0bc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0443cc68ec2d41145ca56c3d7c178d7ac7f3f0d85f350c69cd8ca554c5d0bc10->enter($__internal_0443cc68ec2d41145ca56c3d7c178d7ac7f3f0d85f350c69cd8ca554c5d0bc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0443cc68ec2d41145ca56c3d7c178d7ac7f3f0d85f350c69cd8ca554c5d0bc10->leave($__internal_0443cc68ec2d41145ca56c3d7c178d7ac7f3f0d85f350c69cd8ca554c5d0bc10_prof);

        
        $__internal_bbe4f21c7a44ef1ba3d157e9db439943bdc011e8a7fb85d2f4722410a8481869->leave($__internal_bbe4f21c7a44ef1ba3d157e9db439943bdc011e8a7fb85d2f4722410a8481869_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdd12e5b1e08b9893f92d831b468cdf43ce96f50e405ee6701a3a2a217696b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd12e5b1e08b9893f92d831b468cdf43ce96f50e405ee6701a3a2a217696b43->enter($__internal_bdd12e5b1e08b9893f92d831b468cdf43ce96f50e405ee6701a3a2a217696b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c9349a33d2ab512ceb402f9fc677032f74db98640170bfb68d0390df9e191ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9349a33d2ab512ceb402f9fc677032f74db98640170bfb68d0390df9e191ea3->enter($__internal_c9349a33d2ab512ceb402f9fc677032f74db98640170bfb68d0390df9e191ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c9349a33d2ab512ceb402f9fc677032f74db98640170bfb68d0390df9e191ea3->leave($__internal_c9349a33d2ab512ceb402f9fc677032f74db98640170bfb68d0390df9e191ea3_prof);

        
        $__internal_bdd12e5b1e08b9893f92d831b468cdf43ce96f50e405ee6701a3a2a217696b43->leave($__internal_bdd12e5b1e08b9893f92d831b468cdf43ce96f50e405ee6701a3a2a217696b43_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a2953ce948b95a72d560b40512b294b87f27bb0c3a510cabc7043cfe0c6d99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2953ce948b95a72d560b40512b294b87f27bb0c3a510cabc7043cfe0c6d99e->enter($__internal_6a2953ce948b95a72d560b40512b294b87f27bb0c3a510cabc7043cfe0c6d99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fde962f2ced22906ff7027192e1349de2e00c67cc6029d3a25f0c7cba44ad34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fde962f2ced22906ff7027192e1349de2e00c67cc6029d3a25f0c7cba44ad34->enter($__internal_7fde962f2ced22906ff7027192e1349de2e00c67cc6029d3a25f0c7cba44ad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7fde962f2ced22906ff7027192e1349de2e00c67cc6029d3a25f0c7cba44ad34->leave($__internal_7fde962f2ced22906ff7027192e1349de2e00c67cc6029d3a25f0c7cba44ad34_prof);

        
        $__internal_6a2953ce948b95a72d560b40512b294b87f27bb0c3a510cabc7043cfe0c6d99e->leave($__internal_6a2953ce948b95a72d560b40512b294b87f27bb0c3a510cabc7043cfe0c6d99e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aed26ae8ae083aebae3d164122962c3e40a703180d617fdfa6c7184aa5f2345e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed26ae8ae083aebae3d164122962c3e40a703180d617fdfa6c7184aa5f2345e->enter($__internal_aed26ae8ae083aebae3d164122962c3e40a703180d617fdfa6c7184aa5f2345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f5de5388585ba14464799f63e7e25b28286cf003fbce9b2e74c981586927d0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5de5388585ba14464799f63e7e25b28286cf003fbce9b2e74c981586927d0b1->enter($__internal_f5de5388585ba14464799f63e7e25b28286cf003fbce9b2e74c981586927d0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f5de5388585ba14464799f63e7e25b28286cf003fbce9b2e74c981586927d0b1->leave($__internal_f5de5388585ba14464799f63e7e25b28286cf003fbce9b2e74c981586927d0b1_prof);

        
        $__internal_aed26ae8ae083aebae3d164122962c3e40a703180d617fdfa6c7184aa5f2345e->leave($__internal_aed26ae8ae083aebae3d164122962c3e40a703180d617fdfa6c7184aa5f2345e_prof);

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
