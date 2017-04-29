
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var $commendlineInput = $('#commandline-input');
var $commandlineOutput1 = $('#commandline-output-1');
var $commandlineOutput2 = $('#commandline-output-2');

function typing($el, text, n) {
    if (n < text.length) {
        $el.text(text.substring(0, n + 1));
        n++;
        setTimeout(function() {
            typing($el, text, n)
        }, 100);
    } else {
        setTimeout(function () {
            $commandlineOutput1.show();
            setTimeout(function () {
                $commandlineOutput2.show();
            }, 2000);
        }, 1000);
    }
}


typing($commendlineInput, '$ composer update', 1);