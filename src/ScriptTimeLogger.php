<?php

namespace AmericanTechnologies\ScriptTimeLogger;

use AmericanTechnologies\ScriptTimeLogger\Models\ScriptTimeLog;

class ScriptTimeLogger
{
    private $log = null, $startTime = null, $endTime = null;

    public function startTimer($scriptName) {
        $this->startTime = microtime(true);

        $this->log = ScriptTimeLog::create([
            'script' => $scriptName
        ]);
    }  

    public function endTimer($note = null) {
        $this->endTime = microtime(true);

        $this->log->update([
            'duration' => number_format(($this->endTime - $this->startTime), 2, '.', ''),
            'note' => $note
        ]);
    }
}
