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

/* core/themes/claro/templates/system-themes-page.html.twig */
class __TwigTemplate_bf762895b70f8a1401aedaac428e3fb9 extends Template
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
        // line 36
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["theme_groups"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 38
            yield "    ";
            // line 39
            $context["theme_group_classes"] = ["system-themes-list", ("system-themes-list--" . CoreExtension::getAttribute($this->env, $this->source,             // line 41
$context["theme_group"], "state", [], "any", false, false, true, 41)), "clearfix"];
            // line 45
            yield "
    ";
            // line 47
            $context["card_alignment"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "state", [], "any", false, false, true, 47) == "installed")) ? ("horizontal") : ("vertical"));
            // line 49
            yield "
    ";
            // line 50
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 50)) {
                // line 51
                yield "      <hr>
    ";
            }
            // line 53
            yield "
    <div";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "attributes", [], "any", false, false, true, 54), "addClass", [($context["theme_group_classes"] ?? null)], "method", false, false, true, 54), "html", null, true);
            yield ">
      <h2 class=\"system-themes-list__header\">";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "title", [], "any", false, false, true, 55), "html", null, true);
            yield "</h2>
      <div class=\"card-list ";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["card_alignment"] ?? null) == "horizontal")) ? ("card-list--two-cols") : ("card-list--four-cols")));
            yield "\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 58
                yield "          ";
                // line 59
                $context["theme_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                 // line 60
$context["theme"], "is_default", [], "any", false, false, true, 60)) ? ("theme-default") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["theme"], "is_admin", [], "any", false, false, true, 61)) ? ("theme-admin") : ("")), "card", ("card--" .                 // line 63
($context["card_alignment"] ?? null)), "card-list__item"];
                // line 67
                yield "          ";
                // line 68
                $context["theme_title_classes"] = ["card__content-item", "heading-f"];
                // line 73
                yield "          ";
                // line 74
                $context["theme_description_classes"] = ["card__content-item"];
                // line 78
                yield "          <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "attributes", [], "any", false, false, true, 78), "addClass", [($context["theme_classes"] ?? null)], "method", false, false, true, 78), "setAttribute", ["aria-labelledby", CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 78)], "method", false, false, true, 78), "setAttribute", ["aria-describedby", ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 78)) ?: (null))], "method", false, false, true, 78), "html", null, true);
                yield ">
            ";
                // line 79
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 79)) {
                    // line 80
                    yield "              <div class=\"card__image\">
                ";
                    // line 81
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 81), "html", null, true);
                    yield "
              </div>
            ";
                }
                // line 84
                yield "            <div class=\"card__content-wrapper\">
              <div class=\"card__content\">
                <h3";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 86)]), "addClass", [($context["theme_title_classes"] ?? null)], "method", false, false, true, 86), "html", null, true);
                yield " id=";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 86), "html", null, true);
                yield ">";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, true, 87), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, true, 87), "html", null, true);
                // line 88
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 88)) {
                    // line 89
                    yield "                    (";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 89), ", "));
                    yield ")";
                }
                // line 91
                yield "</h3>

                ";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 93) && CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 93))) {
                    // line 94
                    yield "                  <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 94)) ?: (null))]), "addClass", [($context["theme_description_classes"] ?? null)], "method", false, false, true, 94), "html", null, true);
                    yield ">
                    ";
                    // line 95
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 95), "html", null, true);
                    yield "
                  </div>";
                }
                // line 98
                yield "</div>

              <div class=\"card__footer\">
                ";
                // line 101
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 101)) {
                    // line 102
                    yield "                  <div class=\"theme-info__requires\">
                    ";
                    // line 103
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module_dependencies", ["@module_dependencies" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 103))]));
                    yield "
                  </div>
                ";
                }
                // line 106
                yield "                ";
                // line 107
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 107)) {
                    // line 108
                    yield "                  <small class=\"incompatible\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 108), "html", null, true);
                    yield "</small>
                ";
                } else {
                    // line 110
                    yield "                    ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "operations", [], "any", false, false, true, 110), "html", null, true);
                    yield "
                ";
                }
                // line 112
                yield "              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "      </div>
    </div>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "theme_groups", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/system-themes-page.html.twig";
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
        return array (  229 => 119,  213 => 116,  204 => 112,  198 => 110,  192 => 108,  189 => 107,  187 => 106,  181 => 103,  178 => 102,  176 => 101,  171 => 98,  166 => 95,  161 => 94,  159 => 93,  155 => 91,  150 => 89,  148 => 88,  144 => 87,  139 => 86,  135 => 84,  129 => 81,  126 => 80,  124 => 79,  119 => 78,  117 => 74,  115 => 73,  113 => 68,  111 => 67,  109 => 63,  108 => 61,  107 => 60,  106 => 59,  104 => 58,  100 => 57,  96 => 56,  92 => 55,  88 => 54,  85 => 53,  81 => 51,  79 => 50,  76 => 49,  74 => 47,  71 => 45,  69 => 41,  68 => 39,  66 => 38,  49 => 37,  44 => 36,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/system-themes-page.html.twig", "/var/www/html/web/core/themes/claro/templates/system-themes-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 37, "set" => 39, "if" => 50);
        static $filters = array("escape" => 36, "safe_join" => 89, "t" => 103, "render" => 103);
        static $functions = array("create_attribute" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join', 't', 'render'],
                ['create_attribute'],
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
