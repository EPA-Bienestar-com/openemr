<?php

/**
 * OnsitePortalActivityDAO.php
 *
 * @package   OpenEMR
 * @link      https://www.open-emr.org
 * @author    Jerry Padgett <sjpadgett@gmail.com>
 * @copyright Copyright (c) 2016-2017 Jerry Padgett <sjpadgett@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("OnsitePortalActivityMap.php");

/**
 * OnsitePortalActivityDAO provides object-oriented access to the onsite_portal_activity table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Openemr::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class OnsitePortalActivityDAO extends Phreezable
{
    /** @var int */
    public $Id;

    /** @var date */
    public $Date;

    /** @var int */
    public $PatientId;

    /** @var string */
    public $Activity;

    /** @var int */
    public $RequireAudit;

    /** @var string */
    public $PendingAction;

    /** @var string */
    public $ActionTaken;

    /** @var string */
    public $Status;

    /** @var longtext */
    public $Narrative;

    /** @var longtext */
    public $TableAction;

    /** @var longtext */
    public $TableArgs;

    /** @var int */
    public $ActionUser;

    /** @var date */
    public $ActionTakenTime;

    /** @var longtext */
    public $Checksum;
}
