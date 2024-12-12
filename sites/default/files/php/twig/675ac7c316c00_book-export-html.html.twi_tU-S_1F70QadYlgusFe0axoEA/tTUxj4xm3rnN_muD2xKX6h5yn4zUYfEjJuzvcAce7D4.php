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

/* core/themes/stable9/templates/layout/book-export-html.html.twig */
class __TwigTemplate_571768157bb2d19f4a2c7c9039d4c081 extends Template
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
        // line 19
        yield "<!DOCTYPE html>
<html";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head>
    <title>";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</title>
    ";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "head", [], "any", false, false, true, 23), "html", null, true);
        yield "
    <base href=\"";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_url"] ?? null), "html", null, true);
        yield "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/core/themes/stable9/css/core/print.css\" />
  </head>
  <body>
    ";
        // line 36
        yield "
  ";
        // line 37
        if ((($context["depth"] ?? null) > 1)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (($context["depth"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                yield "    <div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 40
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["contents"] ?? null), "html", null, true);
        yield "
  ";
        // line 41
        if ((($context["depth"] ?? null) > 1)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (($context["depth"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 42
                yield "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 44
        yield "  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["html_attributes", "title", "page", "base_url", "depth", "contents"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/stable9/templates/layout/book-export-html.html.twig";
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
        return array (  101 => 44,  93 => 42,  88 => 41,  83 => 40,  75 => 38,  70 => 37,  67 => 36,  60 => 24,  56 => 23,  52 => 22,  47 => 20,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for printed version of book outline.
 *
 * Available variables:
 * - title: Top level node title.
 * - head: Header tags.
 * - language: Language object.
 * - language_rtl: A flag indicating whether the current display language is a
 *   right to left language.
 * - base_url: URL to the home page.
 * - contents: Nodes within the current outline rendered through
 *   book-node-export-html.html.twig.
 *
 * @see template_preprocess_book_export_html()
 */
#}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <title>{{ title }}</title>
    {{ page.head }}
    <base href=\"{{ base_url }}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/core/themes/stable9/css/core/print.css\" />
  </head>
  <body>
    {#
      The given node is embedded to its absolute depth in a top level section.
      For example, a child node with depth 2 in the hierarchy is contained in
      (otherwise empty) div elements corresponding to depth 0 and depth 1. This
      is intended to support WYSIWYG output - e.g., level 3 sections always look
      like level 3 sections, no matter their depth relative to the node selected
      to be exported as printer-friendly HTML.
    #}

  {% if depth > 1 %}{% for i in 1..depth - 1 %}
    <div>
  {% endfor %}{% endif %}
  {{ contents }}
  {% if depth > 1 %}{% for i in 1..depth - 1 %}
    </div>
  {% endfor %}{% endif %}
  </body>
</html>
", "core/themes/stable9/templates/layout/book-export-html.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\core\\themes\\stable9\\templates\\layout\\book-export-html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "for" => 37);
        static $filters = array("escape" => 20);
        static $functions = array("range" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['range'],
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
