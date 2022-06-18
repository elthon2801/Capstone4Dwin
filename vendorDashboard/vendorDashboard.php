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
                        "img" => array("/vendorDashboard/Resources/bona.jpg"),
                        "name" => array("Jeffrey F. Canlas", "Elthon Jon F. Cayetano", "Brian Oniel B. Galang", "Bhrandel John M. Perez", "Ilah M. Zamora", "Ernesto Jr. Avellana", "Jonathan Vital", "Harwin Mendoza", "Mark Lagman", "Jonilo Mababa"),
                        "area" => array("A", "B", "C", "D", "E"),
                        "num" => array(random_int(2,25)),
                        "cont" => array("round","box"),
                        "type" => array("Distilled","Alkaline","Purified","Spring","Mineralized")
                    );                

                        for($i=0; $i<=10; $i++) {?>
                        <tr class="customerIteration">
                            <td class="customerImage"><img src="/vendorDashboard/Resources/bona.jpg" alt=""></td>
                            <td class="customerName"><?php echo $storage["name"][$i]?></td>
                            <td class="customerArea"><?php echo $storage["name"][$i]?></td>
                            <td class="numberOfOrders"><?php echo $storage["name"][$i]?></td>
                            <td class="containerType"><?php echo $storage["name"][$i]?></td>
                            <td class="waterType"><?php echo $storage["name"][$i]?></td>
                        </tr>
                        <?php } ?>
                    
                
                </table>
                   
                
            </aside>
        </section>

    </body>
</html>