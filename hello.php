<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
        text-align: center;
    }
    .headerpd{
        height: 50px;
        background-color:black;
        color:pink;
    }
    .pd{
        background-color:#a19f9f;
    }
</style>
<body>
    <table style="width:100%">
    <tr class="headerpd">
        <th >product</th>
        <th>name</th>
        <th>price</th>
    </tr>
    <?php
    function hello($name){
        echo "Hello $name";
    }
        $productBlink = array(
            array("1.png","LOVESICK GIRLS T-SHIRT I",35),
            array("2.png","LOVESICK GIRLS T-SHIRT II",35),
            array("3.png","LOVESICK GIRLS L/S I",45),
            array("4.png","LOVESICK GIRLS HOODIE I",65),
            array("5.png","LOVESICK GIRLS HOODIE II",65),
            array("6.png","LOVESICK GIRLS SWEATPANTS I",65,),
            array("7.png","LOVESICK GIRLS SWEATPANTS II",65,),
            array("8.png","THE ALBUM T-SHIRT I",35),
            array("9.png","THE ALBUM T-SHIRT II",35),
            array("10.png","THE ALBUM CREWNECK",55)
        );
        $name = "chonlatad charoenying 6230300222 hw PHP";
        echo "$name<br/>";

        for($i=0;$i<10;$i++){
            $r=rand(0,256);
            $g=rand(0,256);
            $b=rand(0,256);
            
                    $namepd =  $productBlink[$i][0] ;
                ?>
                    <tr>
                        <td class="pd"><?php echo "<img src='$namepd' style='width:350px;height:350px;'>"; ?></td>
                        <td class="pd"><?php echo "<p style ='color:rgb($r,$g,$b)'>". $productBlink[$i][1] ."</p>"; ?></td>
                        <td class="pd"><?php echo "<p style ='color:rgb($r,$g,$b)'>". $productBlink[$i][2] .' us'."</p>"; ?></td>
                    </tr>
                    
                <?php

        }
    ?>
    
    </table>

</body>
</html>