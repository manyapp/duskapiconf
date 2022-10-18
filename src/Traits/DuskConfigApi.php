<?php

namespace Manyapp\DuskApiConf\Traits;

/**
 * https://many.app/changing-laravel-configuration-during-dusk-tests/
 * https://github.com/manyapp/duskapiconf
 */
trait DuskConfigApi
{
    /**
     * Set live config option
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return void
     */
    public function setConfig($key, $value)
    {
        $encoded = base64_encode(json_encode($value));
        $query = "?key=".$key.'&value='.$encoded;
        $this->browse(function ($browser) use ($query) {
            $data = $browser->visit('/duskapiconf/set'.$query)->element('.content')->getAttribute('innerHTML');
            $data = trim($data);
            if ($data !== 'ok') {
                $this->assertTrue(false);
            }
        });
    }


    /**
     * Get a current configuration item
     *
     * @param  string  $key
     * @return mixed
     */
    public function getConfig($key)
    {
        $query = "?key=".$key;
        $result = null;
        $this->browse(function ($browser) use ($query, &$result) {
            $data = $browser->visit('/duskapiconf/get'.$query)->element('.content')->getAttribute('innerHTML');
            $result = json_decode(base64_decode($data), true);
        });

        return $result;
    }

    /**
     * Reset the configuration to its initial status
     *
     * @return void
     */
    public function resetConfig()
    {
        $this->browse(function ($browser) {
            $browser->visit('/duskapiconf/reset');
        });
    }

}
