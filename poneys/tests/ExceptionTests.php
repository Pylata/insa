<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';


/**
 * Classe de test de gestion de poneys
 */
class ExceptionTests extends TestCase
{
  public function testRemovePoneyFromFieldNegExc()
  {
      // Setup
      $Poneys = new Poneys();

      // Action
      $Poneys->removePoneyFromField(10);

      // Assert
      $this->expectExceptionMessage("Cannot have nega pony");
  }
}
?>
