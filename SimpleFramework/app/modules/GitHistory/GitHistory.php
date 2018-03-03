<?php
namespace SimpleFramework\GitHistory;
/**
 * Git History
 */
class GitHistory {

    public static function showLastCommits($maxLength = 5) {                
        $output = array();        
        exec("cd ".APP_REPOSITORY." && git log", $output);
        $history = array();
        foreach ($output as $line) {
            if (strpos($line, 'commit') === 0) {
                if (!empty($commit) && count($history) < $maxLength) {
                    array_push($history, $commit);
                    unset($commit);
                }
                $commit['hash'] = substr($line, strlen('commit'));
            } else if (strpos($line, 'Author') === 0) {
                $commit['author'] = substr($line, strlen('Author:'));
            } else if (strpos($line, 'Date') === 0) {
                $commit['date'] = date("d-m-Y H:i:s",strtotime(substr($line, strlen('Date:'))));
            } else {
                if(isset($commit['message'])){
                    $commit['message'] .= $line;
                }                
            }
        }
        return $history;
    }

}
