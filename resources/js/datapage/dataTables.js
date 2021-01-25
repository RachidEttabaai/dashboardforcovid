let $ = require("jquery");

import "datatables.net/js/jquery.dataTables.min.js";
import "datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
import "datatables.net-responsive/js/dataTables.responsive.min.js";

$(document).ready(function() {

    let table = $('#summarypercountry').DataTable({
        responsive: true
    });

    new $.fn.dataTable.FixedHeader(table);
});
