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

/* @help_topics/views_ui.bulk_operations.html.twig */
class __TwigTemplate_06e69f8b66bce690ab00294829c3c077 extends Template
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
        // line 8
        $context["views_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "  ";
            yield t("Views", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["views"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["views_link_text"] ?? null), "entity.view.collection"));
        // line 12
        $context["views_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "  ";
            yield t("Administer views", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["views_permissions"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["views_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "views_ui"]));
        // line 16
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 17
        yield t("Add one or more existing actions as bulk operations to an existing table-style view. If you have the core Actions UI module installed, see the related topic \"Configuring actions\" for more information about actions.", array());
        yield "</p>
<h2>";
        // line 18
        yield t("Who can edit views?", array());
        yield "</h2>
<p>";
        // line 19
        yield t("The core Views UI module will need to be installed and you will need <em>@views_permissions</em> permission in order to edit a view.", array("@views_permissions" => ($context["views_permissions"] ?? null), ));
        yield "</p>
<h2>";
        // line 20
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 22
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@views</em>. A list of all views is shown.", array("@views" => ($context["views"] ?? null), ));
        yield "</li>
  <li>";
        // line 23
        yield t("Find the view that you would like to edit, and click <em>Edit</em> from the dropdown button. Note that bulk operations work best in a view with a Page display, and a Table format.", array());
        yield "</li>
  <li>";
        // line 24
        yield t("If there is not already an <em>Operations bulk form</em> in the <em>Fields</em> list for the view, click <em>Add</em> in the <em>Fields</em> section to add it. (The exact name of the bulk form field will vary, and may contain keywords like \"bulk update\", \"form element\" or \"operations\" -- not to be confused with <em>operations links</em>, which are applied to each item in a row.) If the bulk operations field already exists, click the field name to edit its settings.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Check the action(s) you want to make available in the <em>Selected actions</em> list and click <em>Apply (all displays)</em>.", array());
        yield "</li>
  <li>";
        // line 26
        yield t("Verify that the <em>Access</em> settings for the view are at least as restrictive as the permissions necessary to perform the bulk operations. People with permission to see the view, but who don't have permission to do the bulk operations, will experience problems.", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Click <em>Save</em>. The action(s) will be available as bulk operations in the view.", array());
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/views_ui.bulk_operations.html.twig";
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
        return array (  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  62 => 16,  60 => 15,  55 => 13,  53 => 12,  51 => 11,  46 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/views_ui.bulk_operations.html.twig", "/var/www/html/web/core/modules/views_ui/help_topics/views_ui.bulk_operations.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 19);
        static $functions = array("render_var" => 11, "help_route_link" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
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
