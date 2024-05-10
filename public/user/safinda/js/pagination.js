function getPageList(totalPages, page, maxLength) {
    function range(start, end) {
        return Array.from(Array(end - start + 1), (_, i) => i + start);
    }
    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

    if (totalPages <= maxLength) {
        return range(1, totalPages);
    }
    if (page <= maxLength - sideWidth - 1 - rightWidth) {
        return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
    }
    if (page >=  totalPages - sideWidth - 1 - rightWidth) {
        return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
    }
    return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));

}
$(function () {
    var nuumberOfItem = $(".konten .work-item").length;
    var limitPerPage = 9;
    var totalPage = Math.ceil(nuumberOfItem / limitPerPage);
    var paginationSize = 7;
    var currentPage;
    function showPage(whichPage) {
        if (whichPage < 1 || whichPage > totalPage)  return false;
        currentPage = whichPage;
        $(".konten .work-item").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();
        $(".pagination li").slice(1, -1).remove();

        getPageList(totalPage, currentPage, paginationSize).forEach(item => {
            $("<li>").addClass(item ? "current-page" : "dots")
            .toggleClass("active", item === currentPage).append($("<a>")
            .attr({href: "javascript:void(0)"}).text(item || "....")).insertBefore(".next-page");
        });

        $(".previous-page").toggleClass("disable", currentPage === 1);
        $(".next-page").toggleClass("disable", currentPage === totalPage);
        return true;
    }
    $(".pagination").append(
        $("<li>").addClass("previous-page").append($("<a>").attr({href: "javascript:void(0)"}).append($("<i>").addClass("fa fa-angle-left"))),
        $("<li>").addClass("next-page").append($("<a>").attr({href: "javascript:void(0)"}).append($("<i>").addClass("fa fa-angle-right"))),

    );
    $(".konten").show();
    showPage(1);
    $(document).on("click", ".pagination li.current-page:not(.active)", function () {
        return showPage(+$(this).text())
    });
    $(".next-page").on("click", function () {
        return showPage(currentPage + 1);
    });
    $(".previous-page").on("click", function () {
        return showPage(currentPage - 1);
    });

});