<?php

namespace App\Widgets;

use App\Destination;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Destinations extends AbstractWidget
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
        $count = Destination::count();
        $string = 'Destinations';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-home',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Destinations',
                'link' => route('voyager.destinations.index'),
            ],
            'image' => asset('2.jpg'),
        ]));
    }
}
