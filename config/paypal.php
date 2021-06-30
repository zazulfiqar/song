<?php 
return [ 
    'client_id' => 'AdGA3zLJk833OtPSuALdCMKOClOszHgT1POyNV0Qqk-j7Os7RKQX-HvM02agqWJJT4W3C27pyvPViWmI',
	'secret' => 'EL0aF1vJHaXOBHqnLv3v-Eftpey2p4hz9rbcPdGDM5CCGHqFIY3Kb4xQORDhDOckAXiHJ9ls7Z-aMqHe',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];