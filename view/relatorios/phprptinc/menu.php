<!-- Begin Main Menu -->
<div class="ewMenu">
<?php $RootMenu = new crMenu(EWR_MENUBAR_ID); ?>
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(18, $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("18", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "RelEstatisticoUErpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(21, $ReportLanguage->Phrase("ChartReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("21", "MenuText") . $ReportLanguage->Phrase("ChartReportMenuItemSuffix"), "RelEstatisticoUErpt.php#cht_RelEstatisticoUE_RelatF3rio_EstatEDstico_por_Unidade_Escolar", 18, "", TRUE, FALSE);
$RootMenu->AddMenuItem(19, $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("19", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "RelEstatisticoDistritorpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(20, $ReportLanguage->Phrase("ChartReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("20", "MenuText") . $ReportLanguage->Phrase("ChartReportMenuItemSuffix"), "RelEstatisticoDistritorpt.php#cht_RelEstatisticoDistrito_RelatF3rio_EstatEDstico_por_Distrito", 19, "", TRUE, FALSE);
$RootMenu->Render();
?>
</div>
<!-- End Main Menu -->
