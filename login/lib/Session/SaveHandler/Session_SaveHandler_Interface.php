<?php
/**
 * Session
 *
 * @category LoveMachine
 * @package  Core
 * @author   LoveMachine Inc. <all@lovemachineinc.com>
 * @license  Copyright (c) 2009-2010, LoveMachine Inc. All Rights Reserved
 * @version  SVN: $Id: Session_SaveHandler_Interface.php 20 2010-05-08 15:33:11Z seong $
 * @link     http://www.lovemachineinc.com
 */
/**
 * Session save handler interface
 *
 * @category LoveMachine
 * @package  Core
 * @author   LoveMachine Inc. <all@lovemachineinc.com>
 * @license  Copyright (c) 2009-2010, LoveMachine Inc. All Rights Reserved
 * @link     http://www.lovemachineinc.com
 */
interface Session_SaveHandler_Interface
{
    /**
     * Open Session - retrieve resources
     *
     * @param string $save_path Save path
     * @param string $name      Session name
     *
     * @return boolean
     */
    public function open($save_path, $name);

    /**
     * Close Session - free resources
     *
     * @return boolean
     */
    public function close();

    /**
     * Read session data
     *
     * @param string $id Session id
     *
     * @return string
     */
    public function read($id);

    /**
     * Write Session - commit data to resource
     *
     * @param string $id   Session id
     * @param mixed  $data Session data
     *
     * @return boolean
     */
    public function write($id, $data);

    /**
     * Destroy Session - remove data from resource for
     * given session id
     *
     * @param string $id Session id
     *
     * @return boolean
     */
    public function destroy($id);

    /**
     * Garbage Collection - remove old session data older
     * than $maxlifetime (in seconds)
     *
     * @param int $maxlifetime Max lifetime in seconds
     *
     * @return boolean
     */
    public function gc($maxlifetime);
}
