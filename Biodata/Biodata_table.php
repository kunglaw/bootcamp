<?php
    include "Biodata.php";

    $biodataObj = new Biodata();
    $biodataObj->set_name("Aries Dimas Yudhistira");
    $biodataObj->set_alamat("Jl. Muhammad Kup , Gg Sadeli , Tangerang, Banten");
    $biodataObj->set_hobby(array("Ngoding","Nonton Anime","Baca Sejarah"));
    $biodataObj->set_skill(array("HTML 5","CSS 3","Codeigniter","Laravel 5.5","Javascript","Jquery","Bootstrap 4","React Native"));
    $biodataObj->set_email("alhusna901@gmail.com");

    $name   = $biodataObj->get_name();
    $alamat = $biodataObj->get_alamat();
    $hobby  = $biodataObj->get_hobby();
    $skill  = $biodataObj->get_skill();
    $email  = $biodataObj->get_email();
?>

<html>
    <head> 
        <title> Biodata </title>
    </head>
    <body>
        <h1> Biodata </h1>
        <hr> 
        <table border="1" cellpadding="10">
           <tr> 
                <td> Nama </td>
                <td> <?=$name?> </td>
           </tr> 
           <tr> 
                <td> Email </td>
                <td> <?=$email?> </td>
           </tr> 
           <tr> 
                <td> Hobby </td>
                <td> <ul> <?php 
                    foreach($hobby as $row)
                    {
                        echo "<li> $row </li>";
                    }
                
                ?> </ul> </td>
           </tr> 
           <tr>
                <td> Skill </td>
                <td>
                    <ul>
                        <?php 
                            foreach($skill as $row)
                            {
                                echo "<li> $row </li>";
                            }
                        
                        ?>
                    </ul>
                </td>
           </tr>
           <tr>
                <td> Alamat </td>
                <td> <?=$alamat?></td>
           </tr>
        </table>
    </body>
</html>