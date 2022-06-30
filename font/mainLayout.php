<!-- MAIN LAYOUT -->
<html>

<head>
    <title>La librairie d'In'Tech INFO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.0.0/css/pro.min.css">
    <link rel="stylesheet" href="#">
</head>

<body>
    <!-- HEADER -->
    <?php include('./header.php') ?>
    <!-- BODY -->
    <?php include($content_for_layout); ?>
    <!-- FOOTER -->



    <!-- <table border="1" cellspacing="0" cellpadding="5px" width="100%">
        <tr>
            <td colspan="2" align="center" style="background-color: #cccccc">
                <h1 style="background-color: #cccccc; margin: 0px;padding:0px">La librairie d'In'Tech INFO</h1>
                <h6 style="background-color: #cccccc; margin: 0px;padding:0px">Nous sommes le <?= date("Y/m/d")?> et il
                    est <?=date("h:i:sa")?></h6>
            </td>
        </tr>
        <tr>
            <td valign="top" style="background-color: cyan" width="100px">
                <a href="index.php?action=index.php"><?=ucwords("accueil")?></a><br />
                <a href="index.php?action=showcart.php"><?=ucwords("voir le panier ")?></a><br />
                <a href="index.php?action=questions.php"><?=ucwords("question")?></a><br />
                <a href="index.php?action=news.php"><?=ucwords("nouveautés")?></a><br />
                <a href="index.php?action=contact.php"><?=ucwords("contact")?></a><br />
                <a href="index.php?action=about.php"><?=ucwords("a propos")?></a><br />
                <a href="index.php?action=debug.php"><?=ucwords("debug")?></a>
            </td>
            <td>
                <?php 
				include($content_for_layout);
			?>
            </td>
        </tr>
    </table> -->

</body>

</html>