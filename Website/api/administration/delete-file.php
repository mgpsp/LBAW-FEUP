<?php
	if (unlink($_GET['file']))
		echo json_encode('success');
	else
		echo json_encode('error');
?>