<?php
class UID
{
    public function id($as)
    {
        $char = "abcdefghijklmnopqrstuvwxyz";
        $num = "0123456789";
        $randStringNum = "";
        $randStringChar = "";

        for ($i = 0; $i < 5; $i++) {
            $indexNum = rand(0, strlen($num) - 1);
            $randStringNum .= $num[$indexNum];
        }

        $indexChar = rand(0, strlen($char) - 1);
        $randStringChar = $char[$indexChar];

        if ($as == "admin" || $as == "ADMIN") {
            $UID = "A" . $randStringChar . $randStringNum;
        } else if ($as == "user" || $as == "USER") {
            $UID = "U" . $randStringChar . $randStringNum;
        } else {
            $UID = "";
        }

        return $UID;
    }
}
