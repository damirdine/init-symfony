<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task", indexes={@ORM\Index(name="category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class Task
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_task", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTask;

    /**
     * @var string
     *
     * @ORM\Column(name="name_task", type="string", length=75, nullable=false)
     */
    private $nameTask;

    /**
     * @var string
     *
     * @ORM\Column(name="description_task", type="text", length=65535, nullable=false)
     */
    private $descriptionTask;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date_task", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdDateTask = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date_task", type="datetime", nullable=false)
     */
    private $dueDateTask;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_task", type="string", length=30, nullable=false)
     */
    private $priorityTask;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id_category")
     * })
     */
    private $category;


}
