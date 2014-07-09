<?php
/**
 * Created by IntelliJ IDEA.
 * User: David Jessup
 * Date: 7/9/2014
 * Time: 9:40 PM
 */

namespace Songbeard\SongbeardBundle\MetadataProvider;

use Songbeard\SongbeardBundle\Entity\Episode;
use Songbeard\SongbeardBundle\Entity\TvShow;

class TVDBMetadataProvider implements MetadataProviderInterface {

    /**
     * Returns information about a show
     * @param TvShow $show
     * @return mixed
     */
    public function showInfo(TvShow $show)
    {
        // TODO: Implement showInfo() method.
    }

    /**
     * Returns information about an episode
     * @param Episode $episode
     * @return mixed
     */
    public function episodeInfo(Episode $episode)
    {
        // TODO: Implement episodeInfo() method.
    }
}