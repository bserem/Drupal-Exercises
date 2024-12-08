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

/* @help_topics/taxonomy.overview.html.twig */
class __TwigTemplate_eaa5b543dbfbb3ab02bae441f056016c extends Template
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
        // line 5
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 6
        yield "<h2>";
        yield t("What is taxonomy?", array());
        yield "</h2>
<p>";
        // line 7
        yield t("<em>Taxonomy</em> is used to classify website content. One common example of taxonomy is the tags used to classify or categorize posts in a blog website; a cooking website could use an ingredients taxonomy to classify recipes. Individual taxonomy items are known as <em>terms</em> (the blog tags or recipe ingredients in these examples); and a set of terms is known as a <em>vocabulary</em> (the set of all blog post tags, or the set of all recipe ingredients in these examples). Technically, taxonomy terms are an entity type and the entity subtypes are the vocabularies; see @content_structure_topic for more on content entities. Like other entities, taxonomy terms can have fields attached; for instance, you could set up an image field to contain an icon for each term.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</p>
<p>";
        // line 8
        yield t("An individual vocabulary can organize its terms in a hierarchy, or it could be flat. For example, blog tags normally have a flat structure, while a recipe ingredients vocabulary could be hierarchical (for example, tomatoes could be a sub-term of vegetables, and under tomatoes, you could have green and red tomatoes).", array());
        yield "</p>
<p>";
        // line 9
        yield t("Taxonomy terms are normally attached as reference fields to other content entities, which is how you can use them to classify content. When you set up a taxonomy reference field, you can let users enter terms in two ways:", array());
        yield "</p>
<dl>
  <dt>";
        // line 11
        yield t("Free tagging", array());
        yield "</dt>
  <dd>";
        // line 12
        yield t("New terms can be created right on the content editing form.", array());
        yield "</dd>
  <dt>";
        // line 13
        yield t("Fixed list of terms", array());
        yield "</dt>
  <dd>";
        // line 14
        yield t("The list of terms is curated and managed outside the content editing form, and users can only select from the existing list when editing content.", array());
        yield "</dd>
</dl>
<p>";
        // line 16
        yield t("Taxonomy reference fields can be added to any entity, such as user accounts, content blocks, or regular content items. If you use them to classify regular content items, your site will automatically be set up with taxonomy listing pages for each term; each of these pages lists all of the content items that are classified with that term.", array());
        yield "</p>
<h2>";
        // line 17
        yield t("Overview of managing taxonomy", array());
        yield "</h2>
<p>";
        // line 18
        yield t("The core Taxonomy module allows you to create and edit taxonomy vocabularies and taxonomy terms. The core Field UI module provides a user interface for adding fields to entities, including the taxonomy reference field, and configuring field editing and display. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 19
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/structure-taxonomy.html\">";
        // line 21
        yield t("Concept: Taxonomy (Drupal User Guide)", array());
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/taxonomy.overview.html.twig";
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
        return array (  98 => 21,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  59 => 9,  55 => 8,  51 => 7,  46 => 6,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/taxonomy.overview.html.twig", "/var/www/html/web/core/modules/taxonomy/help_topics/taxonomy.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 5, "trans" => 6);
        static $filters = array("escape" => 7);
        static $functions = array("render_var" => 5, "help_topic_link" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link'],
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
