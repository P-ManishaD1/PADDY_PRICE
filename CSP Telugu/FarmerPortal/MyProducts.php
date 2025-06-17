<?php
$c=mysqli_connect("localhost","root","","csp");$b1=0;$b20=0;$b100=0;
$q="select 1_kg,1_kg*20,1_kg*100 from markets where Paddy_type='bpt'";
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_assoc($r)):
$b1=$s['1_kg'];
$b20=$s['1_kg*20'];
$b100=$s['1_kg*100'];
endwhile;
$q="select 1_kg,1_kg*20,1_kg*100 from markets where Paddy_type='Sona'";$s1=$s20=$s100=0;
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_assoc($r)):
$s1=$s['1_kg'];
$s20=$s['1_kg*20'];
$s100=$s['1_kg*100'];
endwhile;
$q="select 1_kg,1_kg*20,1_kg*100 from markets where Paddy_type='Swarna'";$sa1=$sa20=$sa100=0;
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_assoc($r)):
$sa1=$s['1_kg'];
$sa20=$s['1_kg*20'];
$sa100=$s['1_kg*100'];
endwhile;
$q="select 1_kg,1_kg*20,1_kg*100 from markets where Paddy_type='MTU'";$m1=$m20=$m100=0;
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_assoc($r)):
$m1=$s['1_kg'];
$m20=$s['1_kg*20'];
$m100=$s['1_kg*100'];
endwhile;
$q="select 1_kg,1_kg*20,1_kg*100 from markets where Paddy_type='KMP'";$k1=$k20=$k100=0;
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_assoc($r)):
$k1=$s['1_kg'];
$k20=$s['1_kg*20'];
$k100=$s['1_kg*100'];
endwhile;
$q="select 1_kg,1_kg*20,1_kg*100 from markets where Paddy_type='IR'";$i1=$i20=$i100=0;
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_assoc($r)):
$i1=$s['1_kg'];
$i20=$s['1_kg*20'];
$i100=$s['1_kg*100'];
endwhile;
?>
<html>
    <style>
        img{
            border-radius:8px;
        }
        img:hover{
                box-shadow:0 0 2px 1px rgba(0,140,186,0.5);
            }
            body{
                background-image:linear-gradient(#FFFFFF,#E5E5EA);
            }
            body {
    font-family: Arial, sans-serif;
    background-image: linear-gradient(#FFFFFF, #E5E5EA);
    margin: 0;
    padding: 0;
}

/* Image Styling */
img {
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
}

/* Hover Effect for Images */
img:hover {
    box-shadow: 0 0 15px rgba(0, 140, 186, 0.5);
    transform: scale(1.05);
}

/* Table Styling */
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Table Header */
table th {
    background-color: #f4f4f4;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}

/* Table Cells */
table td {
    padding: 15px;
    text-align: center;
    vertical-align: middle;
}

/* Table Borders */
table, table td, table th {
    border: 2px solid #ddd;
    border-radius: 8px;
}

/* Title and Price Styling */
table td b {
    font-size: 18px;
    color: #333;
}

/* Price Styling */
table td {
    font-size: 16px;
    color: #555;
    padding: 10px 0;
}

/* Aligning the Rows */
table td img {
    width: 150px;
    height: 150px;
}

/* Responsive Design for Mobile */
@media (max-width: 768px) {
    table {
        width: 95%;
    }

    table td img {
        width: 120px;
        height: 120px;
    }

    table td {
        font-size: 14px;
        padding: 8px 0;
    }

    table th {
        font-size: 16px;
    }
}

/* Container for all the rice cards */
.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
}

/* Individual Rice Card */
.card {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* Container for Price Text */
.card .price {
    font-size: 16px;
    color: #444;
    margin-top: 10px;
}

/* Iframe Styling */
iframe {
    width: 100%;
    height: 150px;
    border: none;
}
    </style>
   <body>
    <iframe src='top.htm' width=100% height=150></iframe>
    <table align="center" width="80%" border="2">
        <tr>
            <td>
                <table align="center">
                    <tr>
                        <td align='center'><img src='BPT.jpg' width=150 height=150></td>
                    </tr>
                    <tr>
                        <td align='center'><b>BPT-5204</b></td>
                    </tr>
                    <tr>
                        <td>1 కిలో ధర : RS <?=$b1?>/-</td>
                    </tr>
                    <tr>
                        <td>20 కిలోల ధర : RS <?=$b20?>/-</td>
                    </tr>
                    <tr>
                        <td>100 కిలోల ధర : RS <?=$b100?>/-</td>
                    </tr>
                </table>
            </td>
            <td>
                <table align="center">
                    <tr>
                        <td align='center'><img src='Sona.jpg' width=150 height=150></td>
                    </tr>
                    <tr>
                        <td align='center'><b>Sona</b></td>
                    </tr>
                    <tr>
                        <td>1 కిలో ధర : RS <?=$s1?>/-</td>
                    </tr>
                    <tr>
                        <td>20 కిలోల ధర : RS <?=$s20?>/-</td>
                    </tr>
                    <tr>
                        <td>100 కిలోల ధర : RS <?=$s100?>/-</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table align="center">
                    <tr>
                        <td align='center'><img src='Swarna.jpg' width=150 height=150></td>
                    </tr>
                    <tr>
                        <td align='center'><b>Swarna</b></td>
                    </tr>
                    <tr>
                        <td>1 కిలో ధర : RS <?=$sa1?>/-</td>
                    </tr>
                    <tr>
                        <td>20 కిలోల ధర  : RS <?=$sa20?>/-</td>
                    </tr>
                    <tr>
                        <td>100 కిలోల ధర : RS <?=$sa100?>/-</td>
                    </tr>
                </table>
            </td>
            <td>
                <table align="center">
                    <tr>
                        <td align='center'><img src='MTU-1010.jpg' width=150 height=150></td>
                    </tr>
                    <tr>
                        <td align='center'><b>MTU-1010</b></td>
                    </tr>
                    <tr>
                        <td>1 కిలో ధర : RS <?=$m1?>/-</td>
                    </tr>
                    <tr>
                        <td>20 కిలోల ధర  : RS <?=$m20?>/-</td>
                    </tr>
                    <tr>
                        <td>100 కిలోల ధర : RS <?=$m100?>/-</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table align="center">
                    <tr>
                        <td align='center'><img src='KMP-104.jpg' width=150 height=150></td>
                    </tr>
                    <tr>
                        <td align='center'><b>KMP-104</b></td>
                    </tr>
                    <tr>
                        <td>1 కిలో ధర : RS <?=$k1?>/-</td>
                    </tr>
                    <tr>
                        <td>20 కిలోల ధర  : RS <?=$k20?>/-</td>
                    </tr>
                    <tr>
                        <td>100 కిలోల ధర : RS <?=$k100?>/-</td>
                    </tr>
                </table>
            </td>
            <td>
                <table align="center">
                    <tr>
                        <td align='center'><img src='IR-64.jpg' width=150 height=150></td>
                    </tr>
                    <tr>
                        <td align='center'><b>IR-64</b></td>
                    </tr>
                    <tr>
                        <td>1 కిలో ధర : RS <?=$i1?>/-</td>
                    </tr>
                    <tr>
                        <td>20 కిలోల ధర : RS <?=$i20?>/-</td>
                    </tr>
                    <tr>
                        <td>100 కిలోల ధర : RS <?=$i100?>/-</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
   </body>
</html>