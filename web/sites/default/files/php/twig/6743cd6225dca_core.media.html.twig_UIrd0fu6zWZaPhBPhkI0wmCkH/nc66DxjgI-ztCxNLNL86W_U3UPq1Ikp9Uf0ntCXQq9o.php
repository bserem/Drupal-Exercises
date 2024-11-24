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

/* @help_topics/core.media.html.twig */
class __TwigTemplate_9294d321ecee1f9248153293f7a51246 extends Template
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
        // line 11
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 12
        yield "<h2>";
        yield t("What are media items?", array());
        yield "</h2>
<p>";
        // line 13
        yield t("Core media items include audio, images, documents, and videos. You can add other media types, such as social media posts, through the use of contributed modules. Media items may be files located in your site's file system, or remote items referenced by a URL. Media items are content entities, and they are divided into media types (which are entity sub-types); media types can have fields. See @content_structure_topic for more information on content entities and fields.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 14
        yield t("What is the media library?", array());
        yield "</h2>
<p>";
        // line 15
        yield t("The media library is a visual user interface for managing and reusing media items. Add media items to content using Media reference fields and the Media library field widget.", array());
        yield "</p>
<h2>";
        // line 16
        yield t("What is an image style?", array());
        yield "</h2>
<p>";
        // line 17
        yield t("An image style is a set of processing steps, known as <em>effects</em>, that can be applied to images. Examples of effects include scaling and cropping images to different sizes. Responsive image styles can associate image styles with your theme's size breakpoints. This allows serving images sized for the browser width.", array());
        yield "</p>
<h2>";
        // line 18
        yield t("Overview of managing media", array());
        yield "</h2>
<p>";
        // line 19
        yield t("The following modules provide media-related functionality:", array());
        yield "</p>
<ul>
  <li>";
        // line 21
        yield t("Media items and media types are managed by the core Media module.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("The core Media module provides a Media reference field to add media to content entities. The core File and Image modules also provide reference fields. It is recommended to use the Media reference field because it is more versatile.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("The core Media Library module provides the media library and the Media library field widget. With this module installed, the Media library field widget becomes the default widget for editing Media reference fields.", array());
        yield "</li>
  <li>";
        // line 24
        yield t("The core Image module provides a user interface for defining image styles. The core Responsive Image module provides responsive image styles. Using the core Breakpoint module, and a breakpoint-enabled theme, these responsive styles can serve images sized for the browser.", array());
        yield "</li>
</ul>
<p>";
        // line 26
        yield t("See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 27
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li>";
        // line 29
        yield t("<a href=\"https://www.drupal.org/docs/8/core/modules/media\">Media module</a>", array());
        yield "</li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/core.media.html.twig";
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
        return array (  106 => 29,  101 => 27,  97 => 26,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  46 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/core.media.html.twig", "/var/www/html/web/core/modules/help/help_topics/core.media.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "trans" => 12);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 11, "help_topic_link" => 11);

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
