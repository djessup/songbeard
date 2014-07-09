<?php

namespace Songbeard\SongbeardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TvShow
 *
 * @ORM\Table(indexes={
 *      @ORM\index(
 *          name="seriesId_idx",
 *          columns={"seriesId"}
 *      )
 * })
 * @ORM\Entity(repositoryClass="Songbeard\SongbeardBundle\Entity\TvShowRepository")
 */
class TvShow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="seriesId", type="integer", nullable=true, options={})
     */
    private $seriesId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=true)
     */
    private $language;

    /**
     * @var array
     *
     * @ORM\Column(name="aliases", type="simple_array", nullable=true)
     */
    private $aliases;

    /**
     * @var string
     *
     * @ORM\Column(name="overview", type="text", nullable=true)
     */
    private $overview;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="firstAired", type="date", nullable=true)
     */
    private $firstAired;

    /**
     * @var string
     *
     * @ORM\Column(name="imdbId", type="string", length=255, nullable=true)
     */
    private $imdbId;

    /**
     * @var string
     *
     * @ORM\Column(name="zap2itId", type="string", length=255, nullable=true)
     */
    private $zap2itId;

    /**
     * @var string
     *
     * @ORM\Column(name="network", type="string", length=255, nullable=true)
     */
    private $network;



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
     * Set name
     *
     * @param string $name
     * @return TvShow
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param array $aliases
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
    }

    /**
     * @return \DateTime
     */
    public function getFirstAired()
    {
        return $this->firstAired;
    }

    /**
     * @param \DateTime $firstAired
     */
    public function setFirstAired($firstAired)
    {
        $this->firstAired = $firstAired;
    }

    /**
     * @return string
     */
    public function getImdbId()
    {
        return $this->imdbId;
    }

    /**
     * @param string $imdbId
     */
    public function setImdbId($imdbId)
    {
        $this->imdbId = $imdbId;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param string $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * @return string
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param string $overview
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;
    }

    /**
     * @return int
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * @param int $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return string
     */
    public function getZap2itId()
    {
        return $this->zap2itId;
    }

    /**
     * @param string $zap2itId
     */
    public function setZap2itId($zap2itId)
    {
        $this->zap2itId = $zap2itId;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
