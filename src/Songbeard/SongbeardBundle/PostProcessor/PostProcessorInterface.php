<?php
/**
 * Created by IntelliJ IDEA.
 * User: David Jessup
 * Date: 7/7/2014
 * Time: 8:22 PM
 */

namespace Songbeard\SongbeardBundle\PostProcessor;


use Songbeard\SongbeardBundle\Entity\Episode;

/**
 * Processes episodes after they have been obtained. Can be chained together
 *
 * Interface PostProcessorInterface
 * @package Songbeard\SongbeardBundle\PostProcessor
 */
interface PostProcessorInterface {
    public function process(Episode $episode);
} 