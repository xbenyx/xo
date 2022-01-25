<?php

namespace App\Http\Controllers;

use App\StockItem;
use Illuminate\Http\Request;


class StockItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $StockItems = StockItem::select('StockItem.*')
            ->leftJoin('ProductGroup', 'StockItem.ProductGroupID', '=', 'ProductGroup.ProductGroupID')
            ->leftJoin('SYSCountryCode', 'StockItem.CountryOfOriginID', '=', 'SYSCountryCode.SYSCountryCodeID')
            ->whereNotIn('ProductGroup.code', ['NONS','MCPG','SERV'])
            ->where('StockItem.StockItemStatusID', '=', 0)
            ->where('ProductGroup.code', '>=', 200)
            ->where('ProductGroup.code', '<=', 220)
            ->selectRaw("StockItem.Code,StockItem.Name,StockItem.CommodityCode,StockItem.AnalysisCode1,StockItem.AnalysisCode2,StockItem.AnalysisCode3,StockItem.AnalysisCode4,StockItem.AnalysisCode5,StockItem.AnalysisCode6,StockItem.AnalysisCode7,StockItem.AnalysisCode8,StockItem.AnalysisCode9,StockItem.AnalysisCode10,StockItem.AnalysisCode11,StockItem.AnalysisCode12,StockItem.AnalysisCode13,StockItem.AnalysisCode14,StockItem.AnalysisCode15
            ,(Case WHEN StockItem.StockItemStatusID = 0 THEN 'Active' Else 'Inactive' END) as Status1,Case WHEN StockItem.BOMItemTypeID = 0 THEN 'Component' WHEN StockItem.BOMItemTypeID = 1 Then 'Built' END as Statusb
            ,Case WHEN StockItem.AllowSalesOrder = 0 THEN 'No' Else 'Yes' END as AllowSales,SYSCountryCode.Code as Country
            ,StockItem.ItemID,StockItem.Weight") 
            ->get();
            return view('StockItem.index', compact('StockItems'));
    }




}

