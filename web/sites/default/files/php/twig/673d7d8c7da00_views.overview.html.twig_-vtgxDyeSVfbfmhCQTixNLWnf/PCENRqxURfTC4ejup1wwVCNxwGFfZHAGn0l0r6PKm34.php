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

/* @help_topics/views.overview.html.twig */
class __TwigTemplate_df8a0dbaada0328f94e54c0ab23f61d5 extends Template
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
        yield "<h2>";
        yield t("What is a view?", array());
        yield "</h2>
<p>";
        // line 10
        yield t("A <em>view</em> is a listing of items on your site; for example, a block showing the most recent comments, a page listing news items, or a list of registered users. The listings can be formatted in a table, grid, list, calendar, RSS feed, and other formats (some output formats may require you to install additional contributed modules).", array());
        yield "</p>
<h2>";
        // line 11
        yield t("What are the components of a view?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("When you first create a view, you will specify what type of <em>base data</em> is being displayed in the view, which cannot be changed. After choosing a base data type, you can edit the following components, which allow you to specify which data to output, in what order, and in what format:", array());
        yield "</p>
<ul>
  <li>";
        // line 14
        yield t("<em>Displays</em>: whether the output goes to a page, block, feed, etc.; a single view can have multiple displays, each with different settings.", array());
        yield "</li>
  <li>";
        // line 15
        yield t("<em>Format</em>: the output style for each display, such as content item, grid, table, or HTML list.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("<em>Fields</em>: if the Format allows, the particular fields to display.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("<em>Filter criteria</em>: criteria to limit the data to output, such as whether the content is published, the type of content, etc. Filters can be <em>exposed</em> to let users choose how to filter the data.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("<em>Sort criteria</em>: how to order the data. Sorting can also be exposed to users.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("<em>Page settings</em>, <em>Block settings</em>, etc.: settings specific to the display type, such as the URL for a page display. Most display types support an <em>Access</em> setting, where you can choose a Permission or Role that a user must have in order to see the view.", array());
        yield "</li>
  <li>";
        // line 20
        yield t("<em>Header</em> and <em>Footer</em>: content to display at the top or bottom of the view display.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("<em>No results behavior</em>: what to do if the filter criteria result in having no data to display.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("<em>Pager</em>: how many items to display, and how to paginate if there are additional items to display.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("<em>Advanced</em> &gt; <em>Contextual filters</em>: like regular filters, except the criteria come from the <em>context</em>, such as the current date, page the view is displayed on, etc.", array());
        yield "</li>
  <li>";
        // line 24
        yield t("<em>Advanced</em> &gt; <em>Relationships</em>: additional data to pull in and display, related in some way to the base data of the view (such as data about the user who created the content item).", array());
        yield "</li>
  <li>";
        // line 25
        yield t("<em>Advanced</em> &gt; <em>Exposed form</em>: if you have exposed filters or sorts, how to display the form to the user.", array());
        yield "</li>
</ul>
<h2>";
        // line 27
        yield t("What are bulk operations?", array());
        yield "</h2>
<p>";
        // line 28
        yield t("Views using a table display format can include a bulk operations form, which allows users with sufficient permission to select one or more items from the view and apply an administrative action to them. The bulk actions available are specific to the base data type of the view; for example, a view of content items could support bulk publishing and unpublishing actions. If you have the core Actions UI module installed, see the related topic \"Configuring actions\" for more about actions.", array());
        yield "</p>
<h2>";
        // line 29
        yield t("Managing views overview", array());
        yield "</h2>
<p>";
        // line 30
        yield t("The core Views module handles the display of views, and the core Views UI module allows you to create, edit, and delete views in the administrative interface. See the related topics listed below for specific tasks (if the Views UI module is installed).", array());
        yield "</p>
<h2>";
        // line 31
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 33
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/views-chapter.html\">Creating Listings with Views (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/views.overview.html.twig";
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
        return array (  132 => 33,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  57 => 12,  53 => 11,  49 => 10,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/views.overview.html.twig", "/var/www/html/web/core/modules/views/help_topics/views.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 9);
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
