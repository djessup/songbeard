<?php
/**
 * Created by IntelliJ IDEA.
 * User: David Jessup
 * Date: 7/7/2014
 * Time: 8:19 PM
 */

namespace Songbeard\ShowBundle\MetadataProvider;

use Songbeard\SongbeardBundle\Entity\Episode;
use Songbeard\SongbeardBundle\Entity\TvShow;

/**
 * Provides metadata about shows/episodes (e.g. TVDB)
 *
 * Interface MetadataProviderInterface
 * @package Songbeard\ShowBundle\MetadataProvider
 */
interface MetadataProviderInterface {

    /**
     * Returns information about a show
     * @param TvShow $show
     * @return mixed
     */
    public function showInfo(TvShow $show);

    /**
     * Returns information about an episode
     * @param Episode $episode
     * @return mixed
     */
    public function episodeInfo(Episode $episode);
} 