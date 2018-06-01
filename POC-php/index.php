<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piece of Cake</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <?php
			if (isset($_GET['page'])) {
				switch ( $_GET ["page"] ) {

				case  'documentation';
				$content="pages/documentation.php";
				break;
				
				case  'download';
				$content="download.php";
				break;
				
				case  'localizacao';
				$content="documentation.php";
				break;
				
				case  'contatos';
				$content="documentation.php";
				break;
                
                # SideBar menu
				case  'forms';
				$content="pages/forms.php";
				break;                           
                
                case  'grid';
				$content="pages/grid.php";
				break;

                case  'tables';
				$content="pages/tables.php";
				break;
                
                # End SideBar menu
                        
				default;
				$content="home.php";
				break;
			}

			} else {
				$content="home.php";
			}
		?>

</head>

<body>

    <div class="poc-main">
        <header class="poc-header poc-ph4">
            <?php include 'includes/header.php';?>
        </header>

        <div class="">
            <section class="poc-flex-row">
                <?php include $content; ?>
            </section>
        </div>
        <footer class="poc-pv2">
            <?php include 'includes/footer.php';?>
        </footer>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/fontawesome-all.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
