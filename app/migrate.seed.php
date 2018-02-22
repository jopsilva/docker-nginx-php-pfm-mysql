<?php
/**
 * Created by PhpStorm.
 * User: jsilva
 * Date: 22/02/18
 * Time: 00:29
 */

exec(__DIR__ . '/vendor/bin/phinx rollback');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run');