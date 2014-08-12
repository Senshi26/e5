<?php
/**
 * Created by PhpStorm.
 * User: Michi
 * Date: 01.08.14
 * Time: 12:20

MMMMMMMM               MMMMMMMMIIIIIIIIII      CCCCCCCCCCCCCHHHHHHHHH     HHHHHHHHHIIIIIIIIII
M:::::::M             M:::::::MI::::::::I   CCC::::::::::::CH:::::::H     H:::::::HI::::::::I
M::::::::M           M::::::::MI::::::::I CC:::::::::::::::CH:::::::H     H:::::::HI::::::::I
M:::::::::M         M:::::::::MII::::::IIC:::::CCCCCCCC::::CHH::::::H     H::::::HHII::::::II
M::::::::::M       M::::::::::M  I::::I C:::::C       CCCCCC  H:::::H     H:::::H    I::::I
M:::::::::::M     M:::::::::::M  I::::IC:::::C                H:::::H     H:::::H    I::::I
M:::::::M::::M   M::::M:::::::M  I::::IC:::::C                H::::::HHHHH::::::H    I::::I
M::::::M M::::M M::::M M::::::M  I::::IC:::::C                H:::::::::::::::::H    I::::I
M::::::M  M::::M::::M  M::::::M  I::::IC:::::C                H:::::::::::::::::H    I::::I
M::::::M   M:::::::M   M::::::M  I::::IC:::::C                H::::::HHHHH::::::H    I::::I
M::::::M    M:::::M    M::::::M  I::::IC:::::C                H:::::H     H:::::H    I::::I
M::::::M     MMMMM     M::::::M  I::::I C:::::C       CCCCCC  H:::::H     H:::::H    I::::I
M::::::M               M::::::MII::::::IIC:::::CCCCCCCC::::CHH::::::H     H::::::HHII::::::II
M::::::M               M::::::MI::::::::I CC:::::::::::::::CH:::::::H     H:::::::HI::::::::I
M::::::M               M::::::MI::::::::I   CCC::::::::::::CH:::::::H     H:::::::HI::::::::I
MMMMMMMM               MMMMMMMMIIIIIIIIII      CCCCCCCCCCCCCHHHHHHHHH     HHHHHHHHHIIIIIIIIII


 */



error_reporting(E_ALL);
ini_set("display_errors", 1);



if (file_exists('emarsys_predict_krasota.yml')) {
    $xml = simplexml_load_file('emarsys_predict_krasota.yml');





print_r($xml);





  



    $fp = fopen('file.csv', 'w');
		$item_count = count($xml->offer);
	
	
	
	
		
		

		foreach ($xml ->offer as $offer) {


			fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));

			fputcsv($fp, array( $offer["id"], $offer ->url,$offer ->name,$offer ->picture, $offer ->CategoryName, $offer["available"]));
	







            }





}
 else {
    exit('Failed to open file.');
}