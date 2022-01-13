# AIRTEL MOMO API FOR COLLECTING PAYMENTS FROM CUSTOMERS -  PHP
AIRTEL Money Developer API using PHP For Pushing Payments From a Customer.

Documentation and official resources can be found at AIRTEL Developer Portal: https://developers.airtel.africa/login

## Please note that Airtel does not provide free MoMo API Testing like MTN does. Hence for you
## To get started you should complete the following in full.
## Prerequisites
1. You have Signed Up at: https://developers.airtel.africa/login

2. You have created an application there and your application has been approved.

3. You possess the `client_id` and the `client_secret`. Please note that When you register for an 
application on the developer portal you will only be given the `client_id`, you will not be given
the `client_secret`, the client_secret will only be given to you when you submit your business
formalities to their offices. That is when they will approve the application you created online
and give you the `client_secret`. You cant perform any transactions or whatsoever without one
of these credentials.     


## Getting Started
#### This PHP Package is for creating the bearer token which you can import in your application 
1. Install Composer in your machine (well atleast if you have not installed) and download this package.
2. On your CLI type `composer require chandachewe/airtelmomoapi` to install the package.
2. Navigate to `client_id` and put your `client_id` there.

3. Navigate to `client_secret` and put your `client_secret` there.

4. open the `push_payments.php` and fill in on missing variables indicated with `*******************` 

5. You can now open your localhost (using xampp/wampp) and run the `push_payments.php` file using localhost in your browser.

6. This repository is not affliated with AIRTEL.