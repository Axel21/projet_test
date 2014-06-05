<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_1b653362b7a7fb7067418aed0864cedc86081a46705a30544b6d396a7acfc7ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  70 => 26,  66 => 25,  50 => 15,  42 => 12,  32 => 6,  26 => 3,  62 => 24,  49 => 12,  72 => 43,  67 => 15,  61 => 14,  41 => 8,  37 => 8,  22 => 2,  44 => 32,  56 => 36,  52 => 10,  38 => 7,  27 => 4,  23 => 3,  19 => 1,  127 => 33,  122 => 26,  111 => 29,  107 => 27,  105 => 26,  91 => 35,  85 => 18,  71 => 12,  65 => 10,  60 => 6,  54 => 5,  45 => 33,  43 => 10,  36 => 7,  34 => 6,  30 => 5,  24 => 2,  170 => 54,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  146 => 45,  141 => 44,  138 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 30,  109 => 33,  106 => 32,  101 => 24,  96 => 22,  93 => 28,  88 => 26,  83 => 30,  80 => 17,  78 => 16,  68 => 17,  63 => 15,  58 => 16,  53 => 11,  48 => 10,  46 => 14,  39 => 8,  35 => 7,  31 => 5,  28 => 2,);
    }
}
