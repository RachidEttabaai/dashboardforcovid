let $ = require("jquery");

let $mountNode = $("#world-map-markers");
$mountNode.empty().css('height', 600);

require('jvectormap-next')($);
$.fn.vectorMap('addMap', 'world-mill', require('jvectormap-content/world-mill'));
$.noConflict();

$(document).ready(function() {

    $mountNode.vectorMap({
        map: 'world-mill',
        backgroundColor: 'transparent',
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        markerStyle: {
            initial: {
                fill: '#F8E23B',
                stroke: '#383f47',
            }
        },
        backgroundColor: '#006994',
        onRegionTipShow: function(e, el, code) {
            let popup = $("#" + code).html();
            el.html(popup);
        }
    });

    false
});
