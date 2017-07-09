<?php include 'paths.php'; ?>

<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" href="style.css"
	</head>
	<body>
        <div class="content">
        <a href="counter.php" download="<?php paths::$downloadPath?>" onclick="window.location.reload()">
            <h1 id="btnDownload">Download</h1>
        </a>
            <p>
                <?php
                $total = file_get_contents(paths::$counterPath);
                echo $total;

                // Formatting
                if($total > 1)
                    echo " Downloads";
                else
                    echo " Download";
                ?>
            </p>
        </div>
	</body>
</html>