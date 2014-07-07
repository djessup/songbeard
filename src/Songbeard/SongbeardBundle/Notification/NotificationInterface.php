<?php
/**
 * Created by IntelliJ IDEA.
 * User: David Jessup
 * Date: 7/7/2014
 * Time: 8:45 PM
 */

namespace Songbeard\SongbeardBundle\Notification;

/**
 * Notifies a third party about an event
 * Interface NotificationInterface
 * @package Songbeard\SongbeardBundle\Notification
 */
interface NotificationInterface {
    /**
     * Sends a notification about an event
     * @param $event
     * @return mixed
     */
    public function notify($event);
} 