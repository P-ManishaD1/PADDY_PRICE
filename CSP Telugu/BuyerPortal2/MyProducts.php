<html>
    <head>
        <style>
            img{
                border-radius:8px;
            }
            img:hover{
                box-shadow:0 0 2px 1px rgba(0,140,186,0.5);
            }
            /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
}

/* Iframe Styling */
iframe {
    width: 100%;
    height: 150px;
    border: none;
}

/* Table Container */
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Table Cells Styling */
table td {
    padding: 15px;
    text-align: center;
    vertical-align: middle;
    border: 2px solid #ddd;
}

/* Table Header Styling */
table td b {
    font-size: 18px;
    color: #333;
}

/* Image Styling */
img {
    border-radius: 8px;
    width: 150px;
    height: 150px;
    transition: all 0.3s ease-in-out;
}

/* Image Hover Effect */
img:hover {
    box-shadow: 0 0 10px rgba(0, 140, 186, 0.6);
    transform: scale(1.05);
}

/* Input Styling */
input[type="text"] {
    width: 80%;
    padding: 10px;
    margin: 10px 0;
    border: 2px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #00a8cc;
    outline: none;
}

/* Submit Button Styling */
input[type="submit"] {
    padding: 12px 25px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Submit Button Hover Effect */
input[type="submit"]:hover {
    background-color: #218838;
}

/* Footer Section (Submit Button Row) */
table td[colspan="2"] {
    background-color: #28a745;
    color: white;
    font-weight: bold;
}

table td[colspan="2"]:hover {
    background-color: #218838;
}

/* Responsive Design */
@media (max-width: 768px) {
    table {
        width: 95%;
    }

    table td {
        padding: 10px;
    }

    img {
        width: 120px;
        height: 120px;
    }

    input[type="text"] {
        width: 90%;
    }

    input[type="submit"] {
        width: 100%;
    }
}
        </style>
    </head>
   <body>
   <iframe src='top.htm' width=100% height=150></iframe>
    <table align="center" width="80%" >
        <tr>
            <td>
                <form action='<?php echo $_SERVER['PHP_SELF'];?>' method='post'>
                <table align="center">
                    <tr>
                        <td align='center'><img src='BPT.jpg' width=150 height=150></td>
                    </tr>
                    <tr>
                        <td align='center'><b>BPT-5204</b></td>
                    </tr>
                    <tr>
                        <td>ఒక కేజీకి ధరను నవీకరించండి</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='bpt'></td>
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
                        <td>ఒక కేజీకి ధరను నవీకరించండి</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='sona'></td>
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
                        <td>ఒక కేజీకి ధరను నవీకరించండి</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='swarna'></td>
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
                        <td>ఒక కేజీకి ధరను నవీకరించండి</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='mtu'></td>
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
                        <td>ఒక కేజీకి ధరను నవీకరించండి</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='kmp'></td>
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
                        <td>ఒక కేజీకి ధరను నవీకరించండి</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='ir'></td>
                    </tr>
                  
                </table>
            </td>
        </tr>
        <tr>
            <td colspan=2 align="center" style='color:white;background-color:green;'><input type='submit' value='ధరలను నవీకరించండి'></td>
           </tr>
    </table>

</form>
   </body>
</html>
<?php
$bpt=$sona=$swarna=$kmp=$ir=$mtu=0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
$bpt=(int)$_POST["bpt"];
$sona=(int)$_POST["sona"];
$swarna=(int)$_POST["swarna"];
$kmp=(int)$_POST["kmp"];
$ir=(int)$_POST["ir"];
$mtu=(int)$_POST["mtu"];
echo $bpt." ".$sona." ".$swarna."  ".$kmp." ".$ir." ".$mtu;
}
$c=mysqli_connect("localhost","root","","csp");
if($bpt!=0):
$a="update markets set 1_kg=$bpt where Paddy_type='bpt'";
mysqli_query($c,$a);
endif;
if($sona!=0):
$b="update markets set 1_kg=$sona where Paddy_type='Sona'";
mysqli_query($c,$b);
endif;
if($swarna!=0):
$d="update markets set 1_kg=$swarna where Paddy_type='Swarna'";
mysqli_query($c,$d);
endif;
if($mtu!=0):
$e="update markets set 1_kg=$mtu where Paddy_type='MTU'";
mysqli_query($c,$e);
endif;
if($kmp!=0):
$f="update markets set 1_kg=$kmp where Paddy_type='KMP'";
mysqli_query($c,$f);
endif;
if($ir!=0):
$g="update markets set 1_kg=$ir where Paddy_type='IR'";
mysqli_query($c,$g);
endif;
if($bpt!=0||$sona!=0||$swarna!=0||$kmp!=0||$ir!=0||$mtu!=0)
echo "<script>alert('Prices Updated');</script>";
?>