$(document).ready(function() {


    $("#open").click(function() {
        document.getElementById("manageusers-content").href = "data.html";

    });



});

function readFrom(fileName) {
    $.get(fileName, function(data) {
        alert('terbaca' + data);
        $("#manageusers-content").html(data);

    });
}

function contentChanger() {
    readFrom('data.html');
}