<?php

namespace App\Widgets;

use App\Hotel;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Hotels extends AbstractWidget
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
        $count = Hotel::count();
        $string = trans_choice('voyager.dimmer.hotel', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-medal-rank-star',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager.dimmer.hotel_link_text'),
                'link' => route('voyager.hotels.index'),
            ],
            'image' => asset('2.jpg'),
        ]));
    }
}
