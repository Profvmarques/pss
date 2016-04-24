<?php

// Set up chart
//$Chart = &$Table->RelatF3rio_EstatEDstico_por_Unidade_Escolar;
// Initialize chart data

$Chart->ID = "RelEstatisticoUE_RelatF3rio_EstatEDstico_por_Unidade_Escolar"; // Chart ID
$Chart->SetChartParms(array(array("type", "3", FALSE),
	array("seriestype", "0", FALSE)));  // Chart type / Chart series type
$Chart->SetChartParm("bgcolor", "FCFCFC", TRUE); // Background color
$Chart->SetChartParms(array(array("caption", $Chart->ChartCaption()),
	array("xaxisname", $Chart->ChartXAxisName()))); // Chart caption / X axis name
$Chart->SetChartParm("yaxisname", $Chart->ChartYAxisName(), TRUE); // Y axis name
$Chart->SetChartParms(array(array("shownames", "1"),
	array("showvalues", "1"),
	array("showhovercap", "0"))); // Show names / Show values / Show hover
$Chart->SetChartParm("alpha", "50", FALSE); // Chart alpha
$Chart->SetChartParm("colorpalette", "#FF0000|#FF0080|#339900|#8000FF|#FF8000|#FF3D3D|#7AFFFF|#0000FF|#FFFF00|#FF7A7A|#3DFFFF|#0080FF|#80FF00|#00FF00|#00FF80|#00FFFF", FALSE); // Chart color palette
?>
<?php
$Chart->SetChartParms(array(array("showCanvasBg", "1"),
	array("showCanvasBase", "1"),
	array("showLimits", "1"),
	array("animation", "1"),
	array("rotateNames", "1"),
	array("yAxisMaxValue", "3"),
	array("PYAxisMinValue", "0"),
	array("PYAxisMaxValue", "0"),
	array("SYAxisMinValue", "0"),
	array("SYAxisMaxValue", "0"),
	array("showColumnShadow", "0"),
	array("showPercentageValues", "1"),
	array("showPercentageInLabel", "1"),
	array("showBarShadow", "0"),
	array("showAnchors", "1"),
	array("showAreaBorder", "1"),
	array("isSliced", "1"),
	array("showAsBars", "0"),
	array("showShadow", "0"),
	array("formatNumber", "0"),
	array("formatNumberScale", "0"),
	array("decimalSeparator", "."),
	array("thousandSeparator", ","),
	array("decimalPrecision", "2"),
	array("divLineDecimalPrecision", "2"),
	array("limitsDecimalPrecision", "2"),
	array("zeroPlaneShowBorder", "1"),
	array("showDivLineValue", "1"),
	array("showAlternateHGridColor", "0"),
	array("showAlternateVGridColor", "0"),
	array("hoverCapSepChar", ":")));

// Define trend lines
$Chart->Trends[] = array(0, 0, "FF0000", "", 1, "0", "1", 100);
?>
<?php

	// Setup chart series data
	if ($Chart->ChartSeriesSql <> "") {
		ewr_LoadChartSeries($Chart->ChartSeriesSql, $Chart);
		if (EWR_DEBUG_ENABLED)
			echo "<p>(Chart Series SQL): " . $Chart->ChartSeriesSql . "</p>";
	}

	// Setup chart data
	if ($Chart->ChartSql <> "") {
		ewr_LoadChartData($Chart->ChartSql, $Chart);
		if (EWR_DEBUG_ENABLED)
			echo "<p>(Chart SQL): " . $Chart->ChartSql . "</p>";
	}
	ewr_SortChartData($Chart->Data, 0, "");

	// Render chart
	$Chart->LoadChartParms();
	$chartxml = $Chart->ChartXml();
?>
<span class="ewChartBefore">
<?php

	// Show page break content
	if ($Chart->PageBreak && $Chart->PageBreakType == "before")
		echo $Chart->PageBreakContent;
?>
<?php
	if ($Chart->ShowChart) { // Show actual chart
echo $Chart->ShowChartFCF($chartxml);
	} elseif ($Chart->ShowTempImage) { // Show temp image
		$TmpChartImage = ewr_TmpChartImage("chart_RelEstatisticoUE_RelatF3rio_EstatEDstico_por_Unidade_Escolar");
		if ($TmpChartImage <> "") {
?>
<table class="ewChart" data-page-break="before"><tr><td><img src="<?php echo $TmpChartImage ?>" alt="" style="border: 0;"></td></tr></table>
<?php
		}
	}

	// Show page break content
	if ($Chart->PageBreak && $Chart->PageBreakType == "after")
		echo $Chart->PageBreakContent;
?>
</span>
