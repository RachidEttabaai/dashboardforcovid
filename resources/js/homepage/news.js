let $ = require("jquery");

import { getJsonData } from "./getJsonData";

$(document).ready(function() {

    if ($("#select-country").length) {

        $("#select-country").html($("#select-country").find("option:not(:selected)").sort(function(x, y) {
            return $(x).text() > $(y).text() ? 1 : -1;
        }));

        let countrySelected = $("#select-country option:selected").val();

        getJsonData(countrySelected);

        $("#select-country").change(function() {

            $(this).find("option:selected").each(function() {

                $("#news").empty();
                getJsonData($(this).val());
            });

        });

    }

});
