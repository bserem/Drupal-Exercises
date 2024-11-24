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

/* @help_topics/user.security_account_settings.html.twig */
class __TwigTemplate_2492844ccbccf8f78d265fb01c77e6ae extends Template
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
        $context["account_settings_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Account settings", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["account_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["account_settings_link_text"] ?? null), "entity.user.admin_form"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Configure settings related to how user accounts are created and deleted.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("What are the settings related to user account creation and deletion?", array());
        yield "</h2>
<ul>
  <li>";
        // line 13
        yield t("You can make it possible for new users to register themselves for accounts, with or without email verification or administrative approval. Or, you can make it so only administrators with <em>Administer users</em> permission can register new users.", array());
        yield "</li>
  <li>";
        // line 14
        yield t("You can configure what happens to content that a user created, if their account is <em>canceled</em> (deleted).", array());
        yield "</li>
  <li>";
        // line 15
        yield t("You can edit the email messages that are sent to users when their accounts are pending, approved, created, blocked, or canceled, or when they request a password reset.", array());
        yield "</li>
</ul>
<h2>";
        // line 17
        yield t("What are variables in email message text?", array());
        yield "</h2>
<p>";
        // line 18
        yield t("<em>Variables</em> are short text strings, enclosed in square brackets [], that you can insert into configured email message text. When an individual message is generated, data from your site is substituted for the variables. Some commonly-used variables are:", array());
        yield "</p>
<ul>
  <li>";
        // line 20
        yield t("[site:name]: The name of your website.", array());
        yield "</li>
  <li>";
        // line 21
        yield t("[site:url]: The URL of your website.", array());
        yield "</li>
  <li>";
        // line 22
        yield t("[site:login-url]: The URL where users can log in to your site.", array());
        yield "</li>
  <li>";
        // line 23
        yield t("[user:display-name]: The user's displayed name.", array());
        yield "</li>
  <li>";
        // line 24
        yield t("[user:account-name]: The user's account name.", array());
        yield "</li>
  <li>";
        // line 25
        yield t("[user:mail]: The user's email alias.", array());
        yield "</li>
  <li>";
        // line 26
        yield t("[user:one-time-login-url]: An expiring URL that a user can use to log in once, if they need to reset their password.", array());
        yield "</li>
</ul>
<h2>";
        // line 28
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 30
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <em>@account_settings_link</em>.", array("@account_settings_link" => ($context["account_settings_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 31
        yield t("Select the method you want to use for creating user accounts, and check or uncheck the box that requires email verification, to match the settings you want for your site.", array());
        yield "</li>
  <li>";
        // line 32
        yield t("Select the desired option for what happens to content that a user created if their account is canceled.", array());
        yield "</li>
  <li>";
        // line 33
        yield t("Optionally, edit the text of email messages related to user accounts.", array());
        yield "</li>
  <li>";
        // line 34
        yield t("Verify that the other settings are correct.", array());
        yield "</li>
  <li>";
        // line 35
        yield t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/user.security_account_settings.html.twig";
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
        return array (  141 => 35,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  116 => 28,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  82 => 18,  78 => 17,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  56 => 10,  51 => 9,  49 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/user.security_account_settings.html.twig", "/var/www/html/web/core/modules/user/help_topics/user.security_account_settings.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 30);
        static $functions = array("render_var" => 8, "help_route_link" => 8);

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
