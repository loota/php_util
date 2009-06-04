<?
class Util {
  public static function isEmptyArray($array) {
    if (count(array_filter($array)) == 0) {
      return true;
    } else {
      return false;
    }
  }
  public static function isEmptyArrayAndKeyless($array) {
    if (self::isEmptyArray($array)) {
      $keys = array_keys($array);
      if (empty($keys)) {
        return true;
      }
    }
    return false;
  }
}
