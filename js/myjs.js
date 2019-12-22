$(document).ready(function () {
    console.log("document loaded")
});

$(window).on("load", function () {
    console.log("window loaded")
});

//BEGIN tim kiem nang cao (AJAX)
function timkiemnangcao() {
    var formData = $('#frmTimKiem').serialize(); //convert tham số input form sang json
    console.log('Posting the following2: ', formData); //debug log

    $.ajax({
        type: 'POST',
        url: 'pages/timkiemnangcao/xlTimKiem.php', //trang xử lí
        data: formData, //tham số truyền vào trang
        success: function (data) {
            document.getElementById("data").innerHTML = data; //set lại sản phẩm
        }
    });

};
//END tim kiem nang cao (AJAX)