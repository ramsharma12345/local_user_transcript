<?php


function local_user_transcript_extend_navigation_course(navigation_node $navigation)
{
    global $PAGE, $USER, $CFG, $DB;

    $node = navigation_node::create(
        get_string('pluginname', 'local_user_transcript'),
        new moodle_url('/local/user_transcript/create_transcript.php', 
        array('id' => $PAGE->course->id, 'user' => $USER->id)),
        navigation_node::TYPE_SETTING,
        null,
        null,
        null
    );
    $navigation->add_node($node);

    $node = navigation_node::create(
        get_string('export_transcript', 'local_user_transcript'),
        new moodle_url('/local/user_transcript/create_transcript.php', 
        array('id' => $PAGE->course->id, 'user' => $USER->id)),
        navigation_node::TYPE_SETTING,
        null,
        null,
        null
    );
    $navigation->add_node($node);   
}
