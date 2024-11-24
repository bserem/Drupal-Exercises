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

/* @help_topics/search.overview.html.twig */
class __TwigTemplate_1dfea66f23f10c218034c4e3b6dd9b57 extends Template
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
        $context["search_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Search", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["search_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["search_link_text"] ?? null), "search.view"));
        // line 10
        $context["user_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("user.overview"));
        // line 11
        yield "<h2>";
        yield t("What are search pages?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("The core Search module organizes site search into <em>pages</em>. Each page allows users to search a particular type of content with a particular configuration. The configuration includes specifying a URL that starts with <em>search</em>, a name for the page, and additional options for some search page types.", array());
        yield "</p>
<p>";
        // line 13
        yield t("When users visit the main search page (see @search_link), they will see the configured search pages that they have access to. Each search page has a search form on it, and the page will display search results after the user enters keywords into the form and clicks the search button.", array("@search_link" => ($context["search_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 14
        yield t("What modules provide site search?", array());
        yield "</h2>
<p>";
        // line 15
        yield t("The core Search module provides the ability to configure search pages; search page types are provided by both core and contributed modules. The core modules that provide search page types are:", array());
        yield "</p>
<ul>
  <li>";
        // line 17
        yield t("The Node module, for searching content pages", array());
        yield "</li>
  <li>";
        // line 18
        yield t("The User module, for searching user profiles", array());
        yield "</li>
  <li>";
        // line 19
        yield t("The Help module, for searching help topics", array());
        yield "</li>
</ul>
<p>";
        // line 21
        yield t("As an alternative to the core Search module's system of search pages, you can use contributed modules to provide site search. For example, the <a href=\"https://www.drupal.org/project/apachesolr\">Apache Solr</a> and <a href=\"https://www.drupal.org/project/sphinx\">Sphinx</a> contributed modules use third-party technology to provide site search.", array());
        yield "</p>
<h2>";
        // line 22
        yield t("What are the limitations of the core Search module?", array());
        yield "</h2>
<p>";
        // line 23
        yield t("There are two main limitations of the core Search module. First, it is not appropriate for very large sites -- if you have a large site, look into other search technologies like Apache Solr. Second, the Node search page type only supports exact keyword matching, which is not the behavior that most users will expect. You can improve this by installing a language-specific stemming module for your language (such as <a href=\"https://www.drupal.org/project/porterstemmer\">Porter Stemmer</a> for American English), which makes it so that, for example, a search for the word walk would match pages containing the words walk, walking, and walked.", array());
        yield "</p>
<h2>";
        // line 24
        yield t("What are the search permissions?", array());
        yield "</h2>
<ul>
<li>";
        // line 26
        yield t("Users with <em>Use search</em> permission can use the <em>Search form</em> block and <em>Search</em> page; this permission is required for any search configured in the core Search module.", array());
        yield "</li>
<li>";
        // line 27
        yield t("In addition to <em>Use search</em>, <em>View user information</em> permission is needed for searching users.", array());
        yield "</li>
<li>";
        // line 28
        yield t("In addition to <em>Use search</em>, <em>View published content</em> permission is needed for searching content.", array());
        yield "</li>
<li>";
        // line 29
        yield t("Users with <em>Use advanced search</em> permission can use more complex search filtering when performing content searches.", array());
        yield "</li>
</ul>
<h2>";
        // line 31
        yield t("Configuring site search overview", array());
        yield "</h2>
<p>";
        // line 32
        yield t("In order to configure site search using the core Search module, you will need to configure one or more search pages. You will also need to verify or alter permissions so that the desired user roles can search the site. (See @user_overview_topic for more information about roles and permissions.) For content search, you will also need to make sure that the search index is configured and that the site is fully indexed. Finally, you may wish to place the <em>Search form</em> block on pages of your site, or add the search page to a navigation menu, to give users easy access to search. See the related topics listed below for specific tasks.", array("@user_overview_topic" => ($context["user_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 33
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 35
        yield t("<a href=\"https://www.drupal.org/documentation/modules/search\">Online documentation for the Search module</a>", array());
        yield "</li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/search.overview.html.twig";
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
        return array (  135 => 35,  130 => 33,  126 => 32,  122 => 31,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  83 => 19,  79 => 18,  75 => 17,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  53 => 11,  51 => 10,  49 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/search.overview.html.twig", "/var/www/html/web/core/modules/search/help_topics/search.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 9, "help_route_link" => 9, "help_topic_link" => 10);

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
