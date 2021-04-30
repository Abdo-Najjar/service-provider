<?php

namespace App\Services;

use App\Models\Visitor as ModelsVisitor;
use Illuminate\Support\Facades\App;

class Visitor
{
    protected $countryCode;
    protected $regionCode;

    public function __construct($countryCode, $regionCode)
    {
        $this->countryCode = $countryCode;
        $this->regionCode = $regionCode;
    }

    public function isRecognise()
    {
        return ModelsVisitor::whereIp(request()->ip())->count();
    }



    private function visitiedBefore($page)
    {
        return ModelsVisitor::whereIp(request()->ip())
            ->first()->visitedPages()->where('page', $page)->count();
    }


    private function rejesterVisitiedPage($page)
    {
        return ModelsVisitor::whereIp(request()->ip())
            ->first()->visitedPages()->create([
                'page'  => $page
            ]);
    }


    public function visitingPageProcess($page)
    {
        $this->visitiedBefore($page) ?:  $this->rejesterVisitiedPage($page);
    }


    public function rejester()
    {
        ModelsVisitor::create([
            'countryCode'   => $this->countryCode,
            'regionCode'    => $this->regionCode,
            'ip'            => request()->ip()
        ]);
    }
}
