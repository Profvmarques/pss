<?php

// Global variable for table object
$RelEstatisticoUE = NULL;

//
// Table class for RelEstatisticoUE
//
class crRelEstatisticoUE extends crTableBase {

//	var $SelectLimit = TRUE;
	var $RelatF3rio_EstatEDstico_por_Unidade_Escolar;
	var $descricao;
	var $total;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage;
		$this->TableVar = 'RelEstatisticoUE';
		$this->TableName = 'RelEstatisticoUE';
		$this->TableType = 'CUSTOMVIEW';
		$this->ExportAll = FALSE;
		$this->ExportPageBreakCount = 0;

		// descricao
		$this->descricao = new crField('RelEstatisticoUE', 'RelEstatisticoUE', 'x_descricao', 'descricao', 'ue.descricao', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['descricao'] = &$this->descricao;
		$this->descricao->DateFilter = "";
		$this->descricao->SqlSelect = "";
		$this->descricao->SqlOrderBy = "";

		// total
		$this->total = new crField('RelEstatisticoUE', 'RelEstatisticoUE', 'x_total', 'total', 'COUNT(*)', 20, EWR_DATATYPE_NUMBER, -1);
		$this->total->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['total'] = &$this->total;
		$this->total->DateFilter = "";
		$this->total->SqlSelect = "";
		$this->total->SqlOrderBy = "";

		// Relatório Estatístico por Unidade Escolar
		$this->RelatF3rio_EstatEDstico_por_Unidade_Escolar = new crChart('RelEstatisticoUE', 'RelEstatisticoUE', 'RelatF3rio_EstatEDstico_por_Unidade_Escolar', 'Relatório Estatístico por Unidade Escolar', 'descricao', 'total', '', 3, 'SUM', 1200, 1800);
		$this->RelatF3rio_EstatEDstico_por_Unidade_Escolar->SqlSelect = "SELECT `descricao`, '', SUM(`total`) FROM ";
		$this->RelatF3rio_EstatEDstico_por_Unidade_Escolar->SqlGroupBy = "`descricao`";
		$this->RelatF3rio_EstatEDstico_por_Unidade_Escolar->SqlOrderBy = "";
		$this->RelatF3rio_EstatEDstico_por_Unidade_Escolar->SeriesDateType = "";
	}

	// Single column sort
	function UpdateSort(&$ofld) {
		if ($this->CurrentOrder == $ofld->FldName) {
			$sLastSort = $ofld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$sThisSort = $this->CurrentOrderType;
			} else {
				$sThisSort = ($sLastSort == "ASC") ? "DESC" : "ASC";
			}
			$ofld->setSort($sThisSort);
		} else {
			if ($ofld->GroupingFieldId == 0) $ofld->setSort("");
		}
	}

	// Get Sort SQL
	function SortSql() {
		$sDtlSortSql = "";
		$argrps = array();
		foreach ($this->fields as $fld) {
			if ($fld->getSort() <> "") {
				if ($fld->GroupingFieldId > 0) {
					if ($fld->FldGroupSql <> "")
						$argrps[$fld->GroupingFieldId] = str_replace("%s", $fld->FldExpression, $fld->FldGroupSql) . " " . $fld->getSort();
					else
						$argrps[$fld->GroupingFieldId] = $fld->FldExpression . " " . $fld->getSort();
				} else {
					if ($sDtlSortSql <> "") $sDtlSortSql .= ", ";
					$sDtlSortSql .= $fld->FldExpression . " " . $fld->getSort();
				}
			}
		}
		$sSortSql = "";
		foreach ($argrps as $grp) {
			if ($sSortSql <> "") $sSortSql .= ", ";
			$sSortSql .= $grp;
		}
		if ($sDtlSortSql <> "") {
			if ($sSortSql <> "") $sSortSql .= ",";
			$sSortSql .= $sDtlSortSql;
		}
		return $sSortSql;
	}

	// Table level SQL
	function SqlFrom() { // From
		return "candidatos c Inner Join inscricao i On i.idcandidatos = c.idcandidatos Inner Join unidade_escolar ue On i.idunidade_escolar = ue.idunidade_escolar Inner Join distrito d On ue.iddistrito = d.iddistrito";
	}

	function SqlSelect() { // Select
		return "SELECT ue.descricao, COUNT(*) As total FROM " . $this->SqlFrom();
	}

	function SqlWhere() { // Where
		$sWhere = "";
		return $sWhere;
	}

	function SqlGroupBy() { // Group By
		return "ue.idunidade_escolar";
	}

	function SqlHaving() { // Having
		return "";
	}

	function SqlOrderBy() { // Order By
		return "ue.descricao";
	}

	function SqlSelectAgg() {
		return "SELECT * FROM " . $this->SqlFrom();
	}

	function SqlAggPfx() {
		return "";
	}

	function SqlAggSfx() {
		return "";
	}

	function SqlSelectCount() {
		return "SELECT COUNT(*) FROM " . $this->SqlFrom();
	}

	// Sort URL
	function SortUrl(&$fld) {
		return "";
	}

	// Table level events
	// Page Selecting event
	function Page_Selecting(&$filter) {

		// Enter your code here	
	}

	// Page Breaking event
	function Page_Breaking(&$break, &$content) {

		// Example:
		//$break = FALSE; // Skip page break, or
		//$content = "<div style=\"page-break-after:always;\">&nbsp;</div>"; // Modify page break content

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here	
	}

	// Cell Rendered event
	function Cell_Rendered(&$Field, $CurrentValue, &$ViewValue, &$ViewAttrs, &$CellAttrs, &$HrefValue, &$LinkAttrs) {

		//$ViewValue = "xxx";
		//$ViewAttrs["style"] = "xxx";

	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>); 

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}

	// Load Filters event
	function Page_FilterLoad() {

		// Enter your code here
		// Example: Register/Unregister Custom Extended Filter
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A', 'GetStartsWithAFilter'); // With function, or
		//ewr_RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A'); // No function, use Page_Filtering event
		//ewr_UnregisterFilter($this-><Field>, 'StartsWithA');

	}

	// Page Filter Validated event
	function Page_FilterValidated() {

		// Example:
		//$this->MyField1->SearchValue = "your search criteria"; // Search value

	}

	// Page Filtering event
	function Page_Filtering(&$fld, &$filter, $typ, $opr = "", $val = "", $cond = "", $opr2 = "", $val2 = "") {

		// Note: ALWAYS CHECK THE FILTER TYPE ($typ)! Example:
		// if ($typ == "dropdown" && $fld->FldName == "MyField") // Dropdown filter
		//     $filter = "..."; // Modify the filter
		// if ($typ == "extended" && $fld->FldName == "MyField") // Extended filter
		//     $filter = "..."; // Modify the filter
		// if ($typ == "popup" && $fld->FldName == "MyField") // Popup filter
		//     $filter = "..."; // Modify the filter
		// if ($typ == "custom" && $opr == "..." && $fld->FldName == "MyField") // Custom filter, $opr is the custom filter ID
		//     $filter = "..."; // Modify the filter

	}

	// Email Sending event
	function Email_Sending(&$Email, &$Args) {

		//var_dump($Email); var_dump($Args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		// Enter your code here
	}
}
?>
