<?php


namespace DesignByCode\Helpers;

use Illuminate\Support\Arr;


class Set
{

    /**
     * @param $path
     * @param string $active
     * @return mixed
     */

    public function isActive($path, $active = null)
    {
        if ($active === null) {
            $active = $this->checkConfig();
        }

        return $this->returnIf($this->onPage($path), $active);
    }

    /**
     * @return \Illuminate\Config\Repository|mixed|string
     */
    protected function checkConfig()
    {
        if ($this->configExists()) {
            return config('helpers.menu.active');
        }else {
            return 'nav__links__item--active';
        }
    }

    /**
     * @return bool
     */
    protected function configExists()
    {
        return file_exists(config_path('helpers.php'));
    }

    /**
     * @param $path
     * @return bool
     */
    public function onPage($path)
    {
        return request()->is($path);
    }

    /**
     * @param $condition
     * @param $value
     * @return mixed
     */
    protected function returnIf($condition, $value)
    {
        if ($condition) {
            return " $value";
        }
    }


    public function bodyClass(array $class = [], array $exclude = [])
    {
        $body = config('helpers.body.default');

        $prefix = config('helpers.body.prefix');

        $classes = array_merge([$body], $class);
        if ($this->getRouteName() === null && $this->onPage('/')) {

            if( $prefix === true) {
                $classes[] = $body . "-frontpage";
            }

            $classes[] = "frontpage";
        }else {

            if( $prefix === true) {
                $classes[] = $body . "-" . $this->getRouteName();
            }

            $classes[] = $this->getRouteName();
        }
        if ($this->configExists()) {

            $excludeFiles = array_merge($exclude, config('helpers.body.exclude'));

            $classes = array_unique(array_diff($classes, $excludeFiles));
        }

        $classSet = implode(' ', $classes);

        return $classSet;
    }

    /**
     * @return string route name
     */
    private function getRouteName()
    {
        return request()->route()->getName();
    }


}
