# Telegram-Bot-Client

Bot Client which is going to follow rules set by Telegram's BotFather :))

This repo will establish communication between client and your bot, create all objects and methods provided by Telegram in PHP. 
So that you can easily configure your Bot and customize it given your needs.

# My bot

His name is ***@FizBot***, feel free to talk to him,  he is very fun, for now he is just learning to talk, will repeat whatever you say, send you his location, and a picture of sweet kitten.


# How to install and use

1. Using Composer
  ```
  composer create-project valizada/telegram-bot-client
  ```
  
  If you do not have composer, then follow this **[get composer]**) link 
2. Clone the repository
```
git clone git@github.com:valizada/Telegram-Bot-Client.git
```
Generate Telegram Bot Token by following instructions given in this **[link]**

Edit following line:  *private $URL = "https://api.telegram.org/botYOUR_TOKEN_GOES_HERE/";* in the ParentClass.php file, and include your own token gotten from Telegram.


Then, you should create a webhook for listening to the incoming updates from Telegram(more about **[Telegram Bot Webhook]**)
Run the following command, by specifying a url to receive incoming updates via an outgoing webhook.

If you'd like to make sure that the Webhook request comes from Telegram, it is recommended using a secret path in the URL, e.g. https://www.example.com/<token>. Since nobody else knows your bot‘s token, you can be pretty sure it’s Telegram.
```
php webhook.php https://www.example.com/<token>
```

[Telegram Bot Webhook]:https://core.telegram.org/bots/api#setwebhook
[link]:https://core.telegram.org/bots#generate-an-authorization-token-for-your-bot
[get composer]:https://getcomposer.org/doc/00-intro.md


