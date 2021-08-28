# how to use 

 in orther to send a mail from ur PHP app u need to call this file 'sendMail.php' and in order to do that :
 
 1. first u need to do  a POST request (jquery,postman ...etc)
 2. construct the body of ur requerst like so :

in orther to send an email with the code provided by sendMail.php  you neeed to respect this structure:


```

{
    receivers : [],
    copy : [],
    text : "content of email",
    subject: "subject of the email"
}

```

3. if you are sure thet you have done everything right probably sending emails is blocked by your host check the config and try again :)
