{"filter":false,"title":"2016_05_02_203406_create_goals_details_table.php.php","tooltip":"/database/migrations/2016_05_02_203406_create_goals_details_table.php.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":14,"column":10},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":15,"column":8},"end":{"row":24,"column":11},"action":"insert","lines":["Schema::create('goals', function (Blueprint $table) {","            $table->increments('goalId');","            $table->string('goalName');","            $table->string('goalImpact');","            $table->string('goalProgress');","            $table->string('goalDescritption');","            $table->integer('goalLength');","            $table->timestamps();","","        });"],"id":3}],[{"start":{"row":34,"column":10},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":35,"column":0},"end":{"row":35,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":35,"column":8},"end":{"row":35,"column":30},"action":"insert","lines":["Schema::drop('goals');"],"id":5}]]},"ace":{"folds":[],"scrolltop":393.5,"scrollleft":0,"selection":{"start":{"row":33,"column":5},"end":{"row":33,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":23,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1462221993215,"hash":"99a74f3b7695ef207bd848613a78370ff46b9173"}