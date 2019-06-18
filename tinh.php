<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tính chu vi diện tích </title>
</head>
<body>

<form>
    <p>
        <label>Bán kính đường tròn : </label>
        <input id="inputBanKinh" type="number" placeholder="R"
               oninput="temperatureConverter(this.value)"
               onchange="temperatureConverter(this.value)">
    </p>
    <p>Chu Vi Đường tròn: <span id="outputChuVi"></span></p>
    <p>Diện Tích Đường tròn: <span id="outputDienTich"></span></p>
</form>

<script>

    function temperatureConverter(valNum) {
        valNum = parseFloat(valNum);
        document.getElementById("outputChuVi").innerHTML = 2*3.14*valNum;
    }
    // function temperatureConverter(valNum) {
    //     valNum = parseFloat(valNum);
    //     document.getElementById("outputDienTich").innerHTML = 3.14*valNum*valNum;
    // }

</script>
</body>
</html>