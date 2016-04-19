<?php
if (session_id() == "") session_start(); // Initialize Session data
ob_start();
?>
<?php include_once "phprptinc/ewrcfg7.php" ?>
<?php include_once "phprptinc/ewmysql.php" ?>
<?php include_once "phprptinc/ewrfn7.php" ?>
<?php include_once "phprptinc/ewrusrfn.php" ?>
<?php
	ewr_Header(TRUE);
	$conn = ewr_Connect();
	$ReportLanguage = new crLanguage();
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $ReportLanguage->Phrase("MobileMenu") ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo ewr_jQueryFile("jquery.mobile-%v.min.css") ?>">
<link rel="stylesheet" type="text/css" href="<?php echo EWR_PROJECT_STYLESHEET_FILENAME ?>">
<link rel="stylesheet" type="text/css" href="phprptcss/ewrmobile.css">
<script type="text/javascript" src="<?php echo ewr_jQueryFile("jquery-%v.min.js") ?>"></script>
<script type="text/javascript">

	//$(document).bind("mobileinit", function() {
	//	jQuery.mobile.ajaxEnabled = false;
	//	jQuery.mobile.ignoreContentEnabled = true;
	//});

</script>
<script type="text/javascript" src="<?php echo ewr_jQueryFile("jquery.mobile-%v.min.js") ?>"></script>
<meta name="generator" content="PHP Report Maker v7.0.0">
</head>
<body>
<div data-role="page">
	<div data-role="header">
		<h1><?php echo $ReportLanguage->ProjectPhrase("BodyTitle") ?></h1>
	</div>
	<div data-role="content">
<?php $RootMenu = new crMenu("RootMenu", TRUE); ?>
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(18, $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("18", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "RelEstatisticoUErpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(21, $ReportLanguage->Phrase("ChartReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("21", "MenuText") . $ReportLanguage->Phrase("ChartReportMenuItemSuffix"), "RelEstatisticoUErpt.php#cht_RelEstatisticoUE_RelatF3rio_EstatEDstico_por_Unidade_Escolar", 18, "", TRUE, FALSE);
$RootMenu->AddMenuItem(19, $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("19", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "RelEstatisticoDistritorpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(20, $ReportLanguage->Phrase("ChartReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("20", "MenuText") . $ReportLanguage->Phrase("ChartReportMenuItemSuffix"), "RelEstatisticoDistritorpt.php#cht_RelEstatisticoDistrito_RelatF3rio_EstatEDstico_por_Distrito", 19, "", TRUE, FALSE);
$RootMenu->Render();
?>
	</div><!-- /content -->
</div><!-- /page -->
</body>
</html>
<?php

	 // Close connection
	$conn->Close();
?>
