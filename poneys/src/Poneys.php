<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if ($this->count < $number)  {
          throw new Exception('Cannot have nega pony');
        } else {
          $this->count -= $number;
        }
    }

    /**
     * Ajoute un poney au champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
    public function addPoneyOnField(int $number): void
    {
        $this->count += $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
     public function getNames(): array
    {

    }

    /**
    * Vérifie qu'il reste de la place dans le champ
    *
    * @return boolval
    */
    public function isFree()
    {
      if($this->count >= 15){
        return False;
      }
      else{
        return True;
      }
    }

    public function setCount(int $number): void
    {
      $this->count = $number;
    }

}
?>
