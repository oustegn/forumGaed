<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mcp_front.html */
class __TwigTemplate_33ad63a8587c165c2505cd9966cfa8eea4d77bccae00916b1fa64298dd1b5e19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>

";
        // line 5
        // line 6
        echo "
";
        // line 7
        if (($context["S_SHOW_UNAPPROVED"] ?? null)) {
            // line 8
            echo "
\t<form id=\"mcp_queue\" method=\"post\" action=\"";
            // line 9
            echo ($context["S_MCP_QUEUE_ACTION"] ?? null);
            echo "\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_UNAPPROVED");
            echo "</h3>
\t\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNAPPROVED_TOTAL");
            echo "</p>

\t\t";
            // line 17
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "unapproved", []))) {
                // line 18
                echo "\t\t\t<ul class=\"topiclist missing-column\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 22
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist missing-column responsive-show-all\">

\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "unapproved", []));
                foreach ($context['_seq'] as $context["_key"] => $context["unapproved"]) {
                    // line 29
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["unapproved"], "S_ROW_COUNT", []) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 33
                    echo $this->getAttribute($context["unapproved"], "U_POST_DETAILS", []);
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["unapproved"], "SUBJECT", []);
                    echo "</a> ";
                    if ($this->getAttribute($context["unapproved"], "ATTACH_ICON_IMG", [])) {
                        echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    echo " <br />
\t\t\t\t\t\t\t";
                    // line 34
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["unapproved"], "AUTHOR_FULL", []);
                    echo " &raquo; ";
                    echo $this->getAttribute($context["unapproved"], "POST_TIME", []);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\"><span>
\t\t\t\t\t\t";
                    // line 38
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_TOPIC", []);
                    echo "\">";
                    echo $this->getAttribute($context["unapproved"], "TOPIC_TITLE", []);
                    echo "</a> [<a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_MCP_TOPIC", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE");
                    echo "</a>]<br />
\t\t\t\t\t\t";
                    // line 39
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    if ($this->getAttribute($context["unapproved"], "U_FORUM", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_FORUM", []);
                        echo "\">";
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", []);
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", []);
                    }
                    if ($this->getAttribute($context["unapproved"], "U_MCP_FORUM", [])) {
                        echo " [<a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_MCP_FORUM", []);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE");
                        echo "</a>]";
                    }
                    echo "</span>
\t\t\t\t\t</dd>

\t\t\t \t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                    // line 42
                    echo $this->getAttribute($context["unapproved"], "POST_ID", []);
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unapproved'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t\t\t</ul>
\t\t";
            }
            // line 48
            echo "
\t\t</div>
\t";
            // line 50
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</div>

\t";
            // line 53
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "unapproved", []))) {
                // line 54
                echo "\t<fieldset class=\"display-actions\">
\t\t";
                // line 55
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t<input class=\"button2\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                // line 56
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" />
\t\t<div><a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', true); return false;\">";
                // line 58
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a></div>
\t</fieldset>
\t";
            }
            // line 61
            echo "\t\t</form>
";
        }
        // line 63
        echo "
";
        // line 64
        // line 65
        echo "
";
        // line 66
        if (($context["S_SHOW_REPORTS"] ?? null)) {
            // line 67
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 70
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_REPORTED");
            echo "</h3>
\t\t<p>";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 73
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "report", []))) {
                // line 74
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 77
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 78
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTER");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "report", []));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 85
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["report"], "S_ROW_COUNT", []) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 89
                    echo $this->getAttribute($context["report"], "U_POST_DETAILS", []);
                    echo "#reports\" class=\"topictitle\">";
                    echo $this->getAttribute($context["report"], "SUBJECT", []);
                    echo "</a> ";
                    if ($this->getAttribute($context["report"], "ATTACH_ICON_IMG", [])) {
                        echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    echo " <br />
\t\t\t\t\t\t\t<span>";
                    // line 90
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["report"], "AUTHOR_FULL", []);
                    echo " &raquo; ";
                    echo $this->getAttribute($context["report"], "POST_TIME", []);
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 94
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["report"], "REPORTER_FULL", []);
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_ON_DATE");
                    echo " <br />
\t\t\t\t\t\t";
                    // line 95
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["report"], "U_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["report"], "FORUM_NAME", []);
                    echo "</a></span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "\t\t\t</ul>
\t\t";
            }
            // line 102
            echo "
\t\t</div>
\t</div>
";
        }
        // line 106
        echo "
";
        // line 107
        // line 108
        echo "
