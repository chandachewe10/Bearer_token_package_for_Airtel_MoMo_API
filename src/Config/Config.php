<?php
namespace ChandaChewe\AirtelMoMoAPI; 

class Config{



      /**
     * CLIENT CREDENTIALS.
     *
     * @Store Client_ID and Client_Secret including Grant_Type
     */



    public static $client_id = "************************************";

    public static $client_secret = "*********************************";

    public static $grant_type = "client_credentials";




     /**
     * CLIENT PHONE NUMBER.
     *
     * @Store Phone Number without the country code
     */
    


    public static $phone_number = "97*****9";



     /**
     * TRANSACTIONS .
     *
     * @Store amount to be paid here
     */



    public static $amount = "*******";




     /**
     * COUNTRY CODE AND COUNTRY CURRENCY .
     *
     * @Store Country Currency and Country Code
     */




    public static $country_code = "ZM";

    public static $currency_code = "ZMW";




}

?> 