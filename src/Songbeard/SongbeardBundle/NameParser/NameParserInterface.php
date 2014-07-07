<?php
/**
 * Created by IntelliJ IDEA.
 * User: David Jessup
 * Date: 7/7/2014
 * Time: 8:47 PM
 */

namespace Songbeard\SongbeardBundle\NameParser;

/**
 * Parses a name and returns the processed results (show, season, episode, title, etc)
 * Interface NameParserInterface
 * @package Songbeard\SongbeardBundle\NameParser
 */
interface NameParserInterface {
    /**
     * Parses a name and returns the results
     * @param $name
     * @return mixed
     */
    public function parse($name);
} 