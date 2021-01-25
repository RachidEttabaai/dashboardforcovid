let $ = require("jquery");

require("datatables.net")(window,$);
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
