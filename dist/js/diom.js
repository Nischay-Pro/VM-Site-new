/**
 * A lightweight DOM Manipulator. good for embeddeding in your VanillaJS library
 * @version 1.0.0
 * @author Rasool Dastoori [http://dastoori.com]
 * @repo http://github.com/dastoori/diom
 * @license MIT
 * @lastModified 2015-03-29
 */
 (function (root, factory) {
     if (typeof define === 'function' && define.amd) {
         // AMD. Register as an anonymous module.
         define([], factory);
     } else if (typeof exports === 'object') {
         // CommonJS
         module.exports = factory();
     } else {
         // Browser globals (root is window)
         root.D = factory();
     }
 })(this, function () {
    var D = {
        all: function (selector, parent) {
            return (parent || document).querySelectorAll(selector);
        },

        one: function (selector, parent) {
            return (parent || document).querySelector(selector);
        },

        id: function (selector) {
            return document.getElementById(selector);
        },

        create: function (tagName, attrs, styles) {
            var elem = document.createElement(tagName);

            D.attrs(elem, attrs);

            if (styles) {
                Object.keys(styles).forEach(function (key) {
                    elem.style[key] = styles[key];
                });
            }
            return elem;
        },

        isElement: function (obj) {
            if (typeof HTMLElement === 'object') {
                return obj instanceof HTMLElement;
            }
            return obj &&
                   typeof obj === 'object' &&
                   obj.nodeType === 1 &&
                   typeof obj.nodeName === 'string';
        },

        toElement: function (html, isMultiple) {
            var elem = document.createElement('div');
            elem.innerHTML = html;
            return isMultiple ? elem.children : elem.children[0];
        },

        attrs: function (elem, attrs) {
            Object.keys(attrs || {}).forEach(function (key) {
                elem.setAttribute(key, attrs[key]);
            });
            return elem;
        },

        removeAttrs: function (elem, attrs) {
            Object.keys(attrs || {}).forEach(function (key) {
                elem.removeAttribute(key);
            });
        },

        prepend: function (parent, elem) {
            return parent.insertBefore(elem, parent.children[0]);
        },

        append: function (parent, elem) {
            return parent.appendChild(elem);
        },

        remove: function (elem) {
            elem.parentElement.removeChild(elem);
        },

        empty: function (parent) {
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
            return parent;
        },

        /**
         * DOM class helper with fallback for IE 9
         * modified version of https://github.com/desandro/classie
         *
         * @method {Boolean} has({String:name})
         * @method {Element} add({Element:elem}, {String:name})
         * @method {Element} remove({Element:elem}, {String:name})
         * @method {Element} toggle({Element:elem}, {String:name})
         */
        classList: (function () {
            var obj = {};
            var regex = function (name) {
                return new RegExp('(^|\\s+)' + name + '(\\s+|$)');
            };

            if ('classList' in document.documentElement) {
                obj = {
                    has: function (elem, name) {
                        return elem.classList.contains(name);
                    },
                    add: function (elem, name) {
                        elem.classList.add(name);
                        return elem;
                    },
                    remove: function (elem, name) {
                        elem.classList.remove(name);
                        return elem;
                    }
                };
            } else {
                obj = {
                    has: function (elem, name) {
                        return regex(name).test(elem.className);
                    },
                    add: function (elem, name) {
                        if (!obj.has(elem, name)) {
                            elem.className += ' ' + name;
                        }
                        return elem;
                    },
                    remove: function (elem, name) {
                        elem.className = elem.className.replace(regex(name), ' ');
                        return elem;
                    }
                };
            }

            obj.toggle = function (elem, name) {
                obj[obj.has(elem, name) ? 'remove' : 'add'](elem, name);
                return elem;
            };
            return obj;
        })(),

        /**
         * Template engine
         * @param   {String} template
         * @param   {Object} params   Template parameters
         * @param   {String} handlers Parameter handlers
         * @returns {String}
         */
        tmpl: function (template, params, handlers) {
            if (!params) {
                return template;
            }

            handlers = handlers ? handlers.split(' ') : ['{', '}'];

            var escapeRegExp = function (str) {
                return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, '\\$&');
            };

            Object.keys(params).forEach(function (key) {
                template = template.replace(
                    new RegExp(handlers[0] + escapeRegExp(key) + handlers[1], 'g'),
                    params[key]
                );
            });
            return template;
        },

        /**
         * Compile template and return Element
         * @param  {String} template
         * @param  {Object} params   Template parameters
         * @returns {Element}
         */
        compile: function (template, params) {
            return D.toElement(D.tmpl(template, params));
        },

        /**
         * Compute element styles
         * @param   {Element} elem
         * @returns {Object}       All element styles
         */
        elementStyles: function (elem) {
            return window.getComputedStyle(elem);
        },

        /**
         * Merge defaults with options
         * @private
         * @param   {Object}    defaults Default settings
         * @param   {...Object} options User options
         * @returns {Object}    Merged values of defaults and options
         */
        extend: function (defaults /* , ...options */) {
            [].slice.call(arguments, 1).forEach(function (options) {
                if (!options) {
                    return;
                }
                Object.keys(options).forEach(function (prop) {
                    defaults[prop] = options[prop];
                });
            });
            return defaults;
        }
    };
    return D;
});
