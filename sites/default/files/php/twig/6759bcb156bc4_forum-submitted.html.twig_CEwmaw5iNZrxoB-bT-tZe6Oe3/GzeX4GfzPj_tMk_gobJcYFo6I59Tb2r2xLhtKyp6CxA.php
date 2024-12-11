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

/* core/themes/stable9/templates/user/forum-submitted.html.twig */
class __TwigTemplate_8f317bc1347109071b6931c79ec9115b extends Template
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
        // line 17
        if (($context["time"] ?? null)) {
            // line 18
            yield "  <span>";
            yield t("By @author @time ago", array("@author" => ($context["author"] ?? null), "@time" => ($context["time"] ?? null), ));
            yield "</span>
";
        } else {
            // line 20
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("n/a"));
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["time", "author"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/stable9/templates/user/forum-submitted.html.twig";
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
        return array (  52 => 20,  46 => 18,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a forum post submission string.
 *
 * The submission string indicates when and by whom a topic was submitted.
 *
 * Available variables:
 * - author: The author of the post.
 * - time: How long ago the post was created.
 * - topic: An object with the raw data of the post. Potentially unsafe. Be
 *   sure to clean this data before printing.
 *
 * @see template_preprocess_forum_submitted()
 */
#}
{% if time %}
  <span>{% trans %}By {{ author }} {{ time }} ago{% endtrans %}</span>
{% else %}
  {{ 'n/a'|t }}
{% endif %}
", "core/themes/stable9/templates/user/forum-submitted.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\core\\themes\\stable9\\templates\\user\\forum-submitted.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "trans" => 18);
        static $filters = array("escape" => 18, "t" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
