let $ = require("jquery");

import "datatables.net/js/jquery.dataTables.min.js";
require("datatables.net-fixedheader")(window,$);
require("datatables.net-responsive")(window,$);

$(document).ready(function() {

    $('#summarypercountry').DataTable({
        responsive: true
    });

    new $.fn.dataTable.FixedHeader($('#summarypercountry').DataTable({
        responsive: true
    }));
});
