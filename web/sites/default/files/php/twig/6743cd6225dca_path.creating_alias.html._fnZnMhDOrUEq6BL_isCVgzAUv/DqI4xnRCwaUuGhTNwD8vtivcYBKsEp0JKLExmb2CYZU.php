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

/* @help_topics/path.creating_alias.html.twig */
class __TwigTemplate_8d685706b28d9fde424d303e8ff4232b extends Template
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
        // line 9
        $context["path_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield t("Create and edit URL aliases", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        $context["path_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["path_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "path"]));
        // line 13
        $context["overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("path.overview"));
        // line 14
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 15
        yield t("Give a content item page a human- or SEO-friendly URL alias; you can follow similar steps to create an alias for a taxonomy term page. See @overview_topic for more about aliases.", array("@overview_topic" => ($context["overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 16
        yield t("Who can create URL aliases?", array());
        yield "</h2>
<p>";
        // line 17
        yield t("Users with the <em>@path_permissions_link</em> permission can create aliases. To follow the steps in this topic, you will also need permission to edit the content item.", array("@path_permissions_link" => ($context["path_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 18
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 20
        yield t("Locate and open the content edit form for the content item, or create a new content item (see related topics on creating and editing content).", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Under <em>URL alias</em> on the edit form, enter the desired alias (for example, \"/about-us\"). Make sure the alias starts with a \"/\" character.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("Click <em>Save</em>.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("Verify that the page can be visited with the new alias, for example <em>https://example.com/about-us</em>.", array());
        yield "</li>
</ol>
<h2>";
        // line 25
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-create.html\">";
        // line 27
        yield t("Creating a Content Item (Drupal User Guide)", array());
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/path.creating_alias.html.twig";
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
        return array (  98 => 27,  93 => 25,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  54 => 14,  52 => 13,  50 => 12,  46 => 10,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/path.creating_alias.html.twig", "/var/www/html/web/core/modules/path/help_topics/path.creating_alias.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "trans" => 10);
        static $filters = array("escape" => 15);
        static $functions = array("render_var" => 12, "help_route_link" => 12, "help_topic_link" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link'],
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
