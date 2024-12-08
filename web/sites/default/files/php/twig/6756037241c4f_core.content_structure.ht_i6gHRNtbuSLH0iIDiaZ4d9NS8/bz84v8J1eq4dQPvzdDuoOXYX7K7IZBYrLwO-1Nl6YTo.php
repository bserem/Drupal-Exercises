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

/* @help_topics/core.content_structure.html.twig */
class __TwigTemplate_571dc670480391a36dafd7cf9e8fd886 extends Template
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
        $context["help_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Help", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        $context["help_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["help_link_text"] ?? null), "help.main"));
        // line 7
        yield "<h2>";
        yield t("What types of data does a site have?", array());
        yield "</h2>
<p>";
        // line 8
        yield t("There are four main types of data. <em>Content</em> is the information (text, images, etc.) meant to be displayed to website visitors. <em>Configuration</em> is data that defines how the content is displayed; some configuration (such as field labels) may also be visible to site visitors. <em>State</em> is temporary data about the state of your site, such as the last time the system <em>cron</em> jobs ran. <em>Session</em> is a subset of State information, related to users' interactions with the site, such as site cookies and whether or not they are logged in.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("What is a content entity?", array());
        yield "</h2>
<p>";
        // line 10
        yield t("A <em>content entity</em> (or more commonly, <em>entity</em>) is an item of content data, which can consist of text, HTML markup, images, attached files, and other data. Content entities are grouped into <em>entity types</em>, which have different purposes and are displayed in very different ways on the site. Most entity types are also divided into <em>entity sub-types</em>, which are divisions within an entity type to allow for smaller variations in how the entities are used and displayed. For example, the <em>Content item</em> entity type that stores page-level content is divided into <em>content type</em> sub-types; the <em>Content block</em> entity type has <em>block types</em>; but the <em>User</em> entity type (for user profile information) does not have sub-types.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("What is a field?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("Within entity items, the data is stored in individual <em>fields</em>, each of which holds one type of data, such as formatted or plain text, images or other files, or dates. Fields can be added by an administrator on entity sub-types, so that all entity items of a given entity sub-type have the same collection of fields available, and they can be single-valued or multiple-valued. When you create or edit entity items, you are specifying the values for the fields on the entity item.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("What is a reference field?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("A <em>reference field</em> is a field that stores a relationship between an entity and one or more other entities, which may belong to the same or different entity type. For example, a <em>Content reference</em> field on a content type stores a relationship between one content item and one or more other content items.", array());
        yield "</p>
<h2>";
        // line 15
        yield t("What field types are available?", array());
        yield "</h2>
<p>";
        // line 16
        yield t("The following field types are provided by the core system and core modules (many more are provided by contributed modules):", array());
        yield "</p>
<ul>
  <li>";
        // line 18
        yield t("Boolean, Number (provided by the core system): Stores true/false values and numbers", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Comment (provided by the core Comment module): Allows users to add comments to an entity", array());
        yield "</li>
  <li>";
        // line 20
        yield t("Date, Timestamp (Datetime module): Stores dates and times", array());
        yield "</li>
  <li>";
        // line 21
        yield t("Date range (Datetime range module): Stores time/date periods with a start and an end", array());
        yield "</li>
  <li>";
        // line 22
        yield t("Email (core system): Stores email addresses", array());
        yield "</li>
  <li>";
        // line 23
        yield t("Link (Link module): Stores URLs and link text", array());
        yield "</li>
  <li>";
        // line 24
        yield t("List (Options module): Stores values chosen from pre-defined lists, where the values can be numbers or text; see section below for more on list fields.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("Reference (core system): Stores entity references; see section above", array());
        yield "</li>
  <li>";
        // line 26
        yield t("Telephone (Telephone module): Stores telephone numbers", array());
        yield "</li>
  <li>";
        // line 27
        yield t("Text (Text module): Stores formatted and unformatted text; see section below for more on text fields.", array());
        yield "</li>
</ul>
<h2>";
        // line 29
        yield t("What settings are available for List field types?", array());
        yield "</h2>
<p>";
        // line 30
        yield t("List fields associate pre-defined <em>keys</em> (or value codes) with <em>labels</em> that the user sees. For example, you might define a list field that shows the user the names of several locations, while behind the scenes a location code is stored in the database. Each list field type corresponds to one type of stored key. For example, a <em>List (integer)</em> field stores integers, while the <em>List (text)</em> field stores text strings. Once you have chosen the field type, the main setting for a list field is the <em>Allowed values</em> list, which associates the keys with the labels.", array());
        yield "</p>
<h2>";
        // line 31
        yield t("What types of Text fields are available?", array());
        yield "</h2>
<p>";
        // line 32
        yield t("There are several types of text fields, with different characteristics. Text fields can be either <em>plain</em> or <em>formatted</em>: plain text fields do not contain HTML, while formatted fields can contain HTML and are processed through <em>text filters</em> (these are provided by the core Filter module; if you have that module enabled, see the related topic below on filters for more information). Text fields can also be regular-length (with a limit of 255 characters) or <em>long</em> (with a very large character limit), and long formatted text fields can include a <em>summary</em> attribute. All possible combinations of these characteristics exist as text field types; for example, <em>Text (plain)</em> and <em>Text (formatted, long, with summary)</em> are two examples of text field types.", array());
        yield "</p>
<h2>";
        // line 33
        yield t("What is a formatter?", array());
        yield "</h2>
<p>";
        // line 34
        yield t("A <em>formatter</em> is a way to display a field; most field types offer several types of formatters, and most formatters have settings that further define how the field is displayed. It is also possible to completely hide a field from display, and you have the option of showing or hiding the field's label when it is displayed.", array());
        yield "</p>
<h2>";
        // line 35
        yield t("What is a widget?", array());
        yield "</h2>
<p>";
        // line 36
        yield t("A <em>widget</em> is a way to edit a field. Some field types, such as plain text single-line fields, have only one widget available (in this case, a single-line text input field). Other field types offer choices for the widget; for example, single-valued <em>List</em> fields can use a <em>Select</em> or <em>Radio button</em> widget for editing. Many widget types have settings that further define how the field can be edited.", array());
        yield "</p>
<h2>";
        // line 37
        yield t("Managing content structure overview", array());
        yield "</h2>
<p>";
        // line 38
        yield t("Besides the field modules listed in the previous section, there are additional core modules that you can use to manage your content structure:", array());
        yield "</p>
<ul>
  <li>";
        // line 40
        yield t("The core Node, Comment, Content Block, Custom Menu Links, User, File, Image, Media, Taxonomy, and Contact modules all provide content entity types.", array());
        yield "</li>
  <li>";
        // line 41
        yield t("The core Field UI module provides a user interface for managing fields and their display on entities.", array());
        yield "</li>
  <li>";
        // line 42
        yield t("The core Layout Builder module provides a more flexible user interface for configuring the display of entities.", array());
        yield "</li>
  <li>";
        // line 43
        yield t("The core Filter, Responsive Image, and Path modules provide settings and display options for entities and fields.", array());
        yield "</li>
</ul>
<p>";
        // line 45
        yield t("Depending on the core and contributed modules that you currently have installed on your site, the related topics below and other topics listed on the main help page (see @help_link) will help you with tasks related to content structure.", array("@help_link" => ($context["help_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 46
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 48
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/understanding-data.html\">Concept: Types of Data (Drupal User Guide)</a>", array());
        yield "</li>
  <li>";
        // line 49
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/planning-chapter.html\">Planning your Site (Drupal User Guide)</a>", array());
        yield "</li>
  <li>";
        // line 50
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/structure-reference-fields.html\">Concept: Reference Fields (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.content_structure.html.twig";
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
        return array (  209 => 50,  205 => 49,  201 => 48,  196 => 46,  192 => 45,  187 => 43,  183 => 42,  179 => 41,  175 => 40,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  154 => 34,  150 => 33,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  51 => 7,  49 => 6,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.content_structure.html.twig", "/var/www/html/web/core/modules/help/help_topics/core.content_structure.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 5, "trans" => 5);
        static $filters = array("escape" => 45);
        static $functions = array("render_var" => 6, "help_route_link" => 6);

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
