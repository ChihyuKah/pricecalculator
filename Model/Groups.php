<?php
declare(strict_types=1);

class Groups
{
    private  $id;
    private  $name ;
    private  $variable_discount ;
    private  $group_id;

    /**
     * Groups constructor.
     * @param int $id
     * @param string $name
     * @param int $variable_discount
     * @param int $group_id
     */

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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getVariableDiscount(): int
    {
        return $this->variable_discount;
    }

    /**
     * @param int $variable_discount
     */
    public function setVariableDiscount(int $variable_discount): void
    {
        $this->variable_discount = $variable_discount;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     */
    public function setGroupId(int $group_id): void
    {
        $this->group_id = $group_id;
    }



}
