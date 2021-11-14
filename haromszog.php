<?php include('header.php')?>

<h1 style="text-align:center; text-shadow: 1px 1px red;">Háromszög</h1>
<p>Add meg a háromszög oldalait!</p>

<?php
    $kiiras="";
    $eredmeny="";
    if(isset($_GET["kuld"]))
    {
        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];
        if($a+$b > $c || $a+$c > $b || $b + $c > $a)
        {
            $eredmeny = $a * $b * $c;
            $kiiras="<p>A háromszög kerülete: $eredmeny</p>";
        }
        
    }
?>

<form method="GET" action="">
    <img src="img/haromszog.jpg">
    <ul>
        <li><p>a = <input type="number" name="a"></p></li>
        <li><p>b = <input type="number" name="b"></p></li>
        <li><p>c = <input type="number" name="c"></p></li>
        <li><input type="submit" name="kuld" value="Számolj!"></li>
        <li><?php echo $kiiras;?></li>
    </ul>
</form>



<?php include('footer.php')?>
