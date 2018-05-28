import telebot
import const

bot = telebot.TeleBot(const.API_TOKEN)

@bot.message_handler(commands=['start','help'])
def send_welcome(message):
    bot.reply_to(message, "Привет! Я бот Интерн обменки Шахта.com")

@bot.message_handler(func=lambda message: True)
def echo_all(message):
    bot.reply_to(message, message.text)

bot.polling()