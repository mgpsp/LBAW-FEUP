<?php
	function sendToLog($description, $msg) {
		$filename = "../../logs/" . $description . "_" . date("Y-m-d_H:i:s") . ".txt";
		$file = fopen($filename, "w") or die("Unable to open file!");
		$text = $description . "\n" . date("Y-m-d H:i:s") . "\n" . $msg;
		fwrite($file, $text);
		fclose($file);
	}

?>