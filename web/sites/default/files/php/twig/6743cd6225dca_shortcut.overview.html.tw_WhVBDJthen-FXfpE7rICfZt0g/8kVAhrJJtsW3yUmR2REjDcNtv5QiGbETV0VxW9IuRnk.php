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

/* @help_topics/shortcut.overview.html.twig */
class __TwigTemplate_2f141e25158ad7acaedecdf59fc6c689 extends Template
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
        // line 6
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 7
        yield t("Create, view, and use a set of shortcuts to access administrative pages.", array());
        yield "</p>
<h2>";
        // line 8
        yield t("What are shortcuts?", array());
        yield "</h2>
<p>";
        // line 9
        yield t("<em>Shortcuts</em> are quick links to administrative pages; they are managed by the core Shortcut module. A site can have one or more <em>shortcut sets</em>, which can be shared by one or more users (by default, there is only one set shared by all users); each set contains a limited number of shortcuts. Users need <em>Use shortcuts</em> permission to view shortcuts; <em>Edit current shortcut set</em> permission to add, delete, or edit the shortcuts in the set assigned to them; and <em>Select any shortcut set</em> permission to select a different shortcut set when editing their user profile. There is also an <em>Administer shortcuts</em> permission, which allows an administrator to do any of these actions, as well as select shortcut sets for other users.", array());
        yield "</p>
<h2>";
        // line 10
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 12
        yield t("Make sure that the core Shortcut module is installed, and that you have a role with <em>Edit current shortcut set</em> or <em>Administer shortcuts</em> permission. Also, make sure that a toolbar module is installed (either the core Toolbar module or a contributed module replacement).", array());
        yield "</li>
  <li>";
        // line 13
        yield t("Navigate to an administrative page that you want in your shortcut list.", array());
        yield "</li>
  <li>";
        // line 14
        yield t("Click the shortcut link to add the page to your shortcut list -- in the core Claro administrative theme, the link looks like a star, and is displayed next to the page title. However, if the page is already in your shortcut set, clicking the shortcut link will remove it from your shortcut set.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("Repeat until all the desired links have been added to your shortcut set.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Shortcuts</em> in the toolbar to display your shortcuts, and verify that the list is complete.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Optionally, click <em>Edit shortcuts</em> at the right end of the shortcut list (left end in right-to-left languages), to remove links or change their order.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Click any link in the shortcut bar to go directly to the administrative page.", array());
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/shortcut.overview.html.twig";
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
        return array (  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/shortcut.overview.html.twig", "/var/www/html/web/core/modules/shortcut/help_topics/shortcut.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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
