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
                <h1>Incoming Pull Orders</h1>
                <table style="width: 100%" >
                    <tr class="headTable">
                        <th colspan="2">Customer</th>
                        <th>Area</th>
                        <th colspan="2">Order Quantity</th>
                        <th>Water Type</th>
                        <th>Order Time</th>
                    </tr>
                        <?php
                        for($i=10; $i>=0; $i--) {?>
                        <tr class="customerIteration">
                            <td class="customerImage"><img src="/vendorDashboard/Resources/bona.jpg" alt=""></td>
                            <td class="customerName">Elthon Jon F. Cayetano</td>
                            <td class="customerArea">A</td>
                            <td class="numberOfOrders">2</td>
                            <td class="containerType">Round</td>
                            <td class="waterType">Distilled</td>
                            <td class="orderTime">12:59 pm</td>
                        </tr>
                        <?php } ?>
                    
                
                </table>
                   
                
            </aside>
        </section>

    </body>
</html>