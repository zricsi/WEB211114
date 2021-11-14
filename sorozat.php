<?php include('header.php')?>

<h1 style="text-align:center; text-shadow: 1px 1px red;">Számtani sorozat generálása</h1>


<?php
    $kiiras="";
    if(isset($_GET["kuld"]))
    {
       
        
    }
    
?>


<form id="soro" method="GET" action="">
    <table>
        <tr>
            <td>Első elem</td>
            <td> a1= </td>
            <td><input type="number" name="a"></td>
        </tr>
        <tr>
            <td>Differenciál</td>
            <td> d= </td>
            <td><input type="number" name="b"></td>
        </tr>
        <tr>
            <td>Elemek száma</td>
            <td> n= </td>
            <td><input type="number" name="c"></td>
        </tr>
        <tr>
            <td><input type="submit" name="kuld" value="Generálás"></td>
        </tr>
    </table>
    <img src="img/sorozat.gif">
    <h2><b>Generált sorozat</h2>
    <?php echo $kiiras;?>
</form>


<?php include('footer.php')?>