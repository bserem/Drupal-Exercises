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

/* @help_topics/core.menus.html.twig */
class __TwigTemplate_55ffdec7b7cfb0b7a6535643db1f6091 extends Template
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
        // line 7
        yield "<h2>";
        yield t("What is a menu?", array());
        yield "</h2>
<p>";
        // line 8
        yield t("A menu is a collection of <em>menu links</em> used to navigate a web site. Menus and menu links can be provided by modules or site administrators.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("Managing menus overview", array());
        yield "</h2>
<p>";
        // line 10
        yield t("The core Menu UI module provides a user interface for managing menus, including creating new menus, reordering menu links, and disabling links provided by modules. It also provides the ability for links to content items to be added to menus while editing, if configured on the content type. The core Custom Menu Links module provides the ability to add custom links to menus. Each menu can be displayed by placing a block in a theme region; some themes also can display a menu outside of the block system. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Additional Resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 13
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/menu-concept.html\">Concept: Menu (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.menus.html.twig";
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
        return array (  66 => 13,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.menus.html.twig", "/var/www/html/web/core/modules/help/help_topics/core.menus.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
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
