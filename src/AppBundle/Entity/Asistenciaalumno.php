<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistenciaalumno
 *
 * @ORM\Table(name="asistenciaalumno", indexes={@ORM\Index(name="fk_AsistenciaAlumno_Alumno1_idx", columns={"Alumno_carnetAlumno"})})
 * @ORM\Entity
 */
class Asistenciaalumno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAsistenciaAlumno", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idasistenciaalumno;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asistio", type="boolean", nullable=true)
     */
    private $asistio;

    /**
     * @var \Alumno
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Alumno_carnetAlumno", referencedColumnName="carnetAlumno")
     * })
     */
    private $alumnoCarnetalumno;



    /**
     * Get idasistenciaalumno
     *
     * @return integer
     */
    public function getIdasistenciaalumno()
    {
        return $this->idasistenciaalumno;
    }

    /**
     * Set asistio
     *
     * @param boolean $asistio
     *
     * @return Asistenciaalumno
     */
    public function setAsistio($asistio)
    {
        $this->asistio = $asistio;

        return $this;
    }

    /**
     * Get asistio
     *
     * @return boolean
     */
    public function getAsistio()
    {
        return $this->asistio;
    }

    /**
     * Set alumnoCarnetalumno
     *
     * @param \AppBundle\Entity\Alumno $alumnoCarnetalumno
     *
     * @return Asistenciaalumno
     */
    public function setAlumnoCarnetalumno(\AppBundle\Entity\Alumno $alumnoCarnetalumno = null)
    {
        $this->alumnoCarnetalumno = $alumnoCarnetalumno;

        return $this;
    }

    /**
     * Get alumnoCarnetalumno
     *
     * @return \AppBundle\Entity\Alumno
     */
    public function getAlumnoCarnetalumno()
    {
        return $this->alumnoCarnetalumno;
    }
}
