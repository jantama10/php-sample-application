<?php

return new PDO("mysql:host=127.0.0.1;port=3306;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
