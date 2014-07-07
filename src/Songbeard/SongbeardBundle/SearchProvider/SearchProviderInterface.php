<?php
/**
 * Created by IntelliJ IDEA.
 * User: David Jessup
 * Date: 7/7/2014
 * Time: 8:25 PM
 */

namespace Songbeard\SongbeardBundle\SearchProvider;

use Songbeard\SongbeardBundle\Entity\Episode;

/**
 * Provides search integration with a 3rd party service (e.g. a torrent or nzb site)
 *
 * Interface SearchProviderInterface
 * @package Songbeard\SongbeardBundle\SearchProvider
 */
interface SearchProviderInterface {
    /**
     * Searches for a TV Show
     * @param Episode $episode
     * @return mixed
     */
    public function search(Episode $episode);
} 