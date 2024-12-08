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

/* core/modules/update/templates/update-project-status.html.twig */
class __TwigTemplate_085cff217aa4e7ff7799b7b198a73e68 extends Template
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
        $context["status_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["project"] ?? null), "status", [], "any", false, false, true, 32) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["project"] ?? null), "status", [], "any", false, false, true, 33) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-update__status--revoked") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["project"] ?? null), "status", [], "any", false, false, true, 34) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["project"] ?? null), "status", [], "any", false, false, true, 35) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["project"] ?? null), "status", [], "any", false, false, true, 36) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::CURRENT"))) ? ("project-update__status--current") : (""))];
        // line 39
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "attributes", [], "any", false, false, true, 39), "addClass", ["project-update__status", ($context["status_classes"] ?? null)], "method", false, false, true, 39), "html", null, true);
        yield ">";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 40)) {
            // line 41
            yield "<span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 41), "html", null, true);
            yield "</span>";
        } else {
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "reason", [], "any", false, false, true, 43), "html", null, true);
        }
        // line 45
        yield "  <span class=\"project-update__status-icon\">
    ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "any", false, false, true, 46), "html", null, true);
        yield "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 51
        if (($context["url"] ?? null)) {
            // line 52
            yield "<a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</a>";
        } else {
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        // line 56
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["existing_version"] ?? null), "html", null, true);
        yield "
  ";
        // line 57
        if (((($context["install_type"] ?? null) == "dev") && ($context["datestamp"] ?? null))) {
            // line 58
            yield "    <span class=\"project-update__version-date\">(";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["datestamp"] ?? null), "html", null, true);
            yield ")</span>
  ";
        }
        // line 60
        yield "</div>

";
        // line 62
        if (($context["versions"] ?? null)) {
            // line 63
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 64
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["version"], "html", null, true);
                yield "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['version'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        yield "
";
        // line 69
        $context["extra_classes"] = [(((CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["project"] ?? null), "status", [], "any", false, false, true, 70) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-not-secure") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["project"] ?? null), "status", [], "any", false, false, true, 71) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-revoked") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["project"] ?? null), "status", [], "any", false, false, true, 72) == Twig\Extension\CoreExtension::constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-not-supported") : (""))];
        // line 75
        yield "<div class=\"project-updates__details\">
  ";
        // line 76
        if (($context["extras"] ?? null)) {
            // line 77
            yield "    <div class=\"extra\">
      ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 79
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extra"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["extra_classes"] ?? null)], "method", false, false, true, 79), "html", null, true);
                yield ">
          ";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["extra"], "label", [], "any", false, false, true, 80), "html", null, true);
                yield ": ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["extra"], "data", [], "any", false, false, true, 80), "html", null, true);
                yield "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extra'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "    </div>
  ";
        }
        // line 85
        yield "  ";
        $context["includes"] = Twig\Extension\CoreExtension::join(($context["includes"] ?? null), ", ");
        // line 86
        yield "  ";
        if (($context["disabled"] ?? null)) {
            // line 87
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Includes:"));
            yield "
    <ul>
      <li>
        ";
            // line 90
            yield t("Enabled: %includes", array("%includes" =>             // line 91
($context["includes"] ?? null), ));
            // line 93
            yield "      </li>
      <li>
        ";
            // line 95
            $context["disabled"] = Twig\Extension\CoreExtension::join(($context["disabled"] ?? null), ", ");
            // line 96
            yield "        ";
            yield t("Disabled: %disabled", array("%disabled" =>             // line 97
($context["disabled"] ?? null), ));
            // line 99
            yield "      </li>
    </ul>
  ";
        } else {
            // line 102
            yield "    ";
            yield t("Includes: %includes", array("%includes" =>             // line 103
($context["includes"] ?? null), ));
            // line 105
            yield "  ";
        }
        // line 106
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["project", "status", "url", "title", "existing_version", "install_type", "datestamp", "versions", "extras", "disabled"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/update/templates/update-project-status.html.twig";
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
        return array (  199 => 106,  196 => 105,  194 => 103,  192 => 102,  187 => 99,  185 => 97,  183 => 96,  181 => 95,  177 => 93,  175 => 91,  174 => 90,  167 => 87,  164 => 86,  161 => 85,  157 => 83,  146 => 80,  141 => 79,  137 => 78,  134 => 77,  132 => 76,  129 => 75,  127 => 72,  126 => 71,  125 => 70,  124 => 69,  121 => 67,  111 => 64,  106 => 63,  104 => 62,  100 => 60,  94 => 58,  92 => 57,  87 => 56,  84 => 54,  77 => 52,  75 => 51,  68 => 46,  65 => 45,  62 => 43,  57 => 41,  55 => 40,  51 => 39,  49 => 36,  48 => 35,  47 => 34,  46 => 33,  45 => 32,  44 => 31,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/update/templates/update-project-status.html.twig", "/var/www/html/web/core/modules/update/templates/update-project-status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 40, "for" => 63, "trans" => 90);
        static $filters = array("escape" => 39, "join" => 85, "t" => 87, "placeholder" => 91);
        static $functions = array("constant" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'trans'],
                ['escape', 'join', 't', 'placeholder'],
                ['constant'],
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
