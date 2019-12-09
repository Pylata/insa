<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';


/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
  // /**
  //  * Undocumented function
  //  * r
  //  * @return void
  //  */
  // public function setUp()
  // {
  //   $Poneys = new Poneys();
  //   $this->poneys->setCount(8);
  // }

    /**
     * Undocumented function
     * @dataProvider poneyProvider
     * @return void
     */
    public function testRemovePoneyFromField($val)
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField($val);

        // Assert
        $this->assertEquals(8-$val, $Poneys->getCount());
    }

    public function poneyProvider()
    {
        return [
            [0],
            [1],
            [2],
            [3],
            [4]
        ];
    }

    public function testAddPoneyFromField()
    {
      // Setup
      $Poneys = new Poneys();

      // Action
      $Poneys->addPoneyOnField(3);

      // Assert
      $this->assertEquals(11, $Poneys->getCount());
    }

    public function testRemovePoneyFromFieldNegExc()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(10);

        // Assert
        $this->expectExceptionMessage("Cannot have nega pony");
    }

    public function testGetNamesPoney()
    {
        // Setup
        $mapNames = [
          ["Link", ["Epona", "Ganon", "Royal"]],
          ["Mulan", ["Khan"]],
          ["Red", ["Galopa", "Rapidash", "Galopa de Galar", "Galar Rapidash"]],
        ];

        $this->poneys = $this->getMockBuilder('Poneys')->getMock();
        $this->poneys->method('getNames')
              ->will($this->returnValueMap($mapNames));

        // Action
        $Link = $this->poneys->getNames("Link");
        $Mulan = $this->poneys->getNames("Mulan");
        $Red = $this->poneys->getNames("Red");

        // Assert
        $this->assertEquals($Link, ["Epona", "Ganon", "Royal"]);
        $this->assertEquals($Mulan, ["Khan"]);
        $this->assertEquals($Red, ["Galopa", "Rapidash", "Galopa de Galar", "Galar Rapidash"]);
    }

    public function testFreeSpace(){
      // Setup
      $Poneys = new Poneys();

      // True Assert
      $this->assertTrue($Poneys->isFree());

      // Action
      $Poneys->addPoneyOnField(7);

      // False Assert
      $this->assertFalse($Poneys->isFree());
    }

    // /**
    //  * Undocumented function
    //  *
    //  * @return void
    //  */
    // public function tearDown()
    // {
    //
    // }
}
?>
