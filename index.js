const TelegramBot = require('node-telegram-bot-api')

const TOKEN = '602662764:AAF-cFBdYF2lEWR5HKdMdu66zqYmKI2Rf68'

const bot = new TelegramBot(TOKEN, {polling: true})

bot.on('message', msg =>{
    bot.sendMessage(msg.chat.id, 'Hello from Heroku, bot says: "Hi, ${msg.from.first_name}"')
    })
