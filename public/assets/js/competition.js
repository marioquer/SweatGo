/**
 * Created by marioquer on 2016/12/4.
 */
function newCompetition(id) {
    var input = $(".datepicker").val(), temp, isEmpty = false;
    if (input != "") {
        input = input.split(" ");
        input[1] = input[1].split(",")[0];
        temp = input[1];

        switch (input[1]) {
            case "January":
                temp = 1;
                break;
            case "February":
                temp = 2;
                break;
            case "March":
                temp = 3;
                break;
            case "April":
                temp = 4;
                break;
            case "May":
                temp = 5;
                break;
            case "June":
                temp = 6;
                break;
            case "July":
                temp = 7;
                break;
            case "August":
                temp = 8;
                break;
            case "September":
                temp = 9;
                break;
            case "October":
                temp = 10;
                break;
            case "November":
                temp = 11;
                break;
            case "December":
                temp = 12;
                break;
        }
        var date = input[2] + "-" + temp + "-" + input[0];
    } else {
        date = "";
    }
    var datas = new Array();
    datas[0] = id;
    datas[1] = $("#comName").val();
    datas[2] = $("#introduction").val();
    datas[3] = date;
    datas[4] = $("#comClass").val();
    datas[5] = $("#comType").val();
    datas[6] = $("#target").val();

    for (var i = 0; i < datas.length; i++) {
        if (datas[i] == "") {
            isEmpty = true;
            break;
        }
    }

    //判断输入是否为数字
    var reg = /\D/;
    var isNum = datas[6].match(reg) == null;

    if (isNum) {
        if (!isEmpty) {
            datas = JSON.stringify(datas);
            $.ajax({
                type: "post",
                async: false, //同步执行
                url: 'publish',
                data: {"datas": datas},
                success: function (result) {
                    if (result == "success") {
                        Materialize.toast('发布成功!', 1200);
                        window.location.reload();
                    }
                },
                error: function () {
                    Materialize.toast('服务器出问题啦, 发布失败!', 1200);
                }
            });
        } else {
            Materialize.toast('您还没有填写完成噢!', 1200);
        }
    } else {
        Materialize.toast('目标值必须为整数噢!', 1200);
    }
}

function join(node, id) {
    var comId = node.parentNode.parentNode.getElementsByClassName("comId")[0].innerHTML;

    $.ajax({
        type: "post",
        async: false, //同步执行
        url: 'join',
        data: {
            "comId": comId,
            "uid": id
        },
        success: function (result) {
            if (result == "success") {
                Materialize.toast('加入成功!', 1200);
                setTimeout("window.location.href = 'joined'",1200);
            }
        },
        error: function () {
            Materialize.toast('服务器出问题啦, 发布失败!', 1200);
        }
    });


}

function detail() {

}
