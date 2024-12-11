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

/* core/themes/stable9/templates/dataset/forum-list.html.twig */
class __TwigTemplate_2acdae8be8a9970024d42db516b944b1 extends Template
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
        // line 33
        yield "<table>
  <thead>
    <tr>
      <th>";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forum"));
        yield "</th>
      <th>";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Topics"));
        yield "</th>
      <th>";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Posts"));
        yield "</th>
      <th>";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last post"));
        yield "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 44
            yield "    <tr>
      <td";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 45) == true)) {
                yield " colspan=\"4\"";
            }
            yield ">
        ";
            // line 51
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 51) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 51)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "<div class=\"indent\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 52
            yield "          <div title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 52), "html", null, true);
            yield "\">
            <span class=\"visually-hidden\">";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 53), "html", null, true);
            yield "</span>
          </div>
          <div><a href=\"";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "link", [], "any", false, false, true, 55), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "label", [], "any", false, false, true, 55), "html", null, true);
            yield "</a></div>
          ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56)) {
                // line 57
                yield "            <div>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), "html", null, true);
                yield "</div>
          ";
            }
            // line 59
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 59) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 59)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 60
            yield "      </td>
      ";
            // line 61
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 61) == false)) {
                // line 62
                yield "        <td>
          ";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "num_topics", [], "any", false, false, true, 63), "html", null, true);
                yield "
          ";
                // line 64
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "new_topics", [], "any", false, false, true, 64) == true)) {
                    // line 65
                    yield "            <br />
            <a href=\"";
                    // line 66
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "new_url", [], "any", false, false, true, 66), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "new_text", [], "any", false, false, true, 66), "html", null, true);
                    yield "</a>
          ";
                }
                // line 68
                yield "        </td>
        <td>";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "num_posts", [], "any", false, false, true, 69), "html", null, true);
                yield "</td>
        <td>";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "last_reply", [], "any", false, false, true, 70), "html", null, true);
                yield "</td>
      ";
            }
            // line 72
            yield "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['child_id'], $context['forum'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["forums"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/stable9/templates/dataset/forum-list.html.twig";
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
        return array (  172 => 74,  165 => 72,  160 => 70,  156 => 69,  153 => 68,  146 => 66,  143 => 65,  141 => 64,  137 => 63,  134 => 62,  132 => 61,  129 => 60,  117 => 59,  111 => 57,  109 => 56,  103 => 55,  98 => 53,  93 => 52,  81 => 51,  75 => 45,  72 => 44,  68 => 43,  61 => 39,  57 => 38,  53 => 37,  49 => 36,  44 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a list of forums and containers.
 *
 * Available variables:
 * - forums: A collection of forums and containers to display. It is keyed to
 *   the numeric IDs of all child forums and containers. Each forum in forums
 *   contains:
 *   - is_container: A flag indicating if the forum can contain other
 *     forums. Otherwise, the forum can only contain topics.
 *   - depth: How deep the forum is in the current hierarchy.
 *   - zebra: 'even' or 'odd', used for row class.
 *   - icon_class: 'default' or 'new', used for forum icon class.
 *   - icon_title: Text alternative for the forum icon.
 *   - name: The name of the forum.
 *   - link: The URL to link to this forum.
 *   - description: The description field for the forum, containing:
 *     - value: The descriptive text for the forum.
 *   - new_topics: A flag indicating if the forum contains unread posts.
 *   - new_url: A URL to the forum's unread posts.
 *   - new_text: Text for the above URL, which tells how many new posts.
 *   - old_topics: A count of posts that have already been read.
 *   - num_posts: The total number of posts in the forum.
 *   - last_reply: Text representing the last time a forum was posted or
 *     commented in.
 * - forum_id: Forum ID for the current forum. Parent to all items within the
 *   forums array.
 *
 * @see template_preprocess_forum_list()
 */
#}
<table>
  <thead>
    <tr>
      <th>{{ 'Forum'|t }}</th>
      <th>{{ 'Topics'|t }}</th>
      <th>{{ 'Posts'|t }}</th>
      <th>{{ 'Last post'|t }}</th>
    </tr>
  </thead>
  <tbody>
  {% for child_id, forum in forums %}
    <tr>
      <td{% if forum.is_container == true %} colspan=\"4\"{% endif %}>
        {#
          Enclose the contents of this cell with X divs, where X is the
          depth this forum resides at. This will allow us to use CSS
          left-margin for indenting.
        #}
        {% if forum.depth > 0 %}{% for i in 1..forum.depth %}<div class=\"indent\">{% endfor %}{% endif %}
          <div title=\"{{ forum.icon_title }}\">
            <span class=\"visually-hidden\">{{ forum.icon_title }}</span>
          </div>
          <div><a href=\"{{ forum.link }}\">{{ forum.label }}</a></div>
          {% if forum.description.value %}
            <div>{{ forum.description.value }}</div>
          {% endif %}
        {% if forum.depth > 0 %}{% for i in 1..forum.depth %}</div>{% endfor %}{% endif %}
      </td>
      {% if forum.is_container == false %}
        <td>
          {{ forum.num_topics }}
          {% if forum.new_topics == true %}
            <br />
            <a href=\"{{ forum.new_url }}\">{{ forum.new_text }}</a>
          {% endif %}
        </td>
        <td>{{ forum.num_posts }}</td>
        <td>{{ forum.last_reply }}</td>
      {% endif %}
    </tr>
  {% endfor %}
  </tbody>
</table>
", "core/themes/stable9/templates/dataset/forum-list.html.twig", "D:\\wamp64\\www\\2024-12-09-dp\\core\\themes\\stable9\\templates\\dataset\\forum-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 43, "if" => 45);
        static $filters = array("t" => 36, "escape" => 52);
        static $functions = array("range" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape'],
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
