<?php
// Bengali extension, https://github.com/datenstrom/yellow-extensions/tree/master/languages/bengali
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowBengali {
    const VERSION = "0.8.13";
    const TYPE = "language";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("settingDir").$this->yellow->system->get("systemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "bn"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="bn") {
            $language = reset(array_diff($this->yellow->text->getLanguages(), array("bn")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
