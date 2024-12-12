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

/* themes/lotr/templates/navigation/book-navigation.html.twig */
class __TwigTemplate_dc3dd99382a74e205e901c1ab92400b2 extends Template
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
        // line 31
        if ((($context["tree"] ?? null) || ($context["has_links"] ?? null))) {
            // line 32
            yield "  <nav role=\"navigation\" aria-labelledby=\"book-label-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["book_id"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tree"] ?? null), "html", null, true);
            yield "
    ";
            // line 34
            if (($context["has_links"] ?? null)) {
                // line 35
                yield "      <h2 class=\"h5\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Book traversal links for"));
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["book_title"] ?? null), "html", null, true);
                yield "</h2>
      <ul>
      ";
                // line 37
                if (($context["prev_url"] ?? null)) {
                    // line 38
                    yield "        <li>
          <a href=\"";
                    // line 39
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prev_url"] ?? null), "html", null, true);
                    yield "\" rel=\"prev\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                    yield "\"><b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("‹"));
                    yield "</b> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prev_title"] ?? null), "html", null, true);
                    yield "</a>
        </li>
      ";
                }
                // line 42
                yield "      ";
                if (($context["parent_url"] ?? null)) {
                    // line 43
                    yield "        <li>
          <a href=\"";
                    // line 44
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["parent_url"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to parent page"));
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Up"));
                    yield "</a>
        </li>
      ";
                }
                // line 47
                yield "      ";
                if (($context["next_url"] ?? null)) {
                    // line 48
                    yield "        <li>
          <a href=\"";
                    // line 49
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["next_url"] ?? null), "html", null, true);
                    yield "\" rel=\"next\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["next_title"] ?? null), "html", null, true);
                    yield " <b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("›"));
                    yield "</b></a>
        </li>
      ";
                }
                // line 52
                yield "    </ul>
    ";
            }
            // line 54
            yield "  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["tree", "has_links", "book_id", "book_title", "prev_url", "prev_title", "parent_url", "next_url", "next_title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/lotr/templates/navigation/book-navigation.html.twig";
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
        return array (  120 => 54,  116 => 52,  104 => 49,  101 => 48,  98 => 47,  88 => 44,  85 => 43,  82 => 42,  70 => 39,  67 => 38,  65 => 37,  57 => 35,  55 => 34,  51 => 33,  46 => 32,  44 => 31,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to navigate books.
 *
 * Presented under nodes that are a part of book outlines.
 *
 * Available variables:
 * - tree: The immediate children of the current node rendered as an unordered
 *   list.
 * - current_depth: Depth of the current node within the book outline. Provided
 *   for context.
 * - prev_url: URL to the previous node.
 * - prev_title: Title of the previous node.
 * - parent_url: URL to the parent node.
 * - parent_title: Title of the parent node. Not printed by default. Provided
 *   as an option.
 * - next_url: URL to the next node.
 * - next_title: Title of the next node.
 * - has_links: Flags TRUE whenever the previous, parent or next data has a
 *   value.
 * - book_id: The book ID of the current outline being viewed. Same as the node
 *   ID containing the entire outline. Provided for context.
 * - book_url: The book/node URL of the current outline being viewed. Provided
 *   as an option. Not used by default.
 * - book_title: The book/node title of the current outline being viewed.
 *
 * @see template_preprocess_book_navigation()
 */
#}
{% if tree or has_links %}
  <nav role=\"navigation\" aria-labelledby=\"book-label-{{ book_id }}\">
    {{ tree }}
    {% if has_links %}
      <h2 class=\"h5\">{{ 'Book traversal links for'|t }} {{ book_title }}</h2>
      <ul>
      {% if prev_url %}
        <li>
          <a href=\"{{ prev_url }}\" rel=\"prev\" title=\"{{ 'Go to previous page'|t }}\"><b>{{ '‹'|t }}</b> {{ prev_title }}</a>
        </li>
      {% endif %}
      {% if parent_url %}
        <li>
          <a href=\"{{ parent_url }}\" title=\"{{ 'Go to parent page'|t }}\">{{ 'Up'|t }}</a>
        </li>
      {% endif %}
      {% if next_url %}
        <li>
          <a href=\"{{ next_url }}\" rel=\"next\" title=\"{{ 'Go to next page'|t }}\">{{ next_title }} <b>{{ '›'|t }}</b></a>
        </li>
      {% endif %}
    </ul>
    {% endif %}
  </nav>
{% endif %}
", "themes/lotr/templates/navigation/book-navigation.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\themes\\lotr\\templates\\navigation\\book-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31);
        static $filters = array("escape" => 32, "t" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                [],
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
