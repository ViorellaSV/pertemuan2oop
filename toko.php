<!DOCTYPE html>
<html>
<body bgcolor="lavender">
  <h1>Our Girls Need</h1>
  <h2>Pricelist Outfit</h2>

<?php
  class PricelistOutfit{
  public $name;
  protected $harga;
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
    function set_harga($harga) {
    $this->harga = $harga;
  }
  function get_harga() {
    return $this->harga;
  }

}



$Blouse = new PricelistOutfit();
$Top = new PricelistOutfit();
$Dress = new PricelistOutfit();
$Cardigan = new PricelistOutfit();
$Sweater = new PricelistOutfit();
$Blouse->set_name('Blouse : '); $Blouse->set_harga('Rp.200.000');
$Top->set_name('Top : '); $Top->set_harga('Rp.100.000');
$Dress->set_name('Dress : '); $Dress->set_harga('Rp.350.000');
$Cardigan->set_name('Cardigan : '); $Cardigan->set_harga('Rp.185.000');
$Sweater->set_name('Sweater : '); $Sweater->set_harga('Rp.265.000');

echo $Blouse->get_name();
echo $Blouse->get_harga();
echo "<br>";
echo $Top->get_name();
echo $Top->get_harga();
echo "<br>";
echo $Dress->get_name();
echo $Dress->get_harga();
echo "<br>";
echo $Cardigan->get_name();
echo $Cardigan->get_harga();
echo "<br>";
echo $Sweater->get_name();
echo $Sweater->get_harga();
echo "<br>";

class Hijab extends PricelistOutfit{
  public function message(){
    echo "Our Girls Need, Know What You Need";
  }
}
$makeup = new Hijab("Best Choice");  // OK. __construct() is public
$makeup->message(); // OK. message() is public
?>

<h3>Pricelist Hijab</h3>
<?php
interface Pricelist{
public function __construct($name, $harga);

}
class PricelistHijab implements Pricelist {
  public $name;
  public $harga;
  public static function Order(){}
  public static $value = "Text via instagram";
  function __construct($name, $harga) {
    $this->name = $name;
    $this->harga = $harga;
  }
  function __destruct() {
    echo "{$this->name} = {$this->harga}.";
  }
}
echo $Pashmina = "Pashmina = Rp.50.000"; echo "<br>";
echo $Belasquare = "Belasquare = Rp.20.000"; echo "<br>";
echo $Polycatton = "Polycatton = Rp.35.000"; echo "<br>";
echo "Choose Your Favorite!"; echo "<br>";
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

?>
</body>
</html>
