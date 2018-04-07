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
        $__internal_c74ac4d36584980d4b221c0a7c6c620654aa883084fab2643cc011ae65fd5085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74ac4d36584980d4b221c0a7c6c620654aa883084fab2643cc011ae65fd5085->enter($__internal_c74ac4d36584980d4b221c0a7c6c620654aa883084fab2643cc011ae65fd5085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_30bcf1868578dcab82caf6284edbec58753ffa72c084c1fb0d12c48c2ecefadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bcf1868578dcab82caf6284edbec58753ffa72c084c1fb0d12c48c2ecefadc->enter($__internal_30bcf1868578dcab82caf6284edbec58753ffa72c084c1fb0d12c48c2ecefadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
                        SysVet
                    </a>
                </li>
                <li>
                    <a href=\"/\">Home</a>
                </li>
                ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                <li>
                    <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
            echo "\">Usuários</a>
                </li>
                ";
        }
        // line 32
        echo "                <li>
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Clientes</a>
                </li>
                <li>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servico_index");
        echo "\">Serviços</a>
                </li>
                <li>
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agendamento_index");
        echo "\">Agendamentos</a>
                </li>
                <li>
                    <a href=\"#\">Relatórios</a>
                </li>
                ";
        // line 44
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 45
            echo "                <li>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutUrl(), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nome", array()), "html", null, true);
            echo " (Logout)</a>
                </li>
                ";
        }
        // line 49
        echo "                
            </ul>
        </div>
                
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
            ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        </div>
        <!-- /#page-content-wrapper -->

    </div>
        
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>";
        
        $__internal_c74ac4d36584980d4b221c0a7c6c620654aa883084fab2643cc011ae65fd5085->leave($__internal_c74ac4d36584980d4b221c0a7c6c620654aa883084fab2643cc011ae65fd5085_prof);

        
        $__internal_30bcf1868578dcab82caf6284edbec58753ffa72c084c1fb0d12c48c2ecefadc->leave($__internal_30bcf1868578dcab82caf6284edbec58753ffa72c084c1fb0d12c48c2ecefadc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62df98ae6302ecb49c20bd52a5a37c90e41d488c96f17d426b7d99bbe72333f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62df98ae6302ecb49c20bd52a5a37c90e41d488c96f17d426b7d99bbe72333f3->enter($__internal_62df98ae6302ecb49c20bd52a5a37c90e41d488c96f17d426b7d99bbe72333f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3bce1b82eb2c61156a8b71893e34e5a620cb8fe9ee2e4d33f7ae8294cf30117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bce1b82eb2c61156a8b71893e34e5a620cb8fe9ee2e4d33f7ae8294cf30117->enter($__internal_a3bce1b82eb2c61156a8b71893e34e5a620cb8fe9ee2e4d33f7ae8294cf30117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3bce1b82eb2c61156a8b71893e34e5a620cb8fe9ee2e4d33f7ae8294cf30117->leave($__internal_a3bce1b82eb2c61156a8b71893e34e5a620cb8fe9ee2e4d33f7ae8294cf30117_prof);

        
        $__internal_62df98ae6302ecb49c20bd52a5a37c90e41d488c96f17d426b7d99bbe72333f3->leave($__internal_62df98ae6302ecb49c20bd52a5a37c90e41d488c96f17d426b7d99bbe72333f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7d3fee8ea8922df256b3069a46ba73a507679d3bcadfc2a560b3f312d9e9fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d3fee8ea8922df256b3069a46ba73a507679d3bcadfc2a560b3f312d9e9fbd->enter($__internal_a7d3fee8ea8922df256b3069a46ba73a507679d3bcadfc2a560b3f312d9e9fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e2f51f98a6b3a2218ebc3394102dd926acec842c69e9e18d034081566c00d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2f51f98a6b3a2218ebc3394102dd926acec842c69e9e18d034081566c00d31->enter($__internal_2e2f51f98a6b3a2218ebc3394102dd926acec842c69e9e18d034081566c00d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e2f51f98a6b3a2218ebc3394102dd926acec842c69e9e18d034081566c00d31->leave($__internal_2e2f51f98a6b3a2218ebc3394102dd926acec842c69e9e18d034081566c00d31_prof);

        
        $__internal_a7d3fee8ea8922df256b3069a46ba73a507679d3bcadfc2a560b3f312d9e9fbd->leave($__internal_a7d3fee8ea8922df256b3069a46ba73a507679d3bcadfc2a560b3f312d9e9fbd_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_be4da65740d86f60946917696779356e89f7e7401ff6c8df0124e31bcdbf064f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4da65740d86f60946917696779356e89f7e7401ff6c8df0124e31bcdbf064f->enter($__internal_be4da65740d86f60946917696779356e89f7e7401ff6c8df0124e31bcdbf064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e56e9bdf6f3615d834339de284fe31a1016527ad24a22f14900bfaf25ef44083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56e9bdf6f3615d834339de284fe31a1016527ad24a22f14900bfaf25ef44083->enter($__internal_e56e9bdf6f3615d834339de284fe31a1016527ad24a22f14900bfaf25ef44083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e56e9bdf6f3615d834339de284fe31a1016527ad24a22f14900bfaf25ef44083->leave($__internal_e56e9bdf6f3615d834339de284fe31a1016527ad24a22f14900bfaf25ef44083_prof);

        
        $__internal_be4da65740d86f60946917696779356e89f7e7401ff6c8df0124e31bcdbf064f->leave($__internal_be4da65740d86f60946917696779356e89f7e7401ff6c8df0124e31bcdbf064f_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2381dd7c713df111c9e13434839f598ffba499da1c6252ec98ab6a15daa2cd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2381dd7c713df111c9e13434839f598ffba499da1c6252ec98ab6a15daa2cd5d->enter($__internal_2381dd7c713df111c9e13434839f598ffba499da1c6252ec98ab6a15daa2cd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f95cd492bbd30d5192c5ce9079fc2b3ddf168261b2c296067940558c3fb0aa17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95cd492bbd30d5192c5ce9079fc2b3ddf168261b2c296067940558c3fb0aa17->enter($__internal_f95cd492bbd30d5192c5ce9079fc2b3ddf168261b2c296067940558c3fb0aa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f95cd492bbd30d5192c5ce9079fc2b3ddf168261b2c296067940558c3fb0aa17->leave($__internal_f95cd492bbd30d5192c5ce9079fc2b3ddf168261b2c296067940558c3fb0aa17_prof);

        
        $__internal_2381dd7c713df111c9e13434839f598ffba499da1c6252ec98ab6a15daa2cd5d->leave($__internal_2381dd7c713df111c9e13434839f598ffba499da1c6252ec98ab6a15daa2cd5d_prof);

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
        return array (  196 => 63,  179 => 57,  162 => 6,  144 => 5,  133 => 64,  131 => 63,  124 => 58,  122 => 57,  112 => 49,  104 => 46,  101 => 45,  99 => 44,  91 => 39,  85 => 36,  79 => 33,  76 => 32,  70 => 29,  67 => 28,  65 => 27,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                        SysVet
                    </a>
                </li>
                <li>
                    <a href=\"/\">Home</a>
                </li>
                {% if is_granted(\"ROLE_ADMIN\") %}
                <li>
                    <a href=\"{{ path(\"usuario_index\") }}\">Usuários</a>
                </li>
                {% endif %}
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
                    <a href=\"{{ logout_url() }}\"> {{ app.user.nome }} (Logout)</a>
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
</html>", "base.html.twig", "/home/aluno/matheus-php2/sysvet/app/Resources/views/base.html.twig");
    }
}
