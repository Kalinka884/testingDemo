<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee6ff6a7fcc70e08b3b681f24e5a3ca26a2733eb42c5b7c1c6937673326439a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89d211fb40d84e8c3e2cecdc33a662a3d4da983b45866eb3c1deca7c3815b018 = $this->env->getExtension("native_profiler");
        $__internal_89d211fb40d84e8c3e2cecdc33a662a3d4da983b45866eb3c1deca7c3815b018->enter($__internal_89d211fb40d84e8c3e2cecdc33a662a3d4da983b45866eb3c1deca7c3815b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d211fb40d84e8c3e2cecdc33a662a3d4da983b45866eb3c1deca7c3815b018->leave($__internal_89d211fb40d84e8c3e2cecdc33a662a3d4da983b45866eb3c1deca7c3815b018_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73b65e3c438cb8aeb918712823ec7d1e3e6c9a91b96923c636178cfa5028c34a = $this->env->getExtension("native_profiler");
        $__internal_73b65e3c438cb8aeb918712823ec7d1e3e6c9a91b96923c636178cfa5028c34a->enter($__internal_73b65e3c438cb8aeb918712823ec7d1e3e6c9a91b96923c636178cfa5028c34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73b65e3c438cb8aeb918712823ec7d1e3e6c9a91b96923c636178cfa5028c34a->leave($__internal_73b65e3c438cb8aeb918712823ec7d1e3e6c9a91b96923c636178cfa5028c34a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb6dda1088ac56f7d924a5e7de908d83d024a5dc305fce519a880daefd442ed8 = $this->env->getExtension("native_profiler");
        $__internal_fb6dda1088ac56f7d924a5e7de908d83d024a5dc305fce519a880daefd442ed8->enter($__internal_fb6dda1088ac56f7d924a5e7de908d83d024a5dc305fce519a880daefd442ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb6dda1088ac56f7d924a5e7de908d83d024a5dc305fce519a880daefd442ed8->leave($__internal_fb6dda1088ac56f7d924a5e7de908d83d024a5dc305fce519a880daefd442ed8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_000b8e0f3871642bd9b75cdf37f59eaa8ab35dfaeb2a810710fbafdf38ef2f3f = $this->env->getExtension("native_profiler");
        $__internal_000b8e0f3871642bd9b75cdf37f59eaa8ab35dfaeb2a810710fbafdf38ef2f3f->enter($__internal_000b8e0f3871642bd9b75cdf37f59eaa8ab35dfaeb2a810710fbafdf38ef2f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_000b8e0f3871642bd9b75cdf37f59eaa8ab35dfaeb2a810710fbafdf38ef2f3f->leave($__internal_000b8e0f3871642bd9b75cdf37f59eaa8ab35dfaeb2a810710fbafdf38ef2f3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
