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

/* themes/lotr/templates/navigation/menu--account.html.twig */
class __TwigTemplate_e7cb40b2a37522e3e569430f13caf913 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "\t";
            $macros["menus"] = $this;
            // line 31
            yield "\t";
            if (($context["items"] ?? null)) {
                // line 32
                yield "\t\t";
                // line 39
                yield "\t\t<div class=\"bg-darkred text-white\" data-bs-theme=\"dark\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul class=\"h-list\" data-cs-link=\"darkred\">
\t\t\t\t\t";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    yield "\t\t\t\t\t\t";
                    // line 53
                    yield "\t\t\t\t\t\t<li class=\"h-list-item\">
\t\t\t\t\t\t\t";
                    // line 54
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 54), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54)), "html", null, true);
                    yield "
\t\t\t\t\t\t\t";
                    // line 55
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55)) {
                        // line 56
                        yield "\t\t\t\t\t\t\t\t";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 56, $context, $this->getSourceContext()));
                        yield "
\t\t\t\t\t\t\t";
                    }
                    // line 58
                    yield "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    // line 67
                    yield "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lotr/templates/navigation/menu--account.html.twig";
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
        return array (  115 => 68,  109 => 67,  106 => 58,  100 => 56,  98 => 55,  94 => 54,  91 => 53,  89 => 43,  85 => 42,  80 => 39,  78 => 32,  75 => 31,  72 => 30,  58 => 29,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link URL, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/3.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
\t{% import _self as menus %}
\t{% if items %}
\t\t{#
\t\t\t\t    {% if menu_level == 0 %}
\t\t\t\t      <ul{{ attributes.addClass('menu') }}>
\t\t\t\t    {% else %}
\t\t\t\t      <ul class=\"menu\">
\t\t\t\t    {% endif %}
\t\t\t\t  #}
\t\t<div class=\"bg-darkred text-white\" data-bs-theme=\"dark\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul class=\"h-list\" data-cs-link=\"darkred\">
\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t      {%
\t\t\t\t\t\t\t\t\t\t\t        set classes = [
\t\t\t\t\t\t\t\t\t\t\t          'menu-item',
\t\t\t\t\t\t\t\t\t\t\t          item.is_expanded ? 'menu-item--expanded',
\t\t\t\t\t\t\t\t\t\t\t          item.is_collapsed ? 'menu-item--collapsed',
\t\t\t\t\t\t\t\t\t\t\t          item.in_active_trail ? 'menu-item--active-trail',
\t\t\t\t\t\t\t\t\t\t\t        ]
\t\t\t\t\t\t\t\t\t\t\t      %}
\t\t\t\t\t\t\t\t\t\t\t    #}
\t\t\t\t\t\t<li class=\"h-list-item\">
\t\t\t\t\t\t\t{{ link(item.title, item.url) }}
\t\t\t\t\t\t\t{% if item.below %}
\t\t\t\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{#
\t\t\t\t\t\t\t\t\t\t\t      <li{{ item.attributes.addClass(classes) }}>
\t\t\t\t\t\t\t\t\t\t\t        {{ link(item.title, item.url) }}
\t\t\t\t\t\t\t\t\t\t\t        {% if item.below %}
\t\t\t\t\t\t\t\t\t\t\t          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t\t\t\t\t\t\t        {% endif %}
\t\t\t\t\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t\t\t\t    #}
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t{% endif %}
{% endmacro %}
", "themes/lotr/templates/navigation/menu--account.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\themes\\lotr\\templates\\navigation\\menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 42);
        static $filters = array("escape" => 54);
        static $functions = array("link" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link'],
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
