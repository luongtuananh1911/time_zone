<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Ung dung xem gio hien tai cua thanh pho</h1>
    <label for="select-city"></label>
    <select id="select-city">
        <option>Chon thanh pho</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_kong">Hong kong</option>
        <option value="Asia-Ho_chi_minh">Ho chi minh, Viet Nam</option>
    </select>
</div>
<script>
    document.getElementById('select-city').onchange = function (){
        ChooseCity()
    };
    function ChooseCity() {
        let time_zone = document.getElementById('select-city');
        window.location.href = time_zone.value;
    }
</script>
</body>
</html>