";
        // line 109
        if (($context["S_SHOW_PM_REPORTS"] ?? null)) {
            // line 110
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_REPORTED_PMS");
            echo "</h3>
\t\t<p>";
            // line 114
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 116
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pm_report", []))) {
                // line 117
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 120
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 121
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTER");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "pm_report", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pm_report"]) {
                    // line 128
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["pm_report"], "S_ROW_COUNT", []) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 132
                    echo $this->getAttribute($context["pm_report"], "U_PM_DETAILS", []);
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["pm_report"], "PM_SUBJECT", []);
                    echo "</a> ";
                    if ($this->getAttribute($context["pm_report"], "ATTACH_ICON_IMG", [])) {
                        echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    echo " <br />
\t\t\t\t\t\t\t<span>";
                    // line 133
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "PM_AUTHOR_FULL", []);
                    echo " &raquo; ";
                    echo $this->getAttribute($context["pm_report"], "PM_TIME", []);
                    echo "</span><br />
\t\t\t\t\t\t\t<span>";
                    // line 134
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_TO");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "RECIPIENTS", []);
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 138
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORTER_FULL", []);
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORT_TIME", []);
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "\t\t\t</ul>
\t\t";
            }
            // line 145
            echo "
\t\t</div>
\t</div>
";
        }
        // line 149
        echo "
";
        // line 150
        // line 151
        echo "
";
        // line 152
        if (($context["S_SHOW_LOGS"] ?? null)) {
            // line 153
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 156
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_LOGS");
            echo "</h3>

\t\t<table class=\"table1\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\">";
            // line 161
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 162
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 163
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 164
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 165
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC_LOGS");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 166
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIME");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "log", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 171
                echo "\t\t<tr class=\"";
                if (($this->getAttribute($context["log"], "S_ROW_COUNT", []) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td>";
                // line 172
                echo $this->getAttribute($context["log"], "ACTION", []);
                echo "</td>
\t\t\t<td><span>";
                // line 173
                echo $this->getAttribute($context["log"], "USERNAME", []);
                echo "</span></td>
\t\t\t<td><span>";
                // line 174
                echo $this->getAttribute($context["log"], "IP", []);
                echo "</span></td>
\t\t\t<td><span>";
                // line 175
                if ($this->getAttribute($context["log"], "U_VIEW_TOPIC", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["log"], "U_VIEW_TOPIC", []);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 176
                if ($this->getAttribute($context["log"], "U_VIEWLOGS", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["log"], "U_VIEWLOGS", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC_LOGS");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 177
                echo $this->getAttribute($context["log"], "TIME", []);
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 180
                echo "\t\t<tr>
\t\t\t<td colspan=\"6\">";
                // line 181
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ENTRIES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t\t</tbody>
\t\t</table>

\t\t</div>
\t</div>
";
        }
        // line 190
        echo "
";
        // line 191
        // line 192
        echo "
";
        // line 193
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_front.html", 193)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 193,  591 => 192,  590 => 191,  587 => 190,  579 => 184,  570 => 181,  567 => 180,  559 => 177,  549 => 176,  537 => 175,  533 => 174,  529 => 173,  525 => 172,  516 => 171,  511 => 170,  504 => 166,  500 => 165,  496 => 164,  492 => 163,  488 => 162,  484 => 161,  476 => 156,  471 => 153,  469 => 152,  466 => 151,  465 => 150,  462 => 149,  456 => 145,  452 => 143,  433 => 138,  424 => 134,  416 => 133,  406 => 132,  394 => 128,  390 => 127,  381 => 121,  377 => 120,  372 => 117,  370 => 116,  365 => 114,  361 => 113,  356 => 110,  354 => 109,  351 => 108,  350 => 107,  347 => 106,  341 => 102,  337 => 100,  321 => 95,  311 => 94,  298 => 90,  288 => 89,  276 => 85,  272 => 84,  261 => 78,  257 => 77,  252 => 74,  250 => 73,  245 => 71,  241 => 70,  236 => 67,  234 => 66,  231 => 65,  230 => 64,  227 => 63,  223 => 61,  215 => 58,  211 => 57,  207 => 56,  203 => 55,  200 => 54,  198 => 53,  192 => 50,  188 => 48,  184 => 46,  174 => 42,  150 => 39,  137 => 38,  124 => 34,  114 => 33,  102 => 29,  98 => 28,  87 => 22,  83 => 21,  78 => 18,  76 => 17,  71 => 15,  67 => 14,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  50 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_front.html", "");
    }
}
