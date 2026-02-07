<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function safeView(string $view, array $data = [])
    {
        if (!view()->exists($view)) {
            abort(404, 'Page not found');
        }

        return view($view, $data);
    }

    /**
     * All HomePage Function Include
     * 
     */

    // Home One 
    public function indexOne(){
        $htmlClass = '';
        $bodyClass = '';
        return $this->safeView('frontend.homes.indexOne', compact('bodyClass', 'htmlClass'));
    }
    // Home Two 
    public function indexTwo(){
        $htmlClass = 'color-two font-exo header-sticky-style';
        $bodyClass = '';
        return $this->safeView('frontend.homes.indexTwo', compact('bodyClass', 'htmlClass'));
    }
    // Home Three 
    public function indexThree(){
        $htmlClass = 'color-two font-outfit header-border-0 header-style-two';
        $bodyClass = '';
        return $this->safeView('frontend.homes.indexThree', compact('bodyClass', 'htmlClass'));
    }
}
