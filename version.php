<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Group self selection
 *
 * @package    mod
 * @subpackage groupformation
 * @copyright  2008-2012 Petr Skoda (http://skodak.org)
 * @copyright  2014 Tampere University of Technology, P. Pyykkönen (pirkka.pyykkonen ÄT tut.fi)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$module->version   = 2014111000; // The current module version (Date: YYYYMMDDXX)
$module->requires  = 2011070101; // Requires this Moodle version
$module->cron      = 0;          // Period for cron to check this module (secs)
$module->component = 'mod_groupformation'; // Full name of the plugin (used for diagnostics)

$module->maturity  = MATURITY_ALPHA;
$module->release   = "0.31 alpha (2014110)"; // User-friendly version number
