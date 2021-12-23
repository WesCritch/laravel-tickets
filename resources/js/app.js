require("./bootstrap");

$(".filter-select").change(function () {
    table.column($(this).data("column")).search($(this).val()).draw();
});
