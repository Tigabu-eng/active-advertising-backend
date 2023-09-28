1. first migrate the database
    <!-- correct the .env variable and replace the the email and password with yours to get the "forgot password" functionality  
    
    note that there is an email already seted up for this purpose. the email is in the .env file 

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    ->MAIL_USERNAME=example@gmail.com
    ->MAIL_PASSWORD=pvzenfbpkskziame
    MAIL_ENCRYPTION=tls
    ->MAIL_FROM_ADDRESS="example@gmail.com"
    MAIL_FROM_NAME="${APP_NAME}"

    NB: Don't use this email for admin because if you need to forgot the password it is impossible to send confirmation code to the same email so use different email -->

2. Add admin manually with phpmyadmin by making
use valid email that will exist
    {
        user_first_name": "FirstName",
        "user_last_name": "LastName",
        "user_email": "exampleemail@gmail.com",
        "user_role": "admin",
        "user_phone_number": "09.......",
        "user_address": "addis ababa",
        "user_image_url": "http/img.com",
        "user_role":"Unallocated"
        "user_password": "123456"
    }

3. Add the following on basic_info table
    {
        "active_tin_nUmber": "OO11036929",
        "active_account_number": "CBE 1000288051988:Awash 1304193022000: Zemen 1154110401529011:Dashen 0414131173011 :COOP 1000085782747",
        "active_vat": "15",
        "active_phone_number": "+251 929 296 548:+251 987 193 939",
        "active_email": "info@activeadvertising.com"
    }
4. add the following 3roles in roles table

    {
        "role":"admin"
    }
    {
        "role":"account-manager"
    }
    {
        "role":"designer"
    }

5. Login Using Admin and add staffs by selecting the role you need
6. NB when you add staff the password generated will be firstname.lastname that you have entered(eg. john.doe) the user can change it if he wanted
