<?php


namespace App\DAL\Models;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */

class CategoryModel extends BaseModel
{

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $seo_slug_url;

    /**
     * @ORM\OneToMany(targetEntity="SubCategoryModel", mappedBy="category")
     */
    protected $subCategories;

    public function __construct()
    {
        parent::__construct();
        $this->subCategories = new ArrayCollection();
    }

    public function getSubCategories(): Collection
    {
        return $this->subCategories;
    }

}