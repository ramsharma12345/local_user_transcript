<?php

// This file is part of Moodle - http://moodle.org/.

// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

use core_courseformat\output\local\content\sectionselector;

require_once('../../config.php');
global $DB, $USER, $SESSION, $CFG;

require_once('lib.php');
require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->dirroot . '/course/modlib.php');

require_login();

echo $OUTPUT->header();

$id      = required_param('id', PARAM_INT);       // course id

echo "Couse ID you are coming from : $id";
echo $OUTPUT->footer();
die;
