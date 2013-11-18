<?

class field {
   
   const SIZE_SMALL  = 1;
   const SIZE_MEDIUM = 2;
   const SIZE_LARGE  = 3;
   
   public $fieldSizeY = NULL;
   public $fieldSizeX = NULL;
   public $fieldSizeArr = array(self::SIZE_SMALL,self::SIZE_MEDIUM,self::SIZE_LARGE);

   public static function getInstance () {
      $c = __CLASS__;
      if (!(self::$instance instanceof $c)) {
         self::$instance = new $c;
      }
      return self::$instance;
   }
   
   public function getChoices

   public function drawField($size){
      
      $this->$fieldSizeY = 30;
      $this->$fieldSizeX = 40;
   
   }

}
