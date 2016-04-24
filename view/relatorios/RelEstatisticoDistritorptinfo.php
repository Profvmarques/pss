<?php

// Global variable for table object
$RelEstatisticoDistrito = NULL;

//
// Table class for RelEstatisticoDistrito
//
class crRelEstatisticoDistrito extends crTableBase {

//	var $SelectLimit = TRUE;
	var $RelatF3rio_EstatEDstico_por_Distrito;
	var $descricao;
	var $total;

	//
	// Table class constructor
	//
	function __construct() {
		global $ReportLanguage;
		$this->TableVar = 'RelEstatisticoDistrito';
		$this->TableName = 'RelEstatisticoDistrito';
		$this->TableType = 'CUSTOMVIEW';
		$this->ExportAll = FALSE;
		$this->ExportPageBreakCount = 0;

		// descricao
		$this->descricao = new crField('RelEstatisticoDistrito', 'RelEstatisticoDistrito', 'x_descricao', 'descricao', 'd.descricao', 200, EWR_DATATYPE_STRING, -1);
		$this->fields['descricao'] = &$this->descricao;
		$this->descricao->DateFilter = "";
		$this->descricao->SqlSelect = "";
		$this->descricao->SqlOrderBy = "";

		// total
		$this->total = new crField('RelEstatisticoDistrito', 'RelEstatisticoDistrito', 'x_total', 'total', 'COUNT(*)', 20, EWR_DATATYPE_NUMBER, -1);
		$this->total->FldDefaultErrMsg = $ReportLanguage->Phrase("IncorrectInteger");
		$this->fields['total'] = &$this->total;
		$this->total->DateFilter = "";
		$this->total->SqlSelect = "";
		$this->total->SqlOrderBy = "";

		// Relatório Estatístico por Distrito
		$this->RelatF3rio_EstatEDstico_por_Distrito = new crChart('RelEstatisticoDistrito', 'RelEstatisticoDistrito', 'RelatF3rio_EstatEDstico_por_Distrito', 'Relatório Estatístico por Distrito', 'descricao', 'total', '', 5, 'SUM', 550, 440);
		$this->RelatF3rio_EstatEDstico_por_Distrito->SqlSelect = "SELECT `descricao`, '', SUM(`total`) FROM ";
		$this->RelatF3rio_EstatEDstico_por_Distrito->SqlGroupBy = "`descricao`";
		$this->RelatF3rio_EstatEDstico_por_Distrito->SqlOrderBy = "";
		$this->RelatF3rio_EstatEDstico_por_Distrito->SeriesDateType = "";
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
		return "candidatos c inner join inscricao i on(i.idcandidatos = c.idcandidatos) inner join unidade_escolar ue on(i.idunidade_escolar = ue.idunidade_escolar) inner join distrito d on(ue.iddistrito = d.iddistrito)";
	}

	function SqlSelect() { // Select
		return "SELECT d.descricao, COUNT(*) as total FROM " . $this->SqlFrom();
	}

	function SqlWhere() { // Where
		$sWhere = "";
		return $sWhere;
	}

	function SqlGroupBy() { // Group By
		return "d.iddistrito";
	}

	function SqlHaving() { // Having
		return "";
	}

	function SqlOrderBy() { // Order By
		return "d.descricao";
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
