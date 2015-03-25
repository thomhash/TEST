<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<h1>Ordre oversigt: </h1>
<a href="admin_menu.php">Menu</a><br>
<br>
<button onclick="print()">Print siden</button>
<center>
    <h4> <a href="tjek_ordre.php?type=1">Ikke påbegyndte ordre</a>   -   <a href="tjek_ordre.php?type=2"> påbegyndte ordre</a>   -   <a href="tjek_ordre.php?type=3"> Behandlede ordre</a></h4>
</center>
<strong>
    <?php
    require '../fl/get_ordre.php';
    $type = 1;

    if (isset($_GET["type"])) {
        $type = $_GET["type"];
    }

    $ordre = hent_ordre_ikke_begyndt();

    if ($type == 1) {
        $ordre = hent_ordre_ikke_begyndt();
        echo "Ikke påbegyndte ordre:";
    } else if ($type == 2) {
        $ordre = hent_ordre_begyndt();
        echo "påbegyndte ordre:";
    } else if ($type == 3) {
        $ordre = hent_ordre_afsluttet();
        echo "Behandlede ordre:";
    }


    $rnr = 0;
    $knr = 0;
    ?>
</strong>
<table style="width:100%" border="2">
    <?php
    foreach ($ordre as $rn) {
        ?>
        <tr>
            <td>
                <?php
                if ($type == 1) {
                    ?> 

                    <form action="../fl/set_pakning.php" method="POST">
                        <input type="hidden" name="type_pak" value="start">
                        <input type="hidden" name="ordre_id" value="<?php echo $ordre[$rnr][0]; ?>">
                        <input type="submit" value="Begynd pakning">
                    </form>
                    <?php
                } else if ($type == 2) {
                    
                
                ?> 
                <form action="../fl/set_pakning.php" method="POST">

                    <input type="hidden" name="type_pak" value="slut">
                    <input type="hidden" name="ordre_id" value="<?php echo $ordre[$rnr][0]; ?>">
                    <input type="submit" value="Afslut pakning">
                </form>
                 <?php
                 }
                 else{
                     echo "Ordre er afsluttet";
                 }
                ?> 
            </td>
            <td>Ordre id</td>
            <td>Kunde</td> 
        </tr>
    <?php
    foreach ($ordre[$rnr] as $rn) {
        if ($knr == 0) {
            ?> <tr> 
                    <td>
                        <a href="tjek_ordre_id.php?id=<?php echo $ordre[$rnr][0]; ?>"> Se ordre </a>
                    </td>
                    <td>
            <?php echo ($ordre[$rnr][0]); ?>
                    </td>
                    <td>
            <?php echo ($ordre[$rnr][1]); ?> 
                    </td>
                </tr> 
            <?php
        }

        if ($knr == 0) {
            ?>
                <tr>
                    <td>Variant id</td>
                    <td>Antal</td> 
                    <td>Navn</td>
                    <td>Variant</td> 
                    <td>Farve</td>
                    <td>Mærke</td>
                </tr>
            <?php
            $ind_rnr = 0;
            $ind_knr = 0;
            foreach (hent_ordre_information($ordre[$rnr][$knr]) as $r) {
                ?> <tr> <?php
                    foreach (hent_ordre_information($ordre[$rnr][$knr])[$ind_rnr] as $r) {
                        ?> <td><?php
                            echo hent_ordre_information($ordre[$rnr][$knr])[$ind_rnr][$ind_knr];
                            $ind_knr++;
                            ?> </td><?php
                            }
                            $ind_knr = 0;
                            $ind_rnr++;
                        }
                        ?> </tr> <?php
                    $ind_rnr = 0;
                    $knr++;
                }
            }
            $knr = 0;
            $rnr++;
        }
        ?>
    <script>
        function myFunction() {
            window.print();
        }
    </script>