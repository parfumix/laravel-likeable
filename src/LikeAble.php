<?php

namespace Parfumix\Likeable;

interface LikeAble {

    /**
     * Add a like for this record by the given user.
     * @param $userId mixed - If null will use currently logged in user.
     */
    public function like($userId = null);

    /**
     * Remove a like from this record for the given user.
     * @param $userId mixed - If null will use currently logged in user.
     */
    public function unlike($userId = null);

    /**
     * Has the currently logged in user already "liked" the current object
     *
     * @param string $userId
     * @return boolean
     */
    public function liked($userId = null);

}