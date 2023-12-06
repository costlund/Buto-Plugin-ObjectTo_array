<?php
class PluginObjectTo_array{
  public function to_array($obj) {
    if(is_object($obj) || is_array($obj)) {
      $ret = (array) $obj;
      foreach($ret as &$item){
        $item = $this->to_array($item);
      }
      return $ret;
    }else{
      return $obj;
    }
  }
}