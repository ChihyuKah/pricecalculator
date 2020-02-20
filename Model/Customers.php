<?php
declare(strict_types=1);

class Customers
{
    private  $id;
    private  $name;
    private  $group_id;
    private $allCustomersArray = array();


    /**
     * @return array
     */

    public function setAllCustomersArray(array $allCustomersArray)
    {
        $this->allCustomersArray = $allCustomersArray;
    }


    public function getAllCustomersArray()
    {
        return $this->allCustomersArray;
    }

    /**
     * @param array $allCustomersArray
     */


    /**
     * Customers constructor.
     * @param int $id
     * @param string $name
     * @param int $group_id
     */
/*    public function __construct(int $id, string $name, int $group_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->group_id = $group_id;
    }*/

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     */
    public function setGroupId(int $group_id)
    {
        echo $group_id;
        $this->group_id = $group_id;
    }

    public function getCustomersArray()
    {

        return $this->allCustomersArray = $_SESSION["customers"];
    }



}
