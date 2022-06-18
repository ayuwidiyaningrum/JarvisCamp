<?php
class Mobil
{

    public $roda = 4;
    public function jalan()
    {
        echo "Mobil Berjalan";
    }
    public function roda()
    {
        echo $this->roda;
    }
}


$mini = new Mobil();
$mini->jalan();
echo $mini->roda;
$mini->roda();

?>

<?php
class Mobil2
{

    public $roda = 4;
    public function jalan()
    {
        echo "Mobil Berjalan";
    }
    public function roda()
    {
        echo $this->roda;
    }
    public function get()
    {
        echo $this->saldo;
    }
}


$mini = new Mobil2();
$mini->jalan();
echo $mini->roda;
$mini->roda();

?>

