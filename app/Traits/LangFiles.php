<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Nwidart\Modules\Facades\Module;

trait LangFiles
{
    public $index = 0;
    public $allLang = [];

    public function getAllLangFiles($code)
    {

        $rootPath = base_path("resources/lang/en");
        $rootFinalPath = base_path("resources/lang/" . $code);

        $this->scanDir($rootPath, $rootFinalPath);
        $activeModules = Module::allEnabled();
        foreach ($activeModules as $module) {
            $modulePath = base_path("Modules/" . $module . "/Resources/lang/en");
            $moduleFinalPath = base_path("Modules/" . $module . "/Resources/lang/" . $code);
            $this->scanDir($modulePath, $moduleFinalPath);
        }
        return $this->allLang;
    }

    public function scanDir($dirPath, $dirFinalPath)
    {
        if (File::isDirectory($dirPath)) {
            foreach (scandir($dirPath) as $key => $path) {
                if ($key > 1) {
                    $this->allLang[$this->index]['path'] = $dirFinalPath . '/' . $path;
                    $this->allLang[$this->index]['name'] = explode(".", $path)[0];
                    $this->index++;
                }
            }
        }
    }
}
