<?php

namespace App\Http\Controllers;

use App\Models\GetPortfolio;
use Illuminate\Http\Request;

use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function home(PortfolioController $data, Request $request)
    {

        $req = GetPortfolio::select('portfolio.ID', 'text_content.OriginalText', 'portfolio.Icon', 'portfolio.Image')
                            ->join('text_content', 'text_content.ID', '=', 'portfolio.Name')
                            ->where('Home', 1)
                            ->skip(0)
                            ->take(10)
                            ->get();

        return Inertia::render('Home/Index', [
            'data' => $req,
        ]);
    }

    public function list(PortfolioController $data, Request $request)
    {
        $category = $request->category;

        $req = GetPortfolio::select('portfolio.ID', 'text_content.OriginalText', 'portfolio.Icon', 'portfolio.Image')
                            ->join('text_content', 'text_content.ID', '=', 'portfolio.Name')
                            ->where('Category', $category)
                            ->skip(0)
                            ->take(2)
                            ->get();
                           
        return Inertia::render('Portfolio/List', [
            'data' => $req,
        ]);
    }

    public function detail(PortfolioController $data, Request $request)
    {
        $name = $request->name;
        $id = $request->id;

        $locale = $request->route()->getPrefix();
        $fetch = GetPortfolio::where('ID', $id)->first();
        $name = get_text($fetch["Name"], substr($locale, 1));
        $description = get_text($fetch["Description"], substr($locale, 1));
        $icon = GetPortfolio::select('Icon')->where('ID', $id)->first();
        $img = GetPortfolio::select('Image')->where('ID', $id)->first();

        $req = [
            "Name" => $name, 
            "Description" => $description,
            "Icon" => $icon["Icon"],
            "Image" => $img["Image"]
        ];

        return Inertia::render('Portfolio/Detail', [
            'data' => $req,
        ]);
    }
}
