<?php

namespace Fenix\Daemon\Lock;

use Fenix\Daemon\Lock\LockBase;
use Fenix\Daemon\Plugin\PluginInterface;

/**
 * Implements the lock provider and plugin interfaces to make development easier.
 * Before version 2.0 of PHP Simple Daemon a lock provider was required, so this was used to satisfy that requirement
 * during development.
 *  
 * @author Shane Harter
 * @since 2011-07-28
 */
class NullLock extends LockBase implements PluginInterface
{
	public function setup()
	{
		// Nothing to setup
	}
	
	public function teardown()
	{
		// Nothing to teardown
	}
	
	public function check_environment(Array $errors = array())
	{
		// Nothing to check
		return array();
	}
	
	public function set()
	{
		// Nothing to set
	}
	
	protected function get()
	{
		// False is a good thing -- it means no lock was detected. 
		return false;
	}
}