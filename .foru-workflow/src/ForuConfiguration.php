<?php

class ForuConfiguration extends ArcanistConfiguration
{
    public function willRunWorkflow($command, ArcanistWorkflow $workflow)
    {
        if ($command === 'diff') {
            exit("\n请使用arc 4d\n\n");
        }

        if ($command === 'land') {
            exit("\n请使用arc 4l\n\n");
        }
    }
}
