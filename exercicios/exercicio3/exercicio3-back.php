<?php
		if (isset($_POST['url_digitada'])){
			$link_digitado = $_POST['url_digitada'];
			
			$content = "<html><head><title>Seu Link</title>";
			$content .= "<style>a{font-size:100px;}</style></head><body>";
			$content .= "<a href='$link_digitado'>$link_digitado</a>";
			$content .= "</body></html>";

			$file = fopen("pagina.html", "w");
			fwrite($file, $content);
			fclose($file);
			
			require_once("pagina.html");
		}
	?>