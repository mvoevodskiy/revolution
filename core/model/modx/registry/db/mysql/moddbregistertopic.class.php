<?php
/*
 * This file is part of MODX Revolution.
 *
 * Copyright (c) MODX, LLC. All Rights Reserved.
 *
 * For complete copyright and license information, see the COPYRIGHT and LICENSE
 * files found in the top-level directory of this distribution.
 */

require_once (strtr(realpath(dirname(__DIR__)), '\\', '/') . '/moddbregistertopic.class.php');
/**
 * @package modx
 * @subpackage registry.db.mysql
 */
class modDbRegisterTopic_mysql extends modDbRegisterTopic {}
