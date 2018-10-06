const csrf = $("meta[name='csrf-token']").attr('content')
$(document).ready(function () {
    $('#sidebarCollapse').click(function (event) {
        $('#sidebar').toggleClass('active');
        select2()
    });

    $(".logout").click(function(event){
        event.preventDefault()
        let form = $("<form>", {
            method: "POST",
            action: "/logout"
        }).append($("<input>", {
            name: "_token",
            value: csrf
        })).appendTo("body").submit()
    })
    $(".delete").click(function(event){
        event.preventDefault()
        let form = $("<form>", {
            method: "POST",
            action: $(this).attr("href")
        }).append([
            $("<input>", {
                name: "_token",
                value: csrf
            }),
            $("<input>", {
                name: "_method",
                value: "DELETE"
            })
        ]).appendTo("body").submit()
    })
});