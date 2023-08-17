<?php
class PluginStringArray{
  public function from_space($str, $clean = true){
    /**
     * Clean upp where there is multiple space.
     */
    if($clean && wfPhpfunc::strstr($str, '  ')){
      while($this->has_multiple_space($str)){
        $str = wfPhpfunc::str_replace('  ', ' ', $str);
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
    return wfPhpfunc::strstr($str, '  ');
  }
  public function from_slash($str){
    /**
     * Create array.
     */
    $array = preg_split('#/#', $str);
    /**
     * Return.
     */
    return $array;
  }
  public function from_tab($str){
    /**
     * Create array.
     */
    $array = preg_split("/[\t]/", $str);
    /**
     * Return.
     */
    return $array;
  }
  public function from_char($str, $char){
    /**
     * Create array.
     */
    $array = preg_split("/$char/", $str);
    /**
     * Return.
     */
    return $array;
  }
  public function from_br($str){
    /**
     * Create array.
     */
    $array = preg_split("/(\r\n|\n|\r)/", $str);
    /**
     * Return.
     */
    return $array;
  }
  public function from_excel_data($value){
    $excel_data = $this->from_char($value, '\r\n');
    $temp = array();
    $rows = 0;
    $columns = 0;
    foreach($excel_data as $v){
      $rows++;
      $v2 = $this->from_tab($v);
      $columns = sizeof($v2);
      $temp[] = $v2;
    }
    $excel_data = $temp;
    unset($temp);
    return array('rows' => $rows, 'columns' => $columns, 'data' => $excel_data);
  }
}
