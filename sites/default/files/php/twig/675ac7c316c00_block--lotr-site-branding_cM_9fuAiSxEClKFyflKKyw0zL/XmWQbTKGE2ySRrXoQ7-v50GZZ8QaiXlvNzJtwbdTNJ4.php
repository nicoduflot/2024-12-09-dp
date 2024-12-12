<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/lotr/templates/block/block--lotr-site-branding.html.twig */
class __TwigTemplate_5ab4031c998fc4702b7908ff1dc2e960 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/lotr/templates/block/block--lotr-site-branding.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 19
        if (($context["site_logo"] ?? null)) {
            // line 20
            yield "\t\t\t\t<div class=\"col\">
\t\t\t\t\t<a href=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\" class=\"site-logo\">
\t\t\t\t\t\t<img src=\"";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" fetchpriority=\"high\" width=\"100\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        yield "\t\t\t";
        if (($context["site_name"] ?? null)) {
            // line 27
            yield "\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"site-name h1 text-end\">
\t\t\t\t\t\t<a href=\"";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 33
        yield "\t\t\t";
        if (($context["site_slogan"] ?? null)) {
            // line 34
            yield "\t\t\t\t<div class=\"site-slogan\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
            yield "</div>
\t\t\t";
        }
        // line 36
        yield "\t\t</div>
\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lotr/templates/block/block--lotr-site-branding.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 36,  102 => 34,  99 => 33,  90 => 29,  86 => 27,  83 => 26,  74 => 22,  70 => 21,  67 => 20,  65 => 19,  61 => 17,  54 => 16,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t{% if site_logo %}
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"site-logo\">
\t\t\t\t\t\t<img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" fetchpriority=\"high\" width=\"100\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if site_name %}
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"site-name h1 text-end\">
\t\t\t\t\t\t<a href=\"{{ path('<front>') }}\" rel=\"home\">{{ site_name }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if site_slogan %}
\t\t\t\t<div class=\"site-slogan\">{{ site_slogan }}</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endblock %}
", "themes/lotr/templates/block/block--lotr-site-branding.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\themes\\lotr\\templates\\block\\block--lotr-site-branding.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 1, "if" => 19);
        static $filters = array("escape" => 22, "t" => 22);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if'],
                ['escape', 't'],
                ['path'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
