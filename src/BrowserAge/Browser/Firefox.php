<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class Firefox extends Browser
{
    /*
     * These all come from Wikipedia (https://en.wikipedia.org/wiki/Firefox_version_history)
     * except where noted.
     */
    protected $versions = [
        'desktop' => [
            BrowserAge::STABILITY_STABLE => [
                '1.0' => '2004-11-09',
                '1.0.1' => '2005-02-24',
                '1.0.2' => '2005-03-23',
                '1.0.3' => '2005-04-15',
                '1.0.4' => '2005-05-11',
                '1.0.5' => '2005-07-12',
                '1.0.6' => '2005-07-19',
                '1.0.7' => '2005-09-20',
                '1.0.8' => '2006-04-13',
                '1.5' => '2005-11-29',
                '1.5.0.1' => '2006-02-01',
                '1.5.0.2' => '2006-04-13',
                '1.5.0.3' => '2006-05-02',
                '1.5.0.4' => '2006-06-01',
                '1.5.0.5' => '2006-07-26',
                '1.5.0.6' => '2006-08-02',
                '1.5.0.7' => '2006-09-14',
                '1.5.0.8' => '2006-11-07',
                '1.5.0.9' => '2006-12-19',
                '1.5.0.10' => '2007-02-23',
                '1.5.0.11' => '2007-03-20',
                '1.5.0.12' => '2007-05-30',
                '2.0' => '2006-10-24',
                '2.0.0.1' => '2006-12-19',
                '2.0.0.2' => '2007-02-23',
                '2.0.0.3' => '2007-03-20',
                '2.0.0.4' => '2007-05-30',
                '2.0.0.5' => '2007-07-17',
                '2.0.0.6' => '2007-07-30',
                '2.0.0.7' => '2007-09-18',
                '2.0.0.8' => '2007-10-18',
                '2.0.0.9' => '2007-11-01',
                '2.0.0.10' => '2007-11-26',
                '2.0.0.11' => '2007-11-30',
                '2.0.0.12' => '2008-02-07',
                '2.0.0.13' => '2008-03-25',
                '2.0.0.14' => '2008-04-16',
                '2.0.0.15' => '2008-07-01',
                '2.0.0.16' => '2008-07-15',
                '2.0.0.17' => '2008-09-23',
                '2.0.0.18' => '2008-11-12',
                '2.0.0.19' => '2008-12-16',
                '2.0.0.20' => '2008-12-18',
                '3.0' => '2008-06-17',
                '3.0.1' => '2008-07-16',
                '3.0.2' => '2008-09-23',
                '3.0.3' => '2008-09-26',
                '3.0.4' => '2008-11-12',
                '3.0.5' => '2008-12-16',
                '3.0.6' => '2009-02-03',
                '3.0.7' => '2009-03-04',
                '3.0.8' => '2009-03-27',
                '3.0.9' => '2009-04-21',
                '3.0.10' => '2009-04-27',
                '3.0.11' => '2009-06-11',
                '3.0.12' => '2009-07-21',
                '3.0.13' => '2009-08-03',
                '3.0.14' => '2009-09-09',
                '3.0.15' => '2009-10-27',
                '3.0.16' => '2009-12-15',
                '3.0.17' => '2010-01-05',
                '3.0.18' => '2010-02-17',
                '3.0.19' => '2010-03-30',
                '3.5' => '2009-06-30',
                '3.5.1' => '2009-07-16',
                '3.5.2' => '2009-08-03',
                '3.5.3' => '2009-09-09',
                '3.5.4' => '2009-10-27',
                '3.5.5' => '2009-11-05',
                '3.5.6' => '2009-12-15',
                '3.5.7' => '2010-01-05',
                '3.5.8' => '2010-02-17',
                '3.5.9' => '2010-03-30',
                '3.5.10' => '2010-06-22',
                '3.5.11' => '2010-07-20',
                '3.5.12' => '2010-09-07',
                '3.5.13' => '2010-09-15',
                '3.5.14' => '2010-10-19',
                '3.5.15' => '2010-10-27',
                '3.5.16' => '2010-12-09',
                '3.5.17' => '2011-03-01',
                '3.5.18' => '2011-03-22',
                '3.5.19' => '2011-04-28',
                '3.6' => '2010-01-21',
                '3.6.2' => '2010-03-22',
                '3.6.3' => '2010-04-01',
                '3.6.4' => '2010-06-22',
                '3.6.6' => '2010-06-26',
                '3.6.7' => '2010-07-20',
                '3.6.8' => '2010-07-23',
                '3.6.9' => '2010-09-07',
                '3.6.10' => '2010-09-15',
                '3.6.11' => '2010-10-19',
                '3.6.12' => '2010-10-27',
                '3.6.13' => '2010-12-09',
                '3.6.14' => '2011-03-01',
                '3.6.15' => '2011-03-04',
                '3.6.16' => '2011-03-22',
                '3.6.17' => '2011-04-28',
                '3.6.18' => '2011-06-21',
                '3.6.19' => '2011-07-11',
                '3.6.20' => '2011-08-16',
                '3.6.21' => '2011-08-30',
                '3.6.22' => '2011-09-06',
                '3.6.23' => '2011-09-27',
                '3.6.24' => '2011-11-08',
                '3.6.25' => '2011-12-20',
                '3.6.26' => '2012-01-31',
                '3.6.27' => '2012-02-17',
                '3.6.28' => '2012-03-13',
                '4.0' => '2011-03-22',
                '4.0.1' => '2011-04-28',
                '5.0' => '2011-06-21',
                '5.0.1' => '2011-07-11',
                '6.0' => '2011-08-16',
                '6.0.1' => '2011-08-30',
                '6.0.2' => '2011-09-06',
                '7.0' => '2011-09-27',
                '7.0.1' => '2011-09-29',
                '8.0' => '2011-11-08',
                '8.0.1' => '2011-11-21',
                '9.0' => '2011-12-20',
                '9.0.1' => '2011-12-21',
                '10.0' => '2012-01-31',
                '10.0.1' => '2012-02-10',
                '10.0.2' => '2012-02-16',
                '11.0' => '2012-03-13',
                '12.0' => '2012-04-24',
                '13.0' => '2012-06-05',
                '13.0.1' => '2012-06-15',
                '14.0' => '2012-06-26',
                '14.0.1' => '2012-07-17',
                '15.0' => '2012-08-28',
                '15.0.1' => '2012-09-06',
                '16.0' => '2012-10-09',
                '16.0.1' => '2012-10-11',
                '16.0.2' => '2012-10-26',
                '17.0' => '2012-11-20',
                '17.0.1' => '2012-11-30',
                '18.0' => '2013-01-08',
                '18.0.1' => '2013-01-18',
                '18.0.2' => '2013-02-05',
                '19.0' => '2013-02-19',
                '19.0.1' => '2013-02-27',
                '19.0.2' => '2013-03-07',
                '20.0' => '2013-04-02',
                '20.0.1' => '2013-04-11',
                '21.0' => '2013-05-14',
                '22.0' => '2013-06-25',
                '23.0' => '2013-08-06',
                '23.0.1' => '2013-08-16',
                '24.0' => '2013-09-17',
                '25.0' => '2013-10-29',
                '25.0.1' => '2013-11-15',
                '26.0' => '2013-12-10',
                '26.0.1' => '2013-12-20',
                '27.0' => '2014-02-04',
                '27.0.1' => '2014-02-13',
                '28.0' => '2014-03-18',
                '29.0' => '2014-04-29',
                '29.0.1' => '2014-05-09',
                '30.0' => '2014-06-10',
                '31.0' => '2014-07-22',
                '32.0' => '2014-09-02',
                '32.0.1' => '2014-09-12',
                '32.0.2' => '2014-09-18',
                '32.0.3' => '2014-09-24',
                '33.0' => '2014-10-14',
                '33.0.1' => '2014-10-24',
                '33.0.2' => '2014-10-28',
                '33.0.3' => '2014-11-06',
                '33.1' => '2014-11-10',
                '33.1.1' => '2014-11-14',
                '34.0' => '2014-12-01',
                '34.0.5' => '2014-12-01',
                '35.0' => '2015-01-13',
                '35.0.1' => '2015-01-26',
                '36.0' => '2015-02-24',
                '36.0.1' => '2015-03-05',
                '36.0.2' => '2015-03-16',
                '36.0.3' => '2015-03-20',
                '36.0.4' => '2015-03-21',
                '37.0' => '2015-03-31',
                '37.0.1' => '2015-04-03',
                '37.0.2' => '2015-04-20',
                '38.0' => '2015-05-12',
                '38.0.1' => '2015-05-14',
                '38.0.5' => '2015-06-02',
                '39.0' => '2015-07-02',
                '39.0.3' => '2015-08-06',
                '40.0' => '2015-08-11',
                '40.0.2' => '2015-08-13',
                '40.0.3' => '2015-08-27',
                '41.0' => '2015-09-22',
                '41.0.1' => '2015-09-30',
                '41.0.2' => '2015-10-15',
                '42.0' => '2016-11-03',
                '43.0' => '2015-12-15',
                '43.0.1' => '2015-12-18',
                '43.0.2' => '2015-12-22',
                '43.0.3' => '2015-12-28',
                '43.0.4' => '2016-01-06',
                '44.0' => '2016-01-26',
                '44.0.1' => '2016-02-08',
                '44.0.2' => '2016-02-11',
                '45.0' => '2016-03-08',
                '45.0.1' => '2016-03-16',
                '45.0.2' => '2016-04-11',
                '46.0' => '2016-04-26',
                '46.0.1' => '2016-05-03',
                '47.0' => '2016-06-07',
                '47.0.1' => '2016-06-28',
                '48.0' => '2016-08-02',
                '48.0.1' => '2016-08-18',
                '48.0.2' => '2016-08-24',
                '49.0' => '2016-09-20',
                '49.0.1' => '2016-09-23',
                '49.0.2' => '2016-10-20',
                '50.0' => '2016-11-15',
                '50.0.1' => '2016-11-28',
                '50.0.2' => '2016-11-30',
                '50.1.0' => '2016-12-13',
                '51.0' => '2017-01-24',
                '51.0.1' => '2017-01-26',
                '51.0.2' => '2017-02-06',
                '51.0.3' => '2017-02-09',
                '52.0' => '2017-03-07',
                '52.0.1' => '2017-03-17',
                '52.0.2' => '2017-03-28',
                '53.0' => '2017-04-19',
                '53.0.1' => '2017-04-27',
                '53.0.2' => '2017-05-05',
                '53.0.3' => '2017-05-19',
                '54.0' => '2017-06-13',
                '54.0.1' => '2017-06-29',
                // https://www.mozilla.org/en-US/firefox/55.0/releasenotes/
                '55.0' => '2017-08-08',
                // https://www.mozilla.org/en-US/firefox/55.0.1/releasenotes/
                '55.0.1' => '2017-08-10',
                // https://www.mozilla.org/en-US/firefox/55.0.2/releasenotes/
                '55.0.2' => '2017-08-16',
            ],
        ],
        'android' => [
            BrowserAge::STABILITY_STABLE => [
                '14.0' => '2012-06-26',
                '14.0.1' => '2012-07-17',
                '15.0' => '2012-08-28',
                '15.0.1' => '2012-09-06',
                '16.0' => '2012-10-09',
                '16.0.1' => '2012-10-11',
                '16.0.2' => '2012-10-26',
                '17.0' => '2012-11-20',
                '17.0.1' => '2012-11-30',
                '18.0' => '2013-01-08',
                '18.0.1' => '2013-01-18',
                '18.0.2' => '2013-02-05',
                '19.0' => '2013-02-19',
                '19.0.1' => '2013-02-27',
                '19.0.2' => '2013-03-07',
                '20.0' => '2013-04-02',
                '20.0.1' => '2013-04-11',
                '21.0' => '2013-05-14',
                '22.0' => '2013-06-25',
                '23.0' => '2013-08-06',
                '23.0.1' => '2013-08-16',
                '24.0' => '2013-09-17',
                '25.0' => '2013-10-29',
                '25.0.1' => '2013-11-15',
                '26.0' => '2013-12-10',
                '26.0.1' => '2013-12-20',
                '27.0' => '2014-02-04',
                '27.0.1' => '2014-02-13',
                '28.0' => '2014-03-18',
                '28.0.1' => '2014-03-24',
                '29.0' => '2014-04-29',
                '29.0.1' => '2014-05-09',
                '30.0' => '2014-06-10',
                '31.0' => '2014-07-22',
                '32.0' => '2014-09-02',
                '32.0.1' => '2014-09-09',
                '32.0.2' => '2014-09-18',
                '32.0.3' => '2014-09-24',
                '33.0' => '2014-10-14',
                '33.0.1' => '2014-10-24',
                '33.0.2' => '2014-10-28',
                '33.0.3' => '2014-11-06',
                '33.1' => '2014-11-10',
                '33.1.1' => '2014-11-14',
                '34.0' => '2014-12-01',
                '34.0.5' => '2014-12-01',
                '35.0' => '2015-01-13',
                '35.0.1' => '2015-02-02',
                '36.0' => '2015-02-27',
                '36.0.1' => '2015-03-06',
                '36.0.2' => '2015-03-16',
                '36.0.3' => '2015-03-20',
                '36.0.4' => '2015-03-21',
                '37.0' => '2015-03-31',
                '37.0.1' => '2015-04-03',
                '37.0.2' => '2015-04-14',
                '38.0' => '2015-05-12',
                '38.0.1' => '2015-05-15',
                '38.0.5' => '2015-06-02',
                '39.0' => '2015-07-02',
                '39.0.3' => '2015-08-06',
                '40.0' => '2015-08-11',
                '40.0.2' => '2015-08-13',
                '40.0.3' => '2015-08-27',
                '41.0' => '2015-09-22',
                '41.0.1' => '2015-09-30',
                '41.0.2' => '2015-10-15',
                '42.0' => '2016-11-03',
                '43.0' => '2015-12-15',
                '43.0.1' => '2015-12-18',
                '43.0.2' => '2015-12-22',
                '43.0.3' => '2015-12-28',
                '43.0.4' => '2016-01-06',
                '44.0' => '2016-01-26',
                '44.0.1' => '2016-02-08',
                '44.0.2' => '2016-02-11',
                '45.0' => '2016-03-08',
                '45.0.1' => '2016-03-16',
                '45.0.2' => '2016-04-11',
                '46.0' => '2016-04-26',
                '46.0.1' => '2016-05-03',
                '47.0' => '2016-06-07',
                '47.0.1' => '2016-06-28',
                '48.0' => '2016-08-02',
                '48.0.1' => '2016-08-18',
                '48.0.2' => '2016-08-24',
                '49.0' => '2016-09-20',
                '49.0.1' => '2016-09-23',
                '49.0.2' => '2016-10-20',
                '50.0' => '2016-11-15',
                '50.0.1' => '2016-11-28',
                '50.0.2' => '2016-11-30',
                '50.1.0' => '2016-12-13',
                '51.0' => '2017-01-24',
                '51.0.1' => '2017-01-26',
                '51.0.2' => '2017-02-06',
                '51.0.3' => '2017-02-09',
                '52.0' => '2017-03-07',
                '52.0.1' => '2017-03-17',
                '52.0.2' => '2017-03-28',
                '53.0' => '2017-04-19',
                '53.0.1' => '2017-04-27',
                '53.0.2' => '2017-05-05',
                '53.0.3' => '2017-05-19',
                '54.0' => '2017-06-13',
                '54.0.1' => '2017-06-29',
                // https://www.mozilla.org/en-US/firefox/android/55.0.2/releasenotes/
                '55.0.2' => '2017-08-16',
            ],
        ],
        // These come from the App Store version history (not web accessible)
        'ios' => [
            BrowserAge::STABILITY_STABLE => [
                '1.0' => '2015-09-03',
                '1.0.1' => '2015-09-26',
                '1.1' => '2015-11-12',
                '1.2' => '2015-11-16',
                '1.3' => '2016-01-03',
                '1.4' => '2016-01-14',
                '2.0' => '2016-02-18',
                '2.1' => '2016-03-05',
                '3.0' => '2016-03-30',
                '4.0' => '2016-05-11',
                '5.0' => '2016-07-27',
                '5.1' => '2016-08-25',
                '5.2' => '2016-09-08',
                '5.3' => '2016-09-27',
                '6.0' => '2017-01-17',
                '6.1' => '2017-02-16',
                '7.0' => '2017-04-03',
                '7.1' => '2017-04-10',
                '7.2' => '2017-04-16',
                '7.3' => '2017-04-21',
                '7.4' => '2017-04-29',
                '7.5' => '2017-05-16',
                '8.0' => '2017-07-20',
                '8.0.1' => '2017-07-21',
                '8.1' => '2017-07-31',
                '8.1.1' => '2017-08-04',
                '8.2' => '2017-08-15',
            ],
        ]
    ];

    public function getVersions()
    {
        $this->versions['windows'] = $this->versions['desktop'];
        $this->versions['linux'] = $this->versions['desktop'];
        $this->versions['mac'] = $this->versions['desktop'];
        unset($this->versions['desktop']);

        return parent::getVersions();
    }
}
