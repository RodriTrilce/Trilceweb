/**
 * @fileOverview
 * @author Zoltan Toth
 * @version 1.0.0
 */

import { Events } from './helpers/events';
import Loading from './helpers/loading_trilce';

/**
 * @description
 * Vanilla Javascript Tabs
 *
 * @class
 * @param {string} options.elem - HTML id of the tabs container
 * @param {number} [options.open = 0] - Render the tabs with this item open
 */
var Tabs = function(options) {
    var elem         = document.getElementById(options.elem),
        open         = options.open || 0,
        titleClass   = 'js-tabs__title',
        activeClass  = 'js-tabs__title-active',
        contentClass = 'js-tabs__content',
        tabsNum      = elem.querySelectorAll('.' + titleClass).length,
        events       = new Events();


    /**
     * Start tabs.
     */
    function init() {
      /*      if(asyncTabs){
              window.onload = () => {

              }
            }else{
              render();
            }
      */
      render();
    }

    /**
     * Initial rendering of the tabs.
     */
    function render(n) {
        elem.addEventListener('click', onClick);

        var init = (n == null) ? checkTab(open) : checkTab(n);

        for (var i = 0; i < tabsNum; i++) {
            elem.querySelectorAll('.' + titleClass)[i].setAttribute('data-index', i);
            if (i === init) openTab(i);
        }
        events.emit('render', info());
    }

    /**
     * Handle clicks on the tabs.
     *
     * @param {object} e - Element the click occured on.
     */
    function onClick(e) {
        if (e.target.className.indexOf(titleClass) === -1) return;
        e.preventDefault();
        openTab(e.target.getAttribute('data-index'));
    }

    /**
     * Hide all tabs and re-set tab titles.
     */
    function reset() {
        [].forEach.call(elem.querySelectorAll('.' + contentClass), function(item) {
            //item.style.visibility = 'hidden';
            item.classList.remove('js-tab-container-active');
        });

        [].forEach.call(elem.querySelectorAll('.' + titleClass), function(item) {
            item.className = removeClass(item.className, activeClass);
        });
    }

    /**
     * Utility function to remove the open class from tab titles.
     *
     * @param {string} str - Current class.
     * @param {string} cls - The class to remove.
     */
    function removeClass(str, cls) {
        var reg = new RegExp('(\ )' + cls + '(\)', 'g');
        return str.replace(reg, '');
    }

    /**
     * Utility function to remove the open class from tab titles.
     *
     * @param n - Tab to open.
     */
    function checkTab(n) {
        return (n < 0 || isNaN(n) || n > tabsNum) ? 0 : n;
    }

    /**
     * Opens a tab by index.
     *
     * @param {number} n - Index of tab to open. Starts at 0.
     *
     * @public
     */
    function openTab(n) {
        reset();

        var i = checkTab(n);

        elem.querySelectorAll('.' + titleClass)[i].className += ' ' + activeClass;
        elem.querySelectorAll('.' + contentClass)[i].classList.add('js-tab-container-active');

        // Emit openTab event
        events.emit('openTab', info());
    }

    /**
     * Updates the tabs.
     *
     * @param {number} n - Index of tab to open. Starts at 0.
     *
     * @public
     */
    function update(n) {
        destroy();
        reset();
        render(n);
    }

    /**
     * Removes the listeners from the tabs.
     *
     * @public
     */
    function destroy() {
        elem.removeEventListener('click', onClick);
    }

    /**
     * Info tabs for events emit callback.
     *
     * @public
     */
    function info (e) {
      return {
        elem,
        open,
        titleClass,
        activeClass,
        contentClass,
        tabsNum,
        events,
        event: e || {},
      };
    }

    return {
        open: openTab,
        update: update,
        destroy: destroy,
        events: events,
        init: init
    };
};

export {Tabs}
