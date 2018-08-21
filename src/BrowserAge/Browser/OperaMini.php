<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class OperaMini extends Browser
{
    protected $versions = [
        // These are from the Version History in the app store (not web accessible)
        'ios' => [
            BrowserAge::STABILITY_STABLE => [
                '7.0.1' => '2012-03-20',
                '7.0.2' => '2012-05-23',
                '7.0.3' => '2012-07-25',
                '7.0.4' => '2012-09-26',
                '7.0.5' => '2012-10-24',
                '8.0.0' => '2014-06-26',
                '8.0.1' => '2014-07-07',
                '8.0.2' => '2014-08-04',
                '8.0.3' => '2014-09-02',
                '8.0.4' => '2014-09-19',
                '8.0.5' => '2014-09-27',
                '9.0.0' => '2014-11-06',
                '9.1.0' => '2014-12-15',
                // https://itunes.apple.com/us/app/opera-mini-web-browser/id363729560?mt=8
                '9.2.0' => '2015-02-03',
                '10.0.0' => '2015-03-10',
                '10.0.1' => '2015-03-31',
                '10.1.0' => '2015-05-11',
                '10.1.1' => '2015-05-18',
                '10.2.0' => '2015-06-23',
                '11.0.0' => '2015-09-22',
                '12.0.0' => '2015-12-03',
                '12.1.0' => '2015-12-16',
                '12.1.1' => '2015-12-22',
                '13.0.0' => '2016-03-01',
                '14.0.0' => '2016-06-16',
                '16.0.0' => '2017-09-02',
                '16.0.1' => '2017-09-06',
                '16.0.2' => '2017-09-11',
                '16.0.3' => '2017-09-23',
                '16.0.4' => '2017-10-17',
                '16.0.5' => '2017-11-16',
                '16.0.6' => '2017-11-16',
                '16.0.7' => '2017-12-18',
                '16.0.8' => '2018-02-01',
                '16.0.9' => '2018-04-18',
                '16.0.10' => '2018-05-23',
                '16.0.11' => '2018-07-13',
                '16.0.12' => '2018-07-20',
            ],
        ],
    ];
}
