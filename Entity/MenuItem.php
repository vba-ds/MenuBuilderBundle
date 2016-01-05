<?php

namespace MenuBuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class MenuItem
 * @package MenuBuilderBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="menu_builder__menu_item")
 */
class MenuItem
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="MenuBuilderBundle\Entity\Menu", inversedBy="items")
     * @ORM\JoinColumn(name="menu_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $menu;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $type;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false, options={"default"=0})
     */
    protected $position;

    /**
     * @return string
     */
    public function __toString()
    {
        return 'MenuItem ['.$this->getId().']';
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return MenuItem
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set menu
     *
     * @param \MenuBuilderBundle\Entity\Menu $menu
     * @return MenuItem
     */
    public function setMenu(\MenuBuilderBundle\Entity\Menu $menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \MenuBuilderBundle\Entity\Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return MenuItem
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }
}
