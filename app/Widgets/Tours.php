<?php

namespace App\Widgets;

use App\Tour;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Tours extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Tour::count();
        $string = 'Tours';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-ship',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Tours',
                'link' => route('voyager.tours.index'),
            ],
            'image' => asset('1.jpg'),
        ]));
    }
}
