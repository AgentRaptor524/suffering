<!doctype html>
<html lang="en">
<head>

    <title>selectScript</title>
    <?php
    $hSchool = "Barberton"
    ?>
    <script>
        function getSelectValues() {
            var x = document.getElementById("home_school");
            var L = x.length;
            var setValue = "<?php echo $hSchool?>";
            var index;
            for (let i = 0; i < L; i++) {
                if (x.options[i].value == setValue) {
                    index = i;
                }
            }

            alert(index);
            document.getElementById("home_school").selectedIndex = index;
        }
    </script>
</head>
<body onLoad="getSelectValues();">
<p><label for="home_school">Home school:</label>
    <select name="home_school" id="home_school">
        <option value="Barberton">Barberton city schools</option>
        <option value="Wadsworth">Wadsworth city schools</option>
        <option value="Norton">Norton city schools</option>
        <option value="Copley">Copley city schools</option>
    </select></p>
</body>
</html>