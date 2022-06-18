<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="shortcut icon" href="/loginSignup/resources/reservoir 200x200.png" type="image/x-icon">
        <link rel="stylesheet" href="vendorDashboard.css">
    </head>
    <body>
        <header>
            <nav>
                <label class="logo">Reservoir</label>
                <ul>
                    <li><a class="active" href="#">Sample</a></li>
                    <li><a href="#">Sample</a></li>
                    <li><a href="#">Sample</a></li>
                    <li><a href="#">Sample</a></li>
                    <li><a href="#">Sample</a></li>
                </ul>
            </nav>
        </header>

        <section id="dashboard">
            <aside id="pull">
                <h1>Latest Pull Orders</h1>
                <table style="width: 100%" >
                    <tr class="headTable">
                        <th colspan="2">Customer</th>
                        <th>Area</th>
                        <th colspan="2">Order Quantity</th>
                        <th>Water Type</th>
                    </tr>
                    <?php
                    $storage = array(
                        "img" => array("/vendorDashboard/Resources/jeff.jpg","/vendorDashboard/Resources/bona.jpg","/vendorDashboard/Resources/bri.jpg","/vendorDashboard/Resources/bhra.jpg","/vendorDashboard/Resources/ilah.jpg","/vendorDashboard/Resources/jayr.jpg","/vendorDashboard/Resources/jonat.jpg","/vendorDashboard/Resources/har.jpg","/vendorDashboard/Resources/mark.jpg","/vendorDashboard/Resources/jon.jpg",),
                        "name" => array("Jeffrey F. Canlas", "Elthon Jon F. Cayetano", "Brian Oniel B. Galang", "Bhrandel John M. Perez", "Ilah M. Zamora", "Ernesto Jr. Avellana", "Jonathan Vital", "Harwin Mendoza", "Mark Lagman", "Jonilo Mababa"),
                        "area" => array("A", "B", "C", "D", "E", "A", "B", "C", "D", "E"),
                        "num" => array(random_int(2,25),random_int(2,25),random_int(2,25),random_int(2,25),random_int(2,25),random_int(2,25),random_int(2,25),random_int(2,25),random_int(2,25),random_int(2,25)),
                        "cont" => array("round","box","round","box","round","box","round","box","round","box"),
                        "type" => array("Distilled","Alkaline","Purified","Spring","Mineralized", "Distilled","Alkaline","Purified","Spring","Mineralized")
                    );                

                        for($i=0; $i<=10; $i++) {?>
                        <tr class="customerIteration">
                            <?php $iter=random_int(0,9); ?>
                            <td class="customerImage"><img src="<?php echo $storage["img"][$iter]?>" alt=""></td>
                            <td class="customerName"><?php echo $storage["name"][$iter]?></td>
                            <td class="customerArea"><?php echo $storage["area"][$iter]?></td>
                            <td class="numberOfOrders"><?php echo $storage["num"][$iter]?></td>
                            <td class="containerType"><?php echo $storage["cont"][$iter]?></td>
                            <td class="waterType"><?php echo $storage["type"][$iter]?></td>
                        </tr>
                        <?php } ?>
                    
                
                </table>
                   
                
            </aside>
        </section>

    </body>
</html>