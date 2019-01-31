<?php
class PluginStringArray{
  public function from_space($str, $clean = true){
    /**
     * Clean upp where there is multiple space.
     */
    if($clean && strstr($str, '  ')){
      while($this->has_multiple_space($str)){
        $str = str_replace('  ', ' ', $str);
      }
    }
    /**
     * Create array.
     */
    $array = preg_split('/ /', $str);
    /**
     * Return.
     */
    return $array;
  }
  private function has_multiple_space($str){
    return strstr($str, '  ');
  }
}
