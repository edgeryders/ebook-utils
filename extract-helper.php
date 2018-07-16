<?php

/*
@edgeryders.eu
@this file extract the specific content from the given url.
*/


error_reporting(0);

echo '<!DOCTYPE html>
<html>
<head>
	<title>Extractor</title>
</head>

<style>
#error {
	color: red;
	font-size: 20px;
}
</style
<body>';
$action = $_GET['action'];

switch ($action) {
	case 'format':
		$get_content = file_get_contents($_GET['url'], 0, NULL, 0, 1500);
		preg_match('/Title: (.*)/', $get_content, $title);
		$data = '**[' . trim($title[1]) . '](' . $_GET['url'] .
	').** Project Gutenberg text no. ' . $_GET['project_code'] . '.' .
	"\n\n";

if(!isset($title[1])) {
	echo '<div id="error">Errors?</div>';
	if (!isset($_GET['error'])) {
		echo '<a href="?action=format&url=' . substr($_GET['url'], 0, -6) . '.txt&project_code=' . $_GET['project_code'] . '&error=1">Try method 1</a><br>';
	} elseif ($_GET['error'] == '1') {
		echo '<a href="?action=format&url=' . substr($_GET['url'], 0, -4) . '-0.txt&project_code=' . $_GET['project_code'] . '&error=failed">Try next method 2</a><br>';
	} else {
		
		echo 'Please follow the url <a href="' . $_GET['url'] .
	'" target="_blank">' . $_GET['url'] .
	'</a> omiting the <b>"text"</b> file and find the solution manually<br>';
	}
	} else {
	if(file_put_contents('generated_content-edgeryders.txt', $data, FILE_APPEND)) {
		echo 'File saved as generated_content.txt<br>
		please filter file to remove duplication at last.<br>
		<a href="?action=filter">Remove duplicated links</a><br>';

	}
}
		break;

		case 'filter':
			$file = array_unique(file('generated_content-edgeryders.txt'));
			if(file_put_contents('generated_content-edgeryders.txt', implode($file))) {
				echo 'File filtered and saved as generated_content-edgeryders.txt<br>';
			}

			break;
}

$file = file_get_contents('extract_content.txt');
	$url = 'ftp://sunsite.informatik.rwth-aachen.de/pub/mirror/ibiblio/gutenberg/';
	preg_match_all('/[\d]{4,5}/', $file, $matches);
	$include_slash = preg_replace('/(\d)/', '${1}/', $matches[0]);
	for ($i=0; $i < count($include_slash); $i++) { 
	$urls[$i] = $url . substr($include_slash[$i], 0, -2). $matches[0][$i] . "\n";
}

foreach ($urls as $key => $url) {
	echo '<a href="?action=format&url=' . $url . '/' . $matches[0][$key] . (strlen($matches[0][$key]) == 5 ? '-8' : '') . '.txt&project_code=' . $matches[0][$key] . '">' . $url . '</a><br>';
}

echo '</body>
</html>';
