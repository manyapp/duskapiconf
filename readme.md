![Manyapp DuskApiConf](https://many.app/wp-content/uploads/2019/07/manyapp_duskapiconf.png)

**A Laravel module to perform live configuration changes from your Dusk tests**

## The issue

Currently, the only way to define the configuration of your Laravel app during Dusk tests is to set the relevant variables in a dedicated `.env.dusk.local` file. This file is copied and read during the application's boot, and therefore cannot be changed within Dusk tests. 

This behaviour can be problematic, as a lot of developers need to change the configuration in specific tests to see if the application reacts accordingly. 

As mentionned [here](https://github.com/laravel/dusk/issues/599), there is no easy way to tackle this problem. 

## The solution

This modules offers an easy possibility to change the configuration of your application during the runtime of your Dusk tests.

See how it works on our blog article. 

## Installation

Install the module with:

```
composer require manyapp/duskapiconf --dev
```

