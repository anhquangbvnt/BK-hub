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
    <p>Celsius: <span id="outputChuVi"></span></p>
    <p>Celsius: <span id="outputDienTich"></span></p>
</form>

<script>

    function temperatureConverter(valNum) {
        valNum = parseFloat(valNum);
        document.getElementById("outputCelsius").innerHTML = (valNum-32) / 1.8;
    }

</script>
</body>
</html>