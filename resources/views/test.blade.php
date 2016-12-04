<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a id="uploadBody" href="javascript:addBody()">上传身体数据</a>
<br>
<br>
<a id="uploadExercise" href="javascript:addExercise()">上传运动数据</a>
<br>
<br>
<a id="uploadSleep" href="javascript:addSleep()">上传睡眠数据</a>
<br>
<br>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    function addBody() {
        var datas = new Array();
        var temp = 0, temp2 = 0;

        for (var i = 0; i < 100; i++) {
            if (temp != 5) {
                temp++;
            } else {
                temp = 0;
                temp2++;
            }
            datas[i] = new Array();
            datas[i][0] = 1;
            datas[i][1] = 160 + temp2;
            datas[i][2] = 45 + temp2 * 0.8;
            datas[i][3] = 90 + Math.ceil(Math.random() * 20);
        }

        var input = JSON.stringify(datas);

        $.ajax({
            method: "post",
            url: "health/body/addMany",
            async: false,
            data: {
                "datas": input,
            },
            success: function (result) {
                if (result == "success") {
                    alert(1);
                } else {
                    alert(0);
                }
            },
            error: function () {
                alert("wrong");
            }
        });
    }

    function addExercise() {
        var datas = new Array();

        for (var i = 0; i < 100; i++) {
            datas[i] = new Array();
            datas[i][0] = 1;
            datas[i][1] = 8000 + Math.ceil(Math.random() * 6000);
            datas[i][2] = 4.8 + Math.ceil(Math.random() * 3);
            datas[i][3] = (1 + Math.random()).toFixed(1);
            datas[i][4] = 60 + Math.ceil(Math.random() * 40);
        }

        var input = JSON.stringify(datas);

        $.ajax({
            method: "post",
            url: "health/exercise/addMany",
            async: false,
            data: {
                "datas": input,
            },
            success: function (result) {
                if (result == "success") {
                    alert(1);
                } else {
                    alert(0);
                }
            },
            error: function () {
                alert("wrong");
            }
        });

    }

    function addSleep() {

        var datas = new Array();
        var sHour,eHour;

        for (var i = 0; i < 100; i++) {
            datas[i] = new Array();
            datas[i][0] = 1;
            sHour = 21 + Math.ceil(Math.random() * 3);
            eHour = 7 + Math.ceil(Math.random() * 2);
            datas[i][1] = sHour+":00:00";
            datas[i][2] = eHour+":00:00";
            datas[i][3] = (24 - sHour) + eHour;
            datas[i][4] = 2 + Math.ceil(Math.random() * 2);
            datas[i][5] = Math.ceil(Math.random() * 4);
        }

        var input = JSON.stringify(datas);

        $.ajax({
            method: "post",
            url: "health/sleep/addMany",
            async: false,
            data: {
                "datas": input,
            },
            success: function (result) {
                if (result == "success") {
                    alert(1);
                } else {
                    alert(0);
                }
            },
            error: function () {
                alert("wrong");
            }
        });

    }


</script>
</body>
</html>

