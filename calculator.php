<html>
<head>
    <title></title>
</head>
<body>
<form method="post">

    <input type="number" name="so_a" placeholder="nhap vao so a" size="30">
    </br>

    <input type="number" name="so_b" placeholder="nhap vao so b" size="30">
    </br>

    <select name="pheptinh">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    </br>
    <input type="submit" value="ket qua">
</form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pheptinh = $_POST["pheptinh"];
        $so_a=$_POST["so_a"];
        $so_b=$_POST["so_b"];
        if($pheptinh === "+" ){
            echo $so_a+$so_b;
        }
        if($pheptinh === "-" ){
            echo $so_a-$so_b;
        }
        if($pheptinh === "*" ){
            echo $so_a*$so_b;
        }
        if($pheptinh === "/" ){
            if($so_b === 0){
                echo "error";
            }
            else
                echo $so_a/$so_b;
        }
    }
    ?>

</body>
</html>